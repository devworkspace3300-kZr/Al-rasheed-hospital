<?php
/**
 * Al-RASHEED Hospital site-wide constants
 */

define('SITE_NAME', 'AL-RASHEED Hospital & kidney center');
define('SITE_NAME_LOGO', 'AL-RASHEED Hospital');
define('SITE_NAME_SUB', '& kidney center • Abbottabad');
define('SITE_TAGLINE', 'Care with Compassion');
define('SITE_EMAIL', 'alrasheedhospital24.7@gmail.com');
define('SITE_PHONE_PRIMARY', '0992-406982');
define('SITE_PHONE_SECONDARY', '406983');
define('SITE_PHONE_DISPLAY', '0992-406982, 406983');
define('SITE_MOBILE_WHATSAPP', '03177338830');
define('SITE_MOBILE_DISPLAY', '03177338830');
define('SITE_ADDRESS', 'Main Mansehra Road, Kala Pull, Abbottabad, Pakistan');
define('SITE_HCCR_LICENSE', '01-001353/26');

$navItems = [
    'home'         => ['label' => 'Home',         'url' => 'index.php'],
    'about'        => ['label' => 'About Us',     'url' => 'about.php'],
    'departments'  => ['label' => 'Departments',  'url' => 'departments.php'],
    'doctors'      => ['label' => 'Doctors',      'url' => 'doctors.php'],
    'facilities'   => ['label' => 'Facilities',   'url' => 'facilities.php'],
    'kidney-care'  => ['label' => 'Kidney Care',  'url' => 'kidney-care.php'],
    'gallery'      => ['label' => 'Gallery',      'url' => 'gallery.php'],
    'compliance'   => ['label' => 'Compliance',   'url' => 'compliance.php'],
    'contact'      => ['label' => 'Contact',      'url' => 'contact.php'],
];

if (!function_exists('nav_link_class')) {
    function nav_link_class(string $page, string $currentPage, string $type = 'desktop'): string
    {
        $isActive = $page === $currentPage;

        if ($type === 'desktop') {
            return $isActive
                ? 'text-primary border-b-2 border-primary pb-0.5 transition-colors duration-200 whitespace-nowrap'
                : 'text-on-surface-variant hover:text-primary transition-colors duration-200 whitespace-nowrap';
        }

        return $isActive
            ? 'text-primary bg-primary/5 px-4 py-2.5 rounded-xl flex items-center justify-between'
            : 'hover:text-primary px-4 py-2.5 rounded-xl flex items-center justify-between transition-colors';
    }
}
