<?php
require_once __DIR__ . '/include/site-config.php';
$pageTitle = 'Book Appointment | Al Rasheed Hospital & Kidney Center';
$pageDescription = 'Book an Appointment at Al Rasheed Hospital & Kidney Center, Abbottabad - Schedule consultations with our specialist consultants online.';
$currentPage = 'appointment';
include __DIR__ . '/include/head.php';
include __DIR__ . '/include/header.php';
?>

<main>
    <!-- Emergency banner -->
    <div class="bg-primary text-pure-white text-xs md:text-sm font-heading font-extrabold py-3.5 px-4 text-center tracking-wider shadow-inner">
        <div class="max-w-[1280px] mx-auto flex flex-wrap justify-center items-center gap-x-6 gap-y-1">
            <span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-base animate-pulse">warning</span> MEDICAL EMERGENCY ACTION DETECTED:</span>
            <span class="flex items-center gap-3">
                <a href="tel:0992406982" class="underline hover:text-navy transition-colors">Call Landline: 0992-406982</a>
                <span>|</span>
                <a href="tel:03177338830" class="underline hover:text-navy transition-colors">Call Mobile: 03177338830</a>
            </span>
        </div>
    </div>

    <!-- Booking form section -->
    <section class="py-16 md:py-24 px-4 max-w-[1280px] mx-auto bg-background">
        <div class="max-w-2xl mx-auto">
            <div class="text-center mb-10">
                <span class="text-clinical-teal font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Outpatient Department</span>
                <h1 class="font-display font-extrabold text-3xl text-navy">Schedule Consultation</h1>
                <div class="w-12 h-1 bg-primary mx-auto rounded-full mt-4"></div>
            </div>
            
            <div class="bg-pure-white p-6 md:p-10 rounded-3xl border border-slate-100 shadow-xl">
                <form id="appointment-form" class="space-y-5 font-heading font-semibold text-xs text-navy">
                    <div>
                        <label for="booking-name" class="block mb-2 text-slate-700">Patient Full Name *</label>
                        <input type="text" id="booking-name" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-primary text-sm font-sans" placeholder="e.g. Saleem Jahangir" required/>
                    </div>
                    
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label for="booking-phone" class="block mb-2 text-slate-700">Phone Number *</label>
                            <input type="tel" id="booking-phone" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-primary text-sm font-sans" placeholder="e.g. 0312-3456789" required/>
                        </div>
                        <div>
                            <label for="booking-email" class="block mb-2 text-slate-700">Email Address (Optional)</label>
                            <input type="email" id="booking-email" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-primary text-sm font-sans" placeholder="e.g. saleem@example.com"/>
                        </div>
                    </div>
                    
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label for="booking-dept" class="block mb-2 text-slate-700">Medical Department *</label>
                            <select id="booking-dept" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-primary text-sm font-sans" required>
                                <option value="">Select Department</option>
                                <option value="nephrology">Nephrology & Dialysis</option>
                                <option value="urology">Urology</option>
                                <option value="gynecology">Gynecology & Obstetrics</option>
                                <option value="orthopedics">Orthopedics</option>
                                <option value="surgery">General Surgery</option>
                                <option value="hepatobiliary">Hepatobiliary Surgery</option>
                                <option value="medicine">General Medicine</option>
                                <option value="pediatrics">Pediatrics</option>
                                <option value="neurosurgery">Neurosurgery</option>
                                <option value="dermatology">Dermatology</option>
                                <option value="physiotherapy">Physiotherapy</option>
                            </select>
                        </div>
                        <div>
                            <label for="booking-doctor" class="block mb-2 text-slate-700">Preferred Specialist *</label>
                            <select id="booking-doctor" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-primary text-sm font-sans" required>
                                <option value="">Select Department First</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label for="booking-date" class="block mb-2 text-slate-700">Preferred Date *</label>
                            <input type="date" id="booking-date" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-primary text-sm font-sans" required/>
                        </div>
                        <div>
                            <label for="booking-slot" class="block mb-2 text-slate-700">Preferred Time Slot *</label>
                            <select id="booking-slot" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-primary text-sm font-sans" required>
                                <option value="morning">Morning (09:00 AM - 01:00 PM)</option>
                                <option value="afternoon">Afternoon (02:00 PM - 05:00 PM)</option>
                                <option value="evening">Evening (06:00 PM - 09:00 PM)</option>
                            </select>
                        </div>
                    </div>
                    
                    <div>
                        <label for="booking-notes" class="block mb-2 text-slate-700">Symptoms or Special Requests (Optional)</label>
                        <textarea id="booking-notes" rows="3" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-primary text-sm font-sans" placeholder="Describe clinical symptoms briefly..."></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-primary hover:bg-primary-hover text-pure-white text-sm font-bold py-4 rounded-xl transition-all shadow-md shadow-red-900/10 active:scale-95">
                        Confirm Appointment Booking
                    </button>
                    
                    <p class="text-[11px] text-slate-500 font-medium text-center mt-3">
                        * Submission registers a booking slot. A receptionist will call your number to finalize timing details.
                    </p>
                </form>
            </div>
        </div>
    </section>

    <!-- Alternative contact cards -->
    <section class="py-12 px-4 max-w-[1280px] mx-auto bg-background border-t border-slate-100">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-sm text-center">
                <span class="material-symbols-outlined text-3xl text-primary mb-3">call</span>
                <p class="font-heading font-bold text-navy text-sm">Call Direct Lines</p>
                <p class="font-sans text-xs text-on-surface-variant mt-1">Talk immediately to OPD reception:</p>
                <p class="font-heading font-extrabold text-xs text-primary mt-2">0992-406982</p>
            </div>
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-sm text-center">
                <span class="material-symbols-outlined text-3xl text-clinical-teal mb-3">chat_bubble</span>
                <p class="font-heading font-bold text-navy text-sm">WhatsApp Assistance</p>
                <p class="font-sans text-xs text-on-surface-variant mt-1">Coordinate booking via mobile text:</p>
                <p class="font-heading font-extrabold text-xs text-clinical-teal mt-2">03177338830</p>
            </div>
            <div class="bg-pure-white p-6 rounded-3xl border border-slate-100 shadow-sm text-center">
                <span class="material-symbols-outlined text-3xl text-vitality-green mb-3">pin_drop</span>
                <p class="font-heading font-bold text-navy text-sm">Walk-In Triage</p>
                <p class="font-sans text-xs text-on-surface-variant mt-1">Visit directly on Mansehra Road:</p>
                <p class="font-heading font-extrabold text-xs text-vitality-green mt-2">24/7 Emergency Counter</p>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/include/footer.php'; ?>
