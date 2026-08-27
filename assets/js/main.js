/**
 * PATRIO Homepage — Vanilla JavaScript
 * Lightweight, production-ready interactive scripts
 */

document.addEventListener('DOMContentLoaded', () => {
  const menuToggle = document.getElementById('menuToggle');
  const mobileOverlay = document.getElementById('mobileNavOverlay');
  const mobileNavLinks = document.querySelectorAll('.mobile-nav-links a');

  // Toggle Mobile Navigation Drawer
  if (menuToggle && mobileOverlay) {
    menuToggle.addEventListener('click', () => {
      const isOpen = mobileOverlay.classList.contains('is-open');
      if (isOpen) {
        closeMobileMenu();
      } else {
        openMobileMenu();
      }
    });

    // Close menu when clicking any mobile nav link
    mobileNavLinks.forEach(link => {
      link.addEventListener('click', () => {
        closeMobileMenu();
      });
    });

    // Close menu on ESC key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && mobileOverlay.classList.contains('is-open')) {
        closeMobileMenu();
      }
    });
  }

  function openMobileMenu() {
    menuToggle.classList.add('is-active');
    mobileOverlay.classList.add('is-open');
    document.body.style.overflow = 'hidden';
  }

  function closeMobileMenu() {
    menuToggle.classList.remove('is-active');
    mobileOverlay.classList.remove('is-open');
    document.body.style.overflow = '';
  }

  // Smooth interaction for placeholder navigation links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (targetId && targetId !== '#') {
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          e.preventDefault();
          targetElement.scrollIntoView({ behavior: 'smooth' });
        }
      }
    });
  });
});
