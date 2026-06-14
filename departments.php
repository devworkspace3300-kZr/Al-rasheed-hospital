<?php
require_once __DIR__ . '/include/site-config.php';
$pageTitle = 'Departments & Services | Al Rasheed Hospital & Kidney Center';
$pageDescription = 'Medical Departments and Services at Al Rasheed Hospital & Kidney Center, Abbottabad - Urology, Nephrology, Surgery, Orthopedics, and diagnostic procedures.';
$currentPage = 'departments';
include __DIR__ . '/include/head.php';
include __DIR__ . '/include/header.php';
?>

<main>
    <!-- Page Hero Banner -->
    <section class="relative h-[250px] md:h-[300px] w-full overflow-hidden bg-navy flex items-center">
        <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/60 to-transparent z-10"></div>
        <img class="absolute inset-0 w-full h-full object-cover" src="assets/hero_exterior.png" alt="Al Rasheed Departments Banner"/>
        <div class="relative z-20 px-6 md:px-12 max-w-[1280px] mx-auto w-full">
            <div class="max-w-2xl text-pure-white">
                <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Our Clinical Scope</span>
                <h1 class="font-display font-extrabold text-3xl md:text-5xl text-pure-white leading-tight tracking-tight mb-2">Departments & Medical Services</h1>
                <p class="font-sans text-sm md:text-base text-slate-300 max-w-lg leading-relaxed">Providing high-end specialized consulting, surgical procedures, and kidney care diagnostics under one roof in Abbottabad.</p>
            </div>
        </div>
    </section>

    <!-- Grid Section -->
    <section class="py-16 md:py-20 px-4 max-w-[1280px] mx-auto bg-background">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-clinical-teal font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Full Treatment Spectrum</span>
            <h2 class="font-display font-bold text-3xl text-navy">Our Specialized Clinical Centers</h2>
            <div class="w-12 h-1 bg-primary mx-auto rounded-full mt-4"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            
            <!-- Nephrology -->
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(13,33,55,0.02)] hover:shadow-[0_8px_30px_rgba(13,33,55,0.06)] hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                <div class="w-12 h-12 rounded-2xl bg-teal-50 text-clinical-teal flex items-center justify-center mb-6 group-hover:bg-clinical-teal group-hover:text-pure-white transition-colors duration-300">
                    <span class="material-symbols-outlined text-2xl">opacity</span>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Nephrology</h3>
                <p class="font-sans text-xs text-on-surface-variant leading-relaxed mb-4">Advanced renal care, kidney biopsy, pre/post transplant care, and regional first HDF dialysis.</p>
                <div class="mt-auto text-[11px] text-slate-500 font-semibold border-t pt-3 flex flex-wrap gap-2">
                    <span>Dr. Muhammad Usman Zia</span>
                </div>
            </div>

            <!-- Urology -->
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(13,33,55,0.02)] hover:shadow-[0_8px_30px_rgba(13,33,55,0.06)] hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                <div class="w-12 h-12 rounded-2xl bg-red-50 text-primary flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-pure-white transition-colors duration-300">
                    <span class="material-symbols-outlined text-2xl">medical_services</span>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Urology</h3>
                <p class="font-sans text-xs text-on-surface-variant leading-relaxed mb-4">Urinary tract surgeries, prostate treatment, kidney stone removal, lithotripsy, and male health.</p>
                <div class="mt-auto text-[11px] text-slate-500 font-semibold border-t pt-3 flex flex-wrap gap-2">
                    <span>Dr. Nasir Jamil</span>
                </div>
            </div>

            <!-- Gynecology & Obstetrics -->
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(13,33,55,0.02)] hover:shadow-[0_8px_30px_rgba(13,33,55,0.06)] hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                <div class="w-12 h-12 rounded-2xl bg-green-50 text-vitality-green flex items-center justify-center mb-6 group-hover:bg-vitality-green group-hover:text-pure-white transition-colors duration-300">
                    <span class="material-symbols-outlined text-2xl">child_care</span>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Gynecology & Obs</h3>
                <p class="font-sans text-xs text-on-surface-variant leading-relaxed mb-4">Safe deliveries, high-risk pregnancy management, fetal monitoring, and outpatient urogynae.</p>
                <div class="mt-auto text-[11px] text-slate-500 font-semibold border-t pt-3 flex flex-wrap gap-2">
                    <span>Dr. Rubina Bashir</span> • <span>Dr. Sadia Irum</span>
                </div>
            </div>

            <!-- Orthopedics -->
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(13,33,55,0.02)] hover:shadow-[0_8px_30px_rgba(13,33,55,0.06)] hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                <div class="w-12 h-12 rounded-2xl bg-red-50 text-primary flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-pure-white transition-colors duration-300">
                    <span class="material-symbols-outlined text-2xl">accessibility_new</span>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Orthopedics</h3>
                <p class="font-sans text-xs text-on-surface-variant leading-relaxed mb-4">Bone fractures, arthroplasty, joint replacements, spinal surgeries, and ligament reconstruction.</p>
                <div class="mt-auto text-[11px] text-slate-500 font-semibold border-t pt-3 flex flex-wrap gap-2">
                    <span>Dr. Syed Usman Shah</span>
                </div>
            </div>

            <!-- General Surgery -->
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(13,33,55,0.02)] hover:shadow-[0_8px_30px_rgba(13,33,55,0.06)] hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                <div class="w-12 h-12 rounded-2xl bg-slate-50 text-navy flex items-center justify-center mb-6 group-hover:bg-navy group-hover:text-pure-white transition-colors duration-300">
                    <span class="material-symbols-outlined text-2xl">medical_services</span>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">General Surgery</h3>
                <p class="font-sans text-xs text-on-surface-variant leading-relaxed mb-4">Operating complex open and laparoscopic surgeries in our 6 modular theatres.</p>
                <div class="mt-auto text-[11px] text-slate-500 font-semibold border-t pt-3 flex flex-wrap gap-2">
                    <span>Dr. Ismail Akbar</span> • <span>Dr. Uzair Arif</span>
                </div>
            </div>

            <!-- Hepatobiliary Surgery -->
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(13,33,55,0.02)] hover:shadow-[0_8px_30px_rgba(13,33,55,0.06)] hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                <div class="w-12 h-12 rounded-2xl bg-teal-50 text-clinical-teal flex items-center justify-center mb-6 group-hover:bg-clinical-teal group-hover:text-pure-white transition-colors duration-300">
                    <span class="material-symbols-outlined text-2xl">health_metrics</span>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Hepatobiliary Surgery</h3>
                <p class="font-sans text-xs text-on-surface-variant leading-relaxed mb-4">HPB surgery, gallstones, liver transplant preparations, pancreas treatments.</p>
                <div class="mt-auto text-[11px] text-slate-500 font-semibold border-t pt-3 flex flex-wrap gap-2">
                    <span>Dr. Nadir Farid</span> • <span>Dr. Siddique Khan</span>
                </div>
            </div>

            <!-- General Medicine -->
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(13,33,55,0.02)] hover:shadow-[0_8px_30px_rgba(13,33,55,0.06)] hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                <div class="w-12 h-12 rounded-2xl bg-slate-50 text-navy flex items-center justify-center mb-6 group-hover:bg-navy group-hover:text-pure-white transition-colors duration-300">
                    <span class="material-symbols-outlined text-2xl">stethoscope</span>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">General Medicine</h3>
                <p class="font-sans text-xs text-on-surface-variant leading-relaxed mb-4">Comprehensive management of chronic illness, metabolic disorders, diabetes, and hypertension.</p>
                <div class="mt-auto text-[11px] text-slate-500 font-semibold border-t pt-3 flex flex-wrap gap-2">
                    <span>Dr. Awais Faizi</span>
                </div>
            </div>

            <!-- Pediatrics -->
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(13,33,55,0.02)] hover:shadow-[0_8px_30px_rgba(13,33,55,0.06)] hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                <div class="w-12 h-12 rounded-2xl bg-green-50 text-vitality-green flex items-center justify-center mb-6 group-hover:bg-vitality-green group-hover:text-pure-white transition-colors duration-300">
                    <span class="material-symbols-outlined text-2xl">child_friendly</span>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Pediatrics</h3>
                <p class="font-sans text-xs text-on-surface-variant leading-relaxed mb-4">Comprehensive pediatric care, newborn illness management, vaccinations, neonatal care.</p>
                <div class="mt-auto text-[11px] text-slate-500 font-semibold border-t pt-3 flex flex-wrap gap-2">
                    <span>Dr. G. M. Marwat</span>
                </div>
            </div>

            <!-- Neurosurgery -->
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(13,33,55,0.02)] hover:shadow-[0_8px_30px_rgba(13,33,55,0.06)] hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                <div class="w-12 h-12 rounded-2xl bg-red-50 text-primary flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-pure-white transition-colors duration-300">
                    <span class="material-symbols-outlined text-2xl">psychology</span>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Neurosurgery</h3>
                <p class="font-sans text-xs text-on-surface-variant leading-relaxed mb-4">Surgical treatment of brain trauma, spinal tumors, spinal cord conditions, nervous system care.</p>
                <div class="mt-auto text-[11px] text-slate-500 font-semibold border-t pt-3 flex flex-wrap gap-2">
                    <span>Dr. Ibrahim Mushtaq</span>
                </div>
            </div>

            <!-- Dermatology -->
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(13,33,55,0.02)] hover:shadow-[0_8px_30px_rgba(13,33,55,0.06)] hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                <div class="w-12 h-12 rounded-2xl bg-green-50 text-vitality-green flex items-center justify-center mb-6 group-hover:bg-vitality-green group-hover:text-pure-white transition-colors duration-300">
                    <span class="material-symbols-outlined text-2xl">spa</span>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Dermatology</h3>
                <p class="font-sans text-xs text-on-surface-variant leading-relaxed mb-4">Diagnostics and laser therapy for skin allergies, hair fall, acne, and pigmentation.</p>
                <div class="mt-auto text-[11px] text-slate-500 font-semibold border-t pt-3 flex flex-wrap gap-2">
                    <span>Dr. Shapara Shakeel</span>
                </div>
            </div>

            <!-- Anesthesia -->
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(13,33,55,0.02)] hover:shadow-[0_8px_30px_rgba(13,33,55,0.06)] hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                <div class="w-12 h-12 rounded-2xl bg-slate-50 text-navy flex items-center justify-center mb-6 group-hover:bg-navy group-hover:text-pure-white transition-colors duration-300">
                    <span class="material-symbols-outlined text-2xl">vaccines</span>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Anesthesia</h3>
                <p class="font-sans text-xs text-on-surface-variant leading-relaxed mb-4">Professional pain management, local and general anesthesia for operating theatres.</p>
                <div class="mt-auto text-[11px] text-slate-500 font-semibold border-t pt-3 flex flex-wrap gap-2">
                    <span>Dr. Saqib</span>
                </div>
            </div>

            <!-- Physiotherapy -->
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(13,33,55,0.02)] hover:shadow-[0_8px_30px_rgba(13,33,55,0.06)] hover:-translate-y-1 transition-all duration-300 flex flex-col group">
                <div class="w-12 h-12 rounded-2xl bg-teal-50 text-clinical-teal flex items-center justify-center mb-6 group-hover:bg-clinical-teal group-hover:text-pure-white transition-colors duration-300">
                    <span class="material-symbols-outlined text-2xl">sports_accessibility</span>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Physiotherapy</h3>
                <p class="font-sans text-xs text-on-surface-variant leading-relaxed mb-4">Skeletal muscle rehabilitation, stroke recovery exercise, joint pain management.</p>
                <div class="mt-auto text-[11px] text-slate-500 font-semibold border-t pt-3 flex flex-wrap gap-2">
                    <span>Dr. Ghayyur</span>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Accordion Section: Detailed Procedures -->
    <section class="py-20 px-4 bg-slate-50 border-t border-slate-100">
        <div class="max-w-[800px] mx-auto">
            <div class="text-center mb-16">
                <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">In-Depth Guides</span>
                <h2 class="font-display font-bold text-2xl md:text-3xl text-navy">Departmental Procedures</h2>
                <div class="w-12 h-1 bg-primary mx-auto rounded-full mt-4"></div>
            </div>

            <div class="space-y-4">
                
                <!-- Nephrology Accordion -->
                <div class="bg-pure-white rounded-3xl border border-slate-100 overflow-hidden shadow-sm">
                    <button class="accordion-header w-full px-6 py-5 text-left flex justify-between items-center hover:bg-slate-50 transition-colors">
                        <span class="font-heading font-bold text-navy text-base md:text-lg flex items-center gap-2">
                            <span class="material-symbols-outlined text-clinical-teal">opacity</span> Nephrology & Kidney Care
                        </span>
                        <span class="material-symbols-outlined accordion-icon transition-transform">expand_more</span>
                    </button>
                    <div class="accordion-content px-6 pb-6 hidden border-t border-slate-100 pt-4">
                        <p class="font-sans text-sm text-on-surface-variant leading-relaxed mb-4">We are the first in Hazara division to offer Hemodiafiltration (HDF). Our renal services cover:</p>
                        <ul class="list-disc pl-5 text-xs md:text-sm text-on-surface-variant space-y-2 font-medium">
                            <li><strong>Hemo-dia-filtration (HDF):</strong> Superior uremic molecule clearance for kidney failure.</li>
                            <li><strong>Standard Hemodialysis:</strong> 24/7 dedicated renal care unit.</li>
                            <li><strong>Kidney Biopsy:</strong> Ultrasound-guided biopsy procedures performed in-house.</li>
                            <li><strong>Transplant Care:</strong> Comprehensive pre-operative & post-operative renal transplant consulting.</li>
                            <li><strong>Chronic Kidney Disease (CKD):</strong> Management of chronic renal failure.</li>
                        </ul>
                    </div>
                </div>

                <!-- Urology Accordion -->
                <div class="bg-pure-white rounded-3xl border border-slate-100 overflow-hidden shadow-sm">
                    <button class="accordion-header w-full px-6 py-5 text-left flex justify-between items-center hover:bg-slate-50 transition-colors">
                        <span class="font-heading font-bold text-navy text-base md:text-lg flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">medical_services</span> Urology & Male Health
                        </span>
                        <span class="material-symbols-outlined accordion-icon transition-transform">expand_more</span>
                    </button>
                    <div class="accordion-content px-6 pb-6 hidden border-t border-slate-100 pt-4">
                        <p class="font-sans text-sm text-on-surface-variant leading-relaxed mb-4">Supervised by Dr. Nasir Jamil, our surgical urology services cover:</p>
                        <ul class="list-disc pl-5 text-xs md:text-sm text-on-surface-variant space-y-2 font-medium">
                            <li><strong>Lithotripsy:</strong> Non-invasive kidney stone fragmentation.</li>
                            <li><strong>Prostate Resection (TURP):</strong> Endoscopic prostate tissue resection.</li>
                            <li><strong>Urethral Strictures:</strong> Advanced endoscopic urethrotomy.</li>
                            <li><strong>Kidney Stone Surgeries:</strong> Open & endoscopic PCNL procedures.</li>
                        </ul>
                    </div>
                </div>

                <!-- Surgery Accordion -->
                <div class="bg-pure-white rounded-3xl border border-slate-100 overflow-hidden shadow-sm">
                    <button class="accordion-header w-full px-6 py-5 text-left flex justify-between items-center hover:bg-slate-50 transition-colors">
                        <span class="font-heading font-bold text-navy text-base md:text-lg flex items-center gap-2">
                            <span class="material-symbols-outlined text-vitality-green">medical_services</span> General & Laparoscopic Surgery
                        </span>
                        <span class="material-symbols-outlined accordion-icon transition-transform">expand_more</span>
                    </button>
                    <div class="accordion-content px-6 pb-6 hidden border-t border-slate-100 pt-4">
                        <p class="font-sans text-sm text-on-surface-variant leading-relaxed mb-4">Operating across 6 state-of-the-art modular theaters, including:</p>
                        <ul class="list-disc pl-5 text-xs md:text-sm text-on-surface-variant space-y-2 font-medium">
                            <li><strong>Laparoscopic Cholecystectomy:</strong> Keyhole surgery for gallbladder removal.</li>
                            <li><strong>Hernia Repair:</strong> Laparoscopic and open mesh repair.</li>
                            <li><strong>Laser surgery:</strong> Modern laser treatments for piles/fistulas.</li>
                            <li><strong>Bariatric Weight Loss:</strong> Surgical obesity management by Dr. Uzair Arif.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Need Immediate Assistance CTA -->
    <section class="py-20 px-4 max-w-[1280px] mx-auto bg-background">
        <div class="bg-primary text-pure-white rounded-[2.5rem] p-8 md:p-12 text-center max-w-4xl mx-auto border border-primary/20 shadow-xl shadow-red-900/10">
            <span class="text-white/80 font-heading font-extrabold tracking-widest uppercase text-xs mb-3 block">Emergency Contact</span>
            <h3 class="font-display font-extrabold text-2xl md:text-3xl mb-4">Need Immediate Surgical or Renal Assistance?</h3>
            <p class="font-sans text-sm md:text-base text-white/85 max-w-xl mx-auto mb-8">
                Our surgical operating complexes and dialysis units are available 24/7. Call us directly to coordinate emergency ICU admission or surgery.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="appointment.php" class="bg-navy hover:bg-navy-light text-pure-white px-8 py-3.5 rounded-full font-heading text-sm font-bold transition-all shadow-md">
                    Schedule Appointment Online
                </a>
                <a href="tel:0992406982" class="border-2 border-white hover:bg-pure-white hover:text-primary text-pure-white px-8 py-3.5 rounded-full font-heading text-sm font-bold transition-all">
                    Call Main Desk: 0992-406982
                </a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/include/footer.php'; ?>
