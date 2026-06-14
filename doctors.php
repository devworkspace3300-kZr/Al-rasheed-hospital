<?php
require_once __DIR__ . '/include/site-config.php';
$pageTitle = 'Panel of Consultants | Al Rasheed Hospital & Kidney Center';
$pageDescription = 'Panel of Consultants at Al Rasheed Hospital & Kidney Center, Abbottabad - Profiles of our specialist urologists, nephrologists, gynecologists, surgeons, and physicians.';
$currentPage = 'doctors';
include __DIR__ . '/include/head.php';
include __DIR__ . '/include/header.php';
?>

<main>
    <!-- Page Hero Banner -->
    <section class="relative h-[250px] md:h-[300px] w-full overflow-hidden bg-navy flex items-center">
        <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/60 to-transparent z-10"></div>
        <img class="absolute inset-0 w-full h-full object-cover" src="assets/hero_exterior.png" alt="Al Rasheed Doctors Banner"/>
        <div class="relative z-20 px-6 md:px-12 max-w-[1280px] mx-auto w-full">
            <div class="max-w-2xl text-pure-white">
                <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Our Specialists</span>
                <h1 class="font-display font-extrabold text-3xl md:text-5xl text-pure-white leading-tight tracking-tight mb-2">Panel of Consultants</h1>
                <p class="font-sans text-sm md:text-base text-slate-300 max-w-lg leading-relaxed">Meet our highly-qualified medical officers and specialists providing expert diagnostics and therapeutic procedures in Abbottabad.</p>
            </div>
        </div>
    </section>

    <!-- Filter & Grid Section -->
    <section class="py-16 md:py-20 px-4 max-w-[1280px] mx-auto bg-background">
        <!-- Filter Tabs -->
        <div class="flex overflow-x-auto gap-2 mb-12 pb-3 hide-scrollbar border-b">
            <button class="doc-filter-btn px-4 py-2 bg-primary text-white text-xs md:text-sm font-semibold rounded-full shadow-md whitespace-nowrap transition-all" data-filter="all">All Specialties</button>
            <button class="doc-filter-btn px-4 py-2 bg-white text-gray-700 hover:bg-gray-100 text-xs md:text-sm font-semibold rounded-full whitespace-nowrap transition-all border border-slate-200" data-filter="urology">Urology</button>
            <button class="doc-filter-btn px-4 py-2 bg-white text-gray-700 hover:bg-gray-100 text-xs md:text-sm font-semibold rounded-full whitespace-nowrap transition-all border border-slate-200" data-filter="nephrology">Nephrology</button>
            <button class="doc-filter-btn px-4 py-2 bg-white text-gray-700 hover:bg-gray-100 text-xs md:text-sm font-semibold rounded-full whitespace-nowrap transition-all border border-slate-200" data-filter="gynecology">Gynecology</button>
            <button class="doc-filter-btn px-4 py-2 bg-white text-gray-700 hover:bg-gray-100 text-xs md:text-sm font-semibold rounded-full whitespace-nowrap transition-all border border-slate-200" data-filter="orthopedics">Orthopedics</button>
            <button class="doc-filter-btn px-4 py-2 bg-white text-gray-700 hover:bg-gray-100 text-xs md:text-sm font-semibold rounded-full whitespace-nowrap transition-all border border-slate-200" data-filter="surgery">General Surgery</button>
            <button class="doc-filter-btn px-4 py-2 bg-white text-gray-700 hover:bg-gray-100 text-xs md:text-sm font-semibold rounded-full whitespace-nowrap transition-all border border-slate-200" data-filter="hepatobiliary">Hepatobiliary</button>
            <button class="doc-filter-btn px-4 py-2 bg-white text-gray-700 hover:bg-gray-100 text-xs md:text-sm font-semibold rounded-full whitespace-nowrap transition-all border border-slate-200" data-filter="medicine">Medicine</button>
            <button class="doc-filter-btn px-4 py-2 bg-white text-gray-700 hover:bg-gray-100 text-xs md:text-sm font-semibold rounded-full whitespace-nowrap transition-all border border-slate-200" data-filter="pediatrics">Pediatrics</button>
            <button class="doc-filter-btn px-4 py-2 bg-white text-gray-700 hover:bg-gray-100 text-xs md:text-sm font-semibold rounded-full whitespace-nowrap transition-all border border-slate-200" data-filter="neurosurgery">Neurosurgery</button>
            <button class="doc-filter-btn px-4 py-2 bg-white text-gray-700 hover:bg-gray-100 text-xs md:text-sm font-semibold rounded-full whitespace-nowrap transition-all border border-slate-200" data-filter="dermatology">Dermatology</button>
        </div>

        <!-- Doctors Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="doctors-grid">
            
            <!-- Dr. Nasir Jamil -->
            <div class="doc-card bg-pure-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col group hover:-translate-y-1.5 transition-all duration-300" data-category="urology">
                <div class="h-56 bg-red-800/5 relative flex items-center justify-center text-red-800">
                    <span class="material-symbols-outlined text-6xl opacity-30">person</span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <span class="inline-block bg-primary/10 text-primary text-[9px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full mb-3 w-fit">HOD Urology</span>
                    <h3 class="font-heading font-bold text-navy text-lg leading-tight mb-1">Dr. Nasir Jamil</h3>
                    <p class="font-sans text-xs text-slate-500 font-semibold mb-4">Consultant Urologist</p>
                    <div class="text-xs text-on-surface-variant space-y-1.5 mb-6">
                        <p><strong>Qualifications:</strong> MBBS, FCPS (Urology)</p>
                        <p><strong>Experience:</strong> 20+ Years Clinical Practice</p>
                    </div>
                    <a href="appointment.php?doc=nasir-jamil" class="w-full text-center mt-auto block border border-slate-200 text-navy py-2 rounded-full font-heading text-xs font-bold hover:bg-navy hover:text-pure-white hover:border-navy transition-all">Book Appointment</a>
                </div>
            </div>

            <!-- Dr. Muhammad Usman Zia -->
            <div class="doc-card bg-pure-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col group hover:-translate-y-1.5 transition-all duration-300" data-category="nephrology">
                <div class="h-56 bg-teal-850/5 relative flex items-center justify-center text-clinical-teal">
                    <span class="material-symbols-outlined text-6xl opacity-30">person</span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <span class="inline-block bg-clinical-teal/10 text-clinical-teal text-[9px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full mb-3 w-fit">HOD Nephrology</span>
                    <h3 class="font-heading font-bold text-navy text-lg leading-tight mb-1">Dr. Muhammad Usman Zia</h3>
                    <p class="font-sans text-xs text-slate-500 font-semibold mb-4">Consultant Nephrologist</p>
                    <div class="text-xs text-on-surface-variant space-y-1.5 mb-6">
                        <p><strong>Qualifications:</strong> MBBS, FCPS (Nephrology)</p>
                        <p><strong>Position:</strong> Consultant Nephrologist Physician, HOD Nephrology, Jinnah International Hospital Abbottabad</p>
                    </div>
                    <a href="appointment.php?doc=usman-zia" class="w-full text-center mt-auto block border border-slate-200 text-navy py-2 rounded-full font-heading text-xs font-bold hover:bg-navy hover:text-pure-white hover:border-navy transition-all">Book Appointment</a>
                </div>
            </div>

            <!-- Dr. Rubina Bashir -->
            <div class="doc-card bg-pure-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col group hover:-translate-y-1.5 transition-all duration-300" data-category="gynecology">
                <div class="h-56 bg-green-800/5 relative flex items-center justify-center text-vitality-green">
                    <span class="material-symbols-outlined text-6xl opacity-30">person</span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <span class="inline-block bg-vitality-green/10 text-vitality-green text-[9px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full mb-3 w-fit">Ex-HOD Gynae</span>
                    <h3 class="font-heading font-bold text-navy text-lg leading-tight mb-1">Dr. Rubina Bashir</h3>
                    <p class="font-sans text-xs text-slate-500 font-semibold mb-4">Consultant Gynecologist</p>
                    <div class="text-xs text-on-surface-variant space-y-1.5 mb-6">
                        <p><strong>Qualifications:</strong> MBBS, FCPS</p>
                        <p><strong>Clinical Focus:</strong> High-risk pregnancies, obstetric complications</p>
                    </div>
                    <a href="appointment.php?doc=rubina-bashir" class="w-full text-center mt-auto block border border-slate-200 text-navy py-2 rounded-full font-heading text-xs font-bold hover:bg-navy hover:text-pure-white hover:border-navy transition-all">Book Appointment</a>
                </div>
            </div>

            <!-- Dr. Sadia Irum -->
            <div class="doc-card bg-pure-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col group hover:-translate-y-1.5 transition-all duration-300" data-category="gynecology">
                <div class="h-56 bg-green-800/5 relative flex items-center justify-center text-vitality-green">
                    <span class="material-symbols-outlined text-6xl opacity-30">person</span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <span class="inline-block bg-vitality-green/10 text-vitality-green text-[9px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full mb-3 w-fit">Gynecology</span>
                    <h3 class="font-heading font-bold text-navy text-lg leading-tight mb-1">Dr. Sadia Irum</h3>
                    <p class="font-sans text-xs text-slate-500 font-semibold mb-4">Consultant Gynecologist</p>
                    <div class="text-xs text-on-surface-variant space-y-1.5 mb-6">
                        <p><strong>Qualifications:</strong> MBBS (Gold Medalist), FCPS OBS/Gynae, FECPS Urogynae, ICMT Liverpool</p>
                        <p><strong>Clinical Focus:</strong> Urogynae and general obstetric procedures</p>
                    </div>
                    <a href="appointment.php?doc=sadia-irum" class="w-full text-center mt-auto block border border-slate-200 text-navy py-2 rounded-full font-heading text-xs font-bold hover:bg-navy hover:text-pure-white hover:border-navy transition-all">Book Appointment</a>
                </div>
            </div>

            <!-- Dr. Syed Usman Shah -->
            <div class="doc-card bg-pure-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col group hover:-translate-y-1.5 transition-all duration-300" data-category="orthopedics">
                <div class="h-56 bg-red-800/5 relative flex items-center justify-center text-red-800">
                    <span class="material-symbols-outlined text-6xl opacity-30">person</span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <span class="inline-block bg-primary/10 text-primary text-[9px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full mb-3 w-fit">Orthopedic Surgeon</span>
                    <h3 class="font-heading font-bold text-navy text-lg leading-tight mb-1">Dr. Syed Usman Shah</h3>
                    <p class="font-sans text-xs text-slate-500 font-semibold mb-4">Consultant Orthopedics</p>
                    <div class="text-xs text-on-surface-variant space-y-1.5 mb-6">
                        <p><strong>Qualifications:</strong> MBBS-MS Ortho (Malaysia), Fellowship Arthroplasty (Malaysia), AO Certified (Switzerland)</p>
                        <p><strong>Affiliations:</strong> Member of Pakistan Orthopedic Association</p>
                    </div>
                    <a href="appointment.php?doc=usman-shah" class="w-full text-center mt-auto block border border-slate-200 text-navy py-2 rounded-full font-heading text-xs font-bold hover:bg-navy hover:text-pure-white hover:border-navy transition-all">Book Appointment</a>
                </div>
            </div>

            <!-- Dr. Ismail Akbar -->
            <div class="doc-card bg-pure-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col group hover:-translate-y-1.5 transition-all duration-300" data-category="surgery">
                <div class="h-56 bg-slate-800/5 relative flex items-center justify-center text-navy">
                    <span class="material-symbols-outlined text-6xl opacity-30">person</span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <span class="inline-block bg-navy/10 text-navy text-[9px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full mb-3 w-fit">General Surgeon</span>
                    <h3 class="font-heading font-bold text-navy text-lg leading-tight mb-1">Dr. Ismail Akbar</h3>
                    <p class="font-sans text-xs text-slate-500 font-semibold mb-4">Laparoscopic Surgeon</p>
                    <div class="text-xs text-on-surface-variant space-y-1.5 mb-6">
                        <p><strong>Qualifications:</strong> MBBS, FCPS</p>
                        <p><strong>Position:</strong> Associate Professor, General and Laparoscopic Surgeon</p>
                    </div>
                    <a href="appointment.php?doc=ismail-akbar" class="w-full text-center mt-auto block border border-slate-200 text-navy py-2 rounded-full font-heading text-xs font-bold hover:bg-navy hover:text-pure-white hover:border-navy transition-all">Book Appointment</a>
                </div>
            </div>

            <!-- Dr. Uzair Arif -->
            <div class="doc-card bg-pure-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col group hover:-translate-y-1.5 transition-all duration-300" data-category="surgery">
                <div class="h-56 bg-slate-800/5 relative flex items-center justify-center text-navy">
                    <span class="material-symbols-outlined text-6xl opacity-30">person</span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <span class="inline-block bg-navy/10 text-navy text-[9px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full mb-3 w-fit">Laser Surgeon</span>
                    <h3 class="font-heading font-bold text-navy text-lg leading-tight mb-1">Dr. Uzair Arif</h3>
                    <p class="font-sans text-xs text-slate-500 font-semibold mb-4">Consultant Surgeon</p>
                    <div class="text-xs text-on-surface-variant space-y-1.5 mb-6">
                        <p><strong>Specialties:</strong> General, Laparoscopic, Bariatric & Laser Surgery</p>
                        <p><strong>Clinical Focus:</strong> Minimally invasive obesity & laser treatments</p>
                    </div>
                    <a href="appointment.php?doc=uzair-arif" class="w-full text-center mt-auto block border border-slate-200 text-navy py-2 rounded-full font-heading text-xs font-bold hover:bg-navy hover:text-pure-white hover:border-navy transition-all">Book Appointment</a>
                </div>
            </div>

            <!-- Dr. Nadir Farid Khattak -->
            <div class="doc-card bg-pure-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col group hover:-translate-y-1.5 transition-all duration-300" data-category="hepatobiliary">
                <div class="h-56 bg-teal-800/5 relative flex items-center justify-center text-clinical-teal">
                    <span class="material-symbols-outlined text-6xl opacity-30">person</span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <span class="inline-block bg-clinical-teal/10 text-clinical-teal text-[9px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full mb-3 w-fit">HPB Transplant</span>
                    <h3 class="font-heading font-bold text-navy text-lg leading-tight mb-1">Dr. Nadir Farid Khattak</h3>
                    <p class="font-sans text-xs text-slate-500 font-semibold mb-4">HPB & Liver Transplant Surgeon</p>
                    <div class="text-xs text-on-surface-variant space-y-1.5 mb-6">
                        <p><strong>Qualifications:</strong> Fellowship FCPS HPB & Liver Transplantation PKLI & RC Lahore, FCPS General/Laparoscopic</p>
                        <p><strong>Clinical Focus:</strong> Hepato-pancreato-biliary surgery</p>
                    </div>
                    <a href="appointment.php?doc=nadir-farid" class="w-full text-center mt-auto block border border-slate-200 text-navy py-2 rounded-full font-heading text-xs font-bold hover:bg-navy hover:text-pure-white hover:border-navy transition-all">Book Appointment</a>
                </div>
            </div>

            <!-- Dr. Siddique Khan -->
            <div class="doc-card bg-pure-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col group hover:-translate-y-1.5 transition-all duration-300" data-category="hepatobiliary">
                <div class="h-56 bg-teal-800/5 relative flex items-center justify-center text-clinical-teal">
                    <span class="material-symbols-outlined text-6xl opacity-30">person</span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <span class="inline-block bg-clinical-teal/10 text-clinical-teal text-[9px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full mb-3 w-fit">Hepatobiliary</span>
                    <h3 class="font-heading font-bold text-navy text-lg leading-tight mb-1">Dr. Siddique Khan</h3>
                    <p class="font-sans text-xs text-slate-500 font-semibold mb-4">Hepatobiliary Surgeon</p>
                    <div class="text-xs text-on-surface-variant space-y-1.5 mb-6">
                        <p><strong>Position:</strong> Assistant Professor, HPB Surgery and Liver Transplant KTH Peshawar</p>
                    </div>
                    <a href="appointment.php?doc=siddique-khan" class="w-full text-center mt-auto block border border-slate-200 text-navy py-2 rounded-full font-heading text-xs font-bold hover:bg-navy hover:text-pure-white hover:border-navy transition-all">Book Appointment</a>
                </div>
            </div>

            <!-- Dr. Awais Faizi -->
            <div class="doc-card bg-pure-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col group hover:-translate-y-1.5 transition-all duration-300" data-category="medicine">
                <div class="h-56 bg-slate-800/5 relative flex items-center justify-center text-navy">
                    <span class="material-symbols-outlined text-6xl opacity-30">person</span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <span class="inline-block bg-navy/10 text-navy text-[9px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full mb-3 w-fit">Medical Specialist</span>
                    <h3 class="font-heading font-bold text-navy text-lg leading-tight mb-1">Dr. Awais Faizi</h3>
                    <p class="font-sans text-xs text-slate-500 font-semibold mb-4">Consultant Physician</p>
                    <div class="text-xs text-on-surface-variant space-y-1.5 mb-6">
                        <p><strong>Qualifications:</strong> MBBS, FCPS</p>
                        <p><strong>Clinical Focus:</strong> General Internal Medicine & Diabetologist</p>
                    </div>
                    <a href="appointment.php?doc=awais-faizi" class="w-full text-center mt-auto block border border-slate-200 text-navy py-2 rounded-full font-heading text-xs font-bold hover:bg-navy hover:text-pure-white hover:border-navy transition-all">Book Appointment</a>
                </div>
            </div>

            <!-- Dr. Ghulam Mohiuddin Marwat -->
            <div class="doc-card bg-pure-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col group hover:-translate-y-1.5 transition-all duration-300" data-category="pediatrics">
                <div class="h-56 bg-green-800/5 relative flex items-center justify-center text-vitality-green">
                    <span class="material-symbols-outlined text-6xl opacity-30">person</span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <span class="inline-block bg-vitality-green/10 text-vitality-green text-[9px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full mb-3 w-fit">Child Specialist</span>
                    <h3 class="font-heading font-bold text-navy text-lg leading-tight mb-1">Dr. Ghulam Mohiuddin Marwat</h3>
                    <p class="font-sans text-xs text-slate-500 font-semibold mb-4">Senior Consultant Pediatrics</p>
                    <div class="text-xs text-on-surface-variant space-y-1.5 mb-6">
                        <p><strong>Qualifications:</strong> MBBS, FCPS</p>
                        <p><strong>Position:</strong> Associate Professor, Pediatric medicine</p>
                    </div>
                    <a href="appointment.php?doc=ghulam-mohiuddin" class="w-full text-center mt-auto block border border-slate-200 text-navy py-2 rounded-full font-heading text-xs font-bold hover:bg-navy hover:text-pure-white hover:border-navy transition-all">Book Appointment</a>
                </div>
            </div>

            <!-- Dr. Ibrahim Mushtaq -->
            <div class="doc-card bg-pure-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col group hover:-translate-y-1.5 transition-all duration-300" data-category="neurosurgery">
                <div class="h-56 bg-red-800/5 relative flex items-center justify-center text-red-800">
                    <span class="material-symbols-outlined text-6xl opacity-30">person</span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <span class="inline-block bg-primary/10 text-primary text-[9px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full mb-3 w-fit">Neurosurgeon</span>
                    <h3 class="font-heading font-bold text-navy text-lg leading-tight mb-1">Dr. Ibrahim Mushtaq</h3>
                    <p class="font-sans text-xs text-slate-500 font-semibold mb-4">Consultant Neurosurgeon</p>
                    <div class="text-xs text-on-surface-variant space-y-1.5 mb-6">
                        <p><strong>Qualifications:</strong> MBBS, FCPS (Neurosurgery)</p>
                        <p><strong>Specialty:</strong> Brain, spinal cord and nervous system disorders</p>
                    </div>
                    <a href="appointment.php?doc=ibrahim-mushtaq" class="w-full text-center mt-auto block border border-slate-200 text-navy py-2 rounded-full font-heading text-xs font-bold hover:bg-navy hover:text-pure-white hover:border-navy transition-all">Book Appointment</a>
                </div>
            </div>

            <!-- Dr. Ajmal Mehmood -->
            <div class="doc-card bg-pure-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col group hover:-translate-y-1.5 transition-all duration-300" data-category="radiology">
                <div class="h-56 bg-teal-800/5 relative flex items-center justify-center text-clinical-teal">
                    <span class="material-symbols-outlined text-6xl opacity-30">person</span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <span class="inline-block bg-clinical-teal/10 text-clinical-teal text-[9px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full mb-3 w-fit">Radiologist</span>
                    <h3 class="font-heading font-bold text-navy text-lg leading-tight mb-1">Dr. Ajmal Mehmood</h3>
                    <p class="font-sans text-xs text-slate-500 font-semibold mb-4">Consultant Radiologist</p>
                    <div class="text-xs text-on-surface-variant space-y-1.5 mb-6">
                        <p><strong>Qualifications:</strong> MBBS, FCPS</p>
                        <p><strong>Position:</strong> Head of Diagnostic Imaging & Ultrasound department</p>
                    </div>
                    <a href="appointment.php?doc=ajmal-mehmood" class="w-full text-center mt-auto block border border-slate-200 text-navy py-2 rounded-full font-heading text-xs font-bold hover:bg-navy hover:text-pure-white hover:border-navy transition-all">Book Appointment</a>
                </div>
            </div>

            <!-- Dr. Shapara Shakeel -->
            <div class="doc-card bg-pure-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col group hover:-translate-y-1.5 transition-all duration-300" data-category="dermatology">
                <div class="h-56 bg-green-800/5 relative flex items-center justify-center text-vitality-green">
                    <span class="material-symbols-outlined text-6xl opacity-30">person</span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <span class="inline-block bg-vitality-green/10 text-vitality-green text-[9px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full mb-3 w-fit">Dermatology</span>
                    <h3 class="font-heading font-bold text-navy text-lg leading-tight mb-1">Dr. Shapara Shakeel</h3>
                    <p class="font-sans text-xs text-slate-500 font-semibold mb-4">Consultant Dermatologist</p>
                    <div class="text-xs text-on-surface-variant space-y-1.5 mb-6">
                        <p><strong>Qualifications:</strong> MBBS, FCPS</p>
                        <p><strong>Clinical Focus:</strong> Clinical dermatology, skin, and laser procedures</p>
                    </div>
                    <a href="appointment.php?doc=shapara-shakeel" class="w-full text-center mt-auto block border border-slate-200 text-navy py-2 rounded-full font-heading text-xs font-bold hover:bg-navy hover:text-pure-white hover:border-navy transition-all">Book Appointment</a>
                </div>
            </div>

        </div>
    </section>

    <!-- TMOs Section -->
    <section class="py-16 md:py-20 px-4 bg-slate-50 border-t border-slate-100">
        <div class="max-w-[1280px] mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Duty Doctors</span>
                <h2 class="font-display font-bold text-2xl md:text-3xl text-navy">Treatment Medical Officers (TMOs)</h2>
                <p class="font-sans text-sm text-on-surface-variant mt-1">Our dedicated medical officers provide round-the-clock ward patient monitoring and emergency care support.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
                <div class="bg-pure-white p-5 rounded-2xl border border-slate-100 shadow-sm text-center">
                    <span class="material-symbols-outlined text-3xl text-primary mb-2">person</span>
                    <p class="font-heading font-bold text-navy text-sm">Dr. Waqar</p>
                    <p class="text-[10px] text-clinical-teal font-semibold uppercase tracking-wider mb-2">CC Orthopedics</p>
                    <p class="text-[11px] text-on-surface-variant">MBBS, FCPS (CC)</p>
                </div>
                <div class="bg-pure-white p-5 rounded-2xl border border-slate-100 shadow-sm text-center">
                    <span class="material-symbols-outlined text-3xl text-primary mb-2">person</span>
                    <p class="font-heading font-bold text-navy text-sm">Dr. Fakhar ul Hayat</p>
                    <p class="text-[10px] text-clinical-teal font-semibold uppercase tracking-wider mb-2">Medical Officer</p>
                    <p class="text-[11px] text-on-surface-variant">MBBS</p>
                </div>
                <div class="bg-pure-white p-5 rounded-2xl border border-slate-100 shadow-sm text-center">
                    <span class="material-symbols-outlined text-3xl text-primary mb-2">person</span>
                    <p class="font-heading font-bold text-navy text-sm">Dr. Mubasir</p>
                    <p class="text-[10px] text-clinical-teal font-semibold uppercase tracking-wider mb-2">Medical Officer</p>
                    <p class="text-[11px] text-on-surface-variant">MBBS</p>
                </div>
                <div class="bg-pure-white p-5 rounded-2xl border border-slate-100 shadow-sm text-center">
                    <span class="material-symbols-outlined text-3xl text-primary mb-2">person</span>
                    <p class="font-heading font-bold text-navy text-sm">Dr. Zoha Nayyar</p>
                    <p class="text-[10px] text-clinical-teal font-semibold uppercase tracking-wider mb-2">Medical Officer</p>
                    <p class="text-[11px] text-on-surface-variant">MBBS</p>
                </div>
                <div class="bg-pure-white p-5 rounded-2xl border border-slate-100 shadow-sm text-center">
                    <span class="material-symbols-outlined text-3xl text-primary mb-2">person</span>
                    <p class="font-heading font-bold text-navy text-sm">Dr. Salman Khan</p>
                    <p class="text-[10px] text-clinical-teal font-semibold uppercase tracking-wider mb-2">CC Anesthesia</p>
                    <p class="text-[11px] text-on-surface-variant">MBBS, FCPS (CC)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Immediate Consultation Banner -->
    <section class="py-20 px-4 max-w-[1280px] mx-auto bg-background">
        <div class="bg-navy text-pure-white rounded-[2.5rem] p-8 md:p-12 text-center max-w-4xl mx-auto border border-white/5 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-80 h-80 bg-primary/10 blur-[80px] rounded-full"></div>
            <div class="relative z-10">
                <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-3 block">Need Immediate Assistance?</span>
                <h3 class="font-display font-extrabold text-2xl md:text-3xl mb-4">Direct Patient Helpline</h3>
                <p class="font-sans text-sm md:text-base text-slate-300 max-w-xl mx-auto mb-8">
                    Our medical receptionists are active 24/7 to connect you with on-call duty specialists, urology surgeons, or renal dialysis coordinators.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="appointment.php" class="bg-primary hover:bg-primary-hover text-pure-white px-8 py-3.5 rounded-full font-heading text-sm font-bold transition-all shadow-md">
                        Book Online Consultation
                    </a>
                    <a href="tel:03177338830" class="border border-white/20 hover:border-pure-white text-pure-white px-8 py-3.5 rounded-full font-heading text-sm font-bold transition-all">
                        Call Helpline: 03177338830
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/include/footer.php'; ?>
