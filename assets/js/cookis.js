document.addEventListener('DOMContentLoaded', (event) => {
    const popup = document.getElementById('cookiePopup');
    const acceptButton = document.getElementById('acceptCookies');
    
    const closeButton = document.getElementById('closePopup');

    const cookieConsent = localStorage.getItem('cookieConsent');

    // Show the popup if cookies are not accepted
    if (cookieConsent !== 'accepted') {
        popup.style.display = 'block';
    }

    acceptButton.addEventListener('click', () => {
        localStorage.setItem('cookieConsent', 'accepted');
        popup.style.display = 'none';
    });

    closeButton.addEventListener('click', () => {
        popup.style.display = 'none';
    });
});