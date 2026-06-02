# FuriaGraphic Theme

Repository del tema child WordPress `furiagraphic-extendable-child`, usato per il sito FuriaGraphic.

## Contenuto

```text
furiagraphic-extendable-child/
├── functions.php
├── front-page.php
├── page-servizi-categoria.php
├── page-portfolio.php
├── page-chi-siamo.php
├── page-contatti.php
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
└── style.css
```

## Requisiti WordPress

- WordPress installato.
- Tema parent `Extendable` installato.
- Questo tema va caricato come child theme in:

```text
/wp-content/themes/furiagraphic-extendable-child/
```

## URL principali

```text
/
/servizi/graphic-design/
/servizi/web-design/
/servizi/streaming-pack/
/portfolio/
/chi-siamo/
/contatti/
/privacy-policy/
/cookie-policy/
/termini-e-condizioni/
```

## Note importanti

- Il sito deve aprirsi in italiano di default.
- L'inglese deve attivarsi solo tramite `?lang=en` o selettore lingua.
- CookieYes e' integrato nel tema.
- Il menu mobile e le pagine servizi devono restare responsive.
- Le immagini dei servizi su mobile devono restare in composizione compatta, non in fila come una galleria.

## Controlli rapidi

Da terminale, dentro `furiagraphic-extendable-child/`:

```bash
php -l functions.php
php -l front-page.php
php -l page-servizi-categoria.php
php -l page-chi-siamo.php
php -l page-contatti.php
node --check assets/js/theme.js
```

## Deploy manuale su Aruba

1. Scaricare lo ZIP del repository o della cartella tema.
2. Caricare/sostituire la cartella:

```text
/wp-content/themes/furiagraphic-extendable-child/
```

3. In WordPress andare su:

```text
Impostazioni -> Permalink -> Salva
```

4. Svuotare cache Aruba, WordPress e browser.
5. Testare desktop e mobile in incognito.
