<?php
defined('ABSPATH') || exit;

$slug = fg_service_category_slug_from_request();
$service_categories = fg_service_categories();
$service_pages = [
    'graphic-design' => [
        'contact_category' => 'branding',
        'service' => 'brand-identity',
        'number' => '01',
        'visual_label' => 'Brand system',
        'images' => [
            ['file' => 'mockup-brand.webp', 'slot' => 'main', 'alt_it' => 'Mockup di identità visiva FuriaGraphic', 'alt_en' => 'FuriaGraphic visual identity mockup'],
            ['file' => 'mockup-logo.webp', 'slot' => 'top', 'alt_it' => 'Mockup logo e branding', 'alt_en' => 'Logo and branding mockup'],
            ['file' => 'mockup-locandine.webp', 'slot' => 'bottom', 'alt_it' => 'Mockup locandine e materiali coordinati', 'alt_en' => 'Poster and coordinated assets mockup'],
        ],
        'it' => [
            'switch_label' => 'Graphic design',
            'kicker' => 'Branding / logo / grafiche coordinate',
            'title' => 'Identità visiva pulita e riconoscibile.',
            'lead' => 'Creo logo, palette, tipografia e materiali coordinati che fanno parlare il brand con una voce sola: più ordine, più coerenza, più riconoscibilità.',
            'primary' => 'Richiedi branding',
            'secondary' => 'Vedi portfolio',
            'quick_title' => 'In pratica',
            'quick' => ['Logo e restyling', 'Palette e tipografia', 'Grafiche social', 'Materiali coordinati'],
            'panels' => [
                [
                    'title' => 'Per chi è',
                    'text' => 'Per chi ha un progetto valido ma un’immagine che non comunica ancora valore, coerenza o personalità.',
                    'points' => ['Nuove attività e freelance', 'Creator e canali personali', 'Brand con materiali incoerenti'],
                ],
                [
                    'title' => 'Cosa cambia',
                    'text' => 'Passi da “ho qualche grafica” a un sistema visivo con regole semplici, file ordinati e applicazioni realmente usabili.',
                    'points' => ['Più riconoscibilità', 'Meno decisioni casuali', 'Output pronti per uso reale'],
                ],
            ],
            'deliverables_title' => 'Cosa realizziamo',
            'deliverables_intro' => 'Non serve gonfiare il progetto: scegliamo gli asset che ti servono davvero ora e li rendiamo coerenti tra loro.',
            'deliverables' => [
                ['Logo principale', 'Versioni leggibili, varianti e uso corretto nei formati più utili.'],
                ['Mini brand system', 'Colori, font, gerarchie e regole base per mantenere coerenza.'],
                ['Social kit', 'Template, post, cover e materiali per comunicare con lo stesso stile.'],
                ['Materiali promo', 'Locandine, banner, presentazioni o file coordinati per campagne e lanci.'],
            ],
            'flow_title' => 'Metodo semplice, risultato ordinato',
            'flow' => [
                ['Brief visivo', 'Capisco obiettivo, pubblico, gusto e problemi dell’immagine attuale.'],
                ['Direzione', 'Definiamo mood, colori, riferimenti e personalità prima di disegnare.'],
                ['Design applicato', 'Creo gli elementi e li provo su contesti reali, non solo su un mockup bello.'],
                ['Consegna pulita', 'Ricevi file ordinati, varianti utili e indicazioni per usarli senza rovinarli.'],
            ],
            'note_title' => 'Niente pacchetti finti “tutto incluso”.',
            'note_text' => 'Il progetto parte da ciò che serve davvero: se ti basta un logo solido si lavora lì; se serve un sistema più ampio, lo costruiamo con criterio.',
            'faq' => [
                ['Posso partire solo dal logo?', 'Sì. Se serve, il logo può diventare la base per ampliare identità e materiali nel tempo.'],
                ['Serve avere già idee chiare?', 'No. Bastano obiettivo, target e qualche riferimento: la direzione la costruiamo insieme.'],
                ['Mi consegni file pronti per social o stampa?', 'Sì, in base agli output concordati vengono preparati formati utilizzabili davvero.'],
            ],
        ],
        'en' => [
            'switch_label' => 'Graphic design',
            'kicker' => 'Branding / logo / coordinated graphics',
            'title' => 'A clean, recognizable visual identity.',
            'lead' => 'I create logos, palettes, typography and coordinated assets that make the brand speak with one voice: more order, more consistency, more recognition.',
            'primary' => 'Request branding',
            'secondary' => 'View portfolio',
            'quick_title' => 'In practice',
            'quick' => ['Logo and redesign', 'Palette and typography', 'Social graphics', 'Coordinated assets'],
            'panels' => [
                [
                    'title' => 'Who it is for',
                    'text' => 'For projects with real value but a visual image that still does not communicate quality, coherence or personality.',
                    'points' => ['New businesses and freelancers', 'Creators and personal channels', 'Brands with inconsistent assets'],
                ],
                [
                    'title' => 'What changes',
                    'text' => 'You move from random graphics to a visual system with simple rules, organized files and usable applications.',
                    'points' => ['More recognition', 'Fewer random decisions', 'Outputs ready for real use'],
                ],
            ],
            'deliverables_title' => 'What we create',
            'deliverables_intro' => 'No need to inflate the project: we choose the assets you actually need now and make them coherent.',
            'deliverables' => [
                ['Main logo', 'Readable versions, variations and correct use in the most useful formats.'],
                ['Mini brand system', 'Colors, fonts, hierarchy and basic rules to keep everything consistent.'],
                ['Social kit', 'Templates, posts, covers and communication assets with the same style.'],
                ['Promo assets', 'Posters, banners, presentations or coordinated files for launches and campaigns.'],
            ],
            'flow_title' => 'Simple method, clean result',
            'flow' => [
                ['Visual brief', 'I understand goal, audience, taste and current visual issues.'],
                ['Direction', 'We define mood, colors, references and personality before designing.'],
                ['Applied design', 'I create elements and test them in real contexts, not only on a nice mockup.'],
                ['Clean delivery', 'You receive organized files, useful variations and guidance to use them properly.'],
            ],
            'note_title' => 'No fake “everything included” packages.',
            'note_text' => 'The project starts from what you really need: if a solid logo is enough, we work there; if a wider system is needed, we build it with intention.',
            'faq' => [
                ['Can I start only with a logo?', 'Yes. If needed, the logo can become the base for expanding identity and assets later.'],
                ['Do I need clear ideas already?', 'No. Goals, audience and a few references are enough: we build the direction together.'],
                ['Do you deliver files ready for social or print?', 'Yes, based on the agreed outputs I prepare formats you can actually use.'],
            ],
        ],
    ],
    'web-design' => [
        'contact_category' => 'web-design',
        'service' => 'showcase-site',
        'number' => '02',
        'visual_label' => 'Digital presence',
        'images' => [
            ['file' => 'mockup-snitaly.webp', 'slot' => 'main', 'alt_it' => 'Mockup sito web Servizi & Noleggi Italy', 'alt_en' => 'Servizi & Noleggi Italy website mockup'],
            ['file' => 'mockup-furiagraphic.webp', 'slot' => 'top', 'alt_it' => 'Mockup sito web FuriaGraphic', 'alt_en' => 'FuriaGraphic website mockup'],
        ],
        'it' => [
            'switch_label' => 'Web design',
            'kicker' => 'Siti web / landing / restyling',
            'title' => 'Un sito chiaro, bello e pronto a convertire.',
            'lead' => 'Progetto siti vetrina, landing e restyling con struttura chiara, mobile curato e contenuti ordinati. L’obiettivo è semplice: farti capire e contattare meglio.',
            'primary' => 'Richiedi sito',
            'secondary' => 'Vedi portfolio',
            'quick_title' => 'In pratica',
            'quick' => ['Struttura pagina', 'Look responsive', 'CTA e percorso utente', 'SEO on-page base'],
            'panels' => [
                [
                    'title' => 'Per chi è',
                    'text' => 'Per freelance, attività e piccoli brand che hanno bisogno di una presenza online più credibile e facile da capire.',
                    'points' => ['Sito vetrina professionale', 'Landing per offerte e servizi', 'Restyling di siti datati'],
                ],
                [
                    'title' => 'Cosa cambia',
                    'text' => 'Il sito smette di essere solo “bello” e diventa un percorso: presenta, spiega, rassicura e porta al contatto.',
                    'points' => ['Messaggio più chiaro', 'Mobile più curato', 'Pagine più orientate alla conversione'],
                ],
            ],
            'deliverables_title' => 'Cosa realizziamo',
            'deliverables_intro' => 'La forma dipende dall’obiettivo: presentarti meglio, lanciare un’offerta o sistemare una presenza online che non ti rappresenta più.',
            'deliverables' => [
                ['Sito vetrina', 'Una struttura pulita per spiegare chi sei, cosa fai e come contattarti.'],
                ['Landing page', 'Una pagina focalizzata su servizio, offerta, lancio o campagna specifica.'],
                ['Restyling', 'Nuova direzione visiva, contenuti più ordinati e maggiore leggibilità.'],
                ['Base SEO', 'Title, meta, gerarchie, testi leggibili e struttura più ordinata per Google.'],
            ],
            'flow_title' => 'Dal brief alla pagina pubblicabile',
            'flow' => [
                ['Obiettivo', 'Definiamo pubblico, messaggio, pagine e azione principale.'],
                ['Architettura', 'Organizzo sezioni, priorità e contenuti per ridurre frizione.'],
                ['Design', 'Creo layout responsive, ritmo visivo, componenti e call to action.'],
                ['Rifinitura', 'Controllo mobile, leggibilità, meta base e dettagli prima della consegna.'],
            ],
            'note_title' => 'Il sito deve lavorare, non solo fare scena.',
            'note_text' => 'Ogni blocco ha un ruolo: presentare, spiegare, convincere o portare al contatto. Tutto il resto si elimina.',
            'faq' => [
                ['Realizzi anche landing page singole?', 'Sì, una landing è spesso la soluzione migliore per un servizio, lancio o offerta specifica.'],
                ['Posso rifare solo il design del sito?', 'Sì, se la base tecnica è buona si può lavorare su restyling, struttura e contenuti.'],
                ['La SEO è inclusa?', 'Imposto una base on-page pulita: titoli, struttura, meta principali, leggibilità e gerarchia.'],
            ],
        ],
        'en' => [
            'switch_label' => 'Web design',
            'kicker' => 'Websites / landing pages / redesigns',
            'title' => 'A clear, beautiful website built to convert.',
            'lead' => 'I design showcase websites, landing pages and redesigns with clear structure, polished mobile layout and organized content. The goal is simple: help people understand and contact you better.',
            'primary' => 'Request website',
            'secondary' => 'View portfolio',
            'quick_title' => 'In practice',
            'quick' => ['Page structure', 'Responsive look', 'CTA and user path', 'Basic on-page SEO'],
            'panels' => [
                [
                    'title' => 'Who it is for',
                    'text' => 'For freelancers, businesses and small brands that need a more credible and easier-to-understand online presence.',
                    'points' => ['Professional showcase website', 'Landing for offers and services', 'Redesign of outdated websites'],
                ],
                [
                    'title' => 'What changes',
                    'text' => 'The website stops being just good-looking and becomes a path: it presents, explains, reassures and leads to contact.',
                    'points' => ['Clearer message', 'More polished mobile', 'Pages more focused on conversion'],
                ],
            ],
            'deliverables_title' => 'What we create',
            'deliverables_intro' => 'The format depends on the goal: presenting yourself better, launching an offer or fixing an online presence that no longer represents you.',
            'deliverables' => [
                ['Showcase website', 'A clean structure to explain who you are, what you do and how to contact you.'],
                ['Landing page', 'A focused page for a service, offer, launch or specific campaign.'],
                ['Redesign', 'A new visual direction, more organized content and better readability.'],
                ['SEO basics', 'Titles, meta, hierarchy, readable copy and a cleaner structure for Google.'],
            ],
            'flow_title' => 'From brief to publishable page',
            'flow' => [
                ['Goal', 'We define audience, message, pages and the main action.'],
                ['Architecture', 'I organize sections, priorities and content to reduce friction.'],
                ['Design', 'I create responsive layouts, visual rhythm, components and calls to action.'],
                ['Polish', 'I check mobile, readability, basic meta and final details before delivery.'],
            ],
            'note_title' => 'The website should work, not only look impressive.',
            'note_text' => 'Every block has a role: present, explain, convince or lead to contact. Everything else gets removed.',
            'faq' => [
                ['Do you also create single landing pages?', 'Yes, a landing page is often the best solution for a specific service, launch or offer.'],
                ['Can I redesign only the website look?', 'Yes, if the technical base is good we can work on redesign, structure and content.'],
                ['Is SEO included?', 'I set a clean on-page base: titles, structure, main meta, readability and hierarchy.'],
            ],
        ],
    ],
    'streaming-pack' => [
        'contact_category' => 'streaming',
        'service' => 'overlay',
        'number' => '03',
        'visual_label' => 'Live identity',
        'images' => [
            ['file' => 'mockup-streaming-boogeyman.webp', 'slot' => 'main', 'alt_it' => 'Mockup streaming pack TheBoogeyman con overlay, chat e pannelli', 'alt_en' => 'TheBoogeyman streaming pack mockup with overlay, chat and panels'],
            ['file' => 'mockup-streaming-soloduefurie.webp', 'slot' => 'top', 'alt_it' => 'Mockup streaming pack fantasy con webcam e pannelli', 'alt_en' => 'Fantasy streaming pack mockup with webcam overlays and panels'],
            ['file' => 'mockup-streaming-steel.webp', 'slot' => 'bottom', 'alt_it' => 'Mockup streaming pack Steel giallo e nero', 'alt_en' => 'Yellow and black Steel streaming pack mockup'],
        ],
        'it' => [
            'switch_label' => 'Streaming pack',
            'kicker' => 'Overlay / pannelli / schermate live',
            'title' => 'Una live pulita e riconoscibile.',
            'lead' => 'Creo overlay, pannelli e schermate coordinate per Twitch, YouTube e Kick. La live diventa più ordinata, più personale e più facile da riconoscere.',
            'primary' => 'Richiedi streaming pack',
            'secondary' => 'Vedi portfolio',
            'quick_title' => 'In pratica',
            'quick' => ['Overlay e frame', 'Pannelli canale', 'Starting / BRB / Ending', 'Look OBS coerente'],
            'panels' => [
                [
                    'title' => 'Per chi è',
                    'text' => 'Per streamer e creator che vogliono passare da una live improvvisata a un canale con identità visiva riconoscibile.',
                    'points' => ['Twitch, YouTube e Kick', 'Nuovi canali e rebrand', 'Creator con asset sparsi'],
                ],
                [
                    'title' => 'Cosa cambia',
                    'text' => 'La live diventa più ordinata: gli elementi aiutano lo sguardo, non coprono contenuto, gameplay o facecam.',
                    'points' => ['Scene più leggibili', 'Stile più memorabile', 'File più facili da usare'],
                ],
            ],
            'deliverables_title' => 'Cosa realizziamo',
            'deliverables_intro' => 'Il pack resta modulare: puoi partire da pochi asset essenziali o costruire un sistema completo per tutto il canale.',
            'deliverables' => [
                ['Overlay live', 'Frame, layout e dettagli per dare ordine alla scena principale.'],
                ['Schermate stream', 'Starting soon, pausa, ending e scene di transizione coordinate.'],
                ['Pannelli canale', 'Set grafico per organizzare info, social, regole e sezioni del profilo.'],
                ['Asset OBS', 'File ordinati per importare e usare il materiale con meno attrito possibile.'],
            ],
            'flow_title' => 'Dal canale attuale a un look più forte',
            'flow' => [
                ['Analisi canale', 'Guardo piattaforma, contenuti, mood e problemi visivi della live.'],
                ['Look', 'Definiamo colori, atmosfera, UI e gerarchia degli elementi.'],
                ['Asset', 'Creo overlay, pannelli e schermate prioritarie.'],
                ['Setup', 'Preparo file organizzati e indicazioni per inserirli nel flusso live.'],
            ],
            'note_title' => 'Più identità, meno confusione sullo schermo.',
            'note_text' => 'Il pack deve rendere il canale riconoscibile senza rubare spazio al contenuto. Pulizia e personalità prima degli effetti inutili.',
            'faq' => [
                ['Serve avere già grafiche o logo?', 'No, posso partire da zero oppure integrare elementi che hai già.'],
                ['Posso chiedere solo overlay o pannelli?', 'Sì, il pacchetto è modulare: si crea solo ciò che ti serve davvero.'],
                ['Funziona per Twitch e YouTube?', 'Sì, gli asset possono essere pensati per Twitch, YouTube, Kick o uso multi-piattaforma.'],
            ],
        ],
        'en' => [
            'switch_label' => 'Streaming pack',
            'kicker' => 'Overlays / panels / live screens',
            'title' => 'A clean, recognizable live look with impact.',
            'lead' => 'I create coordinated overlays, panels and screens for Twitch, YouTube and Kick. The stream becomes cleaner, more personal and easier to recognize.',
            'primary' => 'Request streaming pack',
            'secondary' => 'View portfolio',
            'quick_title' => 'In practice',
            'quick' => ['Overlays and frames', 'Channel panels', 'Starting / BRB / Ending', 'Coherent OBS look'],
            'panels' => [
                [
                    'title' => 'Who it is for',
                    'text' => 'For streamers and creators who want to move from an improvised live layout to a channel with a recognizable visual identity.',
                    'points' => ['Twitch, YouTube and Kick', 'New channels and rebrands', 'Creators with scattered assets'],
                ],
                [
                    'title' => 'What changes',
                    'text' => 'The live experience becomes cleaner: elements guide the eye instead of covering content, gameplay or facecam.',
                    'points' => ['More readable scenes', 'More memorable style', 'Files easier to use'],
                ],
            ],
            'deliverables_title' => 'What we create',
            'deliverables_intro' => 'The pack stays modular: you can start from a few essential assets or build a complete system for the channel.',
            'deliverables' => [
                ['Live overlay', 'Frames, layout and details to bring order to the main scene.'],
                ['Stream screens', 'Starting soon, break, ending and coordinated transition scenes.'],
                ['Channel panels', 'A graphic set to organize info, socials, rules and profile sections.'],
                ['OBS assets', 'Organized files to import and use the material with as little friction as possible.'],
            ],
            'flow_title' => 'From current channel to a stronger look',
            'flow' => [
                ['Channel analysis', 'I review platform, content, mood and visual issues in the stream.'],
                ['Look', 'We define colors, atmosphere, UI and element hierarchy.'],
                ['Assets', 'I create priority overlays, panels and screens.'],
                ['Setup', 'I prepare organized files and guidance to add them to your live workflow.'],
            ],
            'note_title' => 'More identity, less screen clutter.',
            'note_text' => 'The pack should make the channel recognizable without stealing space from the content. Cleanliness and personality before useless effects.',
            'faq' => [
                ['Do I need existing graphics or a logo?', 'No, I can start from zero or integrate elements you already have.'],
                ['Can I request only overlays or panels?', 'Yes, the package is modular: we create only what you actually need.'],
                ['Does it work for Twitch and YouTube?', 'Yes, assets can be designed for Twitch, YouTube, Kick or multi-platform use.'],
            ],
        ],
    ],
];

$page = $service_pages[$slug] ?? null;
if (!$page || !isset($service_categories[$slug])) {
    wp_safe_redirect(fg_service_category_url('graphic-design'), 301);
    exit;
}

$lang = fg_is_en() ? 'en' : 'it';
$content = $page[$lang];
$contact_url = fg_contact_category_url($page['contact_category'], $page['service']);
$portfolio_url = fg_url('/portfolio/');

fg_site_start('servizi');
?>

<section class="fg-section fg-svc-hero fg-svc-hero--<?php echo esc_attr($slug); ?>">
  <div class="fg-svc-noise" aria-hidden="true"></div>
  <div class="fg-container fg-services-container">
    <div class="fg-svc-hero-grid">
      <div class="fg-svc-copy fg-reveal fg-svc-hero-copy">
        <div class="fg-svc-meta">
          <span><?php echo esc_html($page['number']); ?>/03</span>
          <span><?php echo esc_html($content['kicker']); ?></span>
        </div>
        <h1><?php echo esc_html($content['title']); ?></h1>
        <p class="fg-svc-lead"><?php echo esc_html($content['lead']); ?></p>
        <div class="fg-svc-actions">
          <a class="fg-button is-primary" href="<?php echo esc_url($contact_url); ?>"><?php echo esc_html($content['primary']); ?></a>
          <a class="fg-button is-secondary" href="<?php echo esc_url($portfolio_url); ?>"><?php echo esc_html($content['secondary']); ?></a>
        </div>
        <div class="fg-svc-quick-card" aria-label="<?php echo esc_attr($content['quick_title']); ?>">
          <strong><?php echo esc_html($content['quick_title']); ?></strong>
          <ul>
            <?php foreach ($content['quick'] as $item) : ?>
              <li><?php echo esc_html($item); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

      <div class="fg-svc-showcase fg-reveal fg-svc-hero-visual" aria-label="<?php echo esc_attr($page['visual_label']); ?>">
        <div class="fg-svc-showcase-ring" aria-hidden="true"></div>
        <div class="fg-svc-showcase-label"><?php echo esc_html($page['visual_label']); ?></div>
        <?php foreach ($page['images'] as $image) : ?>
          <figure class="fg-svc-shot fg-svc-shot--<?php echo esc_attr($image['slot']); ?>">
            <img src="<?php echo esc_url(fg_asset($image['file'])); ?>" alt="<?php echo esc_attr($image[$lang === 'en' ? 'alt_en' : 'alt_it']); ?>" loading="lazy">
          </figure>
        <?php endforeach; ?>
        <div class="fg-svc-showcase-stamp" aria-hidden="true">
          <span><?php echo esc_html($page['number']); ?></span>
          <small><?php echo esc_html(fg_t('su misura', 'custom')); ?></small>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="fg-section fg-svc-panels-section">
  <div class="fg-container fg-services-container">
    <div class="fg-svc-panels">
      <?php foreach ($content['panels'] as $panel) : ?>
        <article class="fg-svc-panel fg-reveal">
          <h2><?php echo esc_html($panel['title']); ?></h2>
          <p><?php echo esc_html($panel['text']); ?></p>
          <ul>
            <?php foreach ($panel['points'] as $point) : ?>
              <li><?php echo esc_html($point); ?></li>
            <?php endforeach; ?>
          </ul>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="fg-section fg-svc-deliverables-section">
  <div class="fg-container fg-services-container">
    <div class="fg-svc-section-head fg-reveal">
      <span><?php echo esc_html(fg_t('Output', 'Outputs')); ?></span>
      <h2><?php echo esc_html($content['deliverables_title']); ?></h2>
      <p><?php echo esc_html($content['deliverables_intro']); ?></p>
    </div>
    <div class="fg-svc-deliverables">
      <?php foreach ($content['deliverables'] as $index => $item) : ?>
        <article class="fg-svc-deliverable fg-reveal">
          <span><?php echo esc_html(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)); ?></span>
          <h3><?php echo esc_html($item[0]); ?></h3>
          <p><?php echo esc_html($item[1]); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="fg-section fg-svc-flow-section">
  <div class="fg-container fg-services-container">
    <div class="fg-svc-flow-grid">
      <div class="fg-svc-flow-title fg-reveal">
        <span><?php echo esc_html(fg_t('Metodo', 'Method')); ?></span>
        <h2><?php echo esc_html($content['flow_title']); ?></h2>
      </div>
      <div class="fg-svc-flow-list">
        <?php foreach ($content['flow'] as $index => $step) : ?>
          <article class="fg-svc-flow-step fg-reveal">
            <span><?php echo esc_html(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)); ?></span>
            <div>
              <h3><?php echo esc_html($step[0]); ?></h3>
              <p><?php echo esc_html($step[1]); ?></p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section class="fg-section fg-svc-note-section">
  <div class="fg-container fg-services-container">
    <div class="fg-svc-note fg-reveal">
      <div>
        <span><?php echo esc_html(fg_t('Direzione', 'Direction')); ?></span>
        <h2><?php echo esc_html($content['note_title']); ?></h2>
        <p><?php echo esc_html($content['note_text']); ?></p>
      </div>
      <a class="fg-button is-primary" href="<?php echo esc_url($contact_url); ?>"><?php echo esc_html($content['primary']); ?></a>
    </div>
  </div>
</section>

<section class="fg-section fg-service-faq-cta-section fg-service-faq-only-section">
  <div class="fg-container fg-services-container">
    <div class="fg-service-faq-only-card fg-service-faq-card fg-reveal">
      <div class="fg-section-kicker fg-section-kicker--left">FAQ</div>
      <div class="fg-service-faq-head">
        <h2><?php echo esc_html(fg_t('Domande rapide', 'Quick questions')); ?></h2>
        <p><?php echo esc_html(fg_t('Le risposte essenziali prima di scrivermi: chiare, dirette e senza promesse inutili.', 'The essentials before contacting me: clear, direct and without empty promises.')); ?></p>
      </div>
      <div class="fg-service-faq-list">
        <?php foreach ($content['faq'] as $index => $item) : ?>
          <details class="fg-service-faq-item" <?php echo $index === 0 ? 'open' : ''; ?>>
            <summary>
              <span><?php echo esc_html($item[0]); ?></span>
              <i aria-hidden="true"></i>
            </summary>
            <p><?php echo esc_html($item[1]); ?></p>
          </details>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<?php fg_site_end(); ?>
