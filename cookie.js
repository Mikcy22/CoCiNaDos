// Crear una función para establecer una cookie
function setCookie(name, value, days) {
    try {
        let expires = "";
        if (days) {
            let date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; SameSite=None; Secure; path=/";
    } catch (error) {
        console.error('Error setting cookie:', error);
    }
}

// Crear una función para establecer la cookie de ubicación
function setLocationCookie(position) {
    let location = {
        latitude: position.coords.latitude,
        longitude: position.coords.longitude
    };
    setCookie('userLocation', JSON.stringify(location), 365);
}
function setPreferenceCookie(preference) {
    setCookie('userPreference', preference, 365);
}

// Crear una función para establecer la cookie de análisis
function setAnalyticsCookie(data) {
    setCookie('analyticsData', JSON.stringify(data), 365);
}
// Crear una función para rastrear los clics en los botones
function trackButtonClick(event) {
    let buttonId = event.target.id;
    console.log('Button clicked: ' + buttonId);
    let analyticsData = JSON.parse(getCookie('analyticsData')) || {};
    analyticsData.buttonClicks = analyticsData.buttonClicks || {};
    analyticsData.buttonClicks[buttonId] = (analyticsData.buttonClicks[buttonId] || 0) + 1;
    setAnalyticsCookie(analyticsData);
}

// Crear una función para rastrear las reproducciones de vídeo
function trackVideoPlay(event) {
    let videoId = event.target.id;
    console.log('Video play tracked:', videoId);
    let analyticsData = JSON.parse(getCookie('analyticsData')) || {};
    analyticsData.videoPlays = analyticsData.videoPlays || {};
    analyticsData.videoPlays[videoId] = (analyticsData.videoPlays[videoId] || 0) + 1;
    setAnalyticsCookie(analyticsData);
}

// Crear una función para obtener una cookie
function getCookie(name) {
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for(let i=0;i < ca.length;i++) {
        let c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

// Crear una función para borrar una cookie
function eraseCookie(name) {   
    document.cookie = name+'=; Max-Age=-99999999;';  
}

function handleCookieConsent() {
    let consent = getCookie('cookieConsent');
    if (!consent) {
        // Crear el banner de consentimiento de cookies
        let consentBanner = document.createElement('div');
        consentBanner.id = 'cookieConsentBanner';
        consentBanner.style.position = 'fixed';
        consentBanner.style.bottom = '0';
        consentBanner.style.width = '100%';
        consentBanner.style.backgroundColor = 'rgba(0,0,0,0.7)';
        consentBanner.style.color = 'white';
        consentBanner.style.textAlign = 'center';
        consentBanner.style.padding = '20px';
        consentBanner.style.fontSize = '1em';
        consentBanner.style.lineHeight = '1.5';
        consentBanner.style.boxSizing = 'border-box';
        consentBanner.innerHTML = 'Usamos cookies y datos para: Proporcionar y mantener nuestros servicios, Hacer un seguimiento de las interrupciones y prevenir el spam, el fraude y los abusos, Medir la interacción de la audiencia y estadísticas de los sitios para entender cómo se utilizan nuestros servicios y mejorar su calidad. Si eliges Aceptar todo, también usaremos cookies y datos para: localizar desde donde se abre la web. <button id="acceptCookies">Aceptar</button> <button id="rejectCookies">Rechazar</button> <button id="moreOptions">Más opciones</button>';

        // Añadir el banner al cuerpo del documento
        document.body.appendChild(consentBanner);

        // Cuando el usuario acepta, eliminar el banner y establecer la cookie de consentimiento
        document.getElementById('acceptCookies').onclick = function() {
            document.body.removeChild(consentBanner);
            setCookie('cookieConsent', 'true', 365);
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(setLocationCookie);
            }
        }

        // Cuando el usuario rechaza, eliminar el banner y establecer solo las cookies obligatorias
        document.getElementById('rejectCookies').onclick = function() {
            document.body.removeChild(consentBanner);
            setCookie('cookieConsent', 'false', 365);
            // Aquí puedes establecer tus cookies obligatorias
            setPreferenceCookie('somePreference');
            let analyticsData = JSON.parse(getCookie('analyticsData'))
            setAnalyticsCookie(analyticsData);
        }

        // Cuando el usuario hace clic en "Más opciones", mostrar un diálogo para seleccionar las cookies
        document.getElementById('moreOptions').onclick = function() {
            // Aquí puedes mostrar un diálogo para seleccionar las cookies
            // Por defecto, todas las cookies deben estar desactivadas excepto la cookie de AnalyticsCookie
            let modal = document.createElement('div');
            modal.style.position = 'fixed';
            modal.style.top = '0';
            modal.style.right = '0';
            modal.style.bottom = '0';
            modal.style.left = '0';
            modal.style.backgroundColor = 'rgba(0,0,0,0.5)';
            modal.style.display = 'flex';
            modal.style.justifyContent = 'center';
            modal.style.alignItems = 'center';
            modal.innerHTML = '<div style="background-color: white; padding: 20px; border-radius: 5px;"><h2>Selecciona las cookies que quieres activar:</h2><input type="checkbox" id="locationCookie" name="locationCookie"><label for="locationCookie"> Localización</label><br><input type="checkbox" id="preferenceCookie" name="preferenceCookie"><label for="preferenceCookie"> Preferencias</label><br><input type="checkbox" id="analyticsCookie" name="analyticsCookie" checked><label for="analyticsCookie"> Analíticas</label><br><button id="saveOptions">Guardar opciones</button></div>';
            document.body.appendChild(modal);

            document.getElementById('saveOptions').onclick = function() {
                let locationCookie = document.getElementById('locationCookie').checked;
                let preferenceCookie = document.getElementById('preferenceCookie').checked;
                let analyticsCookie = document.getElementById('analyticsCookie').checked;

                if (locationCookie && navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(setLocationCookie);
                }
                if (preferenceCookie) {
                    setPreferenceCookie('somePreference');
                }
                if (analyticsCookie) {
                    let analyticsData = JSON.parse(getCookie('analyticsData'));
                    setCookie('cookieConsentOptions', 'true', 365);
                    setAnalyticsCookie(analyticsData);
                }

                document.body.removeChild(modal);
                document.body.removeChild(consentBanner);
            }
        }
    } else if (consent === 'true') {
        // Si el usuario ya ha aceptado las cookies, puedes establecer todas las cookies aquí
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(setLocationCookie);
        }
        setPreferenceCookie('somePreference');
        let analyticsData = JSON.parse(getCookie('analyticsData'));
        setAnalyticsCookie(analyticsData);
    } else {
        // Si el usuario ha rechazado las cookies, puedes establecer solo las cookies obligatorias aquí
        setPreferenceCookie('somePreference');
        let analyticsData = JSON.parse(getCookie('analyticsData'));
        setAnalyticsCookie(analyticsData);
    }
}




window.onload = function() {
    let buttons = document.getElementsByTagName('button');
    for (let i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener('click', trackButtonClick);
    }

    let videos = document.getElementsByTagName('video');
    for (let i = 0; i < videos.length; i++) {
        videos[i].addEventListener('play', trackVideoPlay);
    }

    handleCookieConsent();
}
