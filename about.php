<?php
require_once __DIR__ . '/include/site-config.php';
$pageTitle = 'About Us | Al Rasheed Hospital & Kidney Center';
$pageDescription = 'About Al Rasheed Hospital & Kidney Center, Abbottabad - Mission, Vision, leadership messages, BOG organogram, and HCCR certification details.';
$currentPage = 'about';
include __DIR__ . '/include/head.php';
include __DIR__ . '/include/header.php';
?>

<main>
    <!-- Page Hero Banner -->
    <section class="relative h-[280px] md:h-[360px] w-full overflow-hidden bg-navy flex items-center">
        <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/70 to-transparent z-10"></div>
        <img class="absolute inset-0 w-full h-full object-cover" src="assets/hero_exterior.png" alt="Al Rasheed Building"/>
        <div class="relative z-20 px-6 md:px-12 max-w-[1280px] mx-auto w-full">
            <div class="max-w-2xl text-pure-white">
                <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Who We Are</span>
                <h1 class="font-display font-extrabold text-3xl md:text-5xl text-pure-white leading-tight tracking-tight mb-4">Pioneering Healthcare Excellence</h1>
                <p class="font-sans text-sm md:text-base text-slate-300 max-w-lg leading-relaxed">Established in May 2023, providing specialized urology, nephrology, general medicine, and emergency care to Abbottabad.</p>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="py-16 md:py-24 px-4 max-w-[1280px] mx-auto bg-background">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-7">
                <span class="text-clinical-teal font-heading font-extrabold tracking-widest uppercase text-xs mb-2.5 block">Since May 2023</span>
                <h2 class="font-display font-bold text-3xl md:text-4xl text-navy mb-6">A New Standard of Healthcare in Abbottabad</h2>
                <p class="font-sans text-base text-on-surface-variant mb-6 leading-relaxed">
                    Located in the heart of Abbottabad, AL-RASHEED Hospital & kidney center is a premier healthcare institution dedicated to providing comprehensive medical services. With a specialized focus on renal health, our state-of-the-art facility is designed to offer a healing environment where clinical practice meets human compassion.
                </p>
                <p class="font-sans text-base text-on-surface-variant mb-8 leading-relaxed">
                    We offer a broad spectrum of medical services: 24/7 Emergency, out-patient consultations, diagnostic imaging, pathology lab, ICU, maternity services, and advanced surgical operations. Powered by qualified medical professionals and structured operations, we ensure evidence-based, compassionate care for every patient.
                </p>
                
                <div class="grid sm:grid-cols-2 gap-4">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary text-2xl font-bold">check_circle</span>
                        <span class="font-heading font-semibold text-navy text-sm">100+ Bed Inpatient Wards</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary text-2xl font-bold">check_circle</span>
                        <span class="font-heading font-semibold text-navy text-sm">KP Health Care Commission Registered</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary text-2xl font-bold">check_circle</span>
                        <span class="font-heading font-semibold text-navy text-sm">6 Modern Operating Theaters</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary text-2xl font-bold">check_circle</span>
                        <span class="font-heading font-semibold text-navy text-sm">24/7 Pharmacy & Diagnostics</span>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-5 relative bg-pure-white p-4 rounded-3xl shadow-lg border border-slate-100">
                <div class="h-80 bg-slate-100 rounded-2xl overflow-hidden">
                    <img src="assets/dialysis_unit.png" alt="Al Rasheed Dialysis Unit" class="w-full h-full object-cover"/>
                </div>
                <div class="p-6 text-center">
                    <span class="material-symbols-outlined text-primary text-4xl mb-2">medical_services</span>
                    <p class="font-sans text-sm italic text-on-surface-variant">"Leading with clinical innovation, treating with empathy, and serving our community with integrity."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision, Mission & CARE Values -->
    <section class="py-20 px-4 bg-slate-50 border-y border-slate-100">
        <div class="max-w-[1280px] mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Guiding Principles</span>
                <h2 class="font-display font-bold text-3xl md:text-4xl text-navy mb-4">Our Foundation</h2>
                <div class="w-16 h-1 bg-primary mx-auto rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Vision Card -->
                <div class="bg-pure-white p-8 rounded-3xl border border-slate-100 shadow-[0_4px_25px_rgba(13,33,55,0.02)] hover:shadow-[0_10px_35px_rgba(13,33,55,0.06)] hover:-translate-y-1 transition-all duration-300 flex flex-col items-center text-center">
                    <div class="w-16 h-16 rounded-2xl bg-red-50 text-primary flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-3xl">visibility</span>
                    </div>
                    <h3 class="font-heading font-bold text-navy text-xl mb-4">Our Vision</h3>
                    <p class="font-sans text-sm text-on-surface-variant leading-relaxed">
                        To be the most trusted, patient-centric healthcare establishment in the region, recognized for pioneering renal care, clinical safety, and empathetic outpatient experiences.
                    </p>
                </div>
                
                <!-- Mission Card -->
                <div class="bg-pure-white p-8 rounded-3xl border border-slate-100 shadow-[0_4px_25px_rgba(13,33,55,0.02)] hover:shadow-[0_10px_35px_rgba(13,33,55,0.06)] hover:-translate-y-1 transition-all duration-300 flex flex-col items-center text-center">
                    <div class="w-16 h-16 rounded-2xl bg-teal-50 text-clinical-teal flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-3xl">track_changes</span>
                    </div>
                    <h3 class="font-heading font-bold text-navy text-xl mb-4">Our Mission</h3>
                    <p class="font-sans text-sm text-on-surface-variant leading-relaxed">
                        To deliver accessible, evidence-based medical and surgical services, combining state-of-the-art technological systems with highly trained medical professionals to heal and enhance wellbeing.
                    </p>
                </div>

                <!-- CARE Values Card -->
                <div class="bg-pure-white p-8 rounded-3xl border border-slate-100 shadow-[0_4px_25px_rgba(13,33,55,0.02)] hover:shadow-[0_10px_35px_rgba(13,33,55,0.06)] hover:-translate-y-1 transition-all duration-300 flex flex-col items-center">
                    <div class="w-16 h-16 rounded-2xl bg-green-50 text-vitality-green flex items-center justify-center mb-6 mx-auto">
                        <span class="material-symbols-outlined text-3xl">favorite</span>
                    </div>
                    <h3 class="font-heading font-bold text-navy text-xl mb-4 text-center">CARE Values</h3>
                    
                    <div class="grid grid-cols-2 gap-4 w-full">
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100 text-center">
                            <span class="font-display font-black text-primary text-lg block">C</span>
                            <span class="font-sans text-[10px] font-bold text-navy tracking-wider uppercase">Collaborate</span>
                        </div>
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100 text-center">
                            <span class="font-display font-black text-clinical-teal text-lg block">A</span>
                            <span class="font-sans text-[10px] font-bold text-navy tracking-wider uppercase">Achieve</span>
                        </div>
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100 text-center">
                            <span class="font-display font-black text-vitality-green text-lg block">R</span>
                            <span class="font-sans text-[10px] font-bold text-navy tracking-wider uppercase">Respect</span>
                        </div>
                        <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100 text-center">
                            <span class="font-display font-black text-navy text-lg block">E</span>
                            <span class="font-sans text-[10px] font-bold text-navy tracking-wider uppercase">Equity</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Insights (Tabbed Section) -->
    <section class="py-20 px-4 max-w-[1280px] mx-auto bg-pure-white">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Our Leaders</span>
            <h2 class="font-display font-bold text-3xl md:text-4xl text-navy mb-4">Leadership Insights</h2>
            <p class="font-sans text-sm text-on-surface-variant">Messages from the executive committee guiding the hospital's growth.</p>
        </div>
        
        <!-- Tab buttons -->
        <div class="flex overflow-x-auto gap-2 md:justify-center mb-8 pb-3 hide-scrollbar border-b">
            <button class="leader-tab-btn px-5 py-3 border-b-2 border-primary text-primary bg-primary/5 font-bold rounded-t-xl text-xs md:text-sm whitespace-nowrap" data-tab="chairman">Chairman</button>
            <button class="leader-tab-btn px-5 py-3 border-b-2 border-transparent text-gray-500 hover:text-primary font-semibold rounded-t-xl text-xs md:text-sm whitespace-nowrap" data-tab="ceo">CEO</button>
            <button class="leader-tab-btn px-5 py-3 border-b-2 border-transparent text-gray-500 hover:text-primary font-semibold rounded-t-xl text-xs md:text-sm whitespace-nowrap" data-tab="medical">Medical Director</button>
            <button class="leader-tab-btn px-5 py-3 border-b-2 border-transparent text-gray-500 hover:text-primary font-semibold rounded-t-xl text-xs md:text-sm whitespace-nowrap" data-tab="director">Hospital Director</button>
            <button class="leader-tab-btn px-5 py-3 border-b-2 border-transparent text-gray-500 hover:text-primary font-semibold rounded-t-xl text-xs md:text-sm whitespace-nowrap" data-tab="admin">Administrator</button>
        </div>
        
        <!-- Tab Contents -->
        <div class="max-w-4xl mx-auto">
            <!-- Chairman Content -->
            <div id="leader-tab-chairman" class="leader-tab-content bg-slate-50 border border-slate-100 rounded-3xl p-6 md:p-10 shadow-sm animate-fade-in flex flex-col md:flex-row gap-8 items-center">
                <div class="w-32 h-32 rounded-full bg-slate-200 border-4 border-primary/20 shrink-0 flex items-center justify-center text-navy">
                    <span class="material-symbols-outlined text-5xl">person</span>
                </div>
                <div>
                    <h3 class="font-heading font-extrabold text-navy text-xl md:text-2xl">Rasheed Ul Haq</h3>
                    <p class="text-xs text-clinical-teal font-semibold uppercase tracking-wider mt-0.5 mb-4">Chairman, Board of Governors</p>
                    <blockquote class="font-sans text-sm md:text-base text-on-surface-variant italic leading-relaxed border-l-2 border-primary/40 pl-4">
                        "It gives me great pleasure to welcome you to Al-Rasheed Hospital & Kidney Center. Our mission is to provide accessible, affordable, and high-quality healthcare services to the people of Abbottabad and surrounding regions. We remain focused on continuously improving our services and expanding healthcare opportunities, particularly for deserving and underprivileged kidney patients. Thank you for your trust and support."
                    </blockquote>
                </div>
            </div>
            
            <!-- CEO Content -->
            <div id="leader-tab-ceo" class="leader-tab-content bg-slate-50 border border-slate-100 rounded-3xl p-6 md:p-10 shadow-sm animate-fade-in flex flex-col md:flex-row gap-8 items-center hidden">
                <div class="w-32 h-32 rounded-full bg-slate-200 border-4 border-primary/20 shrink-0 flex items-center justify-center text-navy">
                    <span class="material-symbols-outlined text-5xl">person</span>
                </div>
                <div>
                    <h3 class="font-heading font-extrabold text-navy text-xl md:text-2xl">Dr. Niaz Muhammad</h3>
                    <p class="text-xs text-clinical-teal font-semibold uppercase tracking-wider mt-0.5 mb-4">Chief Executive Officer (CEO)</p>
                    <blockquote class="font-sans text-sm md:text-base text-on-surface-variant italic leading-relaxed border-l-2 border-primary/40 pl-4">
                        "At Al-Rasheed Hospital & Kidney Center, our commitment is to combine modern medical technology with experienced healthcare professionals to ensure the best possible clinical outcomes. We continue to expand our facilities, including specialized kidney care, dialysis, critical care, and emergency services, while maintaining the highest standards of safety and ethical medical practice."
                    </blockquote>
                </div>
            </div>

            <!-- Medical Director Content -->
            <div id="leader-tab-medical" class="leader-tab-content bg-slate-50 border border-slate-100 rounded-3xl p-6 md:p-10 shadow-sm animate-fade-in flex flex-col md:flex-row gap-8 items-center hidden">
                <div class="w-32 h-32 rounded-full bg-slate-200 border-4 border-primary/20 shrink-0 flex items-center justify-center text-navy">
                    <span class="material-symbols-outlined text-5xl">person</span>
                </div>
                <div>
                    <h3 class="font-heading font-extrabold text-navy text-xl md:text-2xl">Dr. Salman Khan</h3>
                    <p class="text-xs text-clinical-teal font-semibold uppercase tracking-wider mt-0.5 mb-4">Medical Director</p>
                    <blockquote class="font-sans text-sm md:text-base text-on-surface-variant italic leading-relaxed border-l-2 border-primary/40 pl-4">
                        "Our mission is to provide compassionate, high-quality clinical care to every individual who walks through our doors. As a 100+ bed hospital, we offer comprehensive services, including surgery, allied medical care, nephrology, and dialysis, supported by modern operation theatres and ICUs. Your trust motivates us to maintain clinical excellence."
                    </blockquote>
                </div>
            </div>

            <!-- Hospital Director Content -->
            <div id="leader-tab-director" class="leader-tab-content bg-slate-50 border border-slate-100 rounded-3xl p-6 md:p-10 shadow-sm animate-fade-in flex flex-col md:flex-row gap-8 items-center hidden">
                <div class="w-32 h-32 rounded-full bg-slate-200 border-4 border-primary/20 shrink-0 flex items-center justify-center text-navy">
                    <span class="material-symbols-outlined text-5xl">person</span>
                </div>
                <div>
                    <h3 class="font-heading font-extrabold text-navy text-xl md:text-2xl">Hospital Director</h3>
                    <p class="text-xs text-clinical-teal font-semibold uppercase tracking-wider mt-0.5 mb-4">Operational Operations Head</p>
                    <blockquote class="font-sans text-sm md:text-base text-on-surface-variant italic leading-relaxed border-l-2 border-primary/40 pl-4">
                        "Operational excellence and administrative governance are key to patient comfort. Through effective management and continuous quality improvement, we strive to ensure that every patient feels respected and valued. Our clinical support systems are structured to work 24/7 to deliver seamless operations."
                    </blockquote>
                </div>
            </div>

            <!-- Administrator Content -->
            <div id="leader-tab-admin" class="leader-tab-content bg-slate-50 border border-slate-100 rounded-3xl p-6 md:p-10 shadow-sm animate-fade-in flex flex-col md:flex-row gap-8 items-center hidden">
                <div class="w-32 h-32 rounded-full bg-slate-200 border-4 border-primary/20 shrink-0 flex items-center justify-center text-navy">
                    <span class="material-symbols-outlined text-5xl">person</span>
                </div>
                <div>
                    <h3 class="font-heading font-extrabold text-navy text-xl md:text-2xl">Hospital Administrator</h3>
                    <p class="text-xs text-clinical-teal font-semibold uppercase tracking-wider mt-0.5 mb-4">Administration & Human Resources</p>
                    <blockquote class="font-sans text-sm md:text-base text-on-surface-variant italic leading-relaxed border-l-2 border-primary/40 pl-4">
                        "We strive to build a strong administration framework, focusing on safety, sanitation, and compliance. Our team ensures that our building, security, human resource management, and customer relations adhere to international best practices, giving patients peace of mind during their medical stay."
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- Organizational Structure (Organogram) -->
    <section class="py-20 px-4 bg-slate-50 border-t border-slate-100">
        <div class="max-w-[1280px] mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-clinical-teal font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Governance</span>
                <h2 class="font-display font-bold text-3xl md:text-4xl text-navy mb-4">Organizational Structure</h2>
                <div class="w-16 h-1 bg-primary mx-auto rounded-full mb-4"></div>
                <p class="font-sans text-sm text-on-surface-variant">The hospital operates under a structured governance hierarchy to maintain quality control, accountability, and seamless clinical coordination.</p>
            </div>
            
            <!-- Organogram Visual Chart -->
            <div class="max-w-4xl mx-auto overflow-x-auto pb-4">
                <div class="min-w-[700px] flex flex-col gap-6 text-center font-heading font-bold text-sm text-navy">
                    <!-- BOG -->
                    <div class="flex justify-center">
                        <div class="bg-primary text-pure-white px-6 py-3.5 rounded-2xl shadow-md border-b-4 border-red-800">
                            Board of Governors (BOG)
                        </div>
                    </div>
                    
                    <!-- Line down -->
                    <div class="h-6 w-0.5 bg-slate-300 mx-auto"></div>
                    
                    <!-- CEO & BOG Secretary -->
                    <div class="flex justify-center items-center gap-12">
                        <div class="bg-clinical-teal text-pure-white px-6 py-3.5 rounded-2xl shadow-sm w-56">
                            Chief Executive Officer (CEO)
                        </div>
                        <div class="bg-slate-300 h-0.5 w-12"></div>
                        <div class="bg-slate-100 text-navy border border-slate-200 px-6 py-3.5 rounded-2xl shadow-sm w-44">
                            Secretary to BOG
                        </div>
                    </div>
                    
                    <!-- Line down -->
                    <div class="h-6 w-0.5 bg-slate-300 mx-auto"></div>
                    
                    <!-- Horizontal branch line -->
                    <div class="h-0.5 w-[80%] bg-slate-300 mx-auto flex justify-between">
                        <div class="w-0.5 h-6 bg-slate-300"></div>
                        <div class="w-0.5 h-6 bg-slate-300"></div>
                        <div class="w-0.5 h-6 bg-slate-300"></div>
                        <div class="w-0.5 h-6 bg-slate-300"></div>
                    </div>
                    
                    <!-- Bottom level nodes -->
                    <div class="grid grid-cols-4 gap-4 pt-4">
                        <div class="bg-pure-white border border-slate-150 p-4 rounded-2xl shadow-sm">
                            <p class="text-primary text-[10px] uppercase font-bold tracking-wider mb-1">Clinical Supervision</p>
                            <p class="text-xs">Medical Director</p>
                        </div>
                        <div class="bg-pure-white border border-slate-150 p-4 rounded-2xl shadow-sm">
                            <p class="text-clinical-teal text-[10px] uppercase font-bold tracking-wider mb-1">Operations</p>
                            <p class="text-xs">Hospital Director</p>
                        </div>
                        <div class="bg-pure-white border border-slate-150 p-4 rounded-2xl shadow-sm">
                            <p class="text-vitality-green text-[10px] uppercase font-bold tracking-wider mb-1">Nursing Care</p>
                            <p class="text-xs">Nursing In-Charge</p>
                        </div>
                        <div class="bg-pure-white border border-slate-150 p-4 rounded-2xl shadow-sm">
                            <p class="text-navy text-[10px] uppercase font-bold tracking-wider mb-1">Quality Control</p>
                            <p class="text-xs">Quality Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certification & Regulatory Section -->
    <section class="py-20 px-4 max-w-[1280px] mx-auto bg-background">
        <div class="bg-primary/5 rounded-[2.5rem] border border-primary/10 p-8 md:p-12 text-center max-w-4xl mx-auto">
            <span class="inline-block bg-primary text-pure-white px-3.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider mb-4">Official Verification</span>
            <h3 class="font-display font-extrabold text-navy text-2xl md:text-3xl mb-4">Licensed and Certified Care</h3>
            <p class="font-sans text-sm md:text-base text-on-surface-variant max-w-2xl mx-auto mb-8">
                AL-RASHEED Hospital & kidney center is officially licensed by the Khyber Pakhtunkhwa Health Care Commission (HCCR) under **License No. 01-001353/26**. We comply with standard hospital operations, safety audits, and sterile guidelines.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="compliance.php" class="bg-primary hover:bg-primary-hover text-pure-white px-6 py-3 rounded-full font-heading text-xs font-bold transition-all shadow-md">
                    View Registration Details
                </a>
                <a href="contact.php" class="border border-navy/20 hover:border-navy text-navy px-6 py-3 rounded-full font-heading text-xs font-bold transition-all bg-pure-white">
                    Contact Regulatory Office
                </a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/include/footer.php'; ?>
