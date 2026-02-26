// -- Header Toggle
document.addEventListener('DOMContentLoaded', () => {
  const toggleButton = document.querySelector('.menu-toggle');
  const mobileNav = document.querySelector('.mobile-nav');

  if (!toggleButton || !mobileNav) return;

  toggleButton.addEventListener('click', () => {
    const isOpen = toggleButton.classList.toggle('is-open');
    mobileNav.classList.toggle('is-open', isOpen);
    toggleButton.setAttribute('aria-expanded', isOpen);
  });

  // Reset state on desktop
  window.addEventListener('resize', () => {
    if (window.innerWidth > 1024) {
      toggleButton.classList.remove('is-open');
      mobileNav.classList.remove('is-open');
      toggleButton.setAttribute('aria-expanded', 'false');
    }
  });
});


// -- Smooth scroll
document.addEventListener("DOMContentLoaded", function() {
  const hash = window.location.hash;
  if (hash) {
    const target = document.querySelector(hash);
    if (target) {
      target.scrollIntoView({ behavior: "smooth" });
    }
  }
});