document.addEventListener('DOMContentLoaded', function () {
  const body = document.body;
  const header = document.querySelector('.fg-header');
  const toggle = document.querySelector('.fg-menu-toggle');
  const mobileMenu = document.querySelector('.fg-mobile-menu');
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (toggle && mobileMenu) {
    toggle.addEventListener('click', function () {
      const isOpen = mobileMenu.classList.toggle('is-open');
      toggle.classList.toggle('is-open', isOpen);
      toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      body.classList.toggle('fg-menu-open', isOpen);
    });

    mobileMenu.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        mobileMenu.classList.remove('is-open');
        toggle.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        body.classList.remove('fg-menu-open');
      });
    });
  }



  document.querySelectorAll('.fg-nav-has-submenu > .fg-nav-parent').forEach(function (button) {
    const parent = button.closest('.fg-nav-has-submenu');
    if (!parent) return;

    const isMobileParent = parent.classList.contains('fg-mobile-services-group');

    if (!isMobileParent) {
      parent.addEventListener('mouseenter', function () {
        button.setAttribute('aria-expanded', 'true');
      });
      parent.addEventListener('mouseleave', function () {
        button.setAttribute('aria-expanded', 'false');
      });
      button.addEventListener('click', function (event) {
        event.preventDefault();
      });
      return;
    }

    button.addEventListener('click', function (event) {
      event.preventDefault();
      const isOpen = parent.classList.toggle('is-submenu-open');
      button.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
  });

  function handleHeaderState() {
    if (!header) return;
    header.classList.toggle('is-scrolled', window.scrollY > 14);
  }

  handleHeaderState();
  window.addEventListener('scroll', handleHeaderState, { passive: true });

  const revealTargets = document.querySelectorAll([
    '.fg-reveal',
    '.fg-service-row',
    '.fg-section-intro',
    '.fg-page-title-wrap',
    '.fg-spotlight-card',
    '.fg-service-box',
    '.fg-process-card',
    '.fg-contact-card',
    '.fg-contact-step-card',
    '.fg-value-card',
    '.fg-about-card',
    '.fg-about-media',
    '.fg-approach-copy',
    '.fg-portfolio-item',
    '.fg-portfolio-cta',
    '.fg-cta-panel',
    '.fg-portfolio-category-card',
    '.fg-subpreview-card',
    '.fg-contact-pro-main',
    '.fg-side-card',
    '.fg-detail-card'
  ].join(','));

  revealTargets.forEach(function (el, index) {
    if (!el.classList.contains('fg-reveal')) {
      el.classList.add('fg-reveal');
    }

    if (!el.classList.contains('is-visible') && index < 2) {
      el.classList.add('is-visible');
    }
  });

  const staggerGroups = [
    '.fg-spotlight-grid > *',
    '.fg-service-grid > *',
    '.fg-process-grid > *',
    '.fg-values-grid > *',
    '.fg-contact-cards > *',
    '.fg-contact-flow-grid > *',
    '.fg-portfolio-grid > *',
    '.fg-portfolio-categories-grid > *',
    '.fg-subpreview-grid > *',
    '.fg-contact-details-grid > *'
  ];

  staggerGroups.forEach(function (selector) {
    document.querySelectorAll(selector).forEach(function (el, index) {
      if (!el.classList.contains('fg-reveal')) {
        el.classList.add('fg-reveal');
      }
      const step = Math.min(index + 1, 5);
      el.classList.add('fg-delay-' + step);
    });
  });

  if (!reduceMotion && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, {
      root: null,
      rootMargin: '0px 0px -10% 0px',
      threshold: 0.14
    });

    document.querySelectorAll('.fg-reveal').forEach(function (el) {
      if (!el.classList.contains('is-visible')) {
        observer.observe(el);
      }
    });
  } else {
    document.querySelectorAll('.fg-reveal').forEach(function (el) {
      el.classList.add('is-visible');
    });
  }

  const projectForm = document.querySelector('.fg-project-form[data-catalog]');
  if (projectForm) {
    let catalog = {};
    let oldValues = {};

    try {
      catalog = JSON.parse(projectForm.getAttribute('data-catalog') || '{}');
    } catch (e) {
      catalog = {};
    }

    try {
      oldValues = JSON.parse(projectForm.getAttribute('data-old') || '{}');
    } catch (e) {
      oldValues = {};
    }

    const categorySelect = projectForm.querySelector('[name="categoria"]');
    const serviceSelect = projectForm.querySelector('[name="servizio"]');
    const serviceCopy = projectForm.querySelector('[data-service-copy]');
    const dynamicFieldsWrap = projectForm.querySelector('[data-dynamic-fields]');
    const deliverableInput = projectForm.querySelector('[name="deliverable"]');

    function escapeHtml(str) {
      return String(str)
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#039;');
    }

    function selectedAttr(current, value) {
      return current === value ? ' selected' : '';
    }

    function renderServices(useOldValue) {
      const categoryKey = categorySelect.value;
      const category = catalog[categoryKey];
      const currentValue = useOldValue ? (oldValues.servizio || '') : '';

      if (!category || !category.services) {
        serviceSelect.innerHTML = '<option value="">Seleziona prima una categoria</option>';
        serviceSelect.disabled = true;
        return;
      }

      const options = ['<option value="">Seleziona un servizio</option>'];
      Object.keys(category.services).forEach(function (serviceKey) {
        const service = category.services[serviceKey];
        options.push('<option value="' + escapeHtml(serviceKey) + '"' + selectedAttr(currentValue, serviceKey) + '>' + escapeHtml(service.label) + '</option>');
      });
      serviceSelect.innerHTML = options.join('');
      serviceSelect.disabled = false;
    }

    function renderDynamicFields() {
      const categoryKey = categorySelect.value;
      const category = catalog[categoryKey];

      if (!category || !Array.isArray(category.fields) || !dynamicFieldsWrap) {
        if (dynamicFieldsWrap) dynamicFieldsWrap.innerHTML = '';
        return;
      }

      const html = category.fields.map(function (field) {
        const value = oldValues[field.name] || '';
        const label = '<label for="fg-' + escapeHtml(field.name) + '">' + escapeHtml(field.label) + (field.required ? ' *' : '') + '</label>';
        let control = '';

        if (field.type === 'select') {
          const options = Object.keys(field.options || {}).map(function (optionValue) {
            return '<option value="' + escapeHtml(optionValue) + '"' + selectedAttr(value, optionValue) + '>' + escapeHtml(field.options[optionValue]) + '</option>';
          }).join('');
          control = '<select id="fg-' + escapeHtml(field.name) + '" name="' + escapeHtml(field.name) + '"' + (field.required ? ' required' : '') + '>' + options + '</select>';
        } else {
          control = '<input id="fg-' + escapeHtml(field.name) + '" type="text" name="' + escapeHtml(field.name) + '" value="' + escapeHtml(value) + '" placeholder="' + escapeHtml(field.placeholder || '') + '"' + (field.required ? ' required' : '') + '>';
        }

        return '<div class="fg-field fg-dynamic-field">' + label + control + '</div>';
      }).join('');

      dynamicFieldsWrap.innerHTML = html;
    }

    function updateCopy() {
      const categoryKey = categorySelect.value;
      const serviceKey = serviceSelect.value;
      const category = catalog[categoryKey];
      let copy = 'Seleziona una categoria e poi il servizio principale, così posso capire subito il tipo di richiesta.';

      if (category) {
        copy = category.intro || copy;
        if (serviceKey && category.services && category.services[serviceKey] && category.services[serviceKey].hint) {
          copy = category.services[serviceKey].hint;
        }

        if (deliverableInput && category.deliverable_placeholder) {
          deliverableInput.setAttribute('placeholder', category.deliverable_placeholder);
        }
      }

      if (!category && deliverableInput) {
        deliverableInput.setAttribute('placeholder', 'Descrivi rapidamente cosa ti serve');
      }

      if (serviceCopy) {
        serviceCopy.textContent = copy;
      }
    }

    categorySelect.addEventListener('change', function () {
      oldValues.servizio = '';
      renderServices(false);
      renderDynamicFields();
      updateCopy();
    });

    serviceSelect.addEventListener('change', updateCopy);

    renderServices(true);
    renderDynamicFields();
    updateCopy();
  }

  const portfolioCarousels = [];

  function setupPortfolioCarousel(carousel) {
    const viewport = carousel.querySelector('[data-carousel-viewport]');
    const track = carousel.querySelector('[data-carousel-track]');
    const slides = Array.from(carousel.querySelectorAll('[data-carousel-slide]'));
    const prev = carousel.querySelector('[data-carousel-prev]');
    const next = carousel.querySelector('[data-carousel-next]');

    if (!viewport || !track || !slides.length) {
      return null;
    }

    function getStep() {
      const first = slides[0];
      if (!first) return Math.max(viewport.clientWidth, 320);
      const style = window.getComputedStyle(track);
      const gap = parseFloat(style.columnGap || style.gap || '0');
      const firstWidth = first.getBoundingClientRect().width;
      return Math.max(firstWidth + gap, 280);
    }

    function updateNav() {
      const maxScroll = Math.max(0, viewport.scrollWidth - viewport.clientWidth - 2);
      if (prev) prev.disabled = viewport.scrollLeft <= 2;
      if (next) next.disabled = viewport.scrollLeft >= maxScroll;
    }

    function refresh(resetPosition) {
      window.requestAnimationFrame(function () {
        if (resetPosition) {
          viewport.scrollLeft = 0;
        }
        updateNav();
      });
    }

    function move(direction) {
      viewport.scrollBy({ left: getStep() * direction, behavior: reduceMotion ? 'auto' : 'smooth' });
      window.setTimeout(updateNav, reduceMotion ? 0 : 320);
    }

    if (prev) prev.addEventListener('click', function () { move(-1); });
    if (next) next.addEventListener('click', function () { move(1); });

    viewport.addEventListener('scroll', updateNav, { passive: true });
    window.addEventListener('resize', function () { refresh(false); });

    const api = { carousel, viewport, refresh, updateNav };
    refresh(false);
    return api;
  }

  document.querySelectorAll('[data-portfolio-carousel]').forEach(function (carousel) {
    const api = setupPortfolioCarousel(carousel);
    if (api) {
      portfolioCarousels.push(api);
    }
  });

  const portfolioSwitcher = document.querySelector('[data-portfolio-switcher]');
  if (portfolioSwitcher) {
    const tabs = Array.from(portfolioSwitcher.querySelectorAll('[data-portfolio-tab]'));
    const panels = Array.from(portfolioSwitcher.querySelectorAll('[data-portfolio-panel]'));

    function activatePortfolioTab(key) {
      tabs.forEach(function (tab) {
        const active = tab.getAttribute('data-portfolio-tab') === key;
        tab.classList.toggle('is-active', active);
        tab.setAttribute('aria-selected', active ? 'true' : 'false');
      });

      panels.forEach(function (panel) {
        const active = panel.getAttribute('data-portfolio-panel') === key;
        panel.classList.toggle('is-active', active);
        panel.hidden = !active;

        if (active) {
          const animated = panel.querySelectorAll('.fg-reveal');
          animated.forEach(function (item, index) {
            window.setTimeout(function () {
              item.classList.add('is-visible');
            }, Math.min(index * 40, 180));
          });

          const carousel = panel.querySelector('[data-portfolio-carousel]');
          const api = portfolioCarousels.find(function (entry) {
            return entry.carousel === carousel;
          });

          if (api) {
            api.refresh(true);
          }
        }
      });
    }

    tabs.forEach(function (tab) {
      tab.addEventListener('click', function () {
        activatePortfolioTab(tab.getAttribute('data-portfolio-tab'));
      });
    });

    const initialTab = tabs.find(function (tab) { return tab.classList.contains('is-active'); }) || tabs[0];
    if (initialTab) {
      activatePortfolioTab(initialTab.getAttribute('data-portfolio-tab'));
    }
  }



  function setupMailContactPanel() {
    const mailLinks = Array.from(document.querySelectorAll('a[href^="mailto:"]'));
    if (!mailLinks.length) return;

    const isEnglish = document.documentElement.lang.toLowerCase().indexOf('en') === 0 || body.classList.contains('fg-lang-en');
    const text = isEnglish ? {
      title: 'Choose how to contact FuriaGraphic',
      intro: 'You can use the website form, open your email app, compose in Gmail, or copy the address.',
      form: 'Use website form',
      app: 'Open email app',
      gmail: 'Open Gmail',
      copy: 'Copy email',
      copied: 'Email copied',
      close: 'Close email options'
    } : {
      title: 'Scegli come contattare FuriaGraphic',
      intro: 'Puoi usare il modulo del sito, aprire l\'app email, scrivere da Gmail o copiare l\'indirizzo.',
      form: 'Usa modulo sito',
      app: 'Apri app email',
      gmail: 'Apri Gmail',
      copy: 'Copia email',
      copied: 'Email copiata',
      close: 'Chiudi opzioni email'
    };

    const backdrop = document.createElement('div');
    backdrop.className = 'fg-mail-panel-backdrop';
    backdrop.setAttribute('aria-hidden', 'true');
    backdrop.innerHTML = '' +
      '<div class="fg-mail-panel" role="dialog" aria-modal="true" aria-labelledby="fg-mail-panel-title">' +
        '<button type="button" class="fg-mail-panel-close" aria-label="' + text.close + '" data-fg-mail-close>×</button>' +
        '<div class="fg-mail-panel-kicker">Email</div>' +
        '<h3 id="fg-mail-panel-title">' + text.title + '</h3>' +
        '<p>' + text.intro + '</p>' +
        '<div class="fg-mail-panel-address" data-fg-mail-address></div>' +
        '<div class="fg-mail-panel-actions">' +
          '<a class="fg-mail-panel-btn is-primary" href="/contatti/#fg-project-form" data-fg-mail-form>' + text.form + '</a>' +
          '<a class="fg-mail-panel-btn" href="mailto:info@furiagraphic.com" data-fg-mail-app>' + text.app + '</a>' +
          '<a class="fg-mail-panel-btn" href="https://mail.google.com/mail/?view=cm&fs=1&to=info%40furiagraphic.com" target="_blank" rel="noopener noreferrer" data-fg-mail-gmail>' + text.gmail + '</a>' +
          '<button type="button" class="fg-mail-panel-btn" data-fg-mail-copy>' + text.copy + '</button>' +
        '</div>' +
      '</div>';
    document.body.appendChild(backdrop);

    const addressEl = backdrop.querySelector('[data-fg-mail-address]');
    const formLink = backdrop.querySelector('[data-fg-mail-form]');
    const appLink = backdrop.querySelector('[data-fg-mail-app]');
    const gmailLink = backdrop.querySelector('[data-fg-mail-gmail]');
    const copyButton = backdrop.querySelector('[data-fg-mail-copy]');
    const closeButtons = backdrop.querySelectorAll('[data-fg-mail-close]');
    let currentEmail = '';

    function defaultFormUrl() {
      const params = new URLSearchParams(window.location.search);
      const lang = params.get('lang') === 'en' ? '?lang=en' : '';
      return window.location.origin + '/contatti/' + lang + '#fg-project-form';
    }

    function parseMailto(href) {
      const result = { email: '', subject: '', href: href };
      const raw = href.replace(/^mailto:/i, '');
      const parts = raw.split('?');
      result.email = decodeURIComponent((parts[0] || '').trim());

      if (parts[1]) {
        const params = new URLSearchParams(parts[1]);
        result.subject = params.get('subject') || '';
      }

      return result;
    }

    function openPanel(link) {
      const href = link.getAttribute('href') || '';
      const parsed = parseMailto(href);
      const formUrl = link.getAttribute('data-fg-form-url') || defaultFormUrl();
      currentEmail = parsed.email || 'info@furiagraphic.com';

      addressEl.textContent = currentEmail;
      formLink.href = formUrl;
      appLink.href = href;
      gmailLink.href = 'https://mail.google.com/mail/?view=cm&fs=1&to=' + encodeURIComponent(currentEmail) + (parsed.subject ? '&su=' + encodeURIComponent(parsed.subject) : '');
      copyButton.textContent = text.copy;

      backdrop.classList.add('is-visible');
      backdrop.setAttribute('aria-hidden', 'false');
      document.body.classList.add('fg-mail-panel-open');
      window.setTimeout(function () { formLink.focus(); }, 40);
    }

    function closePanel() {
      backdrop.classList.remove('is-visible');
      backdrop.setAttribute('aria-hidden', 'true');
      document.body.classList.remove('fg-mail-panel-open');
    }

    mailLinks.forEach(function (link) {
      link.addEventListener('click', function (event) {
        event.preventDefault();
        openPanel(link);
      });
    });

    closeButtons.forEach(function (button) {
      button.addEventListener('click', closePanel);
    });

    backdrop.addEventListener('click', function (event) {
      if (event.target === backdrop) closePanel();
    });

    appLink.addEventListener('click', function () {
      closePanel();
    });

    copyButton.addEventListener('click', function () {
      if (navigator.clipboard && currentEmail) {
        navigator.clipboard.writeText(currentEmail).then(function () {
          copyButton.textContent = text.copied;
        }).catch(function () {
          window.prompt(text.copy, currentEmail);
        });
      } else {
        window.prompt(text.copy, currentEmail);
      }
    });

    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape' && backdrop.classList.contains('is-visible')) {
        closePanel();
      }
    });
  }

  setupMailContactPanel();

});


// Service hero micro-interactions: subtle parallax for the mockup stack.
document.addEventListener('DOMContentLoaded', function () {
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  document.querySelectorAll('.fg-svc-showcase').forEach(function (showcase) {
    if (reduceMotion) return;
    const shots = showcase.querySelectorAll('.fg-svc-shot');
    if (!shots.length) return;

    showcase.addEventListener('mousemove', function (event) {
      const rect = showcase.getBoundingClientRect();
      const x = ((event.clientX - rect.left) / rect.width - 0.5) * 2;
      const y = ((event.clientY - rect.top) / rect.height - 0.5) * 2;
      shots.forEach(function (shot, index) {
        const depth = (index + 1) * 5;
        shot.style.setProperty('--fg-parallax-x', (x * depth).toFixed(2) + 'px');
        shot.style.setProperty('--fg-parallax-y', (y * depth * -0.6).toFixed(2) + 'px');
      });
    });

    showcase.addEventListener('mouseleave', function () {
      shots.forEach(function (shot) {
        shot.style.setProperty('--fg-parallax-x', '0px');
        shot.style.setProperty('--fg-parallax-y', '0px');
      });
    });
  });
});
