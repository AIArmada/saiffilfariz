/* Progressive enhancements for navigation and photo viewing. */
const burger = document.querySelector('[data-burger]');
const mobileNav = document.querySelector('[data-mobile-nav]');

function setMenu(open) {
  document.body.dataset.menu = open ? 'open' : 'closed';
  burger?.setAttribute('aria-expanded', String(open));
  burger?.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
  const menuLabel = burger?.querySelector('.burger__label');

  if (menuLabel) {
    menuLabel.textContent = open ? 'Close' : 'Menu';
  }

  document.getElementById('main')?.toggleAttribute('inert', open);
  document.querySelector('.site-footer')?.toggleAttribute('inert', open);
  document.body.style.overflow = open ? 'hidden' : '';

  if (open) {
    mobileNav?.querySelector('a')?.focus();
  }
}

burger?.addEventListener('click', () => {
  setMenu(document.body.dataset.menu !== 'open');
});

mobileNav?.querySelectorAll('a').forEach((link) => {
  link.addEventListener('click', () => setMenu(false));
});

document.addEventListener('click', (event) => {
  if (document.body.dataset.menu === 'open'
      && !mobileNav?.contains(event.target)
      && !burger?.contains(event.target)) {
    setMenu(false);
  }
});

document.addEventListener('keydown', (event) => {
  if (event.key === 'Escape' && document.body.dataset.menu === 'open') {
    setMenu(false);
    burger?.focus();
  }
});

const lightbox = document.querySelector('[data-lightbox-dialog]');

if (lightbox && typeof lightbox.showModal === 'function') {
  const photo = lightbox.querySelector('img');
  const captionTitle = lightbox.querySelector('[data-lb-cap-title]');
  const captionMeta = lightbox.querySelector('[data-lb-cap-meta]');
  const links = [...document.querySelectorAll('[data-lightbox]')];
  let current = 0;

  const show = (index) => {
    current = (index + links.length) % links.length;
    const link = links[current];

    photo.src = link.getAttribute('href');
    photo.alt = link.dataset.alt || '';

    if (captionTitle) {
      captionTitle.textContent = link.dataset.captionTitle || '';
    }

    if (captionMeta) {
      captionMeta.textContent = link.dataset.captionMeta || '';
    }
  };

  if (photo && links.length > 0) {
    links.forEach((link, index) => {
      link.addEventListener('click', (event) => {
        event.preventDefault();
        show(index);
        lightbox.showModal();
      });
    });

    lightbox.querySelector('[data-lb-prev]')?.addEventListener('click', () => show(current - 1));
    lightbox.querySelector('[data-lb-next]')?.addEventListener('click', () => show(current + 1));
    lightbox.querySelector('[data-lb-close]')?.addEventListener('click', () => lightbox.close());

    lightbox.addEventListener('click', (event) => {
      if (event.target === lightbox) {
        lightbox.close();
      }
    });

    lightbox.addEventListener('keydown', (event) => {
      if (event.key === 'ArrowRight') {
        show(current + 1);
      }

      if (event.key === 'ArrowLeft') {
        show(current - 1);
      }
    });
  }
}

const creationGallery = document.querySelector('[data-creation-gallery]');

if (creationGallery) {
  const filters = creationGallery.querySelector('[data-creation-filters]');
  const buttons = [...creationGallery.querySelectorAll('[data-creation-filter]')];
  const creations = [...creationGallery.querySelectorAll('[data-creation-formats]')];
  const result = creationGallery.querySelector('[data-creation-result]');

  filters.hidden = false;

  buttons.forEach((button) => {
    button.addEventListener('click', () => {
      const medium = button.dataset.creationFilter;
      let visible = 0;

      creations.forEach((creation) => {
        const matches = medium === 'all' || creation.dataset.creationFormats.split(' ').includes(medium);
        creation.hidden = !matches;
        if (matches && creation.hasAttribute('data-creation')) {
          visible++;
        }
      });

      buttons.forEach((filter) => filter.setAttribute('aria-pressed', String(filter === button)));
      result.textContent = `${visible} ${visible === 1 ? 'project' : 'projects'} shown. ${button.textContent.trim()}.`;
    });
  });
}

document.querySelectorAll('audio').forEach((player) => {
  player.addEventListener('play', () => {
    document.querySelectorAll('audio').forEach((other) => {
      if (other !== player) other.pause();
    });
  });
});

document.querySelectorAll('[data-project-experience]').forEach((experience) => {
  const controls = experience.querySelector('[data-experience-controls]');
  const buttons = [...experience.querySelectorAll('[data-experience-step]')];
  const panels = [...experience.querySelectorAll('[data-experience-panel]')];
  const status = experience.querySelector('[data-experience-status]');
  const dialog = experience.querySelector('[data-experience-dialog]');
  const dialogImage = experience.querySelector('[data-experience-zoom-image]');
  const dialogTitle = experience.querySelector('[data-experience-zoom-title]');

  const selectStep = (index, announce = true) => {
    buttons.forEach((button, step) => button.setAttribute('aria-pressed', String(step === index)));
    panels.forEach((panel, step) => { panel.hidden = step !== index; });

    if (announce) {
      status.textContent = buttons[index].getAttribute('aria-label');
    }
  };

  if (buttons.length && panels.length) {
    controls.hidden = false;
    selectStep(Math.min(1, panels.length - 1), false);
    buttons.forEach((button, index) => button.addEventListener('click', () => selectStep(index)));
  }

  if (dialog && typeof dialog.showModal === 'function') {
    experience.querySelectorAll('[data-experience-zoom]').forEach((link) => {
      link.addEventListener('click', (event) => {
        event.preventDefault();
        dialogImage.src = link.href;
        dialogImage.alt = link.querySelector('img').alt;
        dialogTitle.textContent = link.dataset.title;
        dialog.showModal();
        dialog.scrollTop = 0;
      });
    });

    dialog.querySelector('[data-experience-close]').addEventListener('click', () => dialog.close());
    dialog.addEventListener('click', (event) => {
      if (event.target === dialog) {
        const bounds = dialog.getBoundingClientRect();
        if (event.clientX < bounds.left || event.clientX > bounds.right
            || event.clientY < bounds.top || event.clientY > bounds.bottom) {
          dialog.close();
        }
      }
    });
  }
});
