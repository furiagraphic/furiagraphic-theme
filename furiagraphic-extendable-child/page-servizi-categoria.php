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
            'title' => 'Un’identità visiva che sembra finalmente intenzionale.',
            'lead' => 'Creo logo, palette, tipografia e materiali coordinati per trasformare idee, contenuti e touchpoint in un sistema visivo chiaro, elegante e riconoscibile.',
            'primary' => 'Racconta il brand',
            'secondary' => 'Vedi portfolio',
            'quick_title' => 'In pratica',
            'quick' => ['Logo e restyling', 'Sistema visivo', 'Social kit', 'File pronti all’uso'],
            'panels' => [
                [
                    'title' => 'Per chi è',
                    'text' => 'Per chi ha un progetto valido, ma un’immagine che oggi non trasmette ancora qualità, coerenza o personalità.',
                    'points' => ['Nuove attività e freelance', 'Creator e progetti personali', 'Brand con materiali non allineati'],
                ],
                [
                    'title' => 'Cosa cambia',
                    'text' => 'Passi da grafiche sparse a un sistema visivo con regole semplici, applicazioni credibili e file ordinati per l’uso reale.',
                    'points' => ['Più riconoscibilità', 'Scelte visive più sicure', 'Output pronti per l’uso reale'],
                ],
            ],
            'deliverables_title' => 'Cosa possiamo costruire',
            'deliverables_intro' => 'Niente pacchetti gonfiati: selezioniamo gli asset che servono davvero e li rendiamo parte dello stesso linguaggio visivo.',
            'deliverables' => [
                ['Logo principale', 'Un segno chiaro, leggibile e versatile, con varianti utili per digitale, stampa e social.'],
                ['Sistema visivo', 'Palette, font, gerarchie e regole essenziali per mantenere coerenza nel tempo.'],
                ['Social kit', 'Template, post, cover e materiali coordinati per comunicare con uno stile riconoscibile.'],
                ['Materiali promo', 'Locandine, banner, presentazioni e file coordinati per campagne, eventi o lanci.'],
            ],
            'flow_title' => 'Metodo chiaro, identità più solida',
            'flow' => [
                ['Brief visivo', 'Mettiamo a fuoco obiettivo, pubblico, stile desiderato e punti deboli dell’immagine attuale.'],
                ['Direzione', 'Definiamo mood, riferimenti, personalità e criteri prima di passare alla parte grafica.'],
                ['Design applicato', 'Creo gli elementi e li verifico su contesti reali, non solo su un mockup scenografico.'],
                ['Consegna pulita', 'Ricevi file ordinati, varianti utili e indicazioni per usare il materiale con sicurezza.'],
            ],
            'note_title' => 'Non serve fare tutto: serve fare le cose giuste.',
            'note_text' => 'Il progetto parte da ciò che crea valore ora. Se basta un logo solido, lavoriamo lì; se serve un sistema più ampio, lo costruiamo con metodo e proporzione.',
            'faq' => [
                ['Posso partire solo dal logo?', 'Sì. Il logo può essere un progetto autonomo oppure diventare la base per ampliare identità e materiali nel tempo.'],
                ['Serve avere già idee chiare?', 'No. Bastano obiettivo, pubblico e qualche riferimento: la direzione la costruiamo insieme.'],
                ['Mi consegni file pronti per social o stampa?', 'Sì. In base agli output concordati preparo formati pratici, ordinati e realmente utilizzabili.'],
            ],
        ],
        'en' => [
            'switch_label' => 'Graphic design',
            'kicker' => 'Branding / logo / coordinated graphics',
            'title' => 'A visual identity that finally feels intentional.',
            'lead' => 'I create logos, palettes, typography and coordinated assets that turn ideas, content and touchpoints into a clear, elegant and recognizable visual system.',
            'primary' => 'Share your brand',
            'secondary' => 'View portfolio',
            'quick_title' => 'In practice',
            'quick' => ['Logo and redesign', 'Visual system', 'Social kit', 'Ready-to-use files'],
            'panels' => [
                [
                    'title' => 'Who it is for',
                    'text' => 'For valuable projects whose current image still does not communicate quality, coherence or personality.',
                    'points' => ['New businesses and freelancers', 'Creators and personal projects', 'Brands with misaligned assets'],
                ],
                [
                    'title' => 'What changes',
                    'text' => 'You move from scattered graphics to a visual system with simple rules, credible applications and organized files for real use.',
                    'points' => ['More recognition', 'More confident visual choices', 'Outputs ready for real use'],
                ],
            ],
            'deliverables_title' => 'What we can build',
            'deliverables_intro' => 'No inflated packages: we select the assets you actually need and make them part of the same visual language.',
            'deliverables' => [
                ['Main logo', 'A clear, readable and versatile mark, with useful variants for digital, print and social use.'],
                ['Visual system', 'Palette, fonts, hierarchy and essential rules to keep the identity consistent over time.'],
                ['Social kit', 'Templates, posts, covers and coordinated materials to communicate with a recognizable style.'],
                ['Promo assets', 'Posters, banners, presentations and coordinated files for campaigns, events or launches.'],
            ],
            'flow_title' => 'Clear method, stronger identity',
            'flow' => [
                ['Visual brief', 'We clarify goals, audience, desired style and weak points in the current image.'],
                ['Direction', 'We define mood, references, personality and criteria before moving into design.'],
                ['Applied design', 'I create the elements and test them in real contexts, not only on a beautiful mockup.'],
                ['Clean delivery', 'You receive organized files, useful variants and guidance to use everything with confidence.'],
            ],
            'note_title' => 'You do not need everything: you need the right things.',
            'note_text' => 'The project starts from what creates value now. If a strong logo is enough, we work there; if a broader system is needed, we build it with method and proportion.',
            'faq' => [
                ['Can I start only with the logo?', 'Yes. The logo can be a standalone project or become the base to expand identity and materials over time.'],
                ['Do I need clear ideas already?', 'No. Goals, audience and a few references are enough: we build the direction together.'],
                ['Do you deliver files ready for social or print?', 'Yes. Based on the agreed outputs, I prepare practical, organized and truly usable formats.'],
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
            'title' => 'Un sito che spiega bene, rassicura e porta al contatto.',
            'lead' => 'Progetto siti vetrina, landing e restyling con struttura leggibile, look premium e mobile curato. Ogni sezione ha un compito: presentarti meglio e rendere più naturale la richiesta di contatto.',
            'primary' => 'Parliamo del sito',
            'secondary' => 'Vedi portfolio',
            'quick_title' => 'In pratica',
            'quick' => ['Struttura chiara', 'Mobile curato', 'CTA leggibili', 'SEO on-page base'],
            'panels' => [
                [
                    'title' => 'Per chi è',
                    'text' => 'Per freelance, attività e piccoli brand che vogliono un sito più credibile, ordinato e semplice da capire anche al primo sguardo.',
                    'points' => ['Siti vetrina professionali', 'Landing per servizi e offerte', 'Restyling di siti datati'],
                ],
                [
                    'title' => 'Cosa cambia',
                    'text' => 'Il sito smette di essere una vetrina statica e diventa un percorso: presenta, spiega, rassicura e accompagna l’utente verso il contatto.',
                    'points' => ['Messaggio più chiaro', 'Esperienza mobile più curata', 'Pagine più orientate alla richiesta'],
                ],
            ],
            'deliverables_title' => 'Cosa possiamo costruire',
            'deliverables_intro' => 'La forma dipende dall’obiettivo: presentarti con più autorevolezza, lanciare un’offerta o sistemare un sito che non ti rappresenta più.',
            'deliverables' => [
                ['Sito vetrina', 'Una struttura pulita per spiegare chi sei, cosa offri e perché vale la pena contattarti.'],
                ['Landing page', 'Una pagina focalizzata su servizio, offerta, lancio o campagna, senza distrazioni inutili.'],
                ['Restyling', 'Nuova direzione visiva, contenuti più ordinati e una lettura più fluida da desktop e mobile.'],
                ['Base SEO', 'Title, meta, gerarchie e testi più leggibili per una struttura pulita anche lato ricerca.'],
            ],
            'flow_title' => 'Dal brief a una presenza online più solida',
            'flow' => [
                ['Obiettivo', 'Definiamo pubblico, messaggio, pagine necessarie e azione principale da guidare.'],
                ['Architettura', 'Organizzo sezioni, priorità e contenuti per rendere la navigazione più semplice.'],
                ['Design', 'Creo layout responsive, ritmo visivo, componenti e call to action coerenti.'],
                ['Rifinitura', 'Controllo mobile, leggibilità, meta base e dettagli prima della pubblicazione o consegna.'],
            ],
            'note_title' => 'Un sito deve sembrare curato, ma soprattutto deve farsi capire.',
            'note_text' => 'Ogni blocco deve avere una funzione: presentare, spiegare, rassicurare o portare al contatto. Se non aiuta l’utente, si semplifica.',
            'faq' => [
                ['Realizzi anche landing page singole?', 'Sì. Una landing è spesso la scelta migliore per un servizio, un lancio o un’offerta specifica.'],
                ['Posso rifare solo il design del sito?', 'Sì. Se la base tecnica è valida, si può lavorare su restyling, struttura e contenuti.'],
                ['La SEO è inclusa?', 'Imposto una base on-page pulita: titoli, meta principali, gerarchie, leggibilità e struttura.'],
            ],
        ],
        'en' => [
            'switch_label' => 'Web design',
            'kicker' => 'Websites / landing pages / redesigns',
            'title' => 'A website that explains clearly, builds trust and leads to contact.',
            'lead' => 'I design showcase websites, landing pages and redesigns with readable structure, premium visuals and polished mobile layouts. Every section has a purpose: present you better and make enquiry feel natural.',
            'primary' => 'Talk about the website',
            'secondary' => 'View portfolio',
            'quick_title' => 'In practice',
            'quick' => ['Clear structure', 'Polished mobile', 'Readable CTAs', 'Basic on-page SEO'],
            'panels' => [
                [
                    'title' => 'Who it is for',
                    'text' => 'For freelancers, businesses and small brands that want a more credible, organized and easy-to-understand website from the first glance.',
                    'points' => ['Professional showcase websites', 'Landing pages for services and offers', 'Redesigns of outdated websites'],
                ],
                [
                    'title' => 'What changes',
                    'text' => 'The website stops being a static showcase and becomes a path: it presents, explains, reassures and guides users toward contact.',
                    'points' => ['Clearer message', 'More polished mobile experience', 'Pages more focused on enquiry'],
                ],
            ],
            'deliverables_title' => 'What we can build',
            'deliverables_intro' => 'The format depends on the goal: presenting yourself with more authority, launching an offer or fixing a website that no longer represents you.',
            'deliverables' => [
                ['Showcase website', 'A clean structure to explain who you are, what you offer and why people should contact you.'],
                ['Landing page', 'A focused page for a service, offer, launch or campaign, without unnecessary distractions.'],
                ['Redesign', 'A new visual direction, more organized content and smoother reading on desktop and mobile.'],
                ['SEO basics', 'Titles, meta, hierarchy and more readable copy for a cleaner search-friendly structure.'],
            ],
            'flow_title' => 'From brief to a stronger online presence',
            'flow' => [
                ['Goal', 'We define audience, message, required pages and the main action to guide.'],
                ['Architecture', 'I organize sections, priorities and content to make navigation easier.'],
                ['Design', 'I create responsive layouts, visual rhythm, components and coherent calls to action.'],
                ['Polish', 'I check mobile, readability, basic meta and final details before publication or delivery.'],
            ],
            'note_title' => 'A website should look polished, but above all it should be understood.',
            'note_text' => 'Every block needs a function: present, explain, reassure or lead to contact. If it does not help the user, it gets simplified.',
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
            'title' => 'Una live più ordinata, riconoscibile e personale.',
            'lead' => 'Creo overlay, pannelli e schermate coordinate per Twitch, YouTube e Kick. Il canale acquista una presenza più pulita e memorabile, senza togliere spazio al contenuto.',
            'primary' => 'Crea il tuo pack',
            'secondary' => 'Vedi portfolio',
            'quick_title' => 'In pratica',
            'quick' => ['Overlay e frame', 'Pannelli canale', 'Scene stream', 'Setup OBS coerente'],
            'panels' => [
                [
                    'title' => 'Per chi è',
                    'text' => 'Per streamer e creator che vogliono passare da una live improvvisata a un canale con una firma visiva chiara e riconoscibile.',
                    'points' => ['Twitch, YouTube e Kick', 'Nuovi canali e rebrand', 'Creator con asset non coordinati'],
                ],
                [
                    'title' => 'Cosa cambia',
                    'text' => 'La live diventa più leggibile: gli elementi guidano lo sguardo, valorizzano il contenuto e non invadono gameplay o facecam.',
                    'points' => ['Scene più leggibili', 'Stile più memorabile', 'File più semplici da gestire'],
                ],
            ],
            'deliverables_title' => 'Cosa possiamo costruire',
            'deliverables_intro' => 'Il pack resta modulare: puoi partire dagli asset essenziali o costruire un sistema completo per rendere tutto il canale più coerente.',
            'deliverables' => [
                ['Overlay live', 'Frame, layout e dettagli pensati per dare ordine alla scena principale senza appesantirla.'],
                ['Schermate stream', 'Starting soon, pausa, ending e scene di transizione coordinate con lo stesso stile.'],
                ['Pannelli canale', 'Set grafico per organizzare info, social, regole e sezioni del profilo in modo pulito.'],
                ['Asset OBS', 'File ordinati per importare il materiale con meno attrito e più controllo.'],
            ],
            'flow_title' => 'Dal canale attuale a una live più riconoscibile',
            'flow' => [
                ['Analisi canale', 'Analizzo piattaforma, contenuti, mood e problemi visivi della live attuale.'],
                ['Look', 'Definiamo colori, atmosfera, interfaccia e gerarchia degli elementi sullo schermo.'],
                ['Asset', 'Creo overlay, pannelli e schermate prioritarie con uno stile coerente.'],
                ['Setup', 'Preparo file organizzati e indicazioni pratiche per inserirli nel flusso live.'],
            ],
            'note_title' => 'La live deve farsi riconoscere, non riempirsi di effetti.',
            'note_text' => 'Un buon pack dà carattere al canale senza rubare attenzione al contenuto. Prima leggibilità e personalità, poi gli effetti solo se servono davvero.',
            'faq' => [
                ['Serve avere già grafiche o logo?', 'No. Posso partire da zero oppure integrare elementi che hai già, se sono coerenti con la nuova direzione.'],
                ['Posso chiedere solo overlay o pannelli?', 'Sì. Il pacchetto è modulare: si crea solo ciò che ti serve davvero.'],
                ['Funziona per Twitch e YouTube?', 'Sì. Gli asset possono essere pensati per Twitch, YouTube, Kick o uso multi-piattaforma.'],
            ],
        ],
        'en' => [
            'switch_label' => 'Streaming pack',
            'kicker' => 'Overlays / panels / live screens',
            'title' => 'A cleaner, more recognizable and personal live look.',
            'lead' => 'I create coordinated overlays, panels and screens for Twitch, YouTube and Kick. The channel gains a cleaner, more memorable presence without stealing space from the content.',
            'primary' => 'Create your pack',
            'secondary' => 'View portfolio',
            'quick_title' => 'In practice',
            'quick' => ['Overlays and frames', 'Channel panels', 'Stream scenes', 'Coherent OBS setup'],
            'panels' => [
                [
                    'title' => 'Who it is for',
                    'text' => 'For streamers and creators who want to move from an improvised live layout to a channel with a clear, recognizable visual signature.',
                    'points' => ['Twitch, YouTube and Kick', 'New channels and rebrands', 'Creators with uncoordinated assets'],
                ],
                [
                    'title' => 'What changes',
                    'text' => 'The live experience becomes more readable: elements guide the eye, support the content and do not invade gameplay or facecam.',
                    'points' => ['More readable scenes', 'More memorable style', 'Files easier to manage'],
                ],
            ],
            'deliverables_title' => 'What we can build',
            'deliverables_intro' => 'The pack stays modular: you can start from the essential assets or build a complete system to make the entire channel more consistent.',
            'deliverables' => [
                ['Live overlay', 'Frames, layout and details designed to bring order to the main scene without weighing it down.'],
                ['Stream screens', 'Starting soon, break, ending and transition scenes coordinated with the same style.'],
                ['Channel panels', 'A graphic set to organize info, socials, rules and profile sections in a cleaner way.'],
                ['OBS assets', 'Organized files to import the material with less friction and more control.'],
            ],
            'flow_title' => 'From current channel to a more recognizable live experience',
            'flow' => [
                ['Channel analysis', 'I review platform, content, mood and visual issues in the current stream.'],
                ['Look', 'We define colors, atmosphere, interface and element hierarchy on screen.'],
                ['Assets', 'I create priority overlays, panels and screens with a coherent style.'],
                ['Setup', 'I prepare organized files and practical guidance to add them to your live workflow.'],
            ],
            'note_title' => 'The stream should be recognizable, not overloaded with effects.',
            'note_text' => 'A good pack gives the channel character without stealing attention from the content. Readability and personality first; effects only when they truly help.',
            'faq' => [
                ['Do I need existing graphics or a logo?', 'No. I can start from zero or integrate elements you already have, if they fit the new direction.'],
                ['Can I request only overlays or panels?', 'Yes. The package is modular: we create only what you actually need.'],
                ['Does it work for Twitch and YouTube?', 'Yes. Assets can be designed for Twitch, YouTube, Kick or multi-platform use.'],
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
