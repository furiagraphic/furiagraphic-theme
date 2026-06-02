<?php
/* Template Name: Cookie Policy */
defined('ABSPATH') || exit;
fg_site_start('');
$sections = fg_is_en() ? [['title'=>'1. What cookies are','paragraphs'=>['Cookies are small text files stored in the browser to allow the website to work, remember preferences or collect technical and statistical information.'],'items'=>[]],['title'=>'2. Technical cookies','paragraphs'=>['Technical cookies are necessary for the correct functioning of the website and do not require consent.'],'items'=>[]],['title'=>'3. Analytics and marketing cookies','paragraphs'=>['The website may use analytics or promotional tools only when allowed by the user through the cookie banner or preferences.'],'items'=>[]],['title'=>'4. Consent management','paragraphs'=>['Users can accept, reject or modify preferences for non-essential cookies through the banner, when available, or through browser settings.'],'items'=>[]],['title'=>'5. Privacy Policy','paragraphs'=>['For more information about personal data processing, please see the <a href="/privacy-policy/">Privacy Policy</a>.'],'items'=>[]]] : [['title'=>'1. Cosa sono i cookie','paragraphs'=>['I cookie sono piccoli file di testo salvati nel browser per consentire il funzionamento del sito, ricordare preferenze o raccogliere informazioni statistiche e tecniche.'],'items'=>[]],['title'=>'2. Cookie tecnici','paragraphs'=>['I cookie tecnici sono necessari per il corretto funzionamento del sito e non richiedono consenso.'],'items'=>[]],['title'=>'3. Cookie analitici e marketing','paragraphs'=>['Il sito può utilizzare strumenti analitici o promozionali solo quando consentito dall’utente tramite banner o preferenze cookie.'],'items'=>[]],['title'=>'4. Gestione del consenso','paragraphs'=>['L’utente può accettare, rifiutare o modificare le preferenze sui cookie non necessari tramite il banner, se disponibile, o dalle impostazioni del browser.'],'items'=>[]],['title'=>'5. Privacy Policy','paragraphs'=>['Per maggiori informazioni sul trattamento dei dati personali, consulta la <a href="/privacy-policy/">Privacy Policy</a>.'],'items'=>[]]];
?>
<section class="fg-legal-page">
  <div class="fg-container fg-legal-container">
    <div class="fg-section-kicker"><?php echo esc_html(fg_t('Informativa cookie', 'Cookie notice')); ?></div>
    <h1 class="fg-legal-title"><?php echo esc_html(fg_t('Cookie Policy', 'Cookie Policy')); ?></h1>
    <p class="fg-legal-intro"><?php echo esc_html(fg_t('Questa Cookie Policy spiega cosa sono i cookie, quali categorie possono essere utilizzate su questo sito e come l’utente può gestire le proprie preferenze.', 'This Cookie Policy explains what cookies are, which categories may be used on this website and how users can manage their preferences.')); ?></p>
    <div class="fg-legal-card">
      <?php foreach ($sections as $section) : ?>
        <h2><?php echo esc_html($section['title']); ?></h2>
        <?php foreach ($section['paragraphs'] as $paragraph) : ?>
          <p><?php echo wp_kses_post($paragraph); ?></p>
        <?php endforeach; ?>
        <?php if (!empty($section['items'])) : ?><ul><?php foreach ($section['items'] as $item) : ?><li><?php echo wp_kses_post($item); ?></li><?php endforeach; ?></ul><?php endif; ?>
      <?php endforeach; ?>
      <p class="fg-legal-updated"><?php echo esc_html(fg_t('Ultimo aggiornamento:', 'Last updated:')); ?> <?php echo esc_html(date_i18n('d/m/Y')); ?></p>
    </div>
  </div>
</section>
<style>.fg-legal-page{padding:140px 0 90px;background:radial-gradient(circle at top,rgba(210,166,76,.12),transparent 34%),#050505;color:#f5efe3;min-height:70vh}.fg-legal-container{max-width:980px}.fg-legal-title{font-family:'Cormorant Garamond',serif;font-size:clamp(46px,7vw,78px);line-height:.95;margin:18px 0;color:#e1bd73}.fg-legal-intro{max-width:760px;color:rgba(245,239,227,.76);font-size:18px;line-height:1.75}.fg-legal-card{margin-top:42px;padding:42px;border:1px solid rgba(210,166,76,.28);background:rgba(12,12,12,.72);box-shadow:0 24px 80px rgba(0,0,0,.35)}.fg-legal-card h2{font-family:'Cormorant Garamond',serif;color:#e1bd73;font-size:32px;margin:34px 0 14px}.fg-legal-card h2:first-child{margin-top:0}.fg-legal-card p,.fg-legal-card li{color:rgba(245,239,227,.78);line-height:1.8}.fg-legal-card a{color:#e1bd73;text-decoration:none}.fg-legal-card ul{padding-left:22px}.fg-legal-updated{margin-top:36px;font-size:14px;color:rgba(245,239,227,.52)!important}@media(max-width:768px){.fg-legal-page{padding:110px 0 70px}.fg-legal-card{padding:26px}}</style>
<?php fg_site_end(); ?>
