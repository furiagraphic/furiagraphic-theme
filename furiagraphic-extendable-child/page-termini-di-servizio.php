<?php
/* Template Name: Termini e Condizioni */
defined('ABSPATH') || exit;
fg_site_start('');
$is_en = fg_is_en();
?>
<section class="fg-legal-page fg-terms-page">
  <div class="fg-container fg-legal-container">
    <div class="fg-section-kicker"><?php echo esc_html(fg_t('Area legale', 'Legal area')); ?></div>
    <h1 class="fg-legal-title"><?php echo esc_html(fg_t('Termini e Condizioni', 'Terms and Conditions')); ?></h1>
    <p class="fg-legal-intro">
      <?php echo esc_html(fg_t(
        'Questa pagina regola l’uso del sito FuriaGraphic, la richiesta di preventivi, l’accesso all’Hub/Area Clienti e la fornitura dei servizi grafici, web e digitali offerti da FuriaGraphic.',
        'This page governs the use of the FuriaGraphic website, quote requests, access to the Hub/Client Area and the provision of graphic, web and digital services offered by FuriaGraphic.'
      )); ?>
    </p>

    <div class="fg-legal-card">
      <?php if (!$is_en) : ?>
        <div class="fg-legal-notice">
          <strong>Nota importante</strong>
          <p>Questo testo è una base informativa redatta per FuriaGraphic e non sostituisce una consulenza legale. In caso di dubbi, servizi particolari, pagamenti online automatizzati o modifiche all’Hub, è consigliabile farlo verificare da un professionista.</p>
        </div>

        <h2>1. Titolare del sito e contatti</h2>
        <p>Il sito <strong>furiagraphic.com</strong> è gestito da <strong>FuriaGraphic</strong>, attività freelance specializzata in graphic design, web design, brand identity e grafiche per creator/streamer.</p>
        <ul>
          <li><strong>P.IVA:</strong> 02464380688</li>
          <li><strong>Email:</strong> <a href="mailto:info@furiagraphic.com">info@furiagraphic.com</a></li>
          <li><strong>Sito:</strong> <a href="https://www.furiagraphic.com/">www.furiagraphic.com</a></li>
        </ul>

        <h2>2. Oggetto dei servizi</h2>
        <p>FuriaGraphic offre servizi creativi e digitali, tra cui, a titolo esemplificativo:</p>
        <ul>
          <li>logo design e identità visiva;</li>
          <li>grafiche social, locandine, banner, materiali promozionali e asset digitali;</li>
          <li>siti web personalizzati, landing page, siti vetrina e restyling;</li>
          <li>grafiche Twitch, overlay, pannelli, schermate e materiali per streaming;</li>
          <li>supporto, consulenza grafica/web e assistenza tramite Hub/Area Clienti.</li>
        </ul>
        <p>Le informazioni pubblicate nel sito hanno finalità descrittiva e informativa. I servizi vengono definiti caso per caso tramite preventivo, accordo scritto, email, messaggio o altro canale concordato con il cliente.</p>

        <h2>3. Preventivi, disponibilità e accettazione del progetto</h2>
        <p>I prezzi eventualmente indicati sul sito sono da intendersi come importi “a partire da” e non costituiscono offerta vincolante. Il prezzo finale può variare in base a complessità, urgenza, numero di materiali richiesti, revisioni, funzionalità, contenuti forniti e obiettivi del progetto.</p>
        <p>Il progetto si considera avviato solo dopo l’accettazione del preventivo e, se previsto, il versamento di un acconto o la conferma scritta delle condizioni concordate.</p>

        <h2>4. Pagamenti, acconti e saldo</h2>
        <p>Le modalità di pagamento, eventuali acconti, scadenze e saldo vengono comunicati nel preventivo o negli accordi specifici. Salvo diverso accordo scritto, la consegna dei file finali o la pubblicazione definitiva di un sito/progetto può essere subordinata al pagamento del saldo.</p>
        <p>In caso di ritardo nei pagamenti, FuriaGraphic potrà sospendere temporaneamente lavorazioni, consegne, assistenza o accessi legati al progetto fino alla regolarizzazione.</p>

        <h2>5. Materiali forniti dal cliente</h2>
        <p>Il cliente si impegna a fornire testi, immagini, loghi, dati, accessi, credenziali, indicazioni e materiali necessari alla realizzazione del progetto in modo corretto, completo e lecito.</p>
        <p>Il cliente garantisce di avere il diritto di utilizzare e fornire tali materiali. FuriaGraphic non è responsabile per violazioni di diritti di terzi derivanti da contenuti, immagini, marchi, testi o file forniti dal cliente.</p>

        <h2>6. Revisioni, modifiche e tempi di consegna</h2>
        <p>Il numero di revisioni incluse, se previsto, viene indicato nel preventivo o negli accordi del progetto. Modifiche extra, richieste non previste, cambi di direzione creativa o ampliamenti del lavoro potranno comportare costi aggiuntivi e/o nuovi tempi di consegna.</p>
        <p>I tempi comunicati sono indicativi e possono variare in base a complessità del progetto, feedback del cliente, disponibilità dei materiali, richieste aggiuntive o cause non dipendenti da FuriaGraphic.</p>

        <h2>7. Consegna dei file e pubblicazione dei lavori</h2>
        <p>I formati di consegna vengono concordati in base al tipo di servizio. Salvo diverso accordo scritto, FuriaGraphic consegna i file finali necessari all’utilizzo previsto del progetto, ma non è obbligata a consegnare file sorgenti, file modificabili, bozze interne, template, librerie, documenti di lavoro o materiali non espressamente inclusi nel preventivo.</p>
        <p>Per i siti web, la pubblicazione può richiedere accessi a hosting, dominio, CMS, plugin, database o servizi esterni forniti dal cliente o da terzi.</p>

        <h2>8. Proprietà intellettuale e uso dei lavori</h2>
        <p>Salvo diverso accordo scritto, i diritti di utilizzo dei materiali finali realizzati per il cliente vengono concessi dopo il pagamento del saldo. Bozze, proposte non approvate, concept scartati, file sorgenti e materiali preparatori restano di proprietà di FuriaGraphic.</p>
        <p>FuriaGraphic può mostrare i lavori realizzati nel proprio portfolio, sito, social, presentazioni o materiali promozionali, salvo richiesta contraria concordata per iscritto prima dell’avvio del progetto.</p>

        <h2>9. Area Clienti / Hub FuriaGraphic</h2>
        <p>L’Hub o Area Clienti può consentire la registrazione e l’accesso tramite nome, indirizzo email e altri dati necessari alla gestione dell’account e del progetto.</p>
        <p>L’utente si impegna a utilizzare l’account in modo corretto, a non condividere credenziali con soggetti non autorizzati e a comunicare eventuali accessi sospetti. FuriaGraphic potrà sospendere o limitare l’accesso in caso di uso improprio, attività non autorizzate, violazione dei presenti Termini o motivi di sicurezza.</p>
        <p>Il trattamento dei dati personali relativi all’Hub è regolato dalla <a href="<?php echo esc_url(fg_url('/privacy-policy/')); ?>">Privacy Policy</a>.</p>

        <h2>10. Cookie, strumenti di tracciamento e preferenze privacy</h2>
        <p>Il sito può utilizzare cookie tecnici necessari e, previo consenso ove richiesto, cookie o strumenti per statistiche, miglioramento dell’esperienza o marketing. Maggiori informazioni sono disponibili nella <a href="<?php echo esc_url(fg_url('/cookie-policy/')); ?>">Cookie Policy</a>.</p>
        <p>L’utente può gestire le proprie preferenze tramite il banner o gli strumenti privacy disponibili sul sito.</p>

        <h2>11. Recesso, annullamento e servizi personalizzati</h2>
        <p>I servizi offerti da FuriaGraphic sono generalmente creativi, digitali e personalizzati in base alle esigenze del cliente. In caso di cliente consumatore e contratto concluso a distanza, il diritto di recesso può trovare applicazione secondo la normativa vigente, salvo eccezioni previste per beni o servizi personalizzati, contenuti digitali o prestazioni già iniziate con consenso del cliente.</p>
        <p>Eventuali annullamenti, rimborsi parziali o trattenute per il lavoro già svolto saranno valutati in base allo stato di avanzamento del progetto, agli accordi presi e alla normativa applicabile.</p>

        <h2>12. Limitazioni di responsabilità</h2>
        <p>FuriaGraphic si impegna a svolgere i servizi con cura e professionalità, ma non garantisce risultati specifici in termini di vendite, conversioni, crescita social, posizionamento SEO, ranking Google, performance pubblicitarie o risultati economici, poiché tali risultati dipendono anche da fattori esterni.</p>
        <p>FuriaGraphic non è responsabile per malfunzionamenti, sospensioni, perdite di dati o disservizi causati da hosting, provider, CMS, plugin, piattaforme terze, servizi email, social network, marketplace, strumenti analytics o interventi non autorizzati di terzi.</p>

        <h2>13. Uso corretto del sito</h2>
        <p>L’utente si impegna a non utilizzare il sito, i form, l’Hub o i canali di contatto per attività illecite, fraudolente, offensive, spam, tentativi di accesso non autorizzato, distribuzione di malware o violazione di diritti di terzi.</p>

        <h2>14. Link e servizi di terze parti</h2>
        <p>Il sito può contenere link o integrazioni verso servizi esterni, tra cui piattaforme social, strumenti di analisi, hosting, servizi di pagamento, sistemi di gestione consensi, piattaforme di sviluppo o area clienti. FuriaGraphic non controlla tali servizi e invita l’utente a consultare le rispettive condizioni e informative privacy.</p>

        <h2>15. Modifiche ai Termini</h2>
        <p>FuriaGraphic può aggiornare i presenti Termini e Condizioni per esigenze organizzative, tecniche, legali o di servizio. La versione aggiornata sarà pubblicata su questa pagina con indicazione della data di aggiornamento.</p>

        <h2>16. Legge applicabile e foro competente</h2>
        <p>I presenti Termini sono regolati dalla legge italiana. Per eventuali controversie si applicheranno le disposizioni di legge vigenti, inclusa la tutela prevista per i consumatori ove applicabile.</p>

        <h2>17. Contatti</h2>
        <p>Per domande sui presenti Termini e Condizioni è possibile scrivere a <a href="mailto:info@furiagraphic.com">info@furiagraphic.com</a>.</p>

      <?php else : ?>
        <div class="fg-legal-notice">
          <strong>Important note</strong>
          <p>This text is an informational base prepared for FuriaGraphic and does not replace legal advice. For specific services, automated online payments or changes to the Hub, professional review is recommended.</p>
        </div>

        <h2>1. Website owner and contact details</h2>
        <p>The website <strong>furiagraphic.com</strong> is managed by <strong>FuriaGraphic</strong>, a freelance business specialized in graphic design, web design, brand identity and graphics for creators/streamers.</p>
        <ul>
          <li><strong>VAT number:</strong> 02464380688</li>
          <li><strong>Email:</strong> <a href="mailto:info@furiagraphic.com">info@furiagraphic.com</a></li>
          <li><strong>Website:</strong> <a href="https://www.furiagraphic.com/">www.furiagraphic.com</a></li>
        </ul>

        <h2>2. Services</h2>
        <p>FuriaGraphic provides creative and digital services including, by way of example, logo design, visual identity, social graphics, promotional materials, custom websites, landing pages, website redesigns, Twitch overlays and streaming assets, support and assistance through the Hub/Client Area.</p>
        <p>Information published on the website is descriptive and informational. Services are defined case by case through a quote, written agreement, email, message or other agreed channel.</p>

        <h2>3. Quotes and project acceptance</h2>
        <p>Prices shown on the website, if any, are “starting from” prices and are not binding offers. Final prices may vary based on complexity, urgency, materials, revisions, features and project goals.</p>
        <p>A project is considered started only after quote acceptance and, where required, payment of a deposit or written confirmation of the agreed conditions.</p>

        <h2>4. Payments</h2>
        <p>Payment methods, deposits, deadlines and final balance are communicated in the quote or project agreement. Unless otherwise agreed in writing, final file delivery or website publication may be subject to payment of the balance.</p>

        <h2>5. Client materials</h2>
        <p>The client undertakes to provide all texts, images, logos, data, access credentials, instructions and materials needed for the project in a lawful, accurate and complete manner. The client guarantees they have the right to use and provide such materials.</p>

        <h2>6. Revisions and delivery times</h2>
        <p>Included revisions, if any, are specified in the quote or agreement. Extra changes, new requests or changes of creative direction may involve additional costs and/or delivery time. Delivery times are indicative and may vary depending on client feedback, materials and project complexity.</p>

        <h2>7. File delivery</h2>
        <p>Delivery formats are agreed based on the service. Unless otherwise agreed in writing, FuriaGraphic delivers the final files needed for the intended use, but is not required to deliver source files, editable files, internal drafts, templates, libraries or working materials not expressly included in the quote.</p>

        <h2>8. Intellectual property</h2>
        <p>Unless otherwise agreed in writing, usage rights for final materials are granted after full payment. Drafts, rejected proposals, unused concepts, source files and preparatory materials remain the property of FuriaGraphic.</p>
        <p>FuriaGraphic may showcase completed works in its portfolio, website, social channels or promotional materials, unless otherwise agreed in writing before the project starts.</p>

        <h2>9. FuriaGraphic Hub / Client Area</h2>
        <p>The Hub or Client Area may allow registration and access using name, email address and other data needed to manage the account and project.</p>
        <p>Users must use their account properly, avoid sharing credentials with unauthorized parties and report suspicious access. FuriaGraphic may suspend or restrict access in case of misuse, unauthorized activity, breach of these Terms or security reasons.</p>
        <p>Personal data processing related to the Hub is governed by the <a href="<?php echo esc_url(fg_url('/privacy-policy/')); ?>">Privacy Policy</a>.</p>

        <h2>10. Cookies and privacy preferences</h2>
        <p>The website may use necessary technical cookies and, where consent is required, cookies or tools for statistics, experience improvement or marketing. More information is available in the <a href="<?php echo esc_url(fg_url('/cookie-policy/')); ?>">Cookie Policy</a>.</p>

        <h2>11. Withdrawal and personalized services</h2>
        <p>FuriaGraphic services are generally creative, digital and personalized. Where the client is a consumer and the contract is concluded remotely, withdrawal rights may apply under applicable law, subject to exceptions for customized goods/services, digital content or services already started with the client’s consent.</p>

        <h2>12. Liability limitations</h2>
        <p>FuriaGraphic undertakes to provide services with care and professionalism, but does not guarantee specific results in terms of sales, conversions, social growth, SEO ranking, Google positioning, advertising performance or economic outcomes.</p>
        <p>FuriaGraphic is not responsible for failures, suspensions, data loss or disruptions caused by hosting providers, CMSs, plugins, third-party platforms, payment tools, analytics tools, social networks or unauthorized third-party interventions.</p>

        <h2>13. Proper use of the website</h2>
        <p>Users must not use the website, forms, Hub or contact channels for unlawful, fraudulent, offensive, spam-related activities, unauthorized access attempts, malware distribution or infringement of third-party rights.</p>

        <h2>14. Third-party services</h2>
        <p>The website may include links or integrations with external services. FuriaGraphic does not control such services and users should review their respective terms and privacy policies.</p>

        <h2>15. Changes to these Terms</h2>
        <p>FuriaGraphic may update these Terms and Conditions for organizational, technical, legal or service-related reasons. The updated version will be published on this page.</p>

        <h2>16. Governing law</h2>
        <p>These Terms are governed by Italian law. Any disputes will be handled according to applicable law, including consumer protection rules where applicable.</p>

        <h2>17. Contact</h2>
        <p>For questions about these Terms and Conditions, please write to <a href="mailto:info@furiagraphic.com">info@furiagraphic.com</a>.</p>
      <?php endif; ?>

      <p class="fg-legal-updated"><?php echo esc_html(fg_t('Ultimo aggiornamento:', 'Last updated:')); ?> <?php echo esc_html(date_i18n('d/m/Y')); ?></p>
    </div>
  </div>
</section>
<style>
.fg-legal-page{padding:140px 0 90px;background:radial-gradient(circle at top,rgba(210,166,76,.12),transparent 34%),#050505;color:#f5efe3;min-height:70vh}.fg-legal-container{max-width:980px}.fg-legal-title{font-family:'Cormorant Garamond',serif;font-size:clamp(46px,7vw,78px);line-height:.95;margin:18px 0;color:#e1bd73}.fg-legal-intro{max-width:760px;color:rgba(245,239,227,.76);font-size:18px;line-height:1.75}.fg-legal-card{margin-top:42px;padding:42px;border:1px solid rgba(210,166,76,.28);background:rgba(12,12,12,.72);box-shadow:0 24px 80px rgba(0,0,0,.35)}.fg-legal-card h2{font-family:'Cormorant Garamond',serif;color:#e1bd73;font-size:32px;margin:38px 0 14px}.fg-legal-card h2:first-child{margin-top:0}.fg-legal-card p,.fg-legal-card li{color:rgba(245,239,227,.78);line-height:1.8}.fg-legal-card a{color:#e1bd73;text-decoration:none;border-bottom:1px solid rgba(225,189,115,.32)}.fg-legal-card ul{padding-left:22px}.fg-legal-notice{padding:20px 22px;margin-bottom:34px;border:1px solid rgba(210,166,76,.32);background:rgba(210,166,76,.07)}.fg-legal-notice strong{display:block;color:#e1bd73;margin-bottom:8px}.fg-legal-notice p{margin:0}.fg-legal-updated{margin-top:42px;font-size:14px;color:rgba(245,239,227,.52)!important}@media(max-width:768px){.fg-legal-page{padding:110px 0 70px}.fg-legal-card{padding:26px}.fg-legal-card h2{font-size:28px}}
</style>
<?php fg_site_end(); ?>
