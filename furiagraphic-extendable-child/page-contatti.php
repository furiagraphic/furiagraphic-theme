<?php
defined('ABSPATH') || exit;
/* Template Name: FuriaGraphic Contact Page */

$diagnosi_url        = 'https://hub.furiagraphic.com/diagnosi-gratuita';
$hub_url             = 'https://hub.furiagraphic.com';
$contact_form_url    = fg_contact_form_url();
$discord_url         = 'https://discord.gg/dVJGyB9U2R';
$fg_contact_feedback = fg_get_contact_form_feedback();

fg_site_start('contatti');
?>

<section class="fg-section fg-contact-hero fg-contact-polished-hero">
  <div class="fg-container">
    <div class="fg-page-title-wrap fg-contact-polished-title fg-reveal is-visible">
      <div class="fg-section-kicker"><?php echo esc_html(fg_t('Contatti', 'Contact')); ?></div>
      <h1 class="fg-page-title"><?php echo wp_kses_post(fg_t('Raccontami il progetto. <span class="fg-gold-text">Ti rispondo con chiarezza.</span>', 'Tell me about the project. <span class="fg-gold-text">I’ll reply clearly.</span>')); ?></h1>
      <p class="fg-page-sub">
        <?php echo esc_html(fg_t('Compila il form con obiettivi, stile, tempi e riferimenti. Se il progetto è già attivo, usa l’Hub. Per richieste rapide, apri un ticket Discord.', 'Fill in the form with goals, style, timing and references. If the project is already active, use the Hub. For quick requests, open a Discord ticket.')); ?>
      </p>
      <div class="fg-contact-hero-actions">
        <a class="fg-button is-primary" href="<?php echo esc_url($contact_form_url); ?>"><?php echo esc_html(fg_t('Compila il form', 'Fill in the form')); ?></a>
        <a class="fg-button is-secondary" href="<?php echo esc_url($diagnosi_url); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html(fg_t('Fai la diagnosi gratuita', 'Start the free diagnosis')); ?></a>
      </div>
    </div>
  </div>
</section>

<section class="fg-section fg-contact-redesign-wrap" id="fg-project-form">
  <div class="fg-container">
    <div class="fg-contact-redesign-grid">
      <div class="fg-contact-redesign-form-col fg-reveal is-visible">
        <?php fg_render_project_contact_form($fg_contact_feedback, ['mode' => 'card']); ?>
      </div>

      <aside class="fg-contact-redesign-side fg-reveal is-visible" data-reveal-delay="90" aria-label="<?php echo esc_attr(fg_t('Canali rapidi FuriaGraphic', 'FuriaGraphic quick channels')); ?>">
        <article class="fg-contact-side-card is-discord" data-reveal-delay="80">
          <div class="fg-contact-side-icon" aria-hidden="true">⌘</div>
          <div class="fg-contact-mini-kicker">Discord</div>
          <h2><?php echo esc_html(fg_t('Apri un ticket Discord', 'Open a Discord ticket')); ?></h2>
          <p><?php echo esc_html(fg_t('Utile per file, reference, domande veloci e piccoli aggiornamenti su un progetto già avviato.', 'Useful for files, references, quick questions and small updates on an active project.')); ?></p>
          <ul class="fg-contact-side-list">
            <li><?php echo esc_html(fg_t('Richieste rapide e conversazioni più snelle', 'Quick requests and smoother conversations')); ?></li>
            <li><?php echo esc_html(fg_t('File, screenshot e reference in un unico thread', 'Files, screenshots and references in one thread')); ?></li>
            <li><?php echo esc_html(fg_t('Ideale dopo il primo contatto dal form', 'Ideal after the first contact from the form')); ?></li>
          </ul>
          <a class="fg-button is-secondary fg-contact-side-button" href="<?php echo esc_url($discord_url); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html(fg_t('Vai su Discord', 'Go to Discord')); ?></a>
        </article>

        <article class="fg-contact-side-card is-hub" data-reveal-delay="140">
          <div class="fg-contact-side-icon" aria-hidden="true">H</div>
          <div class="fg-contact-mini-kicker"><?php echo esc_html(fg_t('Area clienti', 'Client area')); ?></div>
          <h2><?php echo esc_html(fg_t('Accedi all’Hub', 'Access the Hub')); ?></h2>
          <p><?php echo esc_html(fg_t('Se hai già un progetto attivo, nell’Hub trovi avanzamento, chat, file, revisioni e pagamenti in un unico posto.', 'If you already have an active project, the Hub keeps progress, chat, files, revisions and payments in one place.')); ?></p>
          <ul class="fg-contact-side-list">
            <li><?php echo esc_html(fg_t('Controlli stato progetto e prossimi step', 'Check project status and next steps')); ?></li>
            <li><?php echo esc_html(fg_t('Gestisci revisioni, file e pagamenti', 'Manage revisions, files and payments')); ?></li>
            <li><?php echo esc_html(fg_t('Tutto ordinato senza perdere messaggi', 'Everything organized without losing messages')); ?></li>
          </ul>
          <a class="fg-button is-primary fg-contact-side-button" href="<?php echo esc_url($hub_url); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html(fg_t('Entra nell’Hub', 'Enter the Hub')); ?></a>
        </article>
      </aside>
    </div>
  </div>
</section>

<section class="fg-section fg-contact-diagnosis-band-wrap">
  <div class="fg-container">
    <div class="fg-contact-diagnosis-band fg-reveal is-visible">
      <div class="fg-diagnosis-orbit" aria-hidden="true">?</div>
      <div class="fg-contact-diagnosis-copy">
        <div class="fg-contact-mini-kicker"><?php echo esc_html(fg_t('Non sai da dove partire?', 'Not sure where to start?')); ?></div>
        <h2><?php echo esc_html(fg_t('Capisci cosa migliorare prima di investire', 'Understand what to improve before investing')); ?></h2>
        <p><?php echo esc_html(fg_t('La diagnosi gratuita mette in ordine punti forti, problemi e priorità di branding, sito o canale. Così sai da dove partire.', 'The free diagnosis organizes strengths, problems and priorities for your brand, website or channel, so you know where to start.')); ?></p>
      </div>
      <div class="fg-contact-diagnosis-points"><span>Branding</span><span><?php echo esc_html(fg_t('Web design', 'Web design')); ?></span><span>Streaming pack</span></div>
      <a class="fg-button is-primary" href="<?php echo esc_url($diagnosi_url); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html(fg_t('Avvia diagnosi gratuita', 'Start free diagnosis')); ?></a>
    </div>
  </div>
</section>


<?php fg_site_end(); ?>
