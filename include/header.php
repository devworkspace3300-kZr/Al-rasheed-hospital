<?php
if (!isset($currentPage)) {
    $currentPage = 'home';
}
require_once __DIR__ . '/site-config.php';
?>
<!-- Mobile Quick Contact Bar -->
<div class="bg-navy text-pure-white text-xs py-2 px-4 flex sm:hidden justify-between items-center border-b border-white/10 gap-2">
    <a href="tel:<?php echo SITE_MOBILE_WHATSAPP; ?>" class="flex items-center gap-1 min-w-0">
        <span class="material-symbols-outlined text-sm text-primary shrink-0">call</span>
        <span class="font-semibold truncate"><?php echo SITE_MOBILE_DISPLAY; ?></span>
    </a>
    <a href="https://wa.me/92<?php echo ltrim(SITE_MOBILE_WHATSAPP, '0'); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-1 shrink-0 text-green-300 hover:text-green-200 transition-colors">
        <span class="material-symbols-outlined text-sm">chat</span>
        <span class="font-semibold">WhatsApp</span>
    </a>
</div>

<!-- Topbar -->
<div class="bg-navy text-pure-white text-sm py-2.5 px-4 md:px-8 border-b border-white/10 hidden sm:block">
    <div class="max-w-[1280px] mx-auto flex flex-col md:flex-row justify-between items-center gap-2">
        <div class="flex flex-wrap items-center gap-4 lg:gap-6">
            <a href="tel:0992406982" class="flex items-center gap-1.5 hover:text-primary transition-colors">
                <span class="material-symbols-outlined text-sm text-primary">call</span>
                <span><?php echo SITE_PHONE_DISPLAY; ?></span>
            </a>
            <a href="tel:<?php echo SITE_MOBILE_WHATSAPP; ?>" class="flex items-center gap-1.5 hover:text-primary transition-colors">
                <span class="material-symbols-outlined text-sm text-primary">phone_iphone</span>
                <span><?php echo SITE_MOBILE_DISPLAY; ?> (Mobile / WhatsApp)</span>
            </a>
            <a href="mailto:<?php echo SITE_EMAIL; ?>" class="flex items-center gap-1.5 hover:text-primary transition-colors">
                <span class="material-symbols-outlined text-sm text-primary">mail</span>
                <span class="truncate max-w-[220px] lg:max-w-none"><?php echo SITE_EMAIL; ?></span>
            </a>
        </div>
        <div class="flex items-center gap-4">
            <span class="text-xs text-slate-400 border-r border-white/20 pr-4">HCCR License: <?php echo SITE_HCCR_LICENSE; ?></span>
            <div class="flex gap-3">
                <a href="#" class="hover:text-primary transition-colors" title="Facebook"><span class="material-symbols-outlined text-base">face</span></a>
                <a href="#" class="hover:text-primary transition-colors" title="YouTube"><span class="material-symbols-outlined text-base">video_library</span></a>
                <a href="https://wa.me/92<?php echo ltrim(SITE_MOBILE_WHATSAPP, '0'); ?>" target="_blank" rel="noopener noreferrer" class="hover:text-primary transition-colors" title="WhatsApp"><span class="material-symbols-outlined text-base">chat</span></a>
            </div>
        </div>
    </div>
</div>

<!-- Sticky Navbar -->
<header class="sticky top-0 w-full z-50 shadow-[0_2px_16px_rgba(13,33,55,0.08)] bg-pure-white transition-all duration-300">
    <nav class="flex justify-between items-center w-full px-3 sm:px-4 lg:px-6 xl:px-8 py-2.5 sm:py-3 max-w-[1280px] mx-auto transition-all duration-300">
        <a href="index.php" class="flex items-center gap-2 sm:gap-2.5 group shrink min-w-0 max-w-[55%] sm:max-w-none">
            <img src="assets/logo.jpeg" alt="<?php echo SITE_NAME; ?> Logo"
                class="h-9 w-9 sm:h-11 sm:w-11 rounded-full object-cover border-2 border-primary/20 group-hover:scale-105 transition-transform duration-300 shrink-0" />
            <div class="flex flex-col min-w-0">
                <span class="font-heading font-extrabold text-navy leading-tight text-xs sm:text-sm lg:text-base tracking-tight group-hover:text-primary transition-colors truncate"><?php echo SITE_NAME_LOGO; ?></span>
                <span class="font-sans text-[9px] sm:text-[10px] font-semibold text-clinical-teal tracking-widest uppercase truncate"><?php echo SITE_NAME_SUB; ?></span>
            </div>
        </a>

        <div class="hidden lg:flex items-center gap-3 xl:gap-5 font-heading text-[12.5px] xl:text-sm font-semibold text-navy flex-nowrap">
            <?php foreach ($navItems as $slug => $item): ?>
            <a class="<?php echo nav_link_class($slug, $currentPage, 'desktop'); ?>" href="<?php echo $item['url']; ?>"><?php echo $item['label']; ?></a>
            <?php endforeach; ?>
        </div>

        <div class="flex items-center gap-2 sm:gap-3 shrink-0">
            <a href="appointment.php"
                class="hidden lg:inline-block bg-primary hover:bg-primary-hover text-pure-white px-4 xl:px-6 py-2 xl:py-2.5 rounded-full font-heading text-xs xl:text-sm font-semibold active:scale-95 transition-all shadow-[0_4px_12px_rgba(175,16,26,0.25)] whitespace-nowrap">
                Book Appointment
            </a>
            <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-lg text-navy hover:bg-slate-100 transition-colors" title="Menu" aria-label="Open menu">
                <span class="material-symbols-outlined text-3xl">menu</span>
            </button>
        </div>
    </nav>
</header>

<!-- Mobile Navigation Drawer -->
<div id="mobile-menu-drawer" class="fixed inset-0 z-[999] bg-navy/60 backdrop-blur-sm flex justify-end translate-x-full transition-transform duration-300 lg:hidden">
    <div class="w-[85%] max-w-sm bg-pure-white h-full p-5 sm:p-6 shadow-2xl flex flex-col justify-between overflow-y-auto">
        <div>
            <div class="flex justify-between items-center mb-6 sm:mb-8 pb-4 border-b">
                <div class="flex items-center gap-2 min-w-0">
                    <img src="assets/logo.jpeg" alt="Logo" class="h-10 w-10 rounded-full shrink-0" />
                    <span class="font-heading font-bold text-navy text-xs sm:text-sm leading-tight"><?php echo SITE_NAME_LOGO; ?></span>
                </div>
                <button id="mobile-menu-close-btn" class="text-navy p-1 hover:bg-slate-100 rounded-full shrink-0" aria-label="Close menu">
                    <span class="material-symbols-outlined text-3xl">close</span>
                </button>
            </div>

            <div class="flex flex-col gap-3 sm:gap-4 font-heading text-sm sm:text-base font-semibold text-navy">
                <?php foreach ($navItems as $slug => $item): ?>
                <a class="<?php echo nav_link_class($slug, $currentPage, 'mobile'); ?>" href="<?php echo $item['url']; ?>">
                    <span><?php echo $item['label']; ?></span>
                    <span class="material-symbols-outlined <?php echo $slug === $currentPage ? '' : 'text-slate-400'; ?>">chevron_right</span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="mt-auto pt-6 border-t">
            <a href="appointment.php" class="w-full text-center block bg-primary hover:bg-primary-hover text-pure-white py-3 rounded-xl font-heading font-semibold transition-colors shadow-lg">
                Book Appointment
            </a>
            <div class="mt-4 text-center text-xs text-on-surface-variant font-medium space-y-1">
                <p>Emergency / WhatsApp:</p>
                <a href="tel:<?php echo SITE_MOBILE_WHATSAPP; ?>" class="text-primary font-bold text-sm block"><?php echo SITE_MOBILE_DISPLAY; ?></a>
                <a href="tel:0992406982" class="text-navy font-semibold text-xs block"><?php echo SITE_PHONE_DISPLAY; ?></a>
            </div>
        </div>
    </div>
</div>
