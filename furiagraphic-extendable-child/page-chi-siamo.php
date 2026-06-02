<?php
defined('ABSPATH') || exit;
/* Template Name: FuriaGraphic About Page */
fg_site_start('chi-siamo');
$en = fg_is_en();
?>

<section class="fg-section fg-about-page">
  <div class="fg-container">
    <div class="fg-page-title-wrap fg-reveal is-visible fg-page-title-wrap--left">
      <div class="fg-section-kicker"><?php echo esc_html(fg_t('Chi è FuriaGraphic', 'About FuriaGraphic')); ?></div>
      <h1 class="fg-page-title"><?php echo wp_kses_post(fg_t('Design digitale con <span class="fg-gold-text">direzione, ordine e carattere</span>', 'Digital design with <span class="fg-gold-text">direction, order and character</span>')); ?></h1>
    </div>

    <div class="fg-about-grid fg-reveal is-visible">
      <div class="fg-about-copy">
        <p><?php echo esc_html(fg_t('FuriaGraphic nasce per aiutare brand, freelance, piccole attività e creator a presentarsi meglio online. Non solo “grafiche belle”, ma identità visive, siti e asset digitali costruiti per comunicare in modo più chiaro e riconoscibile.', 'FuriaGraphic was created to help brands, freelancers, small businesses and creators present themselves better online. Not just beautiful graphics, but visual identities, websites and digital assets built to communicate with more clarity and recognition.')); ?></p>
        <p><?php echo esc_html(fg_t('Ogni progetto parte da una domanda semplice: cosa deve percepire chi ti incontra per la prima volta? Da lì nascono scelte su stile, struttura, ritmo, testi e dettagli. Il design diventa uno strumento, non una decorazione.', 'Every project starts from a simple question: what should people feel when they meet you for the first time? From there come decisions on style, structure, rhythm, copy and details. Design becomes a tool, not decoration.')); ?></p>
      </div>

      <div class="fg-about-photo-card">
        <img class="fg-about-photo-media" src="https://www.furiagraphic.com/wp-content/uploads/2026/04/80c3056b-e100-4d5e-a434-64e39055dbde-e1775924768388.jpg" alt="FuriaGraphic studio creativo digitale">
        <div class="fg-about-photo-glow"></div>
        <div class="fg-about-photo-border"></div>
        <div class="fg-about-photo-content">
          <div class="fg-about-photo-label">Creative Digital Studio</div>
          <h3>FuriaGraphic</h3>
          <p><?php echo esc_html(fg_t('Logo, siti web, brand identity e grafiche digitali progettati con criterio, cura e una direzione visiva riconoscibile.', 'Logos, websites, brand identities and digital graphics designed with intention, care and a recognizable visual direction.')); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="fg-section fg-values-section">
  <div class="fg-container">
    <div class="fg-section-intro fg-reveal">
      <div class="fg-section-kicker"><?php echo esc_html(fg_t('Metodo FuriaGraphic', 'FuriaGraphic method')); ?></div>
      <h2 class="fg-section-title"><?php echo esc_html(fg_t('Principi che rendono il lavoro più solido', 'Principles that make the work stronger')); ?></h2>
      <p class="fg-section-sub"><?php echo esc_html(fg_t('Ogni scelta deve aiutare il progetto a essere più comprensibile, coerente e memorabile. Meno rumore visivo, più intenzione.', 'Every choice should help the project become clearer, more coherent and more memorable. Less visual noise, more intention.')); ?></p>
    </div>

    <div class="fg-values-grid fg-reveal">
      <?php
      $values = $en ? [
        ['✦','Clarity','A project works when people understand what it offers, why it matters and what to do next without effort.'],
        ['◎','Precision','Typography, color, hierarchy and spacing are not details: they are what make the final result feel trustworthy.'],
        ['♡','Listening','The direction is built around your goals, audience and context, not around a pre-made style applied to everyone.'],
        ['⚡','Consistency','The result should remain recognizable across website, social media, live assets and printed or promotional materials.'],
      ] : [
        ['✦','Chiarezza','Un progetto funziona quando le persone capiscono cosa offri, perché conta e cosa fare dopo senza fatica.'],
        ['◎','Precisione','Tipografia, colore, gerarchie e spazi non sono dettagli: sono ciò che fa percepire il risultato più affidabile.'],
        ['♡','Ascolto','La direzione nasce da obiettivi, pubblico e contesto, non da uno stile preconfezionato applicato a tutti.'],
        ['⚡','Coerenza','Il risultato deve restare riconoscibile su sito, social, live, materiali stampati e contenuti promozionali.'],
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
      <div class="fg-section-kicker"><?php echo esc_html(fg_t('Approccio', 'Approach')); ?></div>
      <h2 class="fg-section-title"><?php echo esc_html(fg_t('Un processo semplice, pensato per arrivare a scelte migliori', 'A simple process designed to reach better decisions')); ?></h2>
      <p><?php echo esc_html(fg_t('Prima capiamo cosa non funziona oggi: immagine poco coerente, sito confuso, materiali sparsi o live poco riconoscibile. Poi costruiamo una direzione visiva che mette ordine e dà più forza al progetto.', 'First we understand what is not working today: inconsistent image, confusing website, scattered materials or a stream that is not recognizable enough. Then we build a visual direction that brings order and strength to the project.')); ?></p>
      <p><?php echo esc_html(fg_t('Il risultato finale deve essere bello, sì, ma anche utile: facile da usare, leggibile su mobile, coerente nei dettagli e pronto per sostenere la comunicazione quotidiana.', 'The final result should look good, of course, but it should also be useful: easy to use, readable on mobile, coherent in the details and ready to support everyday communication.')); ?></p>
      <div class="fg-cta-actions"><a class="fg-button is-primary" href="<?php echo esc_url(fg_url('/contatti/')); ?>"><?php echo esc_html(fg_t('Racconta il tuo progetto', 'Share your project')); ?></a></div>
    </div>
  </div>
</section>

<?php fg_site_end(); ?>
