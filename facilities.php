<?php
require_once __DIR__ . '/include/site-config.php';
$pageTitle = 'Our Facilities | Al Rasheed Hospital & Kidney Center';
$pageDescription = 'Facilities at Al Rasheed Hospital & Kidney Center, Abbottabad - 24/7 Pharmacy, Laboratory, ICU, NICU, Inpatient Rooms, and Operating Theaters.';
$currentPage = 'facilities';
include __DIR__ . '/include/head.php';
include __DIR__ . '/include/header.php';
?>

<main>
    <!-- Page Hero Banner -->
    <section class="relative h-[250px] md:h-[300px] w-full overflow-hidden bg-navy flex items-center">
        <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/60 to-transparent z-10"></div>
        <img class="absolute inset-0 w-full h-full object-cover" src="assets/hero_exterior.png" alt="Al Rasheed Facilities Banner"/>
        <div class="relative z-20 px-6 md:px-12 max-w-[1280px] mx-auto w-full">
            <div class="max-w-2xl text-pure-white">
                <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Clinical Infrastructure</span>
                <h1 class="font-display font-extrabold text-3xl md:text-5xl text-pure-white leading-tight tracking-tight mb-2">Our Modern Facilities</h1>
                <p class="font-sans text-sm md:text-base text-slate-300 max-w-lg leading-relaxed">Equipped with advanced life support, modular theatres, automated laboratories, and barrier-free inpatient care rooms.</p>
            </div>
        </div>
    </section>

    <!-- Alternating Facilities Sections -->
    <section class="py-16 md:py-24 px-4 max-w-[1280px] mx-auto bg-background space-y-20">
        
        <!-- Facility 1: 24/7 Pharmacy -->
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center">
            <div class="lg:col-span-6">
                <div class="w-12 h-12 bg-red-50 text-primary rounded-xl flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-2xl">local_pharmacy</span>
                </div>
                <h2 class="font-display font-bold text-2xl md:text-3xl text-navy mb-4">24/7 Fully Stocked Pharmacy</h2>
                <p class="font-sans text-sm md:text-base text-on-surface-variant leading-relaxed mb-4">
                    Our in-house pharmacy operates round-the-clock, ensuring the continuous availability of critical and high-quality medicines for both out-patients and admitted patients.
                </p>
                <p class="font-sans text-sm text-on-surface-variant leading-relaxed">
                    Under skilled supervision, our pharmacists possess the capability to prepare customized pediatric drug formulations to meet the specific medical needs of children. All medicines are sourced directly from verified manufacturers, ensuring absolute quality control.
                </p>
            </div>
            <div class="lg:col-span-6 bg-slate-50 border border-slate-100 rounded-3xl p-3 shadow-sm">
                <div class="h-64 rounded-2xl overflow-hidden bg-slate-200">
                    <img src="assets/hospital_ward.png" alt="Al Rasheed Pharmacy" class="w-full h-full object-cover"/>
                </div>
            </div>
        </div>

        <!-- Facility 2: Lab & Diagnostics -->
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center">
            <div class="lg:col-span-6 lg:order-2">
                <div class="w-12 h-12 bg-teal-50 text-clinical-teal rounded-xl flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-2xl">biotech</span>
                </div>
                <h2 class="font-display font-bold text-2xl md:text-3xl text-navy mb-4">Automated Laboratory & Diagnostics</h2>
                <p class="font-sans text-sm md:text-base text-on-surface-variant leading-relaxed mb-4">
                    Equipped with advanced diagnostic automation, our clinical laboratory provides 24/7 rapid and precise investigations across biochemistry, hematology, and clinical pathology.
                </p>
                <p class="font-sans text-sm text-on-surface-variant leading-relaxed">
                    Our laboratory employs highly qualified technologists and follows strict international quality control measures. We also feature a dedicated, hygienic phlebotomy room, ensuring patient comfort during blood collections.
                </p>
            </div>
            <div class="lg:col-span-6 lg:order-1 bg-slate-50 border border-slate-100 rounded-3xl p-3 shadow-sm">
                <div class="h-64 rounded-2xl overflow-hidden bg-slate-200">
                    <img src="assets/medical_lab.png" alt="Automated Clinical Lab" class="w-full h-full object-cover"/>
                </div>
            </div>
        </div>

        <!-- Facility 3: Operating Theatres -->
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center">
            <div class="lg:col-span-6">
                <div class="w-12 h-12 bg-red-50 text-primary rounded-xl flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-2xl">medical_services</span>
                </div>
                <h2 class="font-display font-bold text-2xl md:text-3xl text-navy mb-4">6 State-of-the-Art Operation Theaters</h2>
                <p class="font-sans text-sm md:text-base text-on-surface-variant leading-relaxed mb-4">
                    Al Rasheed Hospital features 6 modular operating theatres fully equipped with modern surgical instruments, advanced anesthesia machines, and centralized sterile air filtration.
                </p>
                <p class="font-sans text-sm text-on-surface-variant leading-relaxed">
                    Our surgical suites include dedicated theaters for the Labor Room, General Surgery, Urology, Orthopedics, and Neurosurgery. Supported by two advanced C-arm imaging systems and an experienced anesthesia team led by Dr. Saqib, we ensure high surgical precision and safety.
                </p>
            </div>
            <div class="lg:col-span-6 bg-slate-50 border border-slate-100 rounded-3xl p-3 shadow-sm">
                <div class="h-64 rounded-2xl overflow-hidden bg-slate-200">
                    <img src="assets/operation_theater.png" alt="Operating Theatre Complexes" class="w-full h-full object-cover"/>
                </div>
            </div>
        </div>

        <!-- Facility 4: ICU & NICU -->
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center">
            <div class="lg:col-span-6 lg:order-2">
                <div class="w-12 h-12 bg-teal-50 text-clinical-teal rounded-xl flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-2xl">monitor_heart</span>
                </div>
                <h2 class="font-display font-bold text-2xl md:text-3xl text-navy mb-4">Intensive Care Units (ICU & NICU)</h2>
                <p class="font-sans text-sm md:text-base text-on-surface-variant leading-relaxed mb-4">
                    Our ICU features modern ventilators, multi-parameter cardiac monitors, non-invasive blood pressure devices, and centralized oxygen backup to manage critically ill patients.
                </p>
                <p class="font-sans text-sm text-on-surface-variant leading-relaxed">
                    Managed by 24/7 dedicated intensivists and qualified critical care nursing staff, our ICU provides continuous clinical monitoring. Our specialized NICU (Neonatal Intensive Care Unit) is similarly equipped with warmers and incubators for newborn emergency care.
                </p>
            </div>
            <div class="lg:col-span-6 lg:order-1 bg-slate-50 border border-slate-100 rounded-3xl p-3 shadow-sm">
                <div class="h-64 rounded-2xl overflow-hidden bg-slate-200">
                    <img src="assets/icu_interior.png" alt="Al Rasheed ICU Ward" class="w-full h-full object-cover"/>
                </div>
            </div>
        </div>
    </section>

    <!-- Inpatient Room Tiers Section -->
    <section class="py-20 px-4 bg-slate-50 border-t border-slate-100">
        <div class="max-w-[1280px] mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Inpatient Tiers</span>
                <h2 class="font-display font-bold text-2xl md:text-3xl text-navy">Inpatient Accommodation</h2>
                <div class="w-12 h-1 bg-primary mx-auto rounded-full mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- General Ward -->
                <div class="bg-pure-white p-6 rounded-3xl border border-slate-150 shadow-sm flex flex-col justify-between">
                    <div>
                        <span class="text-[10px] bg-slate-100 text-navy font-bold tracking-widest uppercase px-2.5 py-1 rounded-full mb-4 inline-block">Shared Ward</span>
                        <h3 class="font-heading font-bold text-navy text-lg mb-2">General Ward</h3>
                        <p class="font-sans text-xs text-on-surface-variant leading-relaxed mb-6">Spacious layouts with centralized oxygen lines, modern patient beds, and round-the-clock nursing supervision.</p>
                    </div>
                    <ul class="text-xs text-slate-600 space-y-2 mb-6 border-t pt-4">
                        <li class="flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-primary">check</span> Centralized Oxygen</li>
                        <li class="flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-primary">check</span> 24/7 Nursing Call Desk</li>
                        <li class="flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-primary">check</span> Shared Sterilized Washroom</li>
                    </ul>
                </div>

                <!-- Private Room -->
                <div class="bg-pure-white p-6 rounded-3xl border border-slate-150 shadow-sm flex flex-col justify-between">
                    <div>
                        <span class="text-[10px] bg-slate-100 text-navy font-bold tracking-widest uppercase px-2.5 py-1 rounded-full mb-4 inline-block">Single Patient</span>
                        <h3 class="font-heading font-bold text-navy text-lg mb-2">Private Room</h3>
                        <p class="font-sans text-xs text-on-surface-variant leading-relaxed mb-6">Fully private patient rooms with attached washrooms, offering a peaceful environment for post-surgical recovery.</p>
                    </div>
                    <ul class="text-xs text-slate-600 space-y-2 mb-6 border-t pt-4">
                        <li class="flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-primary">check</span> Private Attached Washroom</li>
                        <li class="flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-primary">check</span> Centralized Oxygen lines</li>
                        <li class="flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-primary">check</span> Attendant Seating Bed</li>
                    </ul>
                </div>

                <!-- VIP Room -->
                <div class="bg-pure-white p-6 rounded-3xl border border-slate-150 shadow-sm flex flex-col justify-between">
                    <div>
                        <span class="text-[10px] bg-clinical-teal/15 text-clinical-teal font-bold tracking-widest uppercase px-2.5 py-1 rounded-full mb-4 inline-block">Premium Suite</span>
                        <h3 class="font-heading font-bold text-navy text-lg mb-2">VIP Room</h3>
                        <p class="font-sans text-xs text-on-surface-variant leading-relaxed mb-6">Premium patient comfort featuring comfortable patient bed, air conditioning, LED TV, and private washroom.</p>
                    </div>
                    <ul class="text-xs text-slate-600 space-y-2 mb-6 border-t pt-4">
                        <li class="flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-clinical-teal">check</span> Air Conditioning & LED TV</li>
                        <li class="flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-clinical-teal">check</span> Attached washroom & Refrigerator</li>
                        <li class="flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-clinical-teal">check</span> Private Inverter Backup</li>
                    </ul>
                </div>

                <!-- Executive Room -->
                <div class="bg-pure-white p-6 rounded-3xl border-2 border-primary shadow-md flex flex-col justify-between relative">
                    <div class="absolute -top-3 right-4 bg-primary text-pure-white text-[9px] font-bold uppercase tracking-widest px-2.5 py-1 rounded-full">Best Facility</div>
                    <div>
                        <span class="text-[10px] bg-primary/10 text-primary font-bold tracking-widest uppercase px-2.5 py-1 rounded-full mb-4 inline-block">Two-Room Suite</span>
                        <h3 class="font-heading font-bold text-navy text-lg mb-2">Executive Room</h3>
                        <p class="font-sans text-xs text-on-surface-variant leading-relaxed mb-6">Our highest tier of accommodation. Consists of a private patient room and a completely separate attendant room.</p>
                    </div>
                    <ul class="text-xs text-slate-600 space-y-2 mb-6 border-t pt-4">
                        <li class="flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-primary">check</span> Separate Attendant Room</li>
                        <li class="flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-primary">check</span> Full AC, Refrigerator, LED TV</li>
                        <li class="flex items-center gap-1.5"><span class="material-symbols-outlined text-sm text-primary">check</span> Inverter Backup & Telephone line</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Parking & Patient Access Details -->
    <section class="py-20 px-4 max-w-[1280px] mx-auto bg-background">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-6">
                <span class="text-clinical-teal font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Accessibility & Entry</span>
                <h2 class="font-display font-bold text-2xl md:text-3xl text-navy mb-6">Basement Parking & Barrier-Free Access</h2>
                <p class="font-sans text-sm md:text-base text-on-surface-variant leading-relaxed mb-4">
                    Al Rasheed Hospital features a secure and spacious basement parking facility reserved for both doctors and patients, ensuring smooth traffic flow.
                </p>
                <p class="font-sans text-sm text-on-surface-variant leading-relaxed mb-6">
                    Patients and attendants can access all clinical departments 24/7 from the parking bay through two modern elevators and a dedicated patient ramp, facilitating barrier-free movement for wheelchair users, differently-abled, and elderly individuals.
                </p>
                
                <div class="flex flex-wrap gap-4">
                    <a href="contact.php" class="bg-primary hover:bg-primary-hover text-pure-white px-6 py-3 rounded-full font-heading text-xs font-bold transition-all shadow-md">
                        Get Location Directions
                    </a>
                </div>
            </div>
            
            <div class="lg:col-span-6 bg-slate-50 border border-slate-100 rounded-3xl p-3 shadow-sm">
                <div class="h-64 rounded-2xl overflow-hidden bg-slate-200">
                    <img src="assets/hero_exterior.png" alt="Patient Parking Ramp Access" class="w-full h-full object-cover"/>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/include/footer.php'; ?>
