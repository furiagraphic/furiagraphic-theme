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
        <div class="fg-eyebrow fg-hero-eyebrow"><?php echo esc_html(fg_t('Branding, web design e visual per live', 'Branding, web design and live visuals')); ?></div>

        <h1 class="fg-hero-title">
          <?php echo esc_html(fg_t('Design chiaro per', 'Clear design for')); ?>
          <span class="fg-gold-text"><?php echo esc_html(fg_t('brand, siti e contenuti.', 'brands, websites and content.')); ?></span>
        </h1>

        <p class="fg-hero-sub"><?php echo esc_html(fg_t('Creo identità visive, siti web e grafiche coordinate per creator, freelance e piccole attività che vogliono presentarsi meglio online.', 'I create visual identities, websites and coordinated graphics for creators, freelancers and small businesses that want to present themselves better online.')); ?></p>
        <div class="fg-hero-actions">
          <a class="fg-button is-primary" href="<?php echo esc_url(fg_service_category_url('graphic-design')); ?>"><?php echo esc_html(fg_t('Scegli il servizio', 'Choose a service')); ?></a>
          <a class="fg-button is-secondary" href="<?php echo esc_url(fg_url('/portfolio/')); ?>"><?php echo esc_html(fg_t('Vedi i progetti', 'See the projects')); ?></a>
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
      <div class="fg-section-kicker"><?php echo esc_html(fg_t('Servizi chiari', 'Clear services')); ?></div>
      <h2 class="fg-section-title"><?php echo esc_html(fg_t('Tre modi per rendere il progetto più riconoscibile', 'Three ways to make your project more recognizable')); ?></h2>
      <p class="fg-section-sub"><?php echo esc_html(fg_t('Dal logo al sito, fino agli asset per live: ogni elemento viene progettato per essere coerente, leggibile e pronto da usare nei punti in cui il pubblico incontra il tuo progetto.', 'From logo to website to live assets: every element is designed to be consistent, readable and ready to use wherever your audience meets your project.')); ?></p>
    </div>

    <div class="fg-service-grid fg-reveal">
      <article class="fg-service-box">
        <div class="fg-service-icon"><svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="8" stroke="currentColor" stroke-width="1.2"/><circle cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.2"/></svg></div>
        <h3>Branding</h3>
        <p class="fg-service-sub"><?php echo esc_html(fg_t('Logo, palette, stile e materiali coordinati', 'Logo, palette, style and coordinated assets')); ?></p>
        <p><?php echo esc_html(fg_t('Logo, colori, tipografia e materiali coordinati per dare al brand un aspetto più solido, coerente e memorabile.', 'Logo, colors, typography and coordinated assets to make the brand feel stronger, coherent and memorable.')); ?></p>
        <ul class="fg-service-list"><li>Logo design</li><li><?php echo esc_html(fg_t('Identità visiva', 'Visual identity')); ?></li><li><?php echo esc_html(fg_t('Grafiche coordinate', 'Coordinated graphics')); ?></li><li><?php echo esc_html(fg_t('Materiali social e stampa', 'Social and print assets')); ?></li></ul>
      </article>

      <article class="fg-service-box">
        <div class="fg-service-icon"><svg viewBox="0 0 24 24" fill="none"><rect x="4" y="5" width="16" height="14" rx="2" stroke="currentColor" stroke-width="1.2"/><line x1="4" y1="9" x2="20" y2="9" stroke="currentColor" stroke-width="1.2"/></svg></div>
        <h3><?php echo esc_html(fg_t('Web design', 'Web design')); ?></h3>
        <p class="fg-service-sub"><?php echo esc_html(fg_t('Siti web chiari, responsive e orientati al contatto', 'Clear, responsive websites built to convert')); ?></p>
        <p><?php echo esc_html(fg_t('Siti vetrina, landing e restyling con struttura pulita, testi leggibili, mobile curato e un percorso semplice verso il contatto.', 'Websites, landing pages and redesigns with clean structure, readable copy, polished mobile design and a simple path to contact.')); ?></p>
        <ul class="fg-service-list"><li><?php echo esc_html(fg_t('Siti vetrina', 'Showcase websites')); ?></li><li>Landing page</li><li><?php echo esc_html(fg_t('Restyling siti web', 'Website redesign')); ?></li><li><?php echo esc_html(fg_t('Design responsive', 'Responsive design')); ?></li></ul>
      </article>

      <article class="fg-service-box">
        <div class="fg-service-icon"><svg viewBox="0 0 24 24" fill="none"><rect x="6" y="6" width="12" height="12" stroke="currentColor" stroke-width="1.2"/><rect x="9" y="9" width="6" height="6" stroke="currentColor" stroke-width="1.2"/></svg></div>
        <h3>Streaming pack</h3>
        <p class="fg-service-sub"><?php echo esc_html(fg_t('Overlay, pannelli e scene per live più riconoscibili', 'Overlays, panels and scenes for recognizable streams')); ?></p>
        <p><?php echo esc_html(fg_t('Overlay, pannelli e schermate coordinate per dare identità alla live senza creare caos visivo.', 'Overlays, panels and coordinated screens to give your stream identity without visual clutter.')); ?></p>
        <ul class="fg-service-list"><li><?php echo esc_html(fg_t('Overlay personalizzati', 'Custom overlays')); ?></li><li><?php echo esc_html(fg_t('Pannelli', 'Panels')); ?></li><li><?php echo esc_html(fg_t('Schermate iniziali e finali', 'Starting and ending screens')); ?></li><li><?php echo esc_html(fg_t('Visual per live streaming', 'Live streaming visuals')); ?></li></ul>
      </article>
    </div>
  </div>
</section>

<section class="fg-section">
  <div class="fg-container">
    <div class="fg-section-intro fg-reveal">
      <div class="fg-section-kicker"><?php echo esc_html(fg_t('Come lavoro', 'How I work')); ?></div>
      <h2 class="fg-section-title"><?php echo esc_html(fg_t('Metodo ordinato, risultato più solido', 'Organized method, stronger result')); ?></h2>
      <p class="fg-section-sub"><?php echo esc_html(fg_t('Prima si chiariscono obiettivo e priorità, poi si progetta. Così il risultato resta coerente, utile e pronto per essere usato davvero.', 'First we clarify goals and priorities, then we design. This keeps the result coherent, useful and ready for real use.')); ?></p>
    </div>

    <div class="fg-process-grid fg-reveal">
      <?php
      $steps = $en ? [
        ['01','◌','Listen','We start from what you do, who you want to reach and what the project needs to achieve. A clear direction avoids guesswork and makes every design choice sharper.'],
        ['02','◍','Visual direction','I turn ideas and references into a coherent visual language: style, colors, hierarchy, tone and structure. This is where the project starts gaining personality.'],
        ['03','✎','Design','I design every element with aesthetics, readability and real use in mind. The result should look good, of course, but also feel clear, solid and consistent wherever it appears.'],
        ['04','✦','Delivery','You receive organized files, useful versions and practical guidance so you can use everything without doubts. This way, the project keeps working after delivery.'],
      ] : [
        ['01','◌','Ascolto','Partiamo da quello che fai, dal pubblico che vuoi raggiungere e dal risultato che vuoi ottenere. Una direzione chiara evita giri a vuoto e rende ogni scelta più precisa.'],
        ['02','◍','Direzione visiva','Trasformo idee e reference in un linguaggio visivo coerente: stile, colori, gerarchie, tono e struttura. È qui che il progetto inizia ad avere personalità.'],
        ['03','✎','Progetto','Ogni elemento viene progettato pensando a estetica, leggibilità e utilizzo reale. Il risultato deve essere bello, sì, ma soprattutto chiaro, solido e coerente ovunque venga applicato.'],
        ['04','✦','Consegna','Ricevi file ordinati, versioni utili e indicazioni pratiche per usare il materiale senza dubbi. Così il progetto continua a funzionare anche dopo la consegna.'],
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
      <div class="fg-section-kicker"><?php echo esc_html(fg_t('Partiamo da qui', 'Start here')); ?></div>
      <h2 class="fg-section-title"><?php echo wp_kses_post(fg_t('Diamo al progetto un’immagine <span class="fg-gold-text">più chiara e riconoscibile.</span>', 'Let’s give your project a <span class="fg-gold-text">clearer, recognizable image.</span>')); ?></h2>
      <p class="fg-section-sub"><?php echo esc_html(fg_t('Dimmi cosa vuoi migliorare: identità, sito o live. Partiamo da quello che hai e costruiamo una direzione più ordinata, credibile e coerente.', 'Tell me what you want to improve: identity, website or live presence. We’ll start from what you have and build a cleaner, more credible direction.')); ?></p>
      <div class="fg-cta-actions">
        <a class="fg-button is-primary" href="<?php echo esc_url(fg_url('/contatti/')); ?>"><?php echo esc_html(fg_t('Iniziamo dal tuo progetto', 'Start with your project')); ?></a>
        <a class="fg-button is-secondary" href="<?php echo esc_url(fg_url('/portfolio/')); ?>"><?php echo esc_html(fg_t('Vedi i progetti', 'See the projects')); ?></a>
      </div>
    </div>
  </div>
</section>

<?php fg_site_end(); ?>
