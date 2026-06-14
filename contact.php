<?php
require_once __DIR__ . '/include/site-config.php';
$pageTitle = 'Contact Us | Al Rasheed Hospital & Kidney Center';
$pageDescription = 'Contact Al Rasheed Hospital & Kidney Center, Abbottabad - 24/7 hotline numbers, Mansehra Road location details, and online contact inquiry form.';
$currentPage = 'contact';
include __DIR__ . '/include/head.php';
include __DIR__ . '/include/header.php';
?>

<main>
    <!-- Page Hero Banner -->
    <section class="relative h-[250px] md:h-[300px] w-full overflow-hidden bg-navy flex items-center">
        <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/60 to-transparent z-10"></div>
        <img class="absolute inset-0 w-full h-full object-cover" src="assets/hero_exterior.png" alt="Al Rasheed Hospital Contact"/>
        <div class="relative z-20 px-6 md:px-12 max-w-[1280px] mx-auto w-full">
            <div class="max-w-2xl text-pure-white">
                <span class="text-primary font-heading font-extrabold tracking-widest uppercase text-xs mb-2 block">Reach Out</span>
                <h1 class="font-display font-extrabold text-3xl md:text-5xl text-pure-white leading-tight tracking-tight mb-2">Contact Us</h1>
                <p class="font-sans text-sm md:text-base text-slate-300 max-w-lg leading-relaxed">Have a question or looking to schedule a visit? Our help desk is available round-the-clock.</p>
            </div>
        </div>
    </section>

    <!-- Content Columns -->
    <section class="py-16 md:py-24 px-4 max-w-[1280px] mx-auto bg-background">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            
            <!-- Left Column: Contact info & Landmarks -->
            <div class="lg:col-span-5 space-y-6">
                <!-- Info card -->
                <div class="bg-pure-white p-6 md:p-8 rounded-3xl border border-slate-100 shadow-sm">
                    <h3 class="font-heading font-bold text-navy text-xl mb-6">Contact Channels</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-red-50 text-primary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined">pin_drop</span>
                            </div>
                            <div>
                                <p class="font-heading font-semibold text-navy text-sm">Our Location</p>
                                <p class="font-sans text-xs md:text-sm text-on-surface-variant mt-0.5 leading-relaxed">
                                    Main Mansehra Road, Opposite Gillani Mart, Kala Pull, Abbottabad, KP, Pakistan.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-teal-50 text-clinical-teal flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined">call</span>
                            </div>
                            <div>
                                <p class="font-heading font-semibold text-navy text-sm">Reception Landline</p>
                                <p class="font-sans text-xs md:text-sm text-on-surface-variant mt-0.5"><a href="tel:0992406982" class="hover:text-primary transition-colors">0992-406982, 406983</a></p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-green-50 text-vitality-green flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined">phone_iphone</span>
                            </div>
                            <div>
                                <p class="font-heading font-semibold text-navy text-sm">Mobile / WhatsApp</p>
                                <p class="font-sans text-xs md:text-sm text-on-surface-variant mt-0.5">
                                    <a href="tel:<?php echo SITE_MOBILE_WHATSAPP; ?>" class="hover:text-primary transition-colors"><?php echo SITE_MOBILE_DISPLAY; ?></a>
                                    <span class="mx-1 text-slate-300">|</span>
                                    <a href="https://wa.me/92<?php echo ltrim(SITE_MOBILE_WHATSAPP, '0'); ?>" target="_blank" rel="noopener noreferrer" class="hover:text-primary transition-colors">WhatsApp Chat</a>
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-slate-100 text-navy flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined">mail</span>
                            </div>
                            <div>
                                <p class="font-heading font-semibold text-navy text-sm">Email Mailbox</p>
                                <p class="font-sans text-xs md:text-sm text-on-surface-variant mt-0.5"><a href="mailto:alrasheedhospital24.7@gmail.com" class="hover:text-primary transition-colors">alrasheedhospital24.7@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Landmarks card -->
                <div class="bg-pure-white p-6 md:p-8 rounded-3xl border border-slate-100 shadow-sm relative overflow-hidden">
                    <h3 class="font-heading font-bold text-navy text-xl mb-4">Location Landmarks</h3>
                    <p class="font-sans text-xs text-on-surface-variant leading-relaxed mb-6">Al Rasheed Hospital is conveniently placed on Mansehra Road. Refer to these landmarks for easy navigation:</p>
                    
                    <div class="space-y-3 font-heading font-bold text-xs text-navy">
                        <div class="flex items-center gap-2 p-2 bg-slate-50 border border-slate-100 rounded-xl">
                            <span class="w-2 h-2 rounded-full bg-primary shrink-0"></span>
                            <span>Opposite Gillani Mart</span>
                        </div>
                        <div class="flex items-center gap-2 p-2 bg-slate-50 border border-slate-100 rounded-xl">
                            <span class="w-2 h-2 rounded-full bg-clinical-teal shrink-0"></span>
                            <span>At Kala Pull Bridge intersection</span>
                        </div>
                        <div class="flex items-center gap-2 p-2 bg-slate-50 border border-slate-100 rounded-xl">
                            <span class="w-2 h-2 rounded-full bg-vitality-green shrink-0"></span>
                            <span>Near Abbott College of Nursing</span>
                        </div>
                        <div class="flex items-center gap-2 p-2 bg-slate-50 border border-slate-100 rounded-xl">
                            <span class="w-2 h-2 rounded-full bg-navy shrink-0"></span>
                            <span>Al Rasheed Mosque (located on premises)</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column: Form -->
            <div class="lg:col-span-7 bg-pure-white p-6 md:p-10 rounded-3xl border border-slate-100 shadow-sm">
                <h3 class="font-heading font-bold text-navy text-xl mb-2">Leave an Inquiry</h3>
                <p class="font-sans text-xs md:text-sm text-on-surface-variant mb-6">Have operational or billing questions? Send a direct message to our hospital secretariat.</p>
                
                <form id="contact-form" class="space-y-4 font-heading font-semibold text-xs text-navy">
                    <div>
                        <label for="contact-name" class="block mb-2 text-slate-700">Full Name *</label>
                        <input type="text" id="contact-name" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-primary text-sm font-sans" placeholder="e.g. Muhammad Khan" required/>
                    </div>
                    
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label for="contact-phone" class="block mb-2 text-slate-700">Phone Number *</label>
                            <input type="tel" id="contact-phone" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-primary text-sm font-sans" placeholder="e.g. 0300-1234567" required/>
                        </div>
                        <div>
                            <label for="contact-email" class="block mb-2 text-slate-700">Email Address (Optional)</label>
                            <input type="email" id="contact-email" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-primary text-sm font-sans" placeholder="e.g. name@example.com"/>
                        </div>
                    </div>
                    
                    <div>
                        <label for="contact-dept" class="block mb-2 text-slate-700">Relevant Department</label>
                        <select id="contact-dept" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-primary text-sm font-sans">
                            <option value="general">General Administration</option>
                            <option value="nephrology">Nephrology & Dialysis</option>
                            <option value="urology">Urology Department</option>
                            <option value="finance">Billing & Accounts</option>
                            <option value="hr">Careers & HR</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="contact-msg" class="block mb-2 text-slate-700">Message Text *</label>
                        <textarea id="contact-msg" rows="4" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-primary text-sm font-sans" placeholder="Write your question here..." required></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-primary hover:bg-primary-hover text-pure-white text-sm font-bold py-4 rounded-xl transition-all shadow-md shadow-red-900/10 active:scale-95">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Google Map Full-Width Section -->
    <section class="h-[400px] w-full border-t border-slate-200 bg-slate-250 relative">
        <iframe class="w-full h-full border-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.473539828456!2d73.2359461!3d34.1843477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38de3f2b1d0337f7%3A0xe54ad8c1d5fa222b!2sGillani%20Mart!5e0!3m2!1sen!2spk!4v1700000000000!5m2!1sen!2spk" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Al Rasheed Hospital Location Map"></iframe>
    </section>
</main>

<?php include __DIR__ . '/include/footer.php'; ?>
