document.addEventListener("DOMContentLoaded", () => {
    // 1. Sticky Header / Navbar Shrink
    const header = document.querySelector("header");
    if (header) {
        window.addEventListener("scroll", () => {
            if (window.scrollY > 40) {
                header.classList.add("shadow-[0_4px_20px_rgba(13,33,55,0.12)]");
                header.classList.remove("shadow-[0_2px_16px_rgba(13,33,55,0.08)]");
                header.querySelector("nav").classList.remove("py-4");
                header.querySelector("nav").classList.add("py-2");
            } else {
                header.classList.remove("shadow-[0_4px_20px_rgba(13,33,55,0.12)]");
                header.classList.add("shadow-[0_2px_16px_rgba(13,33,55,0.08)]");
                header.querySelector("nav").classList.remove("py-2");
                header.querySelector("nav").classList.add("py-4");
            }
        });
    }

    // 2. Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById("mobile-menu-btn");
    const mobileMenuCloseBtn = document.getElementById("mobile-menu-close-btn");
    const mobileMenuDrawer = document.getElementById("mobile-menu-drawer");

    if (mobileMenuBtn && mobileMenuDrawer) {
        mobileMenuBtn.addEventListener("click", () => {
            mobileMenuDrawer.classList.remove("translate-x-full");
        });
    }

    if (mobileMenuCloseBtn && mobileMenuDrawer) {
        mobileMenuCloseBtn.addEventListener("click", () => {
            mobileMenuDrawer.classList.add("translate-x-full");
        });
    }

    // 3. Hero Slider Logic
    const slides = document.querySelectorAll(".hero-slide");
    const dots = document.querySelectorAll(".slider-dot");
    let currentSlide = 0;
    let slideInterval;

    if (slides.length > 0) {
        function showSlide(index) {
            slides.forEach(s => s.classList.remove("fade-slide-active"));
            dots.forEach(d => {
                d.classList.remove("bg-opacity-100", "w-8");
                d.classList.add("bg-opacity-40", "w-3");
            });

            slides[index].classList.add("fade-slide-active");
            if (dots[index]) {
                dots[index].classList.remove("bg-opacity-40", "w-3");
                dots[index].classList.add("bg-opacity-100", "w-8");
            }
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        dots.forEach((dot, idx) => {
            dot.addEventListener("click", () => {
                currentSlide = idx;
                showSlide(currentSlide);
                resetSlideTimer();
            });
        });

        function startSlideTimer() {
            slideInterval = setInterval(nextSlide, 6000);
        }

        function resetSlideTimer() {
            clearInterval(slideInterval);
            startSlideTimer();
        }

        startSlideTimer();
    }

    // 4. Counter Animation Logic
    const counters = document.querySelectorAll(".counter");
    if (counters.length > 0) {
        const speed = 120; // Lower is faster

        const animateCounters = () => {
            counters.forEach(counter => {
                const target = +counter.getAttribute("data-target");
                if (isNaN(target)) return;

                const updateCount = () => {
                    const count = +counter.innerText.replace(/,/g, "").replace(/\+/g, "");
                    const inc = target / speed;

                    if (count < target) {
                        const nextVal = Math.ceil(count + inc);
                        if (nextVal >= target) {
                            counter.innerText = target.toLocaleString() + "+";
                        } else {
                            counter.innerText = nextVal.toLocaleString();
                            setTimeout(updateCount, 15);
                        }
                    } else {
                        counter.innerText = target.toLocaleString() + "+";
                    }
                };
                updateCount();
            });
        };

        const observerOptions = {
            threshold: 0.2
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const statsSection = document.querySelector(".bg-primary, .stats-trigger");
        if (statsSection) {
            observer.observe(statsSection);
        } else {
            // Fallback: Trigger after 500ms
            setTimeout(animateCounters, 500);
        }
    }

    // 5. Doctors Carousel Scroll (Horizontal Track)
    const track = document.getElementById("doctor-track");
    const btnNext = document.getElementById("next-doc");
    const btnPrev = document.getElementById("prev-doc");

    if (track) {
        if (btnNext) {
            btnNext.addEventListener("click", () => {
                track.scrollBy({ left: 340, behavior: "smooth" });
            });
        }
        if (btnPrev) {
            btnPrev.addEventListener("click", () => {
                track.scrollBy({ left: -340, behavior: "smooth" });
            });
        }
    }

    // 6. About Us: Leadership Insights Tab Switcher
    const tabButtons = document.querySelectorAll(".leader-tab-btn");
    const tabContents = document.querySelectorAll(".leader-tab-content");

    if (tabButtons.length > 0 && tabContents.length > 0) {
        tabButtons.forEach(btn => {
            btn.addEventListener("click", () => {
                const targetTab = btn.getAttribute("data-tab");

                // Remove active classes from all buttons and hide contents
                tabButtons.forEach(b => {
                    b.classList.remove("border-primary", "text-primary", "bg-primary/5", "font-bold");
                    b.classList.add("border-transparent", "text-gray-500");
                });
                tabContents.forEach(content => content.classList.add("hidden"));

                // Add active classes to selected button and show content
                btn.classList.add("border-primary", "text-primary", "bg-primary/5", "font-bold");
                btn.classList.remove("border-transparent", "text-gray-500");
                
                const activeContent = document.getElementById(`leader-tab-${targetTab}`);
                if (activeContent) {
                    activeContent.classList.remove("hidden");
                }
            });
        });
    }

    // 7. Our Doctors: Department Filter Tabs
    const docFilters = document.querySelectorAll(".doc-filter-btn");
    const docCards = document.querySelectorAll(".doc-card");

    if (docFilters.length > 0 && docCards.length > 0) {
        docFilters.forEach(filter => {
            filter.addEventListener("click", () => {
                const cat = filter.getAttribute("data-filter");

                // Remove active styling from all filters
                docFilters.forEach(f => {
                    f.classList.remove("bg-primary", "text-white");
                    f.classList.add("bg-white", "text-gray-700", "hover:bg-gray-100");
                });

                // Add active styling to current filter
                filter.classList.add("bg-primary", "text-white");
                filter.classList.remove("bg-white", "text-gray-700", "hover:bg-gray-100");

                // Show/hide cards
                docCards.forEach(card => {
                    const cardCat = card.getAttribute("data-category");
                    if (cat === "all" || cardCat === cat) {
                        card.classList.remove("hidden");
                        card.style.animation = "fadeIn 0.4s ease-out forwards";
                    } else {
                        card.classList.add("hidden");
                    }
                });
            });
        });
    }

    // 8. Departments: Procedures Accordion Toggles
    const accordionHeaders = document.querySelectorAll(".accordion-header");
    if (accordionHeaders.length > 0) {
        accordionHeaders.forEach(header => {
            header.addEventListener("click", () => {
                const content = header.nextElementSibling;
                const icon = header.querySelector(".accordion-icon");

                // Toggle visibility
                if (content.classList.contains("hidden")) {
                    content.classList.remove("hidden");
                    if (icon) icon.style.transform = "rotate(180deg)";
                    header.classList.add("bg-gray-50");
                } else {
                    content.classList.add("hidden");
                    if (icon) icon.style.transform = "rotate(0deg)";
                    header.classList.remove("bg-gray-50");
                }
            });
        });
    }

    // 9. Gallery: Filter and Lightbox
    const galleryFilters = document.querySelectorAll(".gallery-filter-btn");
    const galleryItems = document.querySelectorAll(".gallery-item");

    if (galleryFilters.length > 0 && galleryItems.length > 0) {
        galleryFilters.forEach(filter => {
            filter.addEventListener("click", () => {
                const cat = filter.getAttribute("data-filter");

                // Active style
                galleryFilters.forEach(f => {
                    f.classList.remove("bg-primary", "text-white");
                    f.classList.add("bg-white", "text-gray-700", "hover:bg-gray-100");
                });
                filter.classList.add("bg-primary", "text-white");
                filter.classList.remove("bg-white", "text-gray-700", "hover:bg-gray-100");

                // Filter items
                galleryItems.forEach(item => {
                    const itemCat = item.getAttribute("data-category");
                    if (cat === "all" || itemCat === cat) {
                        item.classList.remove("hidden");
                    } else {
                        item.classList.add("hidden");
                    }
                });
            });
        });

        // Simple Lightbox Setup
        const lightbox = document.createElement("div");
        lightbox.id = "gallery-lightbox";
        lightbox.className = "fixed inset-0 bg-black/90 z-[999] flex items-center justify-center hidden opacity-0 transition-opacity duration-300";
        lightbox.innerHTML = `
            <button class="absolute top-6 right-6 text-white text-5xl font-light hover:text-primary transition-colors">&times;</button>
            <img class="max-w-[90%] max-h-[85%] rounded-lg border-2 border-white/20 object-contain" src="" alt="Enlarged hospital view">
            <p class="absolute bottom-6 text-white/80 text-lg font-medium tracking-wide"></p>
        `;
        document.body.appendChild(lightbox);

        const lightboxImg = lightbox.querySelector("img");
        const lightboxCap = lightbox.querySelector("p");
        const lightboxClose = lightbox.querySelector("button");

        galleryItems.forEach(item => {
            item.addEventListener("click", (e) => {
                e.preventDefault();
                const img = item.querySelector("img");
                if (img) {
                    lightboxImg.src = img.src;
                    lightboxCap.innerText = img.getAttribute("alt") || "Al Rasheed Hospital View";
                    lightbox.classList.remove("hidden");
                    setTimeout(() => {
                        lightbox.classList.remove("opacity-0");
                        lightbox.classList.add("opacity-100");
                    }, 50);
                }
            });
        });

        const closeLightbox = () => {
            lightbox.classList.add("opacity-0");
            lightbox.classList.remove("opacity-100");
            setTimeout(() => {
                lightbox.classList.add("hidden");
            }, 300);
        };

        lightboxClose.addEventListener("click", closeLightbox);
        lightbox.addEventListener("click", (e) => {
            if (e.target === lightbox || e.target === lightboxClose) {
                closeLightbox();
            }
        });
    }

    // 10. Appointment & Contact Forms Handler
    const appointmentForm = document.getElementById("appointment-form");
    const contactForm = document.getElementById("contact-form");

    // Dynamic Doctor Populating based on Department selection in Appointment Booking
    const deptSelect = document.getElementById("booking-dept");
    const docSelect = document.getElementById("booking-doctor");

    const doctorsByDept = {
        "urology": ["Dr. Nasir Jamil"],
        "nephrology": ["Dr. Muhammad Usman Zia"],
        "gynecology": ["Dr. Rubina Bashir", "Dr. Sadia Irum"],
        "orthopedics": ["Dr. Syed Usman Shah"],
        "surgery": ["Dr. Ismail Akbar", "Dr. Uzair Arif"],
        "hepatobiliary": ["Dr. Nadir Farid Khattak", "Dr. Siddique Khan"],
        "medicine": ["Dr. Awais Faizi"],
        "pediatrics": ["Dr. Ghulam Mohiuddin Marwat"],
        "neurosurgery": ["Dr. Ibrahim Mushtaq"],
        "radiology": ["Dr. Ajmal Mehmood"],
        "anesthesia": ["Dr. Saqib"],
        "dermatology": ["Dr. Shapara Shakeel"],
        "physiotherapy": ["Dr. Ghayyur"],
        "icu": ["Dr. Munawar"]
    };

    if (deptSelect && docSelect) {
        deptSelect.addEventListener("change", () => {
            const val = deptSelect.value;
            docSelect.innerHTML = '<option value="">Select Specialist</option>';
            
            if (doctorsByDept[val]) {
                doctorsByDept[val].forEach(doc => {
                    const opt = document.createElement("option");
                    opt.value = doc.toLowerCase().replace(/[\.\s]/g, "-");
                    opt.innerText = doc;
                    docSelect.appendChild(opt);
                });
            } else {
                // Default fallback if a department has generic staff
                const opt = document.createElement("option");
                opt.value = "duty-consultant";
                opt.innerText = "Duty Consultant Specialist";
                docSelect.appendChild(opt);
            }
        });
    }

    // Modal success popup helper
    function showSuccessModal(title, message) {
        const modal = document.createElement("div");
        modal.className = "fixed inset-0 bg-black/60 z-[999] flex items-center justify-center p-4";
        modal.innerHTML = `
            <div class="bg-white rounded-3xl p-8 max-w-md w-full text-center shadow-2xl scale-95 transition-transform duration-300">
                <div class="w-16 h-16 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="material-symbols-outlined text-4xl">verified</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">${title}</h3>
                <p class="text-gray-600 mb-6">${message}</p>
                <button class="bg-primary hover:bg-red-700 text-white font-bold py-3 px-8 rounded-full transition-all w-full shadow-lg hover:shadow-red-900/20 active:scale-95">
                    Got it, Thanks
                </button>
            </div>
        `;
        document.body.appendChild(modal);

        const closeBtn = modal.querySelector("button");
        closeBtn.addEventListener("click", () => {
            modal.remove();
        });
    }

    if (appointmentForm) {
        appointmentForm.addEventListener("submit", (e) => {
            e.preventDefault();
            const name = document.getElementById("booking-name").value;
            const phone = document.getElementById("booking-phone").value;
            
            if (!name || !phone) {
                alert("Please fill in all required fields (*).");
                return;
            }

            // Simulate booking submission
            showSuccessModal(
                "Appointment Requested!",
                `Thank you ${name}. We have received your request. Our medical coordinators will contact you at <strong>${phone}</strong> within 2 hours to confirm your appointment slot.`
            );
            appointmentForm.reset();
        });
    }

    if (contactForm) {
        contactForm.addEventListener("submit", (e) => {
            e.preventDefault();
            const name = document.getElementById("contact-name").value;
            
            showSuccessModal(
                "Message Sent!",
                `Thank you, ${name}. Your message has been routed to our administrative team. We will get back to you shortly.`
            );
            contactForm.reset();
        });
    }
});
