function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function checkCookieConsent() {
    const consent = getCookie("cookieConsent");
    const cookieConsentDiv = document.getElementById("cookieConsent");
    const overlay = document.getElementById("overlay23");
    if (consent) {
        cookieConsentDiv.style.display = "none";
        overlay.style.display = "none";
    } else {
        cookieConsentDiv.style.display = "block";
        overlay.style.display = "block";
    }
}

document.getElementById("acceptCookie").addEventListener("click", function() {
    setCookie("cookieConsent", "accepted", 365);
    document.getElementById("cookieConsent").style.display = "none";
    document.getElementById("overlay23").style.display = "none";
});

document.getElementById("rejectCookie").addEventListener("click", function() {
    setCookie("cookieConsent", "rejected", 0);  // Session cookie, will be deleted when the browser closes
    document.getElementById("cookieConsent").style.display = "none";
    document.getElementById("overlay23").style.display = "none";
});

document.addEventListener("DOMContentLoaded", function() {
    checkCookieConsent();
});
