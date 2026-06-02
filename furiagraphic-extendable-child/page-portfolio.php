<?php
defined('ABSPATH') || exit;
/* Template Name: FuriaGraphic Portfolio Page */

$theme_uri = get_stylesheet_directory_uri();
$en = fg_is_en();

$fg_projects_it = [
    ['title'=>'Logo istituzionale','client'=>'Pro Loco Montesilvano','category'=>'branding','category_label'=>'Logo','excerpt'=>'Un logo istituzionale progettato per rappresentare l’associazione con un’identità chiara, autorevole e facile da applicare su materiali digitali e stampati.','image'=>$theme_uri.'/assets/images/mockup-logo.webp','alt'=>'Logo design istituzionale per Pro Loco Montesilvano con mockup coordinato','featured'=>false],
    ['title'=>'Brand identity cybersecurity','client'=>'CyberConsult','category'=>'branding','category_label'=>'Brand Identity','excerpt'=>'Una brand identity per il settore cybersecurity con logo, biglietti da visita, carta intestata, cartellina e materiali coordinati dal look tecnico, pulito e affidabile.','image'=>$theme_uri.'/assets/images/mockup-cyberconsult.webp','alt'=>'Brand identity CyberConsult con logo biglietti da visita carta intestata e materiali coordinati','featured'=>false],
    ['title'=>'Brand identity coordinata','client'=>'Progetto brand','category'=>'branding','category_label'=>'Brand Identity','excerpt'=>'Un progetto di immagine coordinata pensato per dare coerenza visiva a biglietti da visita, fogli, intestazioni e materiali stampati per la comunicazione professionale.','image'=>$theme_uri.'/assets/images/mockup-brand.webp','alt'=>'Mockup brand identity con biglietti da visita fogli intestazioni e materiali coordinati','featured'=>false,'requires_file'=>'mockup-brand.webp'],
    ['title'=>'Locandine evento','client'=>'Pro Loco Montesilvano','category'=>'branding','category_label'=>'Locandine','excerpt'=>'Una serie di locandine promozionali sviluppate per comunicare eventi, date e informazioni principali in modo chiaro e con un forte impatto visivo.','image'=>$theme_uri.'/assets/images/mockup-locandine.webp','alt'=>'Locandine evento per Pro Loco Montesilvano con grafica promozionale coordinata','featured'=>false],
    ['title'=>'Visual per evento gaming','client'=>'Oni Esports','category'=>'branding','category_label'=>'Gaming Visual','excerpt'=>'Grafiche evento e segnaletica a tema progettate per rafforzare l’atmosfera generale e rendere l’esperienza più immersiva.','image'=>$theme_uri.'/assets/images/mockup-locandine-oni.webp','alt'=>'Visual per evento gaming Oni Esports con grafiche e materiali promozionali','featured'=>false],
    ['title'=>'Setup grafico per streaming','client'=>'Soloduefurie','category'=>'streaming','category_label'=>'Streaming','excerpt'=>'Un setup per lo streaming costruito intorno a un’identità fantasy, con overlay, pannelli ed elementi visivi personalizzati. Il design rafforza l’atmosfera della live e crea un’esperienza più coinvolgente e riconoscibile per chi guarda.','image'=>$theme_uri.'/assets/images/mockup-soloduefurie.webp','alt'=>'Setup grafico streaming fantasy per Soloduefurie con overlay e pannelli personalizzati','featured'=>false],
    ['title'=>'Pacchetto grafico streaming','client'=>'Steel','category'=>'streaming','category_label'=>'Streaming','excerpt'=>'Un setup grafico per lo streaming ispirato all’estetica cartoon giapponese e anime, con overlay, pannelli ed elementi visivi dal forte impatto.','image'=>$theme_uri.'/assets/images/mockup-steel.webp','alt'=>'Pacchetto grafico streaming Steel con overlay e pannelli in stile anime','featured'=>false],
    ['title'=>'Pacchetto grafico streaming','client'=>'TheBoogeyman','category'=>'streaming','category_label'=>'Streaming','excerpt'=>'Un pacchetto grafico per lo streaming progettato intorno a un’identità rossa e nera dal carattere deciso, con overlay, pannelli ed elementi visual coordinati.','image'=>$theme_uri.'/assets/images/mockup-boogeyman.webp','alt'=>'Pacchetto grafico streaming TheBoogeyman con overlay rossi e neri coordinati','featured'=>false],
    ['title'=>'Sito corporate','client'=>'SN Italy','category'=>'web-design','category_label'=>'Sito Web','excerpt'=>'Un sito corporate progettato per presentare servizi di office automation, noleggio stampanti e assistenza IT con una struttura chiara e un’immagine professionale.','image'=>$theme_uri.'/assets/images/mockup-snitaly.webp','alt'=>'Sito web corporate SN Italy per servizi di office automation e assistenza IT','featured'=>false,'url'=>'https://www.snitaly.com/'],
    ['title'=>'Sito portfolio','client'=>'FuriaGraphic','category'=>'web-design','category_label'=>'Sito Web','excerpt'=>'Un sito portfolio costruito per presentare servizi di graphic design e web design con un’identità visiva nera e oro, testi SEO e percorsi chiari verso contatto, portfolio e servizi.','image'=>$theme_uri.'/assets/images/mockup-furiagraphic.webp','alt'=>'Sito portfolio FuriaGraphic con design nero e oro per servizi graphic design','featured'=>false],
];
$fg_projects_en = [
    ['title'=>'Institutional logo','client'=>'Pro Loco Montesilvano','category'=>'branding','category_label'=>'Logo','excerpt'=>'An institutional logo designed to represent the association with a clear, authoritative identity that works across digital and printed materials.','image'=>$theme_uri.'/assets/images/mockup-logo.webp','alt'=>'Institutional logo design for Pro Loco Montesilvano with coordinated mockup','featured'=>false],
    ['title'=>'Cybersecurity brand identity','client'=>'CyberConsult','category'=>'branding','category_label'=>'Brand Identity','excerpt'=>'A brand identity for the cybersecurity field with logo, business cards, letterhead, folder and coordinated materials with a technical, clean and reliable look.','image'=>$theme_uri.'/assets/images/mockup-cyberconsult.webp','alt'=>'CyberConsult brand identity with logo business cards letterhead and coordinated materials','featured'=>false],
    ['title'=>'Coordinated brand identity','client'=>'Brand project','category'=>'branding','category_label'=>'Brand Identity','excerpt'=>'A coordinated identity project designed to give visual consistency to business cards, sheets, letterheads and printed materials for professional communication.','image'=>$theme_uri.'/assets/images/mockup-brand.webp','alt'=>'Brand identity mockup with business cards sheets letterheads and coordinated materials','featured'=>false,'requires_file'=>'mockup-brand.webp'],
    ['title'=>'Event posters','client'=>'Pro Loco Montesilvano','category'=>'branding','category_label'=>'Posters','excerpt'=>'A series of promotional posters developed to communicate events, dates and key information clearly with strong visual impact.','image'=>$theme_uri.'/assets/images/mockup-locandine.webp','alt'=>'Event posters for Pro Loco Montesilvano with coordinated promotional graphics','featured'=>false],
    ['title'=>'Gaming event visuals','client'=>'Oni Esports','category'=>'branding','category_label'=>'Gaming Visual','excerpt'=>'Event graphics and themed signage designed to strengthen the atmosphere and make the experience more immersive.','image'=>$theme_uri.'/assets/images/mockup-locandine-oni.webp','alt'=>'Gaming event visuals for Oni Esports with promotional graphics and materials','featured'=>false],
    ['title'=>'Streaming graphic setup','client'=>'Soloduefurie','category'=>'streaming','category_label'=>'Streaming','excerpt'=>'A streaming setup built around a fantasy identity, with custom overlays, panels and visual elements that make the live experience more engaging and recognizable.','image'=>$theme_uri.'/assets/images/mockup-soloduefurie.webp','alt'=>'Fantasy streaming graphic setup for Soloduefurie with custom overlays and panels','featured'=>false],
    ['title'=>'Streaming graphic package','client'=>'Steel','category'=>'streaming','category_label'=>'Streaming','excerpt'=>'A streaming graphics setup inspired by Japanese cartoon and anime aesthetics, with high-impact overlays, panels and visual details.','image'=>$theme_uri.'/assets/images/mockup-steel.webp','alt'=>'Steel streaming graphics package with anime style overlays and panels','featured'=>false],
    ['title'=>'Streaming graphic package','client'=>'TheBoogeyman','category'=>'streaming','category_label'=>'Streaming','excerpt'=>'A streaming package built around a bold red and black identity, with coordinated overlays, panels and visual assets.','image'=>$theme_uri.'/assets/images/mockup-boogeyman.webp','alt'=>'TheBoogeyman streaming graphics package with coordinated red and black overlays','featured'=>false],
    ['title'=>'Corporate website','client'=>'SN Italy','category'=>'web-design','category_label'=>'Website','excerpt'=>'A corporate website designed to present office automation, printer rental and IT support services with a clear structure and professional image.','image'=>$theme_uri.'/assets/images/mockup-snitaly.webp','alt'=>'SN Italy corporate website for office automation and IT support services','featured'=>false,'url'=>'https://www.snitaly.com/'],
    ['title'=>'Portfolio website','client'=>'FuriaGraphic','category'=>'web-design','category_label'=>'Website','excerpt'=>'A portfolio website built to present graphic and web design services through a black-and-gold identity, SEO-oriented copy and clear paths to contact, portfolio and services.','image'=>$theme_uri.'/assets/images/mockup-furiagraphic.webp','alt'=>'FuriaGraphic portfolio website with black and gold design for graphic design services','featured'=>false],
];
$fg_projects = array_values(array_filter($en ? $fg_projects_en : $fg_projects_it, function ($project) {
    if (empty($project['requires_file'])) {
        return true;
    }
    return file_exists(get_stylesheet_directory() . '/assets/images/' . $project['requires_file']);
}));
fg_site_start('portfolio');
?>

<section class="fg-section fg-portfolio-editorial-page">
  <div class="fg-container fg-portfolio-editorial-shell">
    <header class="fg-portfolio-editorial-hero fg-reveal is-visible">
      <div class="fg-section-kicker">Portfolio</div>
      <h1 class="fg-page-title"><?php echo esc_html(fg_t('Portfolio FuriaGraphic', 'FuriaGraphic Portfolio')); ?></h1>
      <p class="fg-page-sub"><?php echo esc_html(fg_t('Una selezione di lavori tra branding, siti web e streaming pack: progetti ordinati, riconoscibili e pensati per essere usati davvero.', 'A selection of work across branding, websites and streaming packs: organized, recognizable projects designed for real use.')); ?></p>
    </header>

    <div class="fg-portfolio-editorial-filters fg-reveal is-visible" data-portfolio-filters>
      <button class="fg-portfolio-filter is-active" type="button" data-filter="all"><?php echo esc_html(fg_t('Tutti', 'All')); ?></button>
      <button class="fg-portfolio-filter" type="button" data-filter="branding">Branding</button>
      <button class="fg-portfolio-filter" type="button" data-filter="web-design"><?php echo esc_html(fg_t('Siti Web', 'Websites')); ?></button>
      <button class="fg-portfolio-filter" type="button" data-filter="streaming">Streaming</button>
    </div>

    <div class="fg-portfolio-editorial-grid fg-reveal is-visible" data-portfolio-grid>
      <?php foreach ($fg_projects as $project) : ?>
        <?php
          $project_id = 'portfolio-' . sanitize_title(($project['category'] ?? '') . '-' . ($project['client'] ?? '') . '-' . ($project['title'] ?? ''));
          $project_is_external = !empty($project['url']);
          $project_link = $project_is_external ? $project['url'] : fg_url('/portfolio/') . '#' . $project_id;
        ?>
        <article id="<?php echo esc_attr($project_id); ?>" class="fg-editorial-card fg-editorial-card--<?php echo esc_attr($project['category']); ?><?php echo !empty($project['featured']) ? ' is-featured' : ''; ?>" data-category="<?php echo esc_attr($project['category']); ?>">
          <a class="fg-editorial-card-link" href="<?php echo esc_url($project_link); ?>" <?php echo $project_is_external ? 'target="_blank" rel="noopener noreferrer"' : ''; ?> aria-label="<?php echo esc_attr(fg_t('Apri progetto ', 'Open project ') . $project['title']); ?>">
            <div class="fg-editorial-card-media-wrap">
              <div class="fg-editorial-card-media">
                <?php $project_webp = fg_webp_image_url($project['image']); ?>
                <picture>
                  <?php if ($project_webp) : ?>
                    <source srcset="<?php echo esc_url($project_webp); ?>" type="image/webp">
                  <?php endif; ?>
                  <img src="<?php echo esc_url($project['image']); ?>" alt="<?php echo esc_attr($project['alt'] ?? ($project['title'] . ' - ' . $project['client'])); ?>" loading="lazy" decoding="async">
                </picture>
              </div>
            </div>
            <div class="fg-editorial-card-copy">
              <div class="fg-editorial-card-top"><span class="fg-editorial-client"><?php echo esc_html($project['client']); ?></span><span class="fg-editorial-pill"><?php echo esc_html($project['category_label']); ?></span></div>
              <h2><?php echo esc_html($project['title']); ?></h2>
              <p><?php echo esc_html($project['excerpt']); ?></p>
            </div>
          </a>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const filters = document.querySelectorAll('[data-filter]');
  const cards = document.querySelectorAll('.fg-editorial-card[data-category]');
  filters.forEach((button) => {
    button.addEventListener('click', function () {
      const filter = this.getAttribute('data-filter');
      filters.forEach((item) => item.classList.remove('is-active'));
      this.classList.add('is-active');
      cards.forEach((card) => {
        const category = card.getAttribute('data-category');
        card.style.display = (filter === 'all' || category === filter) ? '' : 'none';
      });
    });
  });
});
</script>

<?php fg_site_end(); ?>
