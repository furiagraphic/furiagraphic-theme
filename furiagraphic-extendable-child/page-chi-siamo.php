<?php
defined('ABSPATH') || exit;
/* Template Name: FuriaGraphic About Page */
fg_site_start('chi-siamo');
$en = fg_is_en();
?>

<section class="fg-section fg-about-page">
  <div class="fg-container">
    <div class="fg-page-title-wrap fg-reveal is-visible fg-page-title-wrap--left">
      <div class="fg-section-kicker"><?php echo esc_html(fg_t('Chi è FuriaGraphic', 'About')); ?></div>
      <h1 class="fg-page-title"><?php echo wp_kses_post(fg_t('Progetti digitali <span class="fg-gold-text">chiari e riconoscibili</span>', 'Digital projects <span class="fg-gold-text">clear and recognizable</span>')); ?></h1>
    </div>

    <div class="fg-about-grid fg-reveal is-visible">
      <div class="fg-about-copy">
        <p><?php echo esc_html(fg_t('FuriaGraphic è uno studio creativo digitale per freelance, piccole attività e creator. Progetto branding, siti web e asset digitali con un obiettivo semplice: rendere il progetto più chiaro, curato e facile da riconoscere.', 'FuriaGraphic is a digital creative studio for freelancers, small businesses and creators. I design branding, websites and digital assets with one goal: making the project clearer, more polished and easier to recognize.')); ?></p>
        <p><?php echo esc_html(fg_t('Ogni lavoro parte da ascolto, obiettivi e contesto. Solo dopo arrivano stile, colori, layout e dettagli. Così il design smette di essere decorazione e diventa identità.', 'Every project starts from listening, goals and context. Only then come style, colors, layouts and details. That is where design stops being decoration and becomes identity.')); ?></p>
      </div>

      <div class="fg-about-photo-card">
        <img class="fg-about-photo-media" src="https://www.furiagraphic.com/wp-content/uploads/2026/04/80c3056b-e100-4d5e-a434-64e39055dbde-e1775924768388.jpg" alt="FuriaGraphic studio creativo digitale">
        <div class="fg-about-photo-glow"></div>
        <div class="fg-about-photo-border"></div>
        <div class="fg-about-photo-content">
          <div class="fg-about-photo-label">Creative Digital Studio</div>
          <h3>FuriaGraphic</h3>
          <p><?php echo esc_html(fg_t('Logo, siti web, brand identity e grafiche digitali progettati con cura, criterio e zero template senz’anima.', 'Logos, websites, brand identity and digital graphics designed with care, intention and zero soulless templates.')); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="fg-section fg-values-section">
  <div class="fg-container">
    <div class="fg-section-intro fg-reveal">
      <div class="fg-section-kicker"><?php echo esc_html(fg_t('Il metodo FuriaGraphic', 'The FuriaGraphic method')); ?></div>
      <h2 class="fg-section-title"><?php echo esc_html(fg_t('I principi del lavoro', 'The principles behind the work')); ?></h2>
      <p class="fg-section-sub"><?php echo esc_html(fg_t('Il risultato deve essere leggibile, coerente e riconoscibile. Meno elementi casuali, più scelte utili.', 'A good result has to be readable, coherent and recognizable. Fewer random elements, more useful choices.')); ?></p>
    </div>

    <div class="fg-values-grid fg-reveal">
      <?php
      $values = $en ? [
        ['✦','Clarity','A project truly works when it is readable, balanced and easy to understand at first glance.'],
        ['◎','Attention to detail','Typography, color and structure need to work together if the final result has to feel solid.'],
        ['♡','Listening','Every project starts from what you want to communicate, not from a pre-made answer.'],
        ['⚡','Consistency','The goal is to create something that keeps working over time, not something that looks good only for a moment.'],
      ] : [
        ['✦','Chiarezza','Un progetto funziona davvero quando è leggibile, equilibrato e facile da capire fin dal primo sguardo.'],
        ['◎','Attenzione ai dettagli','Tipografia, colore e struttura devono lavorare insieme se il risultato finale deve trasmettere solidità.'],
        ['♡','Ascolto','Ogni progetto parte da ciò che vuoi comunicare, non da una risposta già pronta.'],
        ['⚡','Coerenza','L’obiettivo è creare qualcosa che continui a funzionare nel tempo, non qualcosa che sembra bello solo per un momento.'],
      ];
      foreach ($values as $value) : ?>
      <article class="fg-value-card"><div class="fg-value-icon"><?php echo esc_html($value[0]); ?></div><h3><?php echo esc_html($value[1]); ?></h3><p><?php echo esc_html($value[2]); ?></p></article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="fg-section fg-approach-section">
  <div class="fg-container">
    <div class="fg-approach-copy fg-reveal">
      <div class="fg-section-kicker"><?php echo esc_html(fg_t('L’approccio FuriaGraphic', 'The FuriaGraphic approach')); ?></div>
      <h2 class="fg-section-title"><?php echo esc_html(fg_t('Metodo chiaro, risultato solido', 'Clear method, solid result')); ?></h2>
      <p><?php echo esc_html(fg_t('Si parte da cosa vuoi comunicare, a chi parli e cosa oggi non funziona. Da lì nasce una direzione visiva adatta al tuo brand, sito o canale.', 'We start from what you want to communicate, who you speak to and what is not working today. From there, a visual direction is built around your brand, website or channel.')); ?></p>
      <p><?php echo esc_html(fg_t('Poi si lavora su struttura, stile, leggibilità e file finali. L’obiettivo resta uno: rendere il progetto più professionale e riconoscibile.', 'Then we work on structure, style, readability and final files. The goal stays the same: making the project more professional and recognizable.')); ?></p>
      <div class="fg-cta-actions"><a class="fg-button is-primary" href="<?php echo esc_url(fg_url('/contatti/')); ?>"><?php echo esc_html(fg_t('Racconta il tuo progetto', 'Share your project')); ?></a></div>
    </div>
  </div>
</section>

<?php fg_site_end(); ?>
