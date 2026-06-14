<?php require_once __DIR__ . '/site-config.php'; ?>
<footer class="bg-navy text-pure-white pt-12 sm:pt-16 pb-8 border-t border-white/5">
    <div class="max-w-[1280px] mx-auto px-4 md:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-12 mb-12">
            <div class="lg:col-span-4">
                <a href="index.php" class="flex items-center gap-3 mb-6">
                    <img src="assets/logo.jpeg" alt="Logo" class="h-10 w-10 rounded-full border border-white/20 shrink-0" />
                    <div class="flex flex-col min-w-0">
                        <span class="font-heading font-extrabold text-pure-white tracking-tight leading-tight text-sm sm:text-base"><?php echo SITE_NAME_LOGO; ?></span>
                        <span class="text-[10px] text-clinical-teal uppercase font-bold tracking-widest"><?php echo SITE_NAME_SUB; ?></span>
                    </div>
                </a>
                <p class="text-slate-400 text-sm leading-relaxed mb-6">
                    <?php echo SITE_NAME; ?> — providing specialized renal care and comprehensive medical services with a commitment to clinical excellence, patient safety, and empathy.
                </p>
                <div class="flex gap-3">
                    <a href="#" class="w-9 h-9 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary hover:text-pure-white transition-all text-slate-300" title="Facebook"><span class="material-symbols-outlined text-sm">face</span></a>
                    <a href="#" class="w-9 h-9 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary hover:text-pure-white transition-all text-slate-300" title="YouTube"><span class="material-symbols-outlined text-sm">video_library</span></a>
                    <a href="mailto:<?php echo SITE_EMAIL; ?>" class="w-9 h-9 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary hover:text-pure-white transition-all text-slate-300" title="Email"><span class="material-symbols-outlined text-sm">mail</span></a>
                    <a href="https://wa.me/92<?php echo ltrim(SITE_MOBILE_WHATSAPP, '0'); ?>" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-white/5 flex items-center justify-center hover:bg-green-600 hover:text-pure-white transition-all text-slate-300" title="WhatsApp"><span class="material-symbols-outlined text-sm">chat</span></a>
                </div>
            </div>

            <div class="lg:col-span-2">
                <h4 class="font-heading font-bold text-sm text-clinical-teal uppercase tracking-widest mb-6">Quick Links</h4>
                <ul class="space-y-3.5 text-slate-400 text-sm font-medium">
                    <li><a class="hover:text-pure-white transition-colors" href="index.php">Home</a></li>
                    <li><a class="hover:text-pure-white transition-colors" href="about.php">About Us</a></li>
                    <li><a class="hover:text-pure-white transition-colors" href="departments.php">Departments</a></li>
                    <li><a class="hover:text-pure-white transition-colors" href="doctors.php">Our Doctors</a></li>
                    <li><a class="hover:text-pure-white transition-colors" href="facilities.php">Facilities</a></li>
                </ul>
            </div>

            <div class="lg:col-span-3">
                <h4 class="font-heading font-bold text-sm text-clinical-teal uppercase tracking-widest mb-6">Key Specialties</h4>
                <ul class="space-y-3.5 text-slate-400 text-sm font-medium">
                    <li><a class="hover:text-pure-white transition-colors" href="kidney-care.php">Nephrology & Dialysis</a></li>
                    <li><a class="hover:text-pure-white transition-colors" href="departments.php">Urology Department</a></li>
                    <li><a class="hover:text-pure-white transition-colors" href="departments.php">General Surgery</a></li>
                    <li><a class="hover:text-pure-white transition-colors" href="facilities.php">Intensive Care Unit (ICU)</a></li>
                    <li><a class="hover:text-pure-white transition-colors" href="compliance.php">KP Health Commission</a></li>
                </ul>
            </div>

            <div class="lg:col-span-3">
                <h4 class="font-heading font-bold text-sm text-clinical-teal uppercase tracking-widest mb-6">Contact Details</h4>
                <p class="text-slate-400 text-sm leading-relaxed mb-3"><?php echo SITE_ADDRESS; ?></p>
                <ul class="space-y-2 text-slate-400 text-sm">
                    <li class="flex items-start gap-2">
                        <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">call</span>
                        <span><a href="tel:0992406982" class="hover:text-pure-white transition-colors"><?php echo SITE_PHONE_DISPLAY; ?></a></span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">phone_iphone</span>
                        <span>
                            <a href="tel:<?php echo SITE_MOBILE_WHATSAPP; ?>" class="hover:text-pure-white transition-colors"><?php echo SITE_MOBILE_DISPLAY; ?></a>
                            <span class="text-slate-500 text-xs block">Mobile / WhatsApp</span>
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">mail</span>
                        <a href="mailto:<?php echo SITE_EMAIL; ?>" class="hover:text-pure-white transition-colors break-all"><?php echo SITE_EMAIL; ?></a>
                    </li>
                </ul>
                <div class="mt-4 p-4 bg-white/5 rounded-2xl border border-white/5">
                    <p class="text-[10px] text-primary uppercase font-bold tracking-widest mb-1">24/7 Emergency Helpline</p>
                    <p class="font-heading font-bold text-pure-white text-base">
                        <a href="tel:<?php echo SITE_MOBILE_WHATSAPP; ?>"><?php echo SITE_MOBILE_DISPLAY; ?></a>
                    </p>
                </div>
            </div>
        </div>

        <div class="pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-4 text-center md:text-left text-xs text-slate-400">
            <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. Licensed by HCCR (No. <?php echo SITE_HCCR_LICENSE; ?>).</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a class="hover:text-pure-white transition-colors" href="compliance.php">HCCR Compliance</a>
                <span class="text-white/10 hidden sm:inline">|</span>
                <span class="text-clinical-teal font-semibold"><?php echo SITE_TAGLINE; ?></span>
            </div>
        </div>
    </div>
</footer>

<script src="script.js"></script>
</body>
</html>
