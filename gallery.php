<?php
require_once __DIR__ . '/include/site-config.php';
$pageTitle = 'Photo Gallery | Al Rasheed Hospital & Kidney Center';
$pageDescription = 'Photo Gallery of Al Rasheed Hospital & Kidney Center, Abbottabad - Take a virtual tour of our exterior building, ICU, modular OTs, dialysis unit, and inpatient rooms.';
$currentPage = 'gallery';
include __DIR__ . '/include/head.php';
include __DIR__ . '/include/header.php';
?>

<main>
    <!-- Page Hero Banner -->
    <section class="relative h-[250px] md:h-[300px] w-full overflow-hidden bg-navy flex items-center">
        <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/60 to-transparent z-10"></div>
        <img class="absolute inset-0 w-full h-full object-cover" src="assets/hero_exterior.png" alt="Al Rasheed Gallery Banner"/>
        <div class="relative z-20 px-6 md:px-12 max-w-[1280px] mx-auto w-full">
            <div class="max-w-2xl text-pure-white">
                <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Virtual Tour</span>
                <h1 class="font-display font-extrabold text-3xl md:text-5xl text-pure-white leading-tight tracking-tight mb-2">Hospital Photo Gallery</h1>
                <p class="font-sans text-sm md:text-base text-slate-300 max-w-lg leading-relaxed">Take a visual tour of our clinics, urology operating complex, dialysis unit, and inpatient recovery suites.</p>
            </div>
        </div>
    </section>

    <!-- Gallery section -->
    <section class="py-16 md:py-20 px-4 max-w-[1280px] mx-auto bg-background">
        <!-- Filter Tabs -->
        <div class="flex overflow-x-auto gap-2 mb-12 pb-3 hide-scrollbar border-b">
            <button class="gallery-filter-btn px-4 py-2 bg-primary text-white text-xs md:text-sm font-semibold rounded-full shadow-md whitespace-nowrap transition-all" data-filter="all">All Photos</button>
            <button class="gallery-filter-btn px-4 py-2 bg-white text-gray-700 hover:bg-gray-100 text-xs md:text-sm font-semibold rounded-full whitespace-nowrap transition-all border border-slate-200" data-filter="exterior">Hospital Exterior</button>
            <button class="gallery-filter-btn px-4 py-2 bg-white text-gray-700 hover:bg-gray-100 text-xs md:text-sm font-semibold rounded-full whitespace-nowrap transition-all border border-slate-200" data-filter="dialysis">Dialysis Unit</button>
            <button class="gallery-filter-btn px-4 py-2 bg-white text-gray-700 hover:bg-gray-100 text-xs md:text-sm font-semibold rounded-full whitespace-nowrap transition-all border border-slate-200" data-filter="icu">ICU Unit</button>
            <button class="gallery-filter-btn px-4 py-2 bg-white text-gray-700 hover:bg-gray-100 text-xs md:text-sm font-semibold rounded-full whitespace-nowrap transition-all border border-slate-200" data-filter="ot">Operating Theatre</button>
            <button class="gallery-filter-btn px-4 py-2 bg-white text-gray-700 hover:bg-gray-100 text-xs md:text-sm font-semibold rounded-full whitespace-nowrap transition-all border border-slate-200" data-filter="rooms">Inpatient Rooms</button>
            <button class="gallery-filter-btn px-4 py-2 bg-white text-gray-700 hover:bg-gray-100 text-xs md:text-sm font-semibold rounded-full whitespace-nowrap transition-all border border-slate-200" data-filter="lab">Hematology Lab</button>
        </div>

        <!-- Photo Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="gallery-grid">
            
            <!-- Exterior 1 -->
            <a href="#" class="gallery-item group block relative bg-slate-100 rounded-3xl overflow-hidden shadow-sm border border-slate-200/50 hover:shadow-md transition-all duration-300" data-category="exterior">
                <div class="h-64 overflow-hidden relative">
                    <img src="assets/hero_exterior.png" alt="Al Rasheed Hospital Exterior Building at Twilight" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                    <div class="absolute inset-0 bg-navy/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-pure-white z-10">
                        <span class="material-symbols-outlined text-4xl">zoom_in</span>
                    </div>
                </div>
                <div class="p-4 bg-pure-white">
                    <p class="font-heading font-bold text-navy text-sm">Hospital Exterior View</p>
                    <p class="font-sans text-xs text-slate-500 mt-0.5">Abbottabad, Mansehra Road</p>
                </div>
            </a>

            <!-- Dialysis 1 -->
            <a href="#" class="gallery-item group block relative bg-slate-100 rounded-3xl overflow-hidden shadow-sm border border-slate-200/50 hover:shadow-md transition-all duration-300" data-category="dialysis">
                <div class="h-64 overflow-hidden relative">
                    <img src="assets/dialysis_unit.png" alt="Renal Dialysis Unit (RDU) HDF Dialysis Machines" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                    <div class="absolute inset-0 bg-navy/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-pure-white z-10">
                        <span class="material-symbols-outlined text-4xl">zoom_in</span>
                    </div>
                </div>
                <div class="p-4 bg-pure-white">
                    <p class="font-heading font-bold text-navy text-sm">Renal Dialysis Unit</p>
                    <p class="font-sans text-xs text-slate-500 mt-0.5">Advanced Dialysis Station</p>
                </div>
            </a>

            <!-- ICU 1 -->
            <a href="#" class="gallery-item group block relative bg-slate-100 rounded-3xl overflow-hidden shadow-sm border border-slate-200/50 hover:shadow-md transition-all duration-300" data-category="icu">
                <div class="h-64 overflow-hidden relative">
                    <img src="assets/icu_interior.png" alt="Intensive Care Unit (ICU) Patient Bed and Cardiac Monitors" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                    <div class="absolute inset-0 bg-navy/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-pure-white z-10">
                        <span class="material-symbols-outlined text-4xl">zoom_in</span>
                    </div>
                </div>
                <div class="p-4 bg-pure-white">
                    <p class="font-heading font-bold text-navy text-sm">Intensive Care Unit (ICU)</p>
                    <p class="font-sans text-xs text-slate-500 mt-0.5">Ventilators & Monitoring Systems</p>
                </div>
            </a>

            <!-- OT 1 -->
            <a href="#" class="gallery-item group block relative bg-slate-100 rounded-3xl overflow-hidden shadow-sm border border-slate-200/50 hover:shadow-md transition-all duration-300" data-category="ot">
                <div class="h-64 overflow-hidden relative">
                    <img src="assets/operation_theater.png" alt="Modular Operation Theatre Complex" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                    <div class="absolute inset-0 bg-navy/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-pure-white z-10">
                        <span class="material-symbols-outlined text-4xl">zoom_in</span>
                    </div>
                </div>
                <div class="p-4 bg-pure-white">
                    <p class="font-heading font-bold text-navy text-sm">Operating Theatre</p>
                    <p class="font-sans text-xs text-slate-500 mt-0.5">Sterile Surgical Suite</p>
                </div>
            </a>

            <!-- Room 1 -->
            <a href="#" class="gallery-item group block relative bg-slate-100 rounded-3xl overflow-hidden shadow-sm border border-slate-200/50 hover:shadow-md transition-all duration-300" data-category="rooms">
                <div class="h-64 overflow-hidden relative">
                    <img src="assets/hospital_ward.png" alt="Executive Room patient and attendant room suites" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                    <div class="absolute inset-0 bg-navy/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-pure-white z-10">
                        <span class="material-symbols-outlined text-4xl">zoom_in</span>
                    </div>
                </div>
                <div class="p-4 bg-pure-white">
                    <p class="font-heading font-bold text-navy text-sm">Executive Patient Room</p>
                    <p class="font-sans text-xs text-slate-500 mt-0.5">Private two-room patient suite</p>
                </div>
            </a>

            <!-- Lab 1 -->
            <a href="#" class="gallery-item group block relative bg-slate-100 rounded-3xl overflow-hidden shadow-sm border border-slate-200/50 hover:shadow-md transition-all duration-300" data-category="lab">
                <div class="h-64 overflow-hidden relative">
                    <img src="assets/medical_lab.png" alt="Fully automated biochemistry analyzer lab" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                    <div class="absolute inset-0 bg-navy/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-pure-white z-10">
                        <span class="material-symbols-outlined text-4xl">zoom_in</span>
                    </div>
                </div>
                <div class="p-4 bg-pure-white">
                    <p class="font-heading font-bold text-navy text-sm">Clinical Diagnostics Laboratory</p>
                    <p class="font-sans text-xs text-slate-500 mt-0.5">Automated pathology testing</p>
                </div>
            </a>
            
        </div>
    </section>
</main>

<?php include __DIR__ . '/include/footer.php'; ?>
