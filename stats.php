<?php
require_once __DIR__ . '/include/site-config.php';
$pageTitle = 'Hospital Performance Highlights 2025 | Al Rasheed Hospital & Kidney Center';
$pageDescription = 'Hospital Performance Highlights 2025 at Al Rasheed Hospital & Kidney Center, Abbottabad - Annual statistics of outpatient, emergency, dialysis, laboratory, and radiology operations.';
$currentPage = 'stats';
include __DIR__ . '/include/head.php';
include __DIR__ . '/include/header.php';
?>

<main>
    <!-- Page Hero Banner -->
    <section class="relative h-[250px] md:h-[300px] w-full overflow-hidden bg-navy flex items-center">
        <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/60 to-transparent z-10"></div>
        <img class="absolute inset-0 w-full h-full object-cover" src="assets/hero_exterior.png" alt="Al Rasheed Statistics Banner"/>
        <div class="relative z-20 px-6 md:px-12 max-w-[1280px] mx-auto w-full">
            <div class="max-w-2xl text-pure-white">
                <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Hospital Performance</span>
                <h1 class="font-display font-extrabold text-3xl md:text-5xl text-pure-white leading-tight tracking-tight mb-2">Annual Operations 2025</h1>
                <p class="font-sans text-sm md:text-base text-slate-300 max-w-lg leading-relaxed">Detailed audit of clinical consults, surgeries, admissions, and renal treatments from January 1 to December 31, 2025.</p>
            </div>
        </div>
    </section>

    <!-- General Stats Block -->
    <section class="py-16 md:py-24 px-4 max-w-[1280px] mx-auto bg-background stats-trigger">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-clinical-teal font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Annual Highlights</span>
            <h2 class="font-display font-bold text-3xl text-navy">General Operations</h2>
            <div class="w-12 h-1 bg-primary mx-auto rounded-full mt-4"></div>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 max-w-5xl mx-auto">
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-sm text-center">
                <div class="text-4xl md:text-5xl font-display font-black text-primary mb-2 counter" data-target="14200">0</div>
                <p class="font-heading font-bold text-navy text-xs md:text-sm uppercase tracking-wide">Outpatients (OPD)</p>
                <p class="font-sans text-[11px] text-slate-500 mt-2">Annual general medicine, urology, and pediatric consultations.</p>
            </div>
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-sm text-center">
                <div class="text-4xl md:text-5xl font-display font-black text-clinical-teal mb-2 counter" data-target="1365">0</div>
                <p class="font-heading font-bold text-navy text-xs md:text-sm uppercase tracking-wide">Surgical Cases</p>
                <p class="font-sans text-[11px] text-slate-500 mt-2">Laparoscopic, urological, and orthopedics operations performed.</p>
            </div>
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-sm text-center">
                <div class="text-4xl md:text-5xl font-display font-black text-vitality-green mb-2 counter" data-target="1255">0</div>
                <p class="font-heading font-bold text-navy text-xs md:text-sm uppercase tracking-wide">Emergencies Handled</p>
                <p class="font-sans text-[11px] text-slate-500 mt-2">24/7 acute trauma care and stabilization cases resolved.</p>
            </div>
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-sm text-center">
                <div class="text-4xl md:text-5xl font-display font-black text-navy mb-2 counter" data-target="1390">0</div>
                <p class="font-heading font-bold text-navy text-xs md:text-sm uppercase tracking-wide">Inpatient Admissions</p>
                <p class="font-sans text-[11px] text-slate-500 mt-2">Admitted patient care resolved across our 100+ bed facility.</p>
            </div>
        </div>
    </section>

    <!-- Lab & Radiology Dashboard -->
    <section class="py-20 px-4 bg-slate-50 border-t border-slate-100 stats-trigger">
        <div class="max-w-[1280px] mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Diagnostic Output</span>
                <h2 class="font-display font-bold text-3xl text-navy">Diagnostics & Pathology Laboratory</h2>
                <div class="w-12 h-1 bg-primary mx-auto rounded-full mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-5xl mx-auto mb-12">
                <div class="bg-pure-white p-6 rounded-3xl border border-slate-150 shadow-sm text-center">
                    <div class="text-4xl font-display font-black text-clinical-teal mb-2 counter" data-target="14581">0</div>
                    <p class="font-heading font-bold text-navy text-xs md:text-sm uppercase tracking-wide">Lab Investigations</p>
                    <p class="font-sans text-[11px] text-slate-500 mt-1">Total biochemical & hematological tests conducted 24/7.</p>
                </div>
                <div class="bg-pure-white p-6 rounded-3xl border border-slate-150 shadow-sm text-center">
                    <div class="text-4xl font-display font-black text-primary mb-2 counter" data-target="5077">0</div>
                    <p class="font-heading font-bold text-navy text-xs md:text-sm uppercase tracking-wide">Ultrasounds</p>
                    <p class="font-sans text-[11px] text-slate-500 mt-1">Diagnostic ultrasound scans conducted by radiologists.</p>
                </div>
                <div class="bg-pure-white p-6 rounded-3xl border border-slate-150 shadow-sm text-center">
                    <div class="text-4xl font-display font-black text-vitality-green mb-2 counter" data-target="2373">0</div>
                    <p class="font-heading font-bold text-navy text-xs md:text-sm uppercase tracking-wide">Digital X-Rays</p>
                    <p class="font-sans text-[11px] text-slate-500 mt-1">High-quality diagnostic X-rays with minimal radiation.</p>
                </div>
                <div class="bg-pure-white p-6 rounded-3xl border border-slate-150 shadow-sm text-center">
                    <div class="text-4xl font-display font-black text-navy mb-2 counter" data-target="1368">0</div>
                    <p class="font-heading font-bold text-navy text-xs md:text-sm uppercase tracking-wide">Free Dialysis Sessions</p>
                    <p class="font-sans text-[11px] text-slate-500 mt-1">Renal hemodialysis sessions conducted entirely for free.</p>
                </div>
            </div>

            <!-- Specialized Procedures row -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 max-w-4xl mx-auto pt-6 border-t border-slate-200">
                <div class="text-center">
                    <p class="font-display font-black text-navy text-2xl counter" data-target="179">0</p>
                    <p class="font-sans text-xs text-on-surface-variant font-semibold mt-1">Doppler Studies</p>
                </div>
                <div class="text-center">
                    <p class="font-display font-black text-primary text-2xl counter" data-target="10">0</p>
                    <p class="font-sans text-xs text-on-surface-variant font-semibold mt-1">X-Ray Procedures</p>
                </div>
                <div class="text-center">
                    <p class="font-display font-black text-clinical-teal text-2xl counter" data-target="70">0</p>
                    <p class="font-sans text-xs text-on-surface-variant font-semibold mt-1">ECG Diagnostic Scans</p>
                </div>
                <div class="text-center">
                    <p class="font-display font-black text-vitality-green text-2xl counter" data-target="120">0</p>
                    <p class="font-sans text-xs text-on-surface-variant font-semibold mt-1">Kidney Biopsies</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Narrative Section -->
    <section class="py-20 px-4 max-w-[1280px] mx-auto bg-background">
        <div class="bg-navy text-pure-white rounded-[2.5rem] p-8 md:p-12 text-center max-w-4xl mx-auto border border-white/5 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-80 h-80 bg-clinical-teal/10 blur-[80px] rounded-full"></div>
            <div class="relative z-10">
                <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-3 block">Commitment to Abbottabad</span>
                <h3 class="font-display font-bold text-2xl md:text-3xl mb-6">Reflecting Community Trust</h3>
                <p class="font-sans text-sm md:text-base text-slate-300 max-w-2xl mx-auto leading-relaxed mb-6">
                    These metrics are not just numbers—they reflect the growing trust placed in AL-RASHEED Hospital & kidney center by families across Hazara Division. Every consultation, pathology test, and surgery represents our dedication to clinical safety and compassionate care.
                </p>
                <p class="font-sans text-xs text-slate-400">
                    Source: Annual Hospital Operations Review, January 1 – December 31, 2025. Approved by Board of Governors.
                </p>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/include/footer.php'; ?>
