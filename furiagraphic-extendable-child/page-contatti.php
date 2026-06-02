<?php
defined('ABSPATH') || exit;
/* Template Name: FuriaGraphic Contact Page */

$diagnosi_url        = 'https://hub.furiagraphic.com/diagnosi-gratuita';
$hub_url             = 'https://hub.furiagraphic.com';
$contact_form_url    = fg_contact_form_url();
$discord_url         = 'https://discord.gg/JDwSuKFeh8';
$fg_contact_feedback = fg_get_contact_form_feedback();

fg_site_start('contatti');
?>

<section class="fg-section fg-contact-hero fg-contact-polished-hero">
  <div class="fg-container">
    <div class="fg-page-title-wrap fg-contact-polished-title fg-reveal is-visible">
      <div class="fg-section-kicker"><?php echo esc_html(fg_t('Contatti', 'Contact')); ?></div>
      <h1 class="fg-page-title"><?php echo wp_kses_post(fg_t('Raccontami cosa vuoi creare. <span class="fg-gold-text">Ti aiuto a mettere ordine.</span>', 'Tell me what you want to create. <span class="fg-gold-text">I’ll help you bring order.</span>')); ?></h1>
      <p class="fg-page-sub">
        <?php echo esc_html(fg_t('Scrivimi obiettivo, situazione attuale, stile desiderato e tempi. Non serve avere già tutto definito: basta un punto di partenza chiaro per capire la direzione migliore.', 'Share your goal, current situation, desired style and timing. You do not need to have everything defined: a clear starting point is enough to understand the best direction.')); ?>
      </p>
      <div class="fg-contact-hero-actions">
        <a class="fg-button is-primary" href="<?php echo esc_url($contact_form_url); ?>"><?php echo esc_html(fg_t('Compila la richiesta', 'Fill in the request')); ?></a>
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
          <p><?php echo esc_html(fg_t('Perfetto per inviare file, screenshot, reference e aggiornamenti rapidi dopo il primo contatto.', 'Perfect for sending files, screenshots, references and quick updates after the first contact.')); ?></p>
          <ul class="fg-contact-side-list">
            <li><?php echo esc_html(fg_t('Conversazioni più rapide e ordinate', 'Faster, more organized conversations')); ?></li>
            <li><?php echo esc_html(fg_t('Reference e allegati nello stesso thread', 'References and attachments in the same thread')); ?></li>
            <li><?php echo esc_html(fg_t('Ideale per progetti già avviati', 'Ideal for active projects')); ?></li>
          </ul>
          <a class="fg-button is-secondary fg-contact-side-button" href="<?php echo esc_url($discord_url); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html(fg_t('Vai su Discord', 'Go to Discord')); ?></a>
        </article>

        <article class="fg-contact-side-card is-hub" data-reveal-delay="140">
          <div class="fg-contact-side-icon" aria-hidden="true">H</div>
          <div class="fg-contact-mini-kicker"><?php echo esc_html(fg_t('Area clienti', 'Client area')); ?></div>
          <h2><?php echo esc_html(fg_t('Accedi all’Hub', 'Access the Hub')); ?></h2>
          <p><?php echo esc_html(fg_t('Se il progetto è già partito, nell’Hub trovi stato lavori, chat, file, revisioni e pagamenti in un unico spazio ordinato.', 'If the project has already started, the Hub keeps progress, chat, files, revisions and payments in one organized space.')); ?></p>
          <ul class="fg-contact-side-list">
            <li><?php echo esc_html(fg_t('Controlli avanzamento e prossimi step', 'Check progress and next steps')); ?></li>
            <li><?php echo esc_html(fg_t('Gestisci revisioni, file e pagamenti', 'Manage revisions, files and payments')); ?></li>
            <li><?php echo esc_html(fg_t('Tutto raccolto senza perdere messaggi', 'Everything collected without losing messages')); ?></li>
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
        <h2><?php echo esc_html(fg_t('Prima capiamo cosa migliorare, poi decidiamo cosa creare', 'First understand what to improve, then decide what to create')); ?></h2>
        <p><?php echo esc_html(fg_t('La diagnosi gratuita mette in ordine punti forti, problemi e priorità di branding, sito o canale. Così investi nella direzione più utile, non nella soluzione più rumorosa.', 'The free diagnosis organizes strengths, problems and priorities for your brand, website or channel. This helps you invest in the most useful direction, not the loudest solution.')); ?></p>
      </div>
      <div class="fg-contact-diagnosis-points"><span>Branding</span><span><?php echo esc_html(fg_t('Web design', 'Web design')); ?></span><span>Streaming pack</span></div>
      <a class="fg-button is-primary" href="<?php echo esc_url($diagnosi_url); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html(fg_t('Avvia diagnosi gratuita', 'Start free diagnosis')); ?></a>
    </div>
  </div>
</section>


<?php fg_site_end(); ?>
