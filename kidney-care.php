<?php
require_once __DIR__ . '/include/site-config.php';
$pageTitle = 'Dialysis & Kidney Care | Al Rasheed Hospital & Kidney Center';
$pageDescription = 'Renal Dialysis Unit at Al Rasheed Hospital, Abbottabad - First HDF Dialysis in Hazara region, free dialysis care for underprivileged patients, supervised by Dr. Usman Zia.';
$currentPage = 'kidney-care';
include __DIR__ . '/include/head.php';
include __DIR__ . '/include/header.php';
?>

<main>
    <!-- Page Hero Banner -->
    <section class="relative h-[280px] md:h-[360px] w-full overflow-hidden bg-navy flex items-center">
        <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/60 to-transparent z-10"></div>
        <img class="absolute inset-0 w-full h-full object-cover" src="assets/dialysis_unit.png" alt="Al Rasheed Dialysis Unit"/>
        <div class="relative z-20 px-6 md:px-12 max-w-[1280px] mx-auto w-full">
            <div class="max-w-2xl text-pure-white">
                <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Flagship Specialty</span>
                <h1 class="font-display font-extrabold text-3xl md:text-5xl text-pure-white leading-tight tracking-tight mb-2">Renal Dialysis Unit (RDU)</h1>
                <p class="font-sans text-sm md:text-base text-slate-300 max-w-lg leading-relaxed">Providing high-fidelity hemodialysis and advanced hemodiafiltration (HDF) services with compassionate patient monitoring.</p>
            </div>
        </div>
    </section>

    <!-- First HDF Service Banner -->
    <section class="py-12 px-4 bg-navy text-pure-white border-b border-white/5 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-84 h-84 bg-clinical-teal/10 blur-[80px] rounded-full"></div>
        <div class="max-w-[1280px] mx-auto flex flex-col lg:flex-row items-center justify-between gap-8 relative z-10">
            <div class="max-w-2xl">
                <span class="inline-block bg-clinical-teal text-pure-white text-[10px] font-bold tracking-widest uppercase px-3 py-1 rounded-full mb-3">Regional First</span>
                <h2 class="font-display font-bold text-2xl md:text-3xl mb-4">Pioneering Hemodiafiltration (HDF) Services</h2>
                <p class="font-sans text-xs md:text-sm text-slate-300 leading-relaxed">
                    AL-RASHEED Hospital & kidney center is proud to introduce Hemo-dia-filtration (HDF) services for the first time in the Abbottabad region. HDF is an advanced renal replacement therapy that combines diffusion and convection mechanisms, resulting in the superior clearance of middle-sized uremic molecules and significantly improved cardiovascular stability for patients during dialysis sessions.
                </p>
            </div>
            <div class="bg-white/5 border border-white/10 p-6 rounded-3xl shrink-0 w-full lg:w-80 text-center">
                <span class="material-symbols-outlined text-4xl text-clinical-teal mb-2">opacity</span>
                <p class="font-heading font-bold text-base mb-1">Advanced Renal Care</p>
                <p class="font-sans text-xs text-slate-400">Available 24/7 for acute renal cases</p>
            </div>
        </div>
    </section>

    <!-- Free Dialysis Section -->
    <section class="py-16 md:py-24 px-4 max-w-[1280px] mx-auto bg-background">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-7">
                <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-2.5 block">Social Responsibility</span>
                <h2 class="font-display font-bold text-3xl md:text-4xl text-navy mb-6">Free Dialysis Program: Care for Underprivileged</h2>
                <p class="font-sans text-base text-on-surface-variant mb-6 leading-relaxed">
                    At Al Rasheed Hospital, we believe that healthcare is a fundamental right, not a privilege. Under our specialized social welfare initiative, we provide completely free dialysis treatments to underprivileged and deserving renal patients.
                </p>
                <p class="font-sans text-base text-on-surface-variant mb-8 leading-relaxed">
                    Our Dialysis Center supports over **100+ registered patients every month**, carrying out free dialysis sessions. In 2025, Al Rasheed Hospital successfully delivered **1,368 free dialysis sessions**, ensuring vital, life-saving renal care reaches those who need it most in the Hazara division.
                </p>
                
                <div class="grid sm:grid-cols-2 gap-6">
                    <div class="flex items-start gap-3 p-4 bg-white rounded-2xl border border-slate-100 shadow-sm">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-xl">favorite</span>
                        </div>
                        <div>
                            <p class="font-display font-bold text-navy text-sm">100+ Patients / Month</p>
                            <p class="font-sans text-xs text-slate-500 font-semibold mt-0.5">Under Welfare Registry</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 p-4 bg-white rounded-2xl border border-slate-100 shadow-sm">
                        <div class="w-10 h-10 rounded-xl bg-clinical-teal/10 text-clinical-teal flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-xl">payments</span>
                        </div>
                        <div>
                            <p class="font-display font-bold text-navy text-sm">Zero Hidden Costs</p>
                            <p class="font-sans text-xs text-slate-500 font-semibold mt-0.5">Medicine & consumables included</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-5 bg-pure-white p-6 rounded-3xl shadow-lg border border-slate-100 text-center">
                <div class="w-16 h-16 rounded-2xl bg-red-50 text-primary flex items-center justify-center mb-6 mx-auto">
                    <span class="material-symbols-outlined text-3xl">volunteer_activism</span>
                </div>
                <h3 class="font-heading font-bold text-navy text-xl mb-4">Support Our Dialysis Fund</h3>
                <p class="font-sans text-xs md:text-sm text-on-surface-variant leading-relaxed mb-6">
                    Our free dialysis sessions are sponsored by philanthropic contributions. Help us extend renal care to more underprivileged families in Abbottabad.
                </p>
                <div class="p-4 bg-slate-50 rounded-2xl border border-dashed border-slate-200 text-left mb-6">
                    <p class="text-[10px] text-slate-500 uppercase font-bold tracking-wider mb-1">Administrative Contact</p>
                    <p class="font-heading font-extrabold text-navy text-sm">Welfare Department Desk</p>
                    <p class="font-sans text-xs text-on-surface-variant"><a href="tel:0992406982" class="hover:text-primary transition-colors">0992-406982</a> (Ext: 104)</p>
                </div>
                <a href="contact.php" class="w-full text-center block bg-primary hover:bg-primary-hover text-pure-white py-3 rounded-full font-heading text-xs font-bold transition-all shadow-md">Get Welfare Information</a>
            </div>
        </div>
    </section>

    <!-- Supervision Section -->
    <section class="py-20 px-4 bg-slate-50 border-t border-slate-100">
        <div class="max-w-[1280px] mx-auto">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <div class="lg:col-span-5 bg-pure-white p-3 rounded-3xl shadow-lg border border-slate-100">
                    <div class="h-80 rounded-2xl overflow-hidden bg-slate-200 flex items-center justify-center text-navy">
                        <span class="material-symbols-outlined text-7xl opacity-20">person</span>
                    </div>
                </div>
                
                <div class="lg:col-span-7">
                    <span class="text-clinical-teal font-heading font-extrabold tracking-widest uppercase text-xs mb-2.5 block">Clinical Oversight</span>
                    <h2 class="font-display font-bold text-2xl md:text-3xl text-navy mb-4">Under Expert Nephrological Supervision</h2>
                    <p class="font-sans text-sm md:text-base text-on-surface-variant leading-relaxed mb-6">
                        The Renal Dialysis Unit at Al Rasheed Hospital operates under the direct oversight of **Dr. Muhammad Usman Zia**, MBBS, FCPS (Nephrology), Head of the Nephrology Department (and consultant nephrologist physician at Jinnah International Hospital Abbottabad).
                    </p>
                    <p class="font-sans text-sm text-on-surface-variant leading-relaxed mb-6">
                        Under his guidance, our highly skilled dialysis technologists and critical care nurses enforce strict sterilization standards, dialyzer reuse protocols, and patient biochemical monitoring. This meticulous clinical oversight guarantees the highest safety, comfort, and survival outcomes.
                    </p>
                    
                    <div class="p-4 bg-white border border-slate-100 rounded-2xl shadow-sm flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-clinical-teal/10 text-clinical-teal flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined">medical_services</span>
                        </div>
                        <div>
                            <p class="font-heading font-bold text-navy text-sm">HCCR Compliance Audited</p>
                            <p class="font-sans text-xs text-slate-500 font-semibold mt-0.5">Meets Khyber Pakhtunkhwa Health Care Commission safety guidelines.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Offered Grid -->
    <section class="py-20 px-4 max-w-[1280px] mx-auto bg-background">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Our RDU Scope</span>
            <h2 class="font-display font-bold text-2xl md:text-3xl text-navy">Comprehensive Kidney Care</h2>
            <div class="w-12 h-1 bg-primary mx-auto rounded-full mt-4"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-sm text-center">
                <span class="material-symbols-outlined text-3xl text-clinical-teal mb-4">opacity</span>
                <h4 class="font-heading font-bold text-navy text-base mb-2">Standard Hemodialysis</h4>
                <p class="font-sans text-xs text-on-surface-variant leading-relaxed">High-flux dialysis with rigorous water purification standard. Available 24/7 for acute emergencies.</p>
            </div>
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-sm text-center">
                <span class="material-symbols-outlined text-3xl text-primary mb-4">filter_alt</span>
                <h4 class="font-heading font-bold text-navy text-base mb-2">Advanced HDF</h4>
                <p class="font-sans text-xs text-on-surface-variant leading-relaxed">Convective renal clearance (Hemo-dia-filtration), offering optimal molecular toxin removal and cardiac safety.</p>
            </div>
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-sm text-center">
                <span class="material-symbols-outlined text-3xl text-clinical-teal mb-4">person</span>
                <h4 class="font-heading font-bold text-navy text-base mb-2">Renal Consultations</h4>
                <p class="font-sans text-xs text-on-surface-variant leading-relaxed">Specialist consultation for diabetic nephropathy, hypertensive kidney damage, glomerulonephritis, and CKD.</p>
            </div>
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-sm text-center">
                <span class="material-symbols-outlined text-3xl text-primary mb-4">analytics</span>
                <h4 class="font-heading font-bold text-navy text-base mb-2">Kidney Monitoring</h4>
                <p class="font-sans text-xs text-on-surface-variant leading-relaxed">Biochemical monitoring including serum creatinine, urea clearance, electrolytes, and hemoglobin.</p>
            </div>
        </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="py-20 px-4 max-w-[1280px] mx-auto bg-background">
        <div class="bg-navy text-pure-white rounded-[2.5rem] p-8 md:p-12 text-center max-w-4xl mx-auto border border-white/5 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-80 h-80 bg-primary/10 blur-[80px] rounded-full"></div>
            <div class="relative z-10">
                <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-3 block">Take the First Step</span>
                <h3 class="font-display font-extrabold text-2xl md:text-3xl mb-4">Book a Kidney Health Consultation Today</h3>
                <p class="font-sans text-sm md:text-base text-slate-300 max-w-xl mx-auto mb-8">
                    Contact our outpatient department to schedule a renal consultation with Dr. Muhammad Usman Zia. Early detection is vital for preserving kidney function.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="appointment.php?dept=nephrology" class="bg-primary hover:bg-primary-hover text-pure-white px-8 py-3.5 rounded-full font-heading text-sm font-bold transition-all shadow-md">
                        Book Nephrology Appointment
                    </a>
                    <a href="contact.php" class="border border-white/20 hover:border-pure-white text-pure-white px-8 py-3.5 rounded-full font-heading text-sm font-bold transition-all">
                        Contact Renal Unit
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/include/footer.php'; ?>
