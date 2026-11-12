document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('menu-icon-open');
    const iconClose = document.getElementById('menu-icon-close');

    if (menuButton && mobileMenu) {
        menuButton.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            mobileMenu.classList.toggle('hidden', !isHidden);
            menuButton.setAttribute('aria-expanded', String(isHidden));
            iconOpen?.classList.toggle('hidden', isHidden);
            iconClose?.classList.toggle('hidden', !isHidden);
        });
    }

    const consentKey = 'janssen-kozmetika-cookie-consent';
    const consentBanner = document.getElementById('cookie-consent');
    const consentAccept = document.getElementById('cookie-accept');

    if (consentBanner && !localStorage.getItem(consentKey)) {
        consentBanner.classList.remove('hidden');
    }

    consentAccept?.addEventListener('click', () => {
        localStorage.setItem(consentKey, 'accepted');
        consentBanner?.classList.add('hidden');
    });
});
