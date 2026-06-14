<?php
require_once __DIR__ . '/site-config.php';

if (!isset($pageTitle)) {
    $pageTitle = SITE_NAME . ' | ' . SITE_TAGLINE;
}
if (!isset($pageDescription)) {
    $pageDescription = SITE_NAME . ' - Providing premium specialized renal care, dialysis, surgery, and 24/7 emergency care with compassion.';
}
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>" />
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700;800&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="custom.css" />

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#af101a",
                        "primary-hover": "#8f0d15",
                        "clinical-teal": "#00897B",
                        "vitality-green": "#2E7D32",
                        "navy": "#0D2137",
                        "navy-light": "#193754",
                        "surface-gray": "#F5F7FA",
                        "background": "#f8f9ff",
                        "on-surface": "#081c32",
                        "on-surface-variant": "#4A5568",
                        "pure-white": "#FFFFFF"
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "3xl": "1.5rem",
                        "full": "9999px"
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"],
                        heading: ["Poppins", "sans-serif"],
                        display: ["Plus Jakarta Sans", "sans-serif"]
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-background text-on-surface font-sans overflow-x-hidden">
