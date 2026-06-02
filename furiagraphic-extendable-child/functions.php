<?php
defined('ABSPATH') || exit;

/**
 * FuriaGraphic child theme core.
 * Clean routing, SEO and assets for the public website.
 */

function fg_theme_file_version($relative_path) {
    $path = get_stylesheet_directory() . '/' . ltrim($relative_path, '/');
    return file_exists($path) ? filemtime($path) : wp_get_theme()->get('Version');
}

function fg_enqueue_theme_style($handle, $file, $deps = []) {
    $relative = 'assets/css/' . ltrim($file, '/');
    $path = get_stylesheet_directory() . '/' . $relative;

    if (!file_exists($path)) {
        return;
    }

    wp_enqueue_style(
        $handle,
        get_stylesheet_directory_uri() . '/' . $relative,
        $deps,
        fg_theme_file_version($relative)
    );
}

function fg_asset($file) {
    return esc_url(get_stylesheet_directory_uri() . '/assets/images/' . ltrim($file, '/'));
}

function fg_webp_image_url($image_url) {
    $base_uri = trailingslashit(get_stylesheet_directory_uri()) . 'assets/images/';

    if (strpos($image_url, $base_uri) !== 0) {
        return '';
    }

    $relative = substr($image_url, strlen($base_uri));
    $webp_relative = preg_replace('/\.(png|jpe?g)$/i', '.webp', $relative);

    if (!$webp_relative || $webp_relative === $relative) {
        return '';
    }

    $webp_path = trailingslashit(get_stylesheet_directory()) . 'assets/images/' . $webp_relative;
    if (!file_exists($webp_path)) {
        return '';
    }

    return $base_uri . $webp_relative;
}

function fg_request_path() {
    $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    $path = is_string($path) && $path !== '' ? $path : '/';
    return trim($path, '/');
}

function fg_normalize_path($path) {
    return trim((string) $path, '/');
}

function fg_service_categories() {
    return [
        'graphic-design' => [
            'label_it' => 'Branding & Graphic design',
            'label_en' => 'Branding & Graphic design',
            'menu_it' => 'Graphic design',
            'menu_en' => 'Graphic design',
            'title_it' => 'Branding e grafiche coordinate per un’identità più solida',
            'title_en' => 'Branding, logos and coordinated graphics that make everything feel stronger',
            'short_it' => 'Logo, identità visiva, grafiche social e materiali coordinati con una direzione chiara.',
            'short_en' => 'Logos, visual identity, social graphics and coordinated assets with a clear direction.',
            'url' => '/servizi/graphic-design/',
            'contact_category' => 'branding',
        ],
        'web-design' => [
            'label_it' => 'Web design',
            'label_en' => 'Web design',
            'menu_it' => 'Web design',
            'menu_en' => 'Web design',
            'title_it' => 'Siti web chiari, curati e orientati al contatto',
            'title_en' => 'Websites, landing pages and redesigns with clear structure and a premium look',
            'short_it' => 'Siti vetrina, landing page e restyling responsive pensati per spiegare, convincere e generare contatti.',
            'short_en' => 'Showcase websites, landing pages and responsive redesigns built to explain better, build trust and make enquiry easier.',
            'url' => '/servizi/web-design/',
            'contact_category' => 'web-design',
        ],
        'streaming-pack' => [
            'label_it' => 'Streaming pack',
            'label_en' => 'Streaming pack',
            'menu_it' => 'Streaming pack',
            'menu_en' => 'Streaming pack',
            'title_it' => 'Overlay e grafiche per live più riconoscibili',
            'title_en' => 'Overlays, panels and stream screens for more recognizable live content',
            'short_it' => 'Asset coordinati per Twitch, YouTube e creator che vogliono una live più pulita, personale e riconoscibile senza caos visivo.',
            'short_en' => 'Coordinated assets for Twitch, YouTube and creators who want a cleaner, more personal and recognizable stream without visual clutter.',
            'url' => '/servizi/streaming-pack/',
            'contact_category' => 'streaming',
        ],
    ];
}

function fg_service_category_slug_from_request() {
    $path = fg_request_path();

    if (preg_match('#^servizi/(graphic-design|web-design|streaming-pack)/?$#', $path, $matches)) {
        return $matches[1];
    }

    $query_slug = get_query_var('fg_service_category');
    if (is_string($query_slug) && isset(fg_service_categories()[$query_slug])) {
        return $query_slug;
    }

    return '';
}

function fg_is_service_category_request() {
    return fg_service_category_slug_from_request() !== '';
}

function fg_service_category_url($slug) {
    $categories = fg_service_categories();
    $path = isset($categories[$slug]) ? $categories[$slug]['url'] : '/servizi/graphic-design/';
    return fg_url($path);
}

function fg_contact_category_url($category, $service = '') {
    $args = ['categoria' => sanitize_key($category)];
    $service = sanitize_key($service);

    if ($service !== '') {
        $args['servizio'] = $service;
    }

    return add_query_arg($args, fg_url('/contatti/')) . '#fg-project-form';
}

function fg_contact_category_from_request() {
    $raw = isset($_GET['categoria']) ? sanitize_key(wp_unslash($_GET['categoria'])) : '';
    $aliases = [
        'graphic-design' => 'branding',
        'branding' => 'branding',
        'brand' => 'branding',
        'logo' => 'branding',
        'web-design' => 'web-design',
        'web' => 'web-design',
        'sito' => 'web-design',
        'siti-web' => 'web-design',
        'streaming-pack' => 'streaming',
        'streaming' => 'streaming',
        'stream' => 'streaming',
    ];

    return $aliases[$raw] ?? '';
}

function fg_retired_service_page_redirects() {
    return [
        'logo-design-personalizzato' => '/servizi/graphic-design/',
        'brand-identity-creator-attivita' => '/servizi/graphic-design/',
        'graphic-design-freelance' => '/servizi/graphic-design/',
        'servizi-graphic-design' => '/servizi/graphic-design/',
        'siti-web-personalizzati' => '/servizi/web-design/',
        'servizi-web-design' => '/servizi/web-design/',
        'grafiche-twitch-personalizzate' => '/servizi/streaming-pack/',
        'overlay-twitch-personalizzati' => '/servizi/streaming-pack/',
        'servizi-streaming-pack' => '/servizi/streaming-pack/',
        'servizi' => '/servizi/graphic-design/',
        'services' => '/servizi/graphic-design/',
    ];
}

function fg_static_page_templates() {
    return [
        'portfolio' => 'page-portfolio.php',
        'chi-siamo' => 'page-chi-siamo.php',
        'contatti' => 'page-contatti.php',
        'privacy-policy' => 'page-privacy-policy.php',
        'cookie-policy' => 'page-cookie-policy.php',
        'termini-di-servizio' => 'page-termini-di-servizio.php',
        'termini-e-condizioni' => 'page-termini-e-condizioni.php',
    ];
}

function fg_virtual_page_key_from_request() {
    $query_page = get_query_var('fg_virtual_page');
    $templates = fg_static_page_templates();

    if (is_string($query_page) && isset($templates[$query_page])) {
        return $query_page;
    }

    $path = fg_request_path();
    return isset($templates[$path]) ? $path : '';
}

function fg_is_virtual_page($key) {
    return fg_virtual_page_key_from_request() === $key;
}

function fg_is_portfolio_area() {
    return is_page('portfolio') || fg_is_virtual_page('portfolio');
}

function fg_is_services_area() {
    return fg_is_service_category_request();
}

function fg_mark_virtual_page_as_found() {
    global $wp_query;

    if (!$wp_query) {
        return;
    }

    $wp_query->is_404 = false;
    $wp_query->is_page = true;
    $wp_query->is_singular = true;
    $wp_query->is_home = false;
    $wp_query->is_archive = false;
    status_header(200);
}

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'fg-child-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap',
        [],
        null
    );

    fg_enqueue_theme_style('fg-global-style', 'global.css', ['extendable-style', 'fg-child-google-fonts']);

    if (is_front_page()) {
        fg_enqueue_theme_style('fg-front-page-style', 'front-page.css', ['fg-global-style']);
    }

    if (fg_is_services_area() || is_page_template('page-servizi.php')) {
        fg_enqueue_theme_style('fg-servizi-style', 'servizi.css', ['fg-global-style']);
    }

    if (fg_is_portfolio_area() || is_page_template('page-portfolio.php')) {
        fg_enqueue_theme_style('fg-portfolio-style', 'portfolio.css', ['fg-global-style']);
    }

    if (is_page(['chi-siamo', 'about']) || fg_is_virtual_page('chi-siamo') || is_page_template('page-chi-siamo.php')) {
        fg_enqueue_theme_style('fg-chi-style', 'chi-siamo.css', ['fg-global-style']);
    }

    if (is_page(['contatti', 'contact']) || fg_is_virtual_page('contatti') || is_page_template('page-contatti.php')) {
        fg_enqueue_theme_style('fg-contatti-style', 'contatti.css', ['fg-global-style']);
    }

    $script_path = get_stylesheet_directory() . '/assets/js/theme.js';
    if (file_exists($script_path)) {
        wp_enqueue_script(
            'fg-child-script',
            get_stylesheet_directory_uri() . '/assets/js/theme.js',
            [],
            fg_theme_file_version('assets/js/theme.js'),
            true
        );
    }
});

add_action('after_setup_theme', function () {
    register_nav_menus([
        'primary' => 'Menu principale FuriaGraphic',
    ]);
});

add_action('template_redirect', function () {
    if (is_admin() || wp_doing_ajax()) {
        return;
    }

    $path = fg_request_path();
    foreach (fg_retired_service_page_redirects() as $old_slug => $target_path) {
        if ($path === fg_normalize_path($old_slug) || is_page($old_slug)) {
            wp_safe_redirect(fg_url($target_path), 301);
            exit;
        }
    }
}, 1);

add_action('init', function () {
    add_rewrite_rule('^servizi/(graphic-design|web-design|streaming-pack)/?$', 'index.php?fg_service_category=$matches[1]', 'top');
    add_rewrite_rule('^(portfolio|chi-siamo|contatti|privacy-policy|cookie-policy|termini-di-servizio|termini-e-condizioni)/?$', 'index.php?fg_virtual_page=$matches[1]', 'top');
});

add_filter('query_vars', function ($vars) {
    $vars[] = 'fg_service_category';
    $vars[] = 'fg_virtual_page';
    return $vars;
});

add_filter('template_include', function ($template) {
    if (fg_is_service_category_request()) {
        fg_mark_virtual_page_as_found();
        return get_stylesheet_directory() . '/page-servizi-categoria.php';
    }

    $virtual_page = fg_virtual_page_key_from_request();
    $templates = fg_static_page_templates();

    if ($virtual_page && isset($templates[$virtual_page])) {
        $candidate = get_stylesheet_directory() . '/' . $templates[$virtual_page];
        if (file_exists($candidate)) {
            fg_mark_virtual_page_as_found();
            return $candidate;
        }
    }

    return $template;
});

add_action('after_switch_theme', function () {
    flush_rewrite_rules(false);
});

add_action('init', function () {
    $version = '20260525_services_no_overview_v2';
    if (get_option('fg_clean_routes_version') !== $version) {
        flush_rewrite_rules(false);
        update_option('fg_clean_routes_version', $version, false);
    }
}, 20);

function fg_retired_service_page_ids() {
    $ids = [];
    foreach (array_keys(fg_retired_service_page_redirects()) as $slug) {
        $page = get_page_by_path($slug, OBJECT, 'page');
        if ($page instanceof WP_Post) {
            $ids[] = (int) $page->ID;
        }
    }
    return array_values(array_unique(array_filter($ids)));
}

add_filter('wp_sitemaps_posts_query_args', function ($args, $post_type) {
    if ($post_type !== 'page') {
        return $args;
    }

    $retired_ids = fg_retired_service_page_ids();
    if (!empty($retired_ids)) {
        $args['post__not_in'] = array_values(array_unique(array_merge($args['post__not_in'] ?? [], $retired_ids)));
    }

    return $args;
}, 10, 2);

add_filter('wpseo_exclude_from_sitemap_by_post_ids', function ($ids) {
    return array_values(array_unique(array_merge((array) $ids, fg_retired_service_page_ids())));
});

// --- FuriaGraphic SEO helpers ---
function fg_seo_page_key() {
    if (is_front_page()) {
        return 'home';
    }

    $service_category = fg_service_category_slug_from_request();
    if ($service_category === 'graphic-design') {
        return 'servizi-graphic-design';
    }
    if ($service_category === 'web-design') {
        return 'servizi-web-design';
    }
    if ($service_category === 'streaming-pack') {
        return 'servizi-streaming-pack';
    }

    $virtual = fg_virtual_page_key_from_request();
    if ($virtual === 'servizi' || is_page(['servizi', 'services'])) {
        return 'servizi';
    }
    if ($virtual === 'portfolio' || is_page('portfolio')) {
        return 'portfolio';
    }
    if ($virtual === 'chi-siamo' || is_page(['chi-siamo', 'about'])) {
        return 'chi-siamo';
    }
    if ($virtual === 'contatti' || is_page(['contatti', 'contact'])) {
        return 'contatti';
    }
    if ($virtual === 'privacy-policy' || is_page('privacy-policy')) {
        return 'privacy-policy';
    }
    if ($virtual === 'cookie-policy' || is_page('cookie-policy')) {
        return 'cookie-policy';
    }
    if (in_array($virtual, ['termini-di-servizio', 'termini-e-condizioni'], true) || is_page(['termini-di-servizio', 'termini-e-condizioni'])) {
        return 'termini-di-servizio';
    }

    return 'default';
}

function fg_seo_data($key = null) {
    $key = $key ?: fg_seo_page_key();
    $data = [
        'home' => [
            'it' => [
                'title' => 'FuriaGraphic | Branding, Web Design e Streaming Pack',
                'description' => 'Identità visive, siti web e streaming pack per freelance, attività e creator che vogliono una presenza online più chiara, premium e riconoscibile.',
            ],
            'en' => [
                'title' => 'FuriaGraphic | Branding, Web Design & Streaming Packs',
                'description' => 'Visual identities, websites and streaming packs for freelancers, businesses and creators who want a clearer, premium and more recognizable online presence.',
            ],
        ],
        'servizi' => [
            'it' => [
                'title' => 'Servizi | Branding, Web Design e Streaming Pack | FuriaGraphic',
                'description' => 'Tre percorsi per costruire una presenza più solida: branding e graphic design, web design e streaming pack coordinati.',
            ],
            'en' => [
                'title' => 'Services | Branding, Web Design and Streaming Packs | FuriaGraphic',
                'description' => 'Three paths to build a stronger presence: branding and graphic design, web design and coordinated streaming packs.',
            ],
        ],
        'servizi-graphic-design' => [
            'it' => [
                'title' => 'Branding e Graphic Design | Logo e Identità Visiva | FuriaGraphic',
                'description' => 'Logo, identità visiva, palette, social kit e materiali coordinati per rendere brand, attività e creator più solidi e riconoscibili.',
            ],
            'en' => [
                'title' => 'Branding and Graphic Design | Logos and Visual Identity | FuriaGraphic',
                'description' => 'Logos, visual identity, palettes, social kits and coordinated assets to make brands, businesses and creators stronger and more recognizable.',
            ],
        ],
        'servizi-web-design' => [
            'it' => [
                'title' => 'Web Design | Siti Web, Landing e Restyling | FuriaGraphic',
                'description' => 'Siti web, landing page e restyling responsive con struttura chiara, look premium e percorsi pensati per facilitare il contatto.',
            ],
            'en' => [
                'title' => 'Web Design | Websites, Landing Pages and Redesigns | FuriaGraphic',
                'description' => 'Websites, landing pages and responsive redesigns with clear structure, premium visuals and paths designed to make enquiry easier.',
            ],
        ],
        'servizi-streaming-pack' => [
            'it' => [
                'title' => 'Streaming Pack | Overlay, Pannelli e Grafiche Live | FuriaGraphic',
                'description' => 'Overlay, pannelli, schermate e visual coordinati per Twitch, YouTube e creator che vogliono una live più pulita, personale e riconoscibile.',
            ],
            'en' => [
                'title' => 'Streaming Packs | Overlays, Panels and Live Graphics | FuriaGraphic',
                'description' => 'Overlays, panels, screens and coordinated visuals for Twitch, YouTube and creators who want a cleaner, more personal and recognizable live presence.',
            ],
        ],
        'portfolio' => [
            'it' => [
                'title' => 'Portfolio | Progetti Branding, Web Design e Streaming | FuriaGraphic',
                'description' => 'Una selezione di progetti FuriaGraphic tra branding, siti web, streaming pack e comunicazione visiva progettati con direzione e coerenza.',
            ],
            'en' => [
                'title' => 'Portfolio | Branding, Web Design and Streaming Projects | FuriaGraphic',
                'description' => 'A selection of FuriaGraphic projects across branding, websites, streaming packs and visual communication designed with direction and consistency.',
            ],
        ],
        'chi-siamo' => [
            'it' => [
                'title' => 'Chi è FuriaGraphic | Studio Creativo Digitale',
                'description' => 'Scopri FuriaGraphic: studio creativo digitale per identità visive, siti web e streaming pack pensati per brand, attività e creator online.',
            ],
            'en' => [
                'title' => 'About FuriaGraphic | Digital Creative Studio',
                'description' => 'Meet FuriaGraphic: a digital creative studio for visual identities, websites and streaming packs for brands, businesses and online creators.',
            ],
        ],
        'contatti' => [
            'it' => [
                'title' => 'Contatti | Richiedi Branding, Web Design o Streaming Pack | FuriaGraphic',
                'description' => 'Racconta il progetto e richiedi una direzione per branding, web design, streaming pack o una diagnosi gratuita della tua presenza online.',
            ],
            'en' => [
                'title' => 'Contact | Request Branding, Web Design or Streaming Packs | FuriaGraphic',
                'description' => 'Share your project and request direction for branding, web design, streaming packs or a free diagnosis of your online presence.',
            ],
        ],
        'privacy-policy' => [
            'it' => ['title' => 'Privacy Policy | FuriaGraphic', 'description' => 'Informativa privacy del sito FuriaGraphic e informazioni sul trattamento dei dati personali.'],
            'en' => ['title' => 'Privacy Policy | FuriaGraphic', 'description' => 'FuriaGraphic privacy policy and information about personal data processing.'],
        ],
        'cookie-policy' => [
            'it' => ['title' => 'Cookie Policy | FuriaGraphic', 'description' => 'Informativa cookie del sito FuriaGraphic e gestione delle preferenze di navigazione.'],
            'en' => ['title' => 'Cookie Policy | FuriaGraphic', 'description' => 'FuriaGraphic cookie policy and information about browsing preferences.'],
        ],
        'termini-di-servizio' => [
            'it' => ['title' => 'Termini e Condizioni | FuriaGraphic', 'description' => 'Termini e condizioni per sito, preventivi, servizi grafici e web, Hub/Area Clienti e proprietà dei lavori FuriaGraphic.'],
            'en' => ['title' => 'Terms and Conditions | FuriaGraphic', 'description' => 'Terms and conditions for the website, quotes, graphic and web services, Hub/Client Area and FuriaGraphic project ownership.'],
        ],
        'default' => [
            'it' => ['title' => 'FuriaGraphic | Branding e Web Design', 'description' => 'Servizi di branding, web design e streaming pack per brand, creator e piccole attività online.'],
            'en' => ['title' => 'FuriaGraphic | Branding and Web Design', 'description' => 'Branding, web design and streaming pack services for brands, creators and small online businesses.'],
        ],
    ];

    $lang = fg_is_en() ? 'en' : 'it';
    return $data[$key][$lang] ?? $data['default'][$lang];
}

function fg_current_path_for_seo() {
    $path = '/' . fg_request_path();
    if ($path === '/') {
        return '/';
    }
    return trailingslashit($path);
}

function fg_lang_url_for_seo($lang = 'it') {
    $url = home_url(fg_current_path_for_seo());
    return $lang === 'en' ? add_query_arg('lang', 'en', $url) : remove_query_arg('lang', $url);
}

function fg_canonical_url() {
    return fg_lang_url_for_seo(fg_is_en() ? 'en' : 'it');
}

function fg_is_noindex_page() {
    return in_array(fg_seo_page_key(), ['privacy-policy', 'cookie-policy', 'termini-di-servizio'], true);
}

function fg_service_schema_items() {
    $items = [];
    $position = 1;

    foreach (fg_service_categories() as $slug => $category) {
        $items[] = [
            '@type' => 'ListItem',
            'position' => $position,
            'url' => home_url($category['url']),
            'item' => [
                '@type' => 'Service',
                'name' => $category[fg_is_en() ? 'label_en' : 'label_it'],
                'description' => $category[fg_is_en() ? 'short_en' : 'short_it'],
                'provider' => ['@id' => trailingslashit(home_url('/')) . '#organization'],
            ],
        ];
        $position++;
    }

    return $items;
}

function fg_schema_graph() {
    $site_url = home_url('/');
    $logo = get_stylesheet_directory_uri() . '/assets/images/logo-rect.png';
    $lang = fg_is_en() ? 'en' : 'it';
    $seo = fg_seo_data();
    $page_key = fg_seo_page_key();

    $graph = [
        [
            '@type' => 'Organization',
            '@id' => trailingslashit($site_url) . '#organization',
            'name' => 'FuriaGraphic',
            'legalName' => 'FuriaGraphic',
            'url' => $site_url,
            'logo' => [
                '@type' => 'ImageObject',
                'url' => $logo,
            ],
            'email' => fg_contact_email(),
            'vatID' => 'IT02464380688',
            'knowsAbout' => ['Branding', 'Graphic Design', 'Web Design', 'Logo Design', 'Brand Identity', 'Streaming Pack', 'Twitch Graphics'],
        ],
        [
            '@type' => 'WebSite',
            '@id' => trailingslashit($site_url) . '#website',
            'url' => $site_url,
            'name' => 'FuriaGraphic',
            'publisher' => ['@id' => trailingslashit($site_url) . '#organization'],
            'inLanguage' => $lang,
        ],
        [
            '@type' => 'WebPage',
            '@id' => fg_canonical_url() . '#webpage',
            'url' => fg_canonical_url(),
            'name' => $seo['title'],
            'description' => $seo['description'],
            'isPartOf' => ['@id' => trailingslashit($site_url) . '#website'],
            'about' => ['@id' => trailingslashit($site_url) . '#organization'],
            'inLanguage' => $lang,
        ],
    ];

    if ($page_key === 'servizi') {
        $graph[] = [
            '@type' => 'ItemList',
            '@id' => fg_canonical_url() . '#services',
            'name' => fg_is_en() ? 'FuriaGraphic services' : 'Servizi FuriaGraphic',
            'itemListElement' => fg_service_schema_items(),
        ];
    }

    $service_slug = fg_service_category_slug_from_request();
    if ($service_slug && isset(fg_service_categories()[$service_slug])) {
        $service = fg_service_categories()[$service_slug];
        $graph[] = [
            '@type' => 'Service',
            '@id' => fg_canonical_url() . '#service',
            'name' => $service[fg_is_en() ? 'label_en' : 'label_it'],
            'description' => $service[fg_is_en() ? 'short_en' : 'short_it'],
            'url' => fg_canonical_url(),
            'provider' => ['@id' => trailingslashit($site_url) . '#organization'],
        ];
    }

    if (!is_front_page()) {
        $crumbs = [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => fg_is_en() ? add_query_arg('lang', 'en', home_url('/')) : home_url('/')],
        ];

        if ($service_slug) {
            $crumbs[] = ['@type' => 'ListItem', 'position' => 2, 'name' => fg_service_categories()[$service_slug][fg_is_en() ? 'label_en' : 'label_it'], 'item' => fg_canonical_url()];
        } else {
            $crumbs[] = ['@type' => 'ListItem', 'position' => 2, 'name' => $seo['title'], 'item' => fg_canonical_url()];
        }

        $graph[] = [
            '@type' => 'BreadcrumbList',
            '@id' => fg_canonical_url() . '#breadcrumb',
            'itemListElement' => $crumbs,
        ];
    }

    return ['@context' => 'https://schema.org', '@graph' => $graph];
}


function fg_print_cookieyes_banner() {
    ?>
<!-- Start CookieYes banner -->
<script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/5e387f74189e2796b5134d2950e851c3/script.js"></script>
<!-- End CookieYes banner -->
    <?php
}

function fg_print_seo_head() {
    $seo = fg_seo_data();
    $canonical = fg_canonical_url();
    $og_image = get_stylesheet_directory_uri() . '/assets/images/og-image.png';
    $locale = fg_is_en() ? 'en_US' : 'it_IT';
    $robots = fg_is_noindex_page() ? 'noindex, follow' : 'index, follow, max-image-preview:large';
    ?>
<title><?php echo esc_html($seo['title']); ?></title>
<meta name="description" content="<?php echo esc_attr($seo['description']); ?>" />
<meta name="robots" content="<?php echo esc_attr($robots); ?>" />
<link rel="canonical" href="<?php echo esc_url($canonical); ?>" />
<link rel="alternate" hreflang="it" href="<?php echo esc_url(fg_lang_url_for_seo('it')); ?>" />
<link rel="alternate" hreflang="en" href="<?php echo esc_url(fg_lang_url_for_seo('en')); ?>" />
<link rel="alternate" hreflang="x-default" href="<?php echo esc_url(fg_lang_url_for_seo('it')); ?>" />
<meta property="og:locale" content="<?php echo esc_attr($locale); ?>" />
<meta property="og:title" content="<?php echo esc_attr($seo['title']); ?>" />
<meta property="og:description" content="<?php echo esc_attr($seo['description']); ?>" />
<meta property="og:image" content="<?php echo esc_url($og_image); ?>" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:url" content="<?php echo esc_url($canonical); ?>" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="FuriaGraphic" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?php echo esc_attr($seo['title']); ?>" />
<meta name="twitter:description" content="<?php echo esc_attr($seo['description']); ?>" />
<meta name="twitter:image" content="<?php echo esc_url($og_image); ?>" />
<script type="application/ld+json"><?php echo wp_json_encode(fg_schema_graph(), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?></script>
    <?php
}

add_filter('robots_txt', function ($output, $public) {
    $sitemap = home_url('/sitemap_index.xml');
    if (strpos($output, 'Sitemap:') === false) {
        $output .= "\nSitemap: " . $sitemap . "\n";
    }
    return $output;
}, 10, 2);

remove_action('wp_head', 'wp_generator');

function fg_cookie_options($expires, $http_only = true) {
    $options = [
        'expires' => $expires,
        'path' => COOKIEPATH ?: '/',
        'secure' => is_ssl(),
        'httponly' => $http_only,
        'samesite' => 'Lax',
    ];

    if (defined('COOKIE_DOMAIN') && COOKIE_DOMAIN) {
        $options['domain'] = COOKIE_DOMAIN;
    }

    return $options;
}

function fg_set_theme_cookie($name, $value, $expires, $http_only = true) {
    setcookie($name, $value, fg_cookie_options($expires, $http_only));
}

function fg_delete_theme_cookie($name) {
    setcookie($name, '', fg_cookie_options(time() - 3600));
}

// --- FuriaGraphic bilingual helpers (IT / EN) ---
add_action('init', function () {
    if (isset($_GET['lang'])) {
        $lang = sanitize_key(wp_unslash($_GET['lang']));
        if (in_array($lang, ['it', 'en'], true)) {
            fg_set_theme_cookie('fg_lang', $lang, time() + YEAR_IN_SECONDS);
            $_COOKIE['fg_lang'] = $lang;
        }
    }
});

function fg_lang() {
    // Italiano di default sempre. L'inglese si attiva solo con ?lang=en.
    // In questo modo un vecchio cookie EN non forza più il sito in inglese quando si apre l'URL pulito.
    $lang = isset($_GET['lang']) ? sanitize_key(wp_unslash($_GET['lang'])) : 'it';
    return $lang === 'en' ? 'en' : 'it';
}

function fg_is_en() {
    return fg_lang() === 'en';
}

function fg_t($it, $en) {
    return fg_is_en() ? $en : $it;
}

function fg_contact_email() {
    $email = sanitize_email(apply_filters('fg_contact_email', 'info@furiagraphic.com'));
    return $email ?: 'info@furiagraphic.com';
}

function fg_mailto_url($subject = '', $body = '') {
    $email = fg_contact_email();
    $params = [];

    if ($subject !== '') {
        $params['subject'] = $subject;
    }

    if ($body !== '') {
        $params['body'] = $body;
    }

    $url = 'mailto:' . $email;

    if (!empty($params)) {
        $url .= '?' . http_build_query($params, '', '&', PHP_QUERY_RFC3986);
    }

    return $url;
}

function fg_contact_form_url() {
    return fg_url('/contatti/#fg-project-form');
}

function fg_url($path = '/') {
    $url = home_url($path);
    if (fg_is_en()) {
        $url = add_query_arg('lang', 'en', $url);
    }
    return $url;
}

function fg_lang_switch_url($lang) {
    $lang = sanitize_key($lang);
    $url = home_url(fg_current_path_for_seo());

    // Il cambio lingua deve impostare sempre il cookie: anche IT passa da ?lang=it.
    // Senza questo, se il cookie resta su EN, il link italiano senza parametro continua a mostrare EN.
    return esc_url(add_query_arg('lang', $lang === 'en' ? 'en' : 'it', $url));
}

function fg_menu($active = '') {
    $items = [
        'home' => ['label' => fg_t('Home', 'Home'), 'url' => fg_url('/')],
        'servizi' => ['label' => fg_t('Servizi', 'Services'), 'url' => fg_service_category_url('graphic-design')],
        'portfolio' => ['label' => fg_t('Portfolio', 'Portfolio'), 'url' => fg_url('/portfolio/')],
        'chi-siamo' => ['label' => fg_t('Chi sono', 'About'), 'url' => fg_url('/chi-siamo/')],
        'contatti' => ['label' => fg_t('Contatti', 'Contact'), 'url' => fg_url('/contatti/')],
    ];

    echo '<nav class="fg-nav" aria-label="Primary menu"><ul>';
    foreach ($items as $slug => $item) {
        $class = $active === $slug ? 'is-active' : '';
        echo '<li><a class="' . esc_attr($class) . '" href="' . esc_url($item['url']) . '">' . esc_html($item['label']) . '</a></li>';
    }
    echo '</ul></nav>';
}

function fg_site_start($active = '') {
    $is_en = fg_is_en();
    ?><!DOCTYPE html>
    <html lang="<?php echo esc_attr(fg_is_en() ? 'en' : 'it-IT'); ?>">
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#1a1410" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <?php fg_print_cookieyes_banner(); ?>
  <?php fg_print_seo_head(); ?>
  <?php wp_head(); ?>
</head>
    <body <?php body_class('fg-lang-' . fg_lang()); ?>>
    <?php wp_body_open(); ?>
    <div class="fg-site">
    <header class="fg-header">
      <div class="fg-header-inner">

        <div class="fg-brand">
          <a href="<?php echo esc_url(fg_url('/')); ?>">
           <picture>
  <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/furiagraphic-logo.png">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-rect.png" alt="FuriaGraphic">
</picture>
          </a>
        </div>

        <nav class="fg-nav fg-nav-desktop" aria-label="<?php echo esc_attr(fg_t('Navigazione principale', 'Primary navigation')); ?>">
          <ul>
            <li><a class="<?php echo is_front_page() ? 'is-active' : ''; ?>" href="<?php echo esc_url(fg_url('/')); ?>"><?php echo esc_html(fg_t('Home', 'Home')); ?></a></li>
            <li class="fg-nav-has-submenu">
              <button class="fg-nav-parent <?php echo fg_is_services_area() ? 'is-active' : ''; ?>" type="button" aria-haspopup="true" aria-expanded="false"><?php echo esc_html(fg_t('Servizi', 'Services')); ?></button>
              <div class="fg-nav-submenu" aria-label="<?php echo esc_attr(fg_t('Categorie servizi', 'Service categories')); ?>">
                <a href="<?php echo esc_url(fg_service_category_url('graphic-design')); ?>"><?php echo esc_html(fg_t('Graphic design', 'Graphic design')); ?></a>
                <a href="<?php echo esc_url(fg_service_category_url('web-design')); ?>"><?php echo esc_html(fg_t('Web design', 'Web design')); ?></a>
                <a href="<?php echo esc_url(fg_service_category_url('streaming-pack')); ?>"><?php echo esc_html(fg_t('Streaming pack', 'Streaming pack')); ?></a>
              </div>
            </li>
            <li><a class="<?php echo fg_is_portfolio_area() ? 'is-active' : ''; ?>" href="<?php echo esc_url(fg_url('/portfolio/')); ?>"><?php echo esc_html(fg_t('Portfolio', 'Portfolio')); ?></a></li>
            <li><a class="<?php echo (is_page('about') || is_page('chi-siamo') || fg_is_virtual_page('chi-siamo')) ? 'is-active' : ''; ?>" href="<?php echo esc_url(fg_url('/chi-siamo/')); ?>"><?php echo esc_html(fg_t('Chi sono', 'About')); ?></a></li>
            <li><a class="<?php echo (is_page('contact') || is_page('contatti') || fg_is_virtual_page('contatti')) ? 'is-active' : ''; ?>" href="<?php echo esc_url(fg_url('/contatti/')); ?>"><?php echo esc_html(fg_t('Contatti', 'Contact')); ?></a></li>
          </ul>
        </nav>

        <div class="fg-header-actions">
          <div class="fg-lang-switch" aria-label="Language switcher">
            <a class="<?php echo !fg_is_en() ? 'is-active' : ''; ?>" href="<?php echo fg_lang_switch_url('it'); ?>">IT</a>
            <span>/</span>
            <a class="<?php echo fg_is_en() ? 'is-active' : ''; ?>" href="<?php echo fg_lang_switch_url('en'); ?>">EN</a>
          </div>
          <a class="fg-header-cta" href="<?php echo esc_url(fg_url('/contatti/')); ?>"><?php echo esc_html(fg_t('Parliamone', 'Let’s talk')); ?></a>
        </div>

        <button class="fg-menu-toggle" type="button" aria-label="<?php echo esc_attr(fg_t('Apri menu', 'Open menu')); ?>" aria-expanded="false" aria-controls="fg-mobile-menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>

      <div class="fg-mobile-menu" id="fg-mobile-menu">
        <nav class="fg-mobile-nav" aria-label="<?php echo esc_attr(fg_t('Navigazione mobile', 'Mobile navigation')); ?>">
          <ul>
            <li><a class="<?php echo is_front_page() ? 'is-active' : ''; ?>" href="<?php echo esc_url(fg_url('/')); ?>"><?php echo esc_html(fg_t('Home', 'Home')); ?></a></li>
            <li class="fg-nav-has-submenu fg-mobile-services-group">
              <button class="fg-nav-parent fg-mobile-services-toggle <?php echo fg_is_services_area() ? 'is-active' : ''; ?>" type="button" aria-expanded="false" aria-controls="fg-mobile-services-submenu"><?php echo esc_html(fg_t('Servizi', 'Services')); ?></button>
              <div class="fg-nav-submenu" id="fg-mobile-services-submenu" aria-label="<?php echo esc_attr(fg_t('Categorie servizi', 'Service categories')); ?>">
                <a href="<?php echo esc_url(fg_service_category_url('graphic-design')); ?>"><?php echo esc_html(fg_t('Graphic design', 'Graphic design')); ?></a>
                <a href="<?php echo esc_url(fg_service_category_url('web-design')); ?>"><?php echo esc_html(fg_t('Web design', 'Web design')); ?></a>
                <a href="<?php echo esc_url(fg_service_category_url('streaming-pack')); ?>"><?php echo esc_html(fg_t('Streaming pack', 'Streaming pack')); ?></a>
              </div>
            </li>
            <li><a class="<?php echo fg_is_portfolio_area() ? 'is-active' : ''; ?>" href="<?php echo esc_url(fg_url('/portfolio/')); ?>"><?php echo esc_html(fg_t('Portfolio', 'Portfolio')); ?></a></li>
            <li><a class="<?php echo (is_page('about') || is_page('chi-siamo') || fg_is_virtual_page('chi-siamo')) ? 'is-active' : ''; ?>" href="<?php echo esc_url(fg_url('/chi-siamo/')); ?>"><?php echo esc_html(fg_t('Chi sono', 'About')); ?></a></li>
            <li><a class="<?php echo (is_page('contact') || is_page('contatti') || fg_is_virtual_page('contatti')) ? 'is-active' : ''; ?>" href="<?php echo esc_url(fg_url('/contatti/')); ?>"><?php echo esc_html(fg_t('Contatti', 'Contact')); ?></a></li>
          </ul>
          <div class="fg-mobile-lang-switch">
            <a class="<?php echo !fg_is_en() ? 'is-active' : ''; ?>" href="<?php echo fg_lang_switch_url('it'); ?>">Italiano</a>
            <a class="<?php echo fg_is_en() ? 'is-active' : ''; ?>" href="<?php echo fg_lang_switch_url('en'); ?>">English</a>
          </div>
        </nav>
      </div>
    </header>
      <main class="fg-main">
    <?php
}

function fg_site_end() {
    ?>
      </main>

<footer class="site-footer" id="footer">
  <div class="fg-footer-wave"></div>
  <div class="fg-container">
    <div class="fg-footer-main">

      <div class="fg-footer-col fg-footer-brand-col">
        <div class="fg-footer-newsletter">
          <?php
          // Lingua newsletter sincronizzata con il parametro URL del sito.
          $fg_newsletter_lang = ( isset($_GET['lang']) && $_GET['lang'] === 'en' ) ? 'en' : 'it';
          $fg_newsletter_url = ( $fg_newsletter_lang === 'en' )
              ? 'https://newsletter.furiagraphic.com/embed/newsletter?lang=en'
              : 'https://newsletter.furiagraphic.com/embed/newsletter';
          ?>

          <iframe
            id="fg-newsletter"
            src="<?php echo esc_url( $fg_newsletter_url ); ?>"
            style="width:100%;border:0;background:transparent;display:block"
            loading="lazy"
            title="<?php echo esc_attr( $fg_newsletter_lang === 'en' ? 'Subscribe to the FuriaGraphic newsletter' : 'Iscriviti alla newsletter FuriaGraphic' ); ?>">
          </iframe>

          <script>
            (function(){
              var f = document.getElementById('fg-newsletter');
              if (f) {
                var params = new URLSearchParams(window.location.search);
                if (params.get('lang') === 'en' && f.src.indexOf('lang=en') === -1) {
                  f.src = 'https://newsletter.furiagraphic.com/embed/newsletter?lang=en';
                }
              }

              window.addEventListener('message', function(e) {
                if (e.data && e.data.type === 'fg-newsletter-height') {
                  var iframe = document.getElementById('fg-newsletter');
                  if (iframe) iframe.style.height = e.data.height + 'px';
                }
              });
            })();
          </script>
        </div>
      </div>

      <div class="fg-footer-col fg-footer-links-col">
        <h3><?php echo esc_html(fg_t('Link rapidi', 'Quick links')); ?></h3>
        <nav class="fg-footer-links">
          <a href="<?php echo esc_url(fg_url('/')); ?>">Home</a>
          <a href="<?php echo esc_url(fg_service_category_url('graphic-design')); ?>"><?php echo esc_html(fg_t('Graphic design', 'Graphic design')); ?></a>
          <a href="<?php echo esc_url(fg_service_category_url('web-design')); ?>"><?php echo esc_html(fg_t('Web design', 'Web design')); ?></a>
          <a href="<?php echo esc_url(fg_service_category_url('streaming-pack')); ?>"><?php echo esc_html(fg_t('Streaming pack', 'Streaming pack')); ?></a>
          <a href="<?php echo esc_url(fg_url('/portfolio/')); ?>">Portfolio</a>
          <a href="<?php echo esc_url(fg_url('/contatti/')); ?>"><?php echo esc_html(fg_t('Contatti', 'Contact')); ?></a>
        </nav>
      </div>

      <div class="fg-footer-col fg-footer-contact-col">
        <h3><?php echo esc_html(fg_t('Contatti', 'Contacts')); ?></h3>
        <div class="fg-footer-contacts">
          <div class="fg-contact-item">
            <div class="fg-contact-icon">✉</div>
            <div class="fg-contact-text">
              <span>Email</span>
              <a href="<?php echo esc_url(fg_mailto_url(fg_t('Richiesta progetto FuriaGraphic', 'FuriaGraphic project request'))); ?>" data-fg-form-url="<?php echo esc_url(fg_contact_form_url()); ?>"><?php echo esc_html(fg_contact_email()); ?></a>
            </div>
          </div>

          <div class="fg-contact-item">
            <div class="fg-contact-icon">⌘</div>
            <div class="fg-contact-text">
              <span>Discord</span>
              <a href="https://discord.gg/JDwSuKFeh8" target="_blank" rel="noopener noreferrer"><?php echo esc_html(fg_t('Entra nel server', 'Join the server')); ?></a>
            </div>
          </div>
        </div>
      </div>

    </div>


    <div class="fg-footer-bottom">
      <span>© <?php echo date('Y'); ?> FuriaGraphic. <?php echo esc_html(fg_t('Tutti i diritti riservati.', 'All rights reserved.')); ?> · P.IVA 02464380688</span>
      <div class="fg-footer-bottom-links">
        <a href="<?php echo esc_url(fg_url('/privacy-policy/')); ?>">Privacy Policy</a>
        <a href="<?php echo esc_url(fg_url('/termini-di-servizio/')); ?>"><?php echo esc_html(fg_t('Termini e Condizioni', 'Terms and Conditions')); ?></a>
        <a href="<?php echo esc_url(fg_url('/cookie-policy/')); ?>">Cookie Policy</a>
        <a href="<?php echo esc_url(fg_url('/cookie-policy/')); ?>" data-fg-cookie-reopen><?php echo esc_html(fg_t('Preferenze cookie', 'Cookie preferences')); ?></a>
      </div>
    </div>
  </div>
</footer>
</div>
    <?php wp_footer(); ?>
<script src="https://newsletter.furiagraphic.com/cookie-banner.js" defer></script>
</body>
    </html><?php
}

function fg_get_contact_catalog() {
    return [
        'branding' => [
            'label' => fg_t('Branding', 'Branding'),
            'intro' => fg_t('Logo, identità visiva e grafiche coordinate per dare al progetto una presenza più chiara, solida e riconoscibile in ogni punto di contatto.', 'Logos, visual identity and coordinated graphics built to give your project a clearer, stronger and more recognizable presence across every touchpoint.'),
            'deliverable_placeholder' => fg_t('Logo, identità visiva, social kit, materiali stampati…', 'Logo, visual identity, social kit, printed materials…'),
            'services' => [
                'logo' => [
                    'label' => fg_t('Logo Design', 'Logo Design'),
                    'hint' => fg_t('Per brand che hanno bisogno di un segno distintivo chiaro, equilibrato e riconoscibile nel tempo.', 'For brands that need a clear, balanced and recognizable mark built to last.'),
                    'preview' => fg_t('Un logo su misura pensato per dare al progetto una base visiva forte, leggibile e riconoscibile.', 'A custom logo designed to give your project a strong, readable and recognizable foundation.'),
                ],
                'brand-identity' => [
                    'label' => fg_t('Identità visiva', 'Visual identity'),
                    'hint' => fg_t('Per progetti che hanno bisogno di un sistema visivo completo, dalla palette colori alla tipografia e allo stile generale.', 'For projects that need a complete visual system, from color palette to typography and overall style.'),
                    'preview' => fg_t('Un’identità visiva completa per portare coerenza, personalità e metodo in ogni punto di contatto.', 'A complete visual identity built to bring consistency, personality and method to every touchpoint.'),
                ],
                'social-print' => [
                    'label' => fg_t('Grafica social & stampa', 'Social & print graphics'),
                    'hint' => fg_t('Per contenuti social e materiali stampati che devono risultare allineati e coerenti sul piano visivo.', 'For social content and printed materials that need to feel visually aligned and coherent.'),
                    'preview' => fg_t('Grafiche coordinate per social, stampa e materiali promozionali con uno stile riconoscibile.', 'Coordinated graphics for social media, print and promotional materials with a recognizable style.'),
                ],
            ],
            'fields' => [
                [
                    'name' => 'brand_stage',
                    'type' => 'select',
                    'label' => fg_t('In che fase si trova il brand?', 'What stage is the brand in?'),
                    'required' => false,
                    'options' => [
                        '' => fg_t('Seleziona fase', 'Select stage'),
                        'Partenza da zero' => fg_t('Partenza da zero', 'Starting from scratch'),
                        'Già attivo ma da rinfrescare' => fg_t('Già attivo ma da rinfrescare', 'Already active but needs a refresh'),
                        'Quasi pronto ma manca coerenza visiva' => fg_t('Quasi pronto ma manca coerenza visiva', 'Almost ready but lacking visual consistency'),
                    ],
                ],
                [
                    'name' => 'brand_style',
                    'type' => 'select',
                    'label' => fg_t('Che stile stai cercando?', 'What style are you looking for?'),
                    'required' => false,
                    'options' => [
                        '' => fg_t('Seleziona stile', 'Select style'),
                        'Minimal and clean' => fg_t('Minimal e pulito', 'Minimal and clean'),
                        'Elegant and premium' => fg_t('Elegante e premium', 'Elegant and premium'),
                        'Bold and expressive' => fg_t('Deciso ed espressivo', 'Bold and expressive'),
                        'Not sure yet' => fg_t('Non lo so ancora', 'Not sure yet'),
                    ],
                ],
            ],
        ],
        'web-design' => [
            'label' => fg_t('Web design', 'Web design'),
            'intro' => fg_t('Siti web, landing page e restyling costruiti per rendere la tua presenza online più chiara, credibile e facile da navigare.', 'Custom websites, landing pages and redesigns created to make your online presence clearer, more trustworthy and easier to navigate.'),
            'deliverable_placeholder' => fg_t('Sito vetrina, landing page, restyling, portfolio online…', 'Website, landing page, redesign, online portfolio…'),
            'services' => [
                'showcase-site' => [
                    'label' => fg_t('Sito vetrina', 'Showcase website'),
                    'hint' => fg_t('Ideale se ti serve un sito pulito e professionale per presentare lavoro, attività o servizi in modo chiaro.', 'Ideal if you need a clean, professional website to present your work, business or services clearly.'),
                    'preview' => fg_t('Un sito su misura costruito per presentare il progetto in modo curato e credibile.', 'A custom website built to present your project in a polished and credible way.'),
                ],
                'landing-page' => [
                    'label' => fg_t('Landing page', 'Landing page'),
                    'hint' => fg_t('Perfetta per promuovere un servizio, un’offerta o un lancio con una struttura focalizzata e facile da seguire.', 'Best for promoting a service, offer or launch with a focused and easy-to-follow structure.'),
                    'preview' => fg_t('Una landing page progettata per guidare il visitatore verso un’azione chiara.', 'A landing page designed to guide visitors toward one clear action.'),
                ],
                'redesign' => [
                    'label' => fg_t('Restyling sito web', 'Website redesign'),
                    'hint' => fg_t('Per siti esistenti che hanno bisogno di un look più attuale, una struttura migliore o una presenza più credibile.', 'For existing websites that need a fresher look, better structure or a more credible presence.'),
                    'preview' => fg_t('Un refresh visivo e strutturale pensato per migliorare chiarezza ed esperienza utente.', 'A visual and structural refresh aimed at improving clarity and user experience.'),
                ],
            ],
            'fields' => [
                [
                    'name' => 'web_status',
                    'type' => 'select',
                    'label' => fg_t('Qual è lo stato attuale del sito?', 'What is the current website status?'),
                    'required' => false,
                    'options' => [
                        '' => fg_t('Seleziona stato del sito', 'Select website status'),
                        'Non ho ancora un sito' => fg_t('Non ho ancora un sito', 'I do not have a website yet'),
                        'Ho già dominio / hosting' => fg_t('Ho già dominio / hosting', 'I already have domain / hosting'),
                        'Ho un sito da rifare o migliorare' => fg_t('Ho un sito da rifare o migliorare', 'I have a website to redesign or improve'),
                    ],
                ],
                [
                    'name' => 'web_goal',
                    'type' => 'select',
                    'label' => fg_t('Qual è l’obiettivo principale?', 'What is the main goal?'),
                    'required' => false,
                    'options' => [
                        '' => fg_t('Seleziona obiettivo', 'Select goal'),
                        'Presentare meglio il brand' => fg_t('Presentare meglio il brand', 'Present the brand better'),
                        'Generare contatti o richieste' => fg_t('Generare contatti o richieste', 'Generate enquiries or requests'),
                        'Promuovere un servizio o un prodotto' => fg_t('Promuovere un servizio o un prodotto', 'Promote a service or product'),
                        'Mostrare i progetti / portfolio' => fg_t('Mostrare i progetti / portfolio', 'Show projects / portfolio'),
                    ],
                ],
            ],
        ],
        'streaming' => [
            'label' => fg_t('Streaming', 'Streaming'),
            'intro' => fg_t('Overlay, pannelli e schermate iniziali pensati per rendere la tua presenza in live più pulita, coerente e subito riconoscibile.', 'Overlays, panels and start screens designed to make your live presence cleaner, more coherent and instantly recognizable.'),
            'deliverable_placeholder' => fg_t('Overlay, pannelli, schermate start, grafiche live…', 'Overlays, panels, start screens, live visuals…'),
            'services' => [
                'overlay' => [
                    'label' => fg_t('Overlay', 'Overlay'),
                    'hint' => fg_t('Per layout live che devono risultare più curati senza appesantire la scena.', 'For live layouts that need to look more polished without making the scene feel heavy.'),
                    'preview' => fg_t('Overlay personalizzati pensati per rendere il tuo canale più riconoscibile e ordinato.', 'Custom overlays designed to make your channel more recognizable and organized.'),
                ],
                'panels' => [
                    'label' => fg_t('Pannelli', 'Panels'),
                    'hint' => fg_t('Per pagine canale che hanno bisogno di blocchi informativi più chiari e coerenti.', 'For channel pages that need clearer and more coherent information blocks.'),
                    'preview' => fg_t('Pannelli e visual coordinati con lo stile del tuo canale.', 'Panels and visuals coordinated with your channel style.'),
                ],
                'start-screen' => [
                    'label' => fg_t('Schermate start / pausa', 'Start / intermission screens'),
                    'hint' => fg_t('Per creator che vogliono una live più completa fin dal primo momento.', 'For creators who want a more complete live experience from the first moment.'),
                    'preview' => fg_t('Schermate iniziali e di pausa pensate per rafforzare l’identità visiva del canale.', 'Start and break screens designed to strengthen the channel visual identity.'),
                ],
            ],
            'fields' => [
                [
                    'name' => 'stream_platform',
                    'type' => 'select',
                    'label' => fg_t('Piattaforma principale', 'Main platform'),
                    'required' => false,
                    'options' => [
                        '' => fg_t('Seleziona piattaforma', 'Select platform'),
                        'Twitch' => 'Twitch',
                        'YouTube' => 'YouTube',
                        'Kick' => 'Kick',
                        'Multi-piattaforma' => fg_t('Multi-piattaforma', 'Multi-platform'),
                    ],
                ],
                [
                    'name' => 'stream_style',
                    'type' => 'select',
                    'label' => fg_t('Che stile hai in mente?', 'What style do you have in mind?'),
                    'required' => false,
                    'options' => [
                        '' => fg_t('Seleziona stile', 'Select style'),
                        'Minimal / pulito' => fg_t('Minimal / pulito', 'Minimal / clean'),
                        'Gaming energico' => fg_t('Gaming energico', 'Energetic gaming'),
                        'Dark premium' => 'Dark premium',
                        'Totalmente personalizzato' => fg_t('Totalmente personalizzato', 'Fully custom'),
                    ],
                ],
            ],
        ],
    ];
}

function fg_get_contact_dynamic_field_labels() {
    $labels = [];
    foreach (fg_get_contact_catalog() as $category) {
        if (!empty($category['fields']) && is_array($category['fields'])) {
            foreach ($category['fields'] as $field) {
                $labels[$field['name']] = $field['label'];
            }
        }
    }
    return $labels;
}

function fg_get_contact_form_payload($source = null) {
    $source = $source ?: $_POST;

    $payload = [
        'nome' => sanitize_text_field(wp_unslash($source['nome'] ?? '')),
        'email' => sanitize_email(wp_unslash($source['email'] ?? '')),
        'categoria' => sanitize_key(wp_unslash($source['categoria'] ?? '')),
        'servizio' => sanitize_text_field(wp_unslash($source['servizio'] ?? '')),
        'brand' => sanitize_text_field(wp_unslash($source['brand'] ?? '')),
        'budget' => sanitize_text_field(wp_unslash($source['budget'] ?? '')),
        'tempistiche' => sanitize_text_field(wp_unslash($source['tempistiche'] ?? '')),
        'telefono' => sanitize_text_field(wp_unslash($source['telefono'] ?? '')),
        'link' => esc_url_raw(wp_unslash($source['link'] ?? '')),
        'deliverable' => sanitize_text_field(wp_unslash($source['deliverable'] ?? '')),
        'messaggio' => sanitize_textarea_field(wp_unslash($source['messaggio'] ?? '')),
        'privacy' => !empty($source['privacy']) ? '1' : '',
    ];

    foreach (fg_get_contact_dynamic_field_labels() as $name => $label) {
        $payload[$name] = sanitize_text_field(wp_unslash($source[$name] ?? ''));
    }

    return $payload;
}

function fg_contact_redirect_url($status = 'success') {
    $url = fg_url('/contatti/');
    return add_query_arg('fg_contact_status', $status, $url) . '#fg-project-form';
}

function fg_get_contact_form_feedback() {
    $feedback = [
        'type' => '',
        'message' => '',
        'old' => [],
    ];

    if (!empty($_GET['fg_contact_status'])) {
        $status = sanitize_key(wp_unslash($_GET['fg_contact_status']));
        if ($status === 'success') {
            $feedback['type'] = 'success';
            $feedback['message'] = fg_t('La tua richiesta è stata inviata correttamente. Ti risponderò il prima possibile con un messaggio chiaro e utile in base a quello che mi hai raccontato.', 'Your request has been sent successfully. I’ll get back to you as soon as possible with a clear, useful reply based on what you shared.');
        } elseif ($status === 'error') {
            $feedback['type'] = 'error';
            $feedback['message'] = sprintf(
                fg_t('Qualcosa è andato storto durante l’invio della richiesta. Riprova tra poco oppure scrivimi direttamente a %s.', 'Something went wrong while sending your request. Please try again shortly or email me directly at %s.'),
                fg_contact_email()
            );
        }
    }

    if (!empty($_GET['fg_contact_invalid'])) {
        $feedback['type'] = 'error';
        $feedback['message'] = fg_t('Controlla i campi obbligatori e riprova. Bastano poche informazioni, ma devono essere complete.', 'Please check the required fields and try again. A few details are enough, but they need to be complete.');
    }

    $session_key = 'fg_contact_old';
    if (!empty($_COOKIE[$session_key])) {
        $raw = json_decode(stripslashes($_COOKIE[$session_key]), true);
        if (is_array($raw)) {
            $feedback['old'] = array_map('wp_unslash', $raw);
        }
        fg_delete_theme_cookie($session_key);
    }

    return $feedback;
}

function fg_store_contact_old_input($data) {
    $safe = wp_json_encode($data);
    if ($safe) {
        fg_set_theme_cookie('fg_contact_old', $safe, time() + 300);
    }
}

add_action('init', function () {
    if (empty($_POST['fg_contact_action']) || $_POST['fg_contact_action'] !== 'send_project_request') {
        return;
    }

    if (empty($_POST['fg_contact_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['fg_contact_nonce'])), 'fg_contact_form_submit')) {
        wp_safe_redirect(fg_contact_redirect_url('error'));
        exit;
    }

    if (!empty($_POST['website'])) {
        wp_safe_redirect(fg_contact_redirect_url('success'));
        exit;
    }

    $catalog = fg_get_contact_catalog();
    $old = fg_get_contact_form_payload($_POST);

    $is_valid_category = !empty($old['categoria']) && isset($catalog[$old['categoria']]);
    $allowed_services = $is_valid_category ? array_keys($catalog[$old['categoria']]['services']) : [];
    $is_valid_service = !empty($old['servizio']) && in_array($old['servizio'], $allowed_services, true);

    if (empty($old['nome']) || empty($old['email']) || !is_email($old['email']) || empty($old['messaggio']) || empty($old['privacy']) || !$is_valid_category || !$is_valid_service) {
        fg_store_contact_old_input($old);
        wp_safe_redirect(add_query_arg('fg_contact_invalid', '1', fg_url('/contatti/')) . '#fg-project-form');
        exit;
    }

    $category_label = $catalog[$old['categoria']]['label'];
    $service_label = $catalog[$old['categoria']]['services'][$old['servizio']]['label'];

    $to = apply_filters('fg_contact_form_recipient', fg_contact_email());
    $subject = sprintf('[FuriaGraphic] Nuova richiesta — %s / %s', $category_label, $service_label);

    $lines = [
        'Nuova richiesta ricevuta dal sito FuriaGraphic.',
        '',
        'Nome: ' . $old['nome'],
        'Email: ' . $old['email'],
        'Telefono: ' . ($old['telefono'] ?: 'Non indicato'),
        'Categoria: ' . $category_label,
        'Servizio: ' . $service_label,
        'Brand / progetto: ' . ($old['brand'] ?: 'Non indicato'),
        'Richieste specifiche: ' . ($old['deliverable'] ?: 'Non specificato'),
        'Budget: ' . ($old['budget'] ?: 'Non definito'),
        'Tempistiche: ' . ($old['tempistiche'] ?: 'Non definito'),
        'Sito / social / riferimenti: ' . ($old['link'] ?: 'Non indicato'),
    ];

    $dynamic_labels = fg_get_contact_dynamic_field_labels();
    foreach ($dynamic_labels as $name => $label) {
        if (!empty($old[$name])) {
            $lines[] = $label . ': ' . $old[$name];
        }
    }

    $lines[] = '';
    $lines[] = 'Descrizione del progetto:';
    $lines[] = $old['messaggio'];

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'From: FuriaGraphic <' . fg_contact_email() . '>',
        'Reply-To: ' . $old['nome'] . ' <' . $old['email'] . '>',
    ];

    $sent = wp_mail($to, $subject, implode("\n", $lines), $headers);

    if ($sent) {
        wp_safe_redirect(fg_contact_redirect_url('success'));
    } else {
        fg_store_contact_old_input($old);
        wp_safe_redirect(fg_contact_redirect_url('error'));
    }
    exit;
});

function fg_render_project_contact_form($feedback = null, $args = []) {
    $catalog = fg_get_contact_catalog();
    $feedback = is_array($feedback) ? $feedback : fg_get_contact_form_feedback();
    $old = !empty($feedback['old']) && is_array($feedback['old']) ? $feedback['old'] : [];
    $selected_category = sanitize_key($old['categoria'] ?? '');
    if ($selected_category === '') {
        $selected_category = fg_contact_category_from_request();
    }
    if ($selected_category !== '' && !isset($catalog[$selected_category])) {
        $selected_category = '';
    }

    $selected_service = sanitize_text_field($old['servizio'] ?? '');
    if ($selected_service === '' && !empty($_GET['servizio'])) {
        $selected_service = sanitize_key(wp_unslash($_GET['servizio']));
    }
    if ($selected_category === '' || empty($catalog[$selected_category]['services'][$selected_service])) {
        $selected_service = '';
    }
    $old_for_js = array_merge($old, [
        'categoria' => $selected_category,
        'servizio' => $selected_service,
    ]);
    $catalog_json = wp_json_encode($catalog);
    $old_json = wp_json_encode($old_for_js);
    $email = fg_contact_email();
    $args = is_array($args) ? $args : [];
    $mode = isset($args['mode']) ? sanitize_key($args['mode']) : 'section';
    $embedded = in_array($mode, ['card', 'embedded'], true);
    $shell_classes = $embedded ? 'fg-contact-lite-shell fg-contact-form-card' : 'fg-contact-lite-shell fg-reveal is-visible';

    $old_value = function ($key) use ($old) {
        return isset($old[$key]) ? $old[$key] : '';
    };
    ?>
<?php if (!$embedded) : ?>
<section class="fg-section fg-contact-lite-wrap" id="fg-project-form">
  <div class="fg-container">
<?php endif; ?>
    <div class="<?php echo esc_attr($shell_classes); ?>">
      <div class="fg-contact-lite-head">
        <div>
          <div class="fg-contact-mini-kicker"><?php echo esc_html(fg_t('Preventivo via email', 'Email quote request')); ?></div>
          <h2><?php echo esc_html(fg_t('Racconta il progetto dal sito', 'Share your project from the website')); ?></h2>
        </div>
        <p><?php echo esc_html(sprintf(fg_t('Compila il modulo con le informazioni essenziali: arriverà a %s e potrò risponderti con una direzione più precisa.', 'Fill in the form with the essential details: it will reach %s and I can reply with a more precise direction.'), $email)); ?></p>
      </div>

      <?php if (!empty($feedback['message'])) : ?>
        <div class="fg-form-notice <?php echo esc_attr($feedback['type']); ?>" role="<?php echo $feedback['type'] === 'error' ? 'alert' : 'status'; ?>">
          <?php echo esc_html($feedback['message']); ?>
        </div>
      <?php endif; ?>

      <form class="fg-project-form fg-project-form-lite" method="post" action="<?php echo esc_url(fg_url('/contatti/')); ?>" data-catalog="<?php echo esc_attr($catalog_json); ?>" data-old="<?php echo esc_attr($old_json); ?>">
        <?php wp_nonce_field('fg_contact_form_submit', 'fg_contact_nonce'); ?>
        <input type="hidden" name="fg_contact_action" value="send_project_request">
        <p class="fg-hp-field" aria-hidden="true">
          <label for="fg-website">Website</label>
          <input id="fg-website" type="text" name="website" value="" tabindex="-1" autocomplete="off">
        </p>

        <div class="fg-form-grid two-cols">
          <div class="fg-field">
            <label for="fg-nome"><?php echo esc_html(fg_t('Nome', 'Name')); ?> *</label>
            <input id="fg-nome" type="text" name="nome" value="<?php echo esc_attr($old_value('nome')); ?>" autocomplete="name" required>
          </div>
          <div class="fg-field">
            <label for="fg-email"><?php echo esc_html(fg_t('Email', 'Email')); ?> *</label>
            <input id="fg-email" type="email" name="email" value="<?php echo esc_attr($old_value('email')); ?>" autocomplete="email" required>
          </div>
        </div>

        <div class="fg-form-grid two-cols fg-form-topline">
          <div class="fg-field">
            <label for="fg-categoria"><?php echo esc_html(fg_t('Categoria', 'Category')); ?> *</label>
            <select id="fg-categoria" name="categoria" required>
              <option value=""><?php echo esc_html(fg_t('Seleziona categoria', 'Select a category')); ?></option>
              <?php foreach ($catalog as $category_key => $category) : ?>
                <option value="<?php echo esc_attr($category_key); ?>" <?php selected($selected_category, $category_key); ?>><?php echo esc_html($category['label']); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="fg-field">
            <label for="fg-servizio"><?php echo esc_html(fg_t('Servizio', 'Service')); ?> *</label>
            <select id="fg-servizio" name="servizio" required <?php echo empty($selected_category) ? 'disabled' : ''; ?>>
              <?php if (!empty($selected_category) && isset($catalog[$selected_category]['services'])) : ?>
                <option value=""><?php echo esc_html(fg_t('Seleziona un servizio', 'Select a service')); ?></option>
                <?php foreach ($catalog[$selected_category]['services'] as $service_key => $service) : ?>
                  <option value="<?php echo esc_attr($service_key); ?>" <?php selected($selected_service, $service_key); ?>><?php echo esc_html($service['label']); ?></option>
                <?php endforeach; ?>
              <?php else : ?>
                <option value=""><?php echo esc_html(fg_t('Seleziona prima una categoria', 'Select a category first')); ?></option>
              <?php endif; ?>
            </select>
          </div>
        </div>

        <p class="fg-field-note fg-field-tip-inline" data-service-copy>
          <?php echo esc_html(fg_t('Scegli categoria e servizio: mi aiuta a capire subito contesto, priorità e direzione migliore.', 'Choose category and service: it helps me understand context, priorities and the best direction quickly.')); ?>
        </p>

        <div class="fg-form-grid two-cols fg-dynamic-fields" data-dynamic-fields></div>

        <div class="fg-form-grid three-cols">
          <div class="fg-field">
            <label for="fg-brand"><?php echo esc_html(fg_t('Brand / progetto', 'Brand / project')); ?></label>
            <input id="fg-brand" type="text" name="brand" value="<?php echo esc_attr($old_value('brand')); ?>" placeholder="<?php echo esc_attr(fg_t('Nome attività, canale o progetto', 'Business, channel or project name')); ?>">
          </div>
          <div class="fg-field">
            <label for="fg-budget"><?php echo esc_html(fg_t('Budget indicativo', 'Indicative budget')); ?></label>
            <input id="fg-budget" type="text" name="budget" value="<?php echo esc_attr($old_value('budget')); ?>" placeholder="<?php echo esc_attr(fg_t('Es. 300-800€', 'e.g. 300-800€')); ?>">
          </div>
          <div class="fg-field">
            <label for="fg-tempistiche"><?php echo esc_html(fg_t('Tempistiche', 'Timeline')); ?></label>
            <input id="fg-tempistiche" type="text" name="tempistiche" value="<?php echo esc_attr($old_value('tempistiche')); ?>" placeholder="<?php echo esc_attr(fg_t('Es. entro 30 giorni', 'e.g. within 30 days')); ?>">
          </div>
        </div>

        <div class="fg-form-grid two-cols">
          <div class="fg-field">
            <label for="fg-telefono"><?php echo esc_html(fg_t('Telefono / Discord', 'Phone / Discord')); ?></label>
            <input id="fg-telefono" type="text" name="telefono" value="<?php echo esc_attr($old_value('telefono')); ?>" placeholder="<?php echo esc_attr(fg_t('Facoltativo', 'Optional')); ?>">
          </div>
          <div class="fg-field">
            <label for="fg-link"><?php echo esc_html(fg_t('Sito / social / reference', 'Website / social / reference')); ?></label>
            <input id="fg-link" type="url" name="link" value="<?php echo esc_attr($old_value('link')); ?>" placeholder="https://">
          </div>
        </div>

        <div class="fg-field">
          <label for="fg-deliverable"><?php echo esc_html(fg_t('Cosa ti serve?', 'What do you need?')); ?></label>
          <input id="fg-deliverable" type="text" name="deliverable" value="<?php echo esc_attr($old_value('deliverable')); ?>" placeholder="<?php echo esc_attr(fg_t('Es. logo, sito vetrina, overlay, restyling…', 'e.g. logo, showcase website, overlay, redesign…')); ?>">
        </div>

        <div class="fg-field">
          <label for="fg-messaggio"><?php echo esc_html(fg_t('Descrizione del progetto', 'Project description')); ?> *</label>
          <textarea id="fg-messaggio" name="messaggio" required placeholder="<?php echo esc_attr(fg_t('Racconta obiettivo, situazione attuale, stile desiderato, riferimenti, tempi e dubbi principali.', 'Share goals, current situation, desired style, references, timing and main questions.')); ?>"><?php echo esc_textarea($old_value('messaggio')); ?></textarea>
        </div>

        <div class="fg-form-submit">
          <label class="fg-checkbox">
            <input type="checkbox" name="privacy" value="1" <?php checked($old_value('privacy'), '1'); ?> required>
            <span><?php echo wp_kses_post(fg_t('Confermo di aver letto la <a href="/privacy-policy/">Privacy Policy</a> e autorizzo il trattamento dei dati per ricevere risposta alla richiesta.', 'I confirm that I have read the <a href="/privacy-policy/?lang=en">Privacy Policy</a> and authorize data processing to receive a reply.')); ?></span>
          </label>
          <div class="fg-submit-wrap">
            <button class="fg-button is-primary" type="submit"><?php echo esc_html(fg_t('Invia il progetto', 'Send project')); ?></button>
            <span class="fg-field-note"><?php echo esc_html(fg_t('Risposta chiara entro 24-48 ore lavorative.', 'Clear reply within 24-48 business hours.')); ?></span>
          </div>
        </div>
      </form>
    </div>
<?php if (!$embedded) : ?>
  </div>
</section>
<?php endif; ?>
    <?php
}
