# FuriaGraphic WordPress Theme - Codex Instructions

Questo repository contiene il tema child WordPress `furiagraphic-extendable-child`.

## Regole principali

- Non modificare il parent theme Extendable.
- Non rimuovere CookieYes.
- Il sito deve essere italiano di default.
- L'inglese deve attivarsi solo con `?lang=en` o tramite selettore lingua.
- Mantenere responsive desktop, tablet e mobile.
- Su mobile i testi delle pagine servizi devono restare centrati.
- Le immagini delle pagine servizi devono restare composizioni compatte, non gallerie verticali.
- Non rompere i permalink principali:
  - `/servizi/graphic-design/`
  - `/servizi/web-design/`
  - `/servizi/streaming-pack/`
  - `/portfolio/`
  - `/chi-siamo/`
  - `/contatti/`
- Non reinserire la pagina panoramica `/servizi/` come pagina visibile; deve restare redirectata verso un servizio principale se previsto dal tema.
- Non aggiungere dipendenze pesanti senza motivo.
- Non usare codice offuscato, eval, base64_decode per logiche applicative o script esterni non necessari.

## File principali

- `functions.php`: routing, SEO, lingua, header, footer, CookieYes, redirect.
- `front-page.php`: homepage.
- `page-servizi-categoria.php`: contenuti e layout delle tre pagine servizio.
- `page-portfolio.php`: portfolio.
- `page-chi-siamo.php`: pagina chi siamo.
- `page-contatti.php`: pagina contatti.
- `assets/css/global.css`: layout globale, header, footer, menu mobile.
- `assets/css/front-page.css`: homepage.
- `assets/css/servizi.css`: pagine servizio.
- `assets/css/portfolio.css`: portfolio.
- `assets/css/chi-siamo.css`: chi siamo.
- `assets/css/contatti.css`: contatti.
- `assets/js/theme.js`: menu mobile, accordion, reveal/animazioni.

## Stile visivo

- Direzione: nero, oro, premium, elegante, creativo.
- Evitare bordi troppo tondi.
- Evitare layout troppo compressi.
- Evitare testi sovrapposti su mobile.
- Mantenere CTA chiare e ben leggibili.
- Non trasformare i mockup servizio in un mini portfolio.
- Desktop e mobile vanno controllati separatamente: molte scelte mobile sono intenzionali.

## Lingua

- Italiano default.
- Inglese solo con query/cookie esplicito `en`.
- Il selettore IT deve riportare davvero il sito in italiano.
- Non lasciare cookie EN che forzano inglese su nuove visite senza query.

## Menu mobile

- Il menu mobile deve essere leggibile anche sotto 390px.
- Il sottomenù Servizi deve essere un accordion vero.
- Voci del sottomenù: Graphic design, Web design, Streaming pack.
- Le voci non devono uscire a sinistra e non devono sovrapporsi.
- Su mobile evitare menu troppo trasparenti se il contenuto sotto disturba la lettura.

## Pagine servizi

Pagine previste:

```text
/servizi/graphic-design/
/servizi/web-design/
/servizi/streaming-pack/
```

Comportamento richiesto:

- Hero elegante e responsive.
- Blocchi e testi senza sovrapposizioni.
- Sezione FAQ larga e proporzionata.
- Nessun box duplicato tipo `Prossimo passo` se gia' presente `Direzione`.
- Su mobile le immagini devono restare in composizione compatta/sovrapposta.

## Footer

- Newsletter a sinistra come blocco compatto.
- Link rapidi al centro.
- Contatti a destra stretti, ma testi e icone devono essere ben allineati.
- Mobile centrato e pulito.

## SEO e routing

- Le vecchie pagine SEO devono reindirizzare verso le tre nuove pagine servizio.
- Mantenere sitemap pulita e canonical coerenti.
- Non creare nuove landing duplicate senza richiesta esplicita.

## Controlli da eseguire dopo ogni modifica

Da dentro `furiagraphic-extendable-child/`:

```bash
php -l functions.php
php -l front-page.php
php -l page-servizi-categoria.php
php -l page-chi-siamo.php
php -l page-contatti.php
php -l page-portfolio.php
node --check assets/js/theme.js
```

Se viene modificato CSS, controllare almeno che le parentesi graffe siano bilanciate e testare mentalmente i breakpoint mobile.

## Output atteso per ogni task Codex

Quando modifichi il tema:

1. Spiega i file modificati.
2. Spiega cosa e' cambiato.
3. Riporta i test/lint eseguiti.
4. Segnala eventuali rischi o parti da verificare su WordPress live/staging.
