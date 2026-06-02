<?php
defined('ABSPATH') || exit;
fg_site_start('home');
$en = fg_is_en();
?>

<section class="fg-page-hero home-hero">
  <div class="fg-hero-bg"></div>
  <div class="fg-hero-grid"></div>
  <div class="fg-hero-light fg-hero-light-one"></div>
  <div class="fg-hero-light fg-hero-light-two"></div>

  <div class="fg-container">
    <div class="fg-hero-inner">
      <div class="fg-hero-copy fg-reveal is-visible">
        <div class="fg-eyebrow fg-hero-eyebrow"><?php echo esc_html(fg_t('Branding, web design e visual per creator', 'Branding, web design and creator visuals')); ?></div>

        <h1 class="fg-hero-title">
          <?php echo esc_html(fg_t('Un’identità più chiara per', 'A clearer identity for')); ?>
          <span class="fg-gold-text"><?php echo esc_html(fg_t('brand, siti e live.', 'brands, websites and streams.')); ?></span>
        </h1>

        <p class="fg-hero-sub"><?php echo esc_html(fg_t('FuriaGraphic progetta identità visive, siti web e streaming pack per freelance, attività e creator che vogliono presentarsi con più ordine, stile e riconoscibilità.', 'FuriaGraphic designs visual identities, websites and streaming packs for freelancers, businesses and creators who want to look more structured, polished and recognizable.')); ?></p>
        <div class="fg-hero-actions">
          <a class="fg-button is-primary" href="<?php echo esc_url(fg_service_category_url('graphic-design')); ?>"><?php echo esc_html(fg_t('Trova il servizio giusto', 'Find the right service')); ?></a>
          <a class="fg-button is-secondary" href="<?php echo esc_url(fg_url('/portfolio/')); ?>"><?php echo esc_html(fg_t('Guarda i lavori', 'View the work')); ?></a>
        </div>

        <div class="fg-scroll-note"><?php echo esc_html(fg_t('Scorri', 'Scroll')); ?></div>
      </div>

      <div class="fg-hero-visual fg-reveal is-visible">
        <div class="fg-hero-card">
          <div class="fg-hero-card-border"></div>
          <div class="fg-hero-card-glow"></div>
          <div class="fg-hero-card-content"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="fg-section">
  <div class="fg-container">
    <div class="fg-section-intro fg-reveal">
      <div class="fg-section-kicker"><?php echo esc_html(fg_t('Servizi', 'Services')); ?></div>
      <h2 class="fg-section-title"><?php echo esc_html(fg_t('Tre percorsi per dare forma alla tua presenza online', 'Three paths to shape your online presence')); ?></h2>
      <p class="fg-section-sub"><?php echo esc_html(fg_t('Dal primo impatto visivo al sito, fino agli asset per la live: ogni elemento viene progettato con una direzione unica, così il progetto appare coerente ovunque venga incontrato.', 'From first visual impression to website and live assets: every element is designed around one direction, so your project feels consistent wherever people meet it.')); ?></p>
    </div>

    <div class="fg-service-grid fg-reveal">
      <article class="fg-service-box">
        <div class="fg-service-icon"><svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="8" stroke="currentColor" stroke-width="1.2"/><circle cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.2"/></svg></div>
        <h3>Branding</h3>
        <p class="fg-service-sub"><?php echo esc_html(fg_t('Logo, identità visiva e materiali coordinati', 'Logos, visual identity and coordinated assets')); ?></p>
        <p><?php echo esc_html(fg_t('Costruisco un sistema visivo riconoscibile: logo, colori, tipografia e applicazioni pensate per far percepire il brand più solido e professionale.', 'I build a recognizable visual system: logo, colors, typography and applications designed to make the brand feel stronger and more professional.')); ?></p>
        <ul class="fg-service-list"><li>Logo design</li><li><?php echo esc_html(fg_t('Identità visiva', 'Visual identity')); ?></li><li><?php echo esc_html(fg_t('Grafiche coordinate', 'Coordinated graphics')); ?></li><li><?php echo esc_html(fg_t('Social e stampa', 'Social and print')); ?></li></ul>
      </article>

      <article class="fg-service-box">
        <div class="fg-service-icon"><svg viewBox="0 0 24 24" fill="none"><rect x="4" y="5" width="16" height="14" rx="2" stroke="currentColor" stroke-width="1.2"/><line x1="4" y1="9" x2="20" y2="9" stroke="currentColor" stroke-width="1.2"/></svg></div>
        <h3><?php echo esc_html(fg_t('Web design', 'Web design')); ?></h3>
        <p class="fg-service-sub"><?php echo esc_html(fg_t('Siti chiari, responsive e pronti al contatto', 'Clear, responsive websites ready to convert')); ?></p>
        <p><?php echo esc_html(fg_t('Creo siti vetrina, landing e restyling con struttura leggibile, mobile curato e un percorso semplice che accompagna l’utente verso la richiesta.', 'I create showcase websites, landing pages and redesigns with readable structure, polished mobile design and a simple path that guides users toward enquiry.')); ?></p>
        <ul class="fg-service-list"><li><?php echo esc_html(fg_t('Siti vetrina', 'Showcase websites')); ?></li><li>Landing page</li><li><?php echo esc_html(fg_t('Restyling', 'Redesign')); ?></li><li><?php echo esc_html(fg_t('Design responsive', 'Responsive design')); ?></li></ul>
      </article>

      <article class="fg-service-box">
        <div class="fg-service-icon"><svg viewBox="0 0 24 24" fill="none"><rect x="6" y="6" width="12" height="12" stroke="currentColor" stroke-width="1.2"/><rect x="9" y="9" width="6" height="6" stroke="currentColor" stroke-width="1.2"/></svg></div>
        <h3>Streaming pack</h3>
        <p class="fg-service-sub"><?php echo esc_html(fg_t('Overlay, pannelli e scene per live memorabili', 'Overlays, panels and scenes for memorable streams')); ?></p>
        <p><?php echo esc_html(fg_t('Disegno asset coordinati per Twitch, YouTube e Kick: una live più ordinata, riconoscibile e coerente, senza coprire il contenuto con caos visivo.', 'I design coordinated assets for Twitch, YouTube and Kick: a cleaner, recognizable and consistent live setup without covering the content in visual noise.')); ?></p>
        <ul class="fg-service-list"><li><?php echo esc_html(fg_t('Overlay personalizzati', 'Custom overlays')); ?></li><li><?php echo esc_html(fg_t('Pannelli canale', 'Channel panels')); ?></li><li><?php echo esc_html(fg_t('Scene stream', 'Stream scenes')); ?></li><li><?php echo esc_html(fg_t('Asset OBS', 'OBS assets')); ?></li></ul>
      </article>
    </div>
  </div>
</section>

<section class="fg-section">
  <div class="fg-container">
    <div class="fg-section-intro fg-reveal">
      <div class="fg-section-kicker"><?php echo esc_html(fg_t('Metodo', 'Method')); ?></div>
      <h2 class="fg-section-title"><?php echo esc_html(fg_t('Prima la direzione, poi il design', 'Direction first, design second')); ?></h2>
      <p class="fg-section-sub"><?php echo esc_html(fg_t('Un progetto efficace non nasce da tentativi casuali. Prima mettiamo a fuoco obiettivo, pubblico e priorità; poi trasformiamo tutto in una soluzione visiva pulita, usabile e coerente.', 'An effective project does not come from random attempts. First we clarify goals, audience and priorities; then we turn everything into a clean, usable and consistent visual solution.')); ?></p>
    </div>

    <div class="fg-process-grid fg-reveal">
      <?php
      $steps = $en ? [
        ['01','◌','Discovery','We clarify what you do, who you need to reach and what has to improve. This gives the project a precise direction before anything is designed.'],
        ['02','◍','Visual direction','Ideas, references and positioning become a coherent language: mood, colors, typography, hierarchy and tone.'],
        ['03','✎','Design system','I design the key elements with aesthetics, readability and real use in mind, so everything feels consistent across touchpoints.'],
        ['04','✦','Delivery','You receive organized files, useful formats and practical guidance, ready to use without guessing what goes where.'],
      ] : [
        ['01','◌','Analisi','Chiariamo cosa fai, a chi parli e cosa deve migliorare. Così il progetto ha una direzione precisa prima ancora di disegnare.'],
        ['02','◍','Direzione visiva','Idee, reference e posizionamento diventano un linguaggio coerente: mood, colori, tipografia, gerarchie e tono.'],
        ['03','✎','Sistema grafico','Disegno gli elementi principali pensando a estetica, leggibilità e uso reale, così tutto resta coerente nei diversi punti di contatto.'],
        ['04','✦','Consegna','Ricevi file ordinati, formati utili e indicazioni pratiche, pronti da usare senza dover indovinare cosa va dove.'],
      ];
      foreach ($steps as $step) : ?>
      <article class="fg-process-card">
        <div class="fg-process-step"><?php echo esc_html($step[0]); ?></div>
        <div class="fg-process-icon"><?php echo esc_html($step[1]); ?></div>
        <h3><?php echo esc_html($step[2]); ?></h3>
        <span class="fg-process-divider"></span>
        <p><?php echo esc_html($step[3]); ?></p>
        <?php if ($step[0] !== '04') : ?><span class="fg-process-link">→</span><?php endif; ?>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="fg-section">
  <div class="fg-container">
    <div class="fg-cta-panel fg-reveal">
      <div class="fg-section-kicker"><?php echo esc_html(fg_t('Partiamo bene', 'Start with clarity')); ?></div>
      <h2 class="fg-section-title"><?php echo wp_kses_post(fg_t('Diamo al progetto un’immagine <span class="fg-gold-text">più credibile e riconoscibile.</span>', 'Let’s give your project a <span class="fg-gold-text">more credible, recognizable image.</span>')); ?></h2>
      <p class="fg-section-sub"><?php echo esc_html(fg_t('Raccontami cosa vuoi migliorare: identità, sito o live. Ti aiuto a trasformare quello che hai in una presenza più ordinata, professionale e coerente.', 'Tell me what you want to improve: identity, website or stream. I’ll help turn what you have into a more structured, professional and consistent presence.')); ?></p>
      <div class="fg-cta-actions">
        <a class="fg-button is-primary" href="<?php echo esc_url(fg_url('/contatti/')); ?>"><?php echo esc_html(fg_t('Racconta il progetto', 'Share the project')); ?></a>
        <a class="fg-button is-secondary" href="<?php echo esc_url(fg_url('/portfolio/')); ?>"><?php echo esc_html(fg_t('Esplora il portfolio', 'Explore the portfolio')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php fg_site_end(); ?>
