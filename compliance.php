<?php
require_once __DIR__ . '/include/site-config.php';
$pageTitle = 'Regulatory Compliance | Al Rasheed Hospital & Kidney Center';
$pageDescription = 'Regulatory Compliance details for Al Rasheed Hospital & Kidney Center, Abbottabad - KP Health Care Commission registration HCCR 01-001353/26.';
$currentPage = 'compliance';
include __DIR__ . '/include/head.php';
include __DIR__ . '/include/header.php';
?>

<main>
    <!-- Page Hero Banner -->
    <section class="relative h-[250px] md:h-[300px] w-full overflow-hidden bg-navy flex items-center">
        <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/60 to-transparent z-10"></div>
        <img class="absolute inset-0 w-full h-full object-cover" src="assets/hero_exterior.png" alt="Al Rasheed Compliance Banner"/>
        <div class="relative z-20 px-6 md:px-12 max-w-[1280px] mx-auto w-full">
            <div class="max-w-2xl text-pure-white">
                <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Official Licensing</span>
                <h1 class="font-display font-extrabold text-3xl md:text-5xl text-pure-white leading-tight tracking-tight mb-2">Registration & Compliance</h1>
                <p class="font-sans text-sm md:text-base text-slate-300 max-w-lg leading-relaxed">KP Health Care Commission regulatory documents verifying clinical operations for Al Rasheed Hospital, Abbottabad.</p>
            </div>
        </div>
    </section>

    <!-- Certificate Cards Grid -->
    <section class="py-16 md:py-24 px-4 max-w-[1280px] mx-auto bg-background">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-clinical-teal font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">KP Health Care Commission (HCCR)</span>
            <h2 class="font-display font-bold text-3xl text-navy">Licensing Documents</h2>
            <div class="w-12 h-1 bg-primary mx-auto rounded-full mt-4"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            
            <!-- Card 1: Certificate of Registration -->
            <div class="bg-pure-white p-6 md:p-8 rounded-3xl border border-slate-150 shadow-sm flex flex-col justify-between relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-primary/5 rounded-full -mr-8 -mt-8"></div>
                <div>
                    <span class="text-[9px] bg-red-50 text-primary font-bold tracking-widest uppercase px-2.5 py-1.5 rounded-full mb-6 inline-block">Establishment Registry</span>
                    <h3 class="font-heading font-bold text-navy text-lg mb-4">Certificate of Registration</h3>
                    
                    <div class="space-y-3.5 text-xs text-on-surface-variant leading-relaxed">
                        <p><strong>Register No:</strong> HCCR 0388 2025</p>
                        <p><strong>Date of Issue:</strong> 06-Jan-2025</p>
                        <p><strong>Category:</strong> In-Patient Health Care Establishment — Hospital (100 to 299 beds)</p>
                        <p><strong>Sole Proprietor:</strong> Rasheed Ul Haq (NIC: 15501-60138632-1)</p>
                        <p><strong>Service Provider:</strong> Dr. Niaz Muhammad (NIC: 17301-0238801-9)</p>
                    </div>
                </div>
                <div class="border-t border-slate-100 pt-4 mt-6 text-[10px] text-slate-500 font-semibold uppercase tracking-wider">
                    KP Health Care Commission Registered
                </div>
            </div>

            <!-- Card 2: Provisional Licence -->
            <div class="bg-pure-white p-6 md:p-8 rounded-3xl border border-slate-150 shadow-sm flex flex-col justify-between relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-clinical-teal/5 rounded-full -mr-8 -mt-8"></div>
                <div>
                    <span class="text-[9px] bg-teal-50 text-clinical-teal font-bold tracking-widest uppercase px-2.5 py-1.5 rounded-full mb-6 inline-block">Provisional License</span>
                    <h3 class="font-heading font-bold text-navy text-lg mb-4">Provisional Licence</h3>
                    
                    <div class="space-y-3.5 text-xs text-on-surface-variant leading-relaxed">
                        <p><strong>Licence Code:</strong> PL-01-0148/25</p>
                        <p><strong>Registration Status:</strong> Provisional Licence Granted under Section 12 of the KP HCC Act, 2015</p>
                        <p><strong>Effective Period:</strong> April 24, 2025 through July 23, 2025</p>
                        <p><strong>Hospital Beds:</strong> Certified for In-Patient Services (100+ Bed Capacity)</p>
                    </div>
                </div>
                <div class="border-t border-slate-100 pt-4 mt-6 text-[10px] text-slate-500 font-semibold uppercase tracking-wider">
                    KP HCC Section 12 Compliant
                </div>
            </div>

            <!-- Card 3: Licence Appendix A -->
            <div class="bg-pure-white p-6 md:p-8 rounded-3xl border border-slate-150 shadow-sm flex flex-col justify-between relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-green-500/5 rounded-full -mr-8 -mt-8"></div>
                <div>
                    <span class="text-[9px] bg-green-50 text-vitality-green font-bold tracking-widest uppercase px-2.5 py-1.5 rounded-full mb-6 inline-block">Licence Appendix A</span>
                    <h3 class="font-heading font-bold text-navy text-lg mb-4">Appendix A - Licence Details</h3>
                    
                    <div class="space-y-3.5 text-xs text-on-surface-variant leading-relaxed">
                        <p><strong>Licence Reference:</strong> HCCR No. 01-00135/26</p>
                        <p><strong>Hospital Ownership:</strong> Sole Proprietor (Proprietor: Rasheed Ul Haq)</p>
                        <p><strong>Legal Status:</strong> Duly Licensed In-Patient Health Care Establishment under KP HCC Guidelines</p>
                        <p><strong>Location Audited:</strong> Abbottabad Premises</p>
                    </div>
                </div>
                <div class="border-t border-slate-100 pt-4 mt-6 text-[10px] text-slate-500 font-semibold uppercase tracking-wider">
                    Sole Proprietor Certified
                </div>
            </div>
            
        </div>
    </section>

    <!-- Detailed Compliance Statement -->
    <section class="py-20 px-4 bg-slate-50 border-t border-slate-100">
        <div class="max-w-[800px] mx-auto bg-pure-white p-8 md:p-12 rounded-[2.5rem] border border-slate-150 shadow-sm">
            <h3 class="font-heading font-bold text-navy text-2xl mb-6 text-center">Quality & Compliance Commitment</h3>
            <p class="font-sans text-sm md:text-base text-on-surface-variant leading-relaxed mb-6">
                AL-RASHEED Hospital & kidney center, Abbottabad, is fully committed to maintaining the highest standards of safety, quality, and clinical ethics in accordance with the Khyber Pakhtunkhwa Health Care Commission (KP HCC) Act, 2015.
            </p>
            <p class="font-sans text-sm md:text-base text-on-surface-variant leading-relaxed mb-8">
                Our clinical departments, urology theatres, laboratory diagnostics, and renal dialysis units undergo regular safety and sterility audits to ensure compliance with provincial medical regulations. We ensure that our medical staff, consultants, and technologies adhere to evidence-based practices, delivering patient-centered healthcare with empathy and integrity.
            </p>
            <div class="flex justify-center">
                <a href="contact.php" class="bg-primary hover:bg-primary-hover text-pure-white font-heading font-bold text-sm py-4 px-8 rounded-full transition-all shadow-md">
                    Contact Compliance Office
                </a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/include/footer.php'; ?>
