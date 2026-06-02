<?php
/* Template Name: Privacy Policy */
defined('ABSPATH') || exit;
fg_site_start('');
$sections = fg_is_en() ? [['title'=>'1. Data controller','paragraphs'=>['The data controller is <strong>FuriaGraphic</strong>.','Contact email: <a href="mailto:info@furiagraphic.com">info@furiagraphic.com</a>'],'items'=>[]],['title'=>'2. Data collected','paragraphs'=>['The website may collect personal data voluntarily provided by users, for example through email, contact forms or free diagnosis requests.'],'items'=>['name or reference provided by the user','email address','message content','additional information freely included in the request']],['title'=>'3. Purposes','paragraphs'=>['Data is used to reply to requests, provide information about services, manage pre-contractual communications and ensure the proper functioning of the website.'],'items'=>[]],['title'=>'4. User rights','paragraphs'=>['Users may request access, correction, deletion, restriction or objection to the processing of personal data where provided by applicable law.'],'items'=>[]],['title'=>'5. Cookies','paragraphs'=>['For more information about cookies used on this website, please see the <a href="/cookie-policy/">Cookie Policy</a>.'],'items'=>[]]] : [['title'=>'1. Titolare del trattamento','paragraphs'=>['Il Titolare del trattamento dei dati personali è <strong>FuriaGraphic</strong>.','Email di contatto: <a href="mailto:info@furiagraphic.com">info@furiagraphic.com</a>'],'items'=>[]],['title'=>'2. Dati raccolti','paragraphs'=>['Il sito può raccogliere dati personali forniti volontariamente dall’utente, ad esempio tramite email, moduli di contatto o richieste di diagnosi gratuita.'],'items'=>['nome o riferimento indicato dall’utente','indirizzo email','contenuto del messaggio','informazioni inserite liberamente nella richiesta']],['title'=>'3. Finalità','paragraphs'=>['I dati vengono utilizzati per rispondere alle richieste, fornire informazioni sui servizi, gestire comunicazioni precontrattuali e garantire il funzionamento del sito.'],'items'=>[]],['title'=>'4. Diritti dell’utente','paragraphs'=>['L’utente può richiedere accesso, rettifica, cancellazione, limitazione o opposizione al trattamento dei dati personali nei casi previsti dalla normativa applicabile.'],'items'=>[]],['title'=>'5. Cookie','paragraphs'=>['Per maggiori informazioni sui cookie utilizzati dal sito, consulta la <a href="/cookie-policy/">Cookie Policy</a>.'],'items'=>[]]];
?>
<section class="fg-legal-page">
  <div class="fg-container fg-legal-container">
    <div class="fg-section-kicker"><?php echo esc_html(fg_t('Informativa privacy', 'Privacy notice')); ?></div>
    <h1 class="fg-legal-title"><?php echo esc_html(fg_t('Privacy Policy', 'Privacy Policy')); ?></h1>
    <p class="fg-legal-intro"><?php echo esc_html(fg_t('Questa informativa descrive come FuriaGraphic raccoglie, utilizza e protegge i dati personali degli utenti che visitano il sito e inviano richieste tramite i canali di contatto.', 'This notice explains how FuriaGraphic collects, uses and protects personal data from users who visit the website and send requests through contact channels.')); ?></p>
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
