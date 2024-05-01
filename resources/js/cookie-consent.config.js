import * as CookieConsent from 'vanilla-cookieconsent';

CookieConsent.run({
    guiOptions: {
        consentModal: {
            layout: 'box',
            position: 'bottom right',
        },
        preferencesModal: {
            layout: 'bar',
        },
    },

    onConsent: function (cookie) {
        window.analyticCookies = Array.from(cookie.cookie.categories).includes('analytics');
        if (window.analyticCookies) {
            showSpotifyIframe();

            window.dispatchEvent(new Event('analyticsCookiesLoaded'));
        }
    },

    onChange: function (cookie) {
        window.analyticCookies = Array.from(cookie.cookie.categories).includes('analytics');
        if (window.analyticCookies) {
            showSpotifyIframe();

            window.dispatchEvent(new Event('analyticsCookiesLoaded'));
        } else {
            // If analytics cookies are rejected, remove Spotify iframe
            removeSpotifyIframe();
        }
    },

    categories: {
        necessary: {
            readOnly: true,
            enabled: true,
        },
        analytics: {
            enabled: true
        }
    },

    language: {
        default: 'en',
        translations: {
            en: {
                consentModal: {
                    title: "Hello music lover, it's cookie time!",
                    description:
                        'This website uses essential cookies to ensure its proper operation. The latter will be set only after consent.',
                    acceptAllBtn: 'Accept',
                    acceptNecessaryBtn: 'Reject',
                    showPreferencesBtn: 'Manage preferences',
                    footer: `
											<a href="/policy">Privacy Policy</a>
									`,
                },
                preferencesModal: {
                    title: 'Cookie preferences',
                    acceptAllBtn: 'Accept all',
                    acceptNecessaryBtn: 'Reject all',
                    savePreferencesBtn: 'Save preferences',
                    sections: [
                        {
                            description:
                                'I use cookies to ensure the basic functionalities of the website and to enhance your online experience. You can choose for each category to opt-in/out whenever you want. For more details relative to cookies and other sensitive data, please read the full <a href="/policy" class="cc__link">privacy policy</a>.',
                        },
                        {
                            title: 'Necessary cookies',
                            description:
                                'These cookies are essential for the website to function properly and do not store any personally identifiable information.',
                            linkedCategory: 'necessary',
                        },
                        {
                            title: 'Performance and Analytics cookies',
                            description:
                                'These cookies allow the website to remember the choices you have made in the past',
                            linkedCategory: 'analytics',
                            cookieTable: {
                                headers: {
                                    name: 'Cookie',
                                    domain: 'Domain',
                                    desc: 'Description',
                                },
                                body: [
                                    {
                                        name: 'Spotify',
                                        domain: 'open.spotify.com',
                                        desc: 'Show embedded spotify content, spotify collects data for analytics purposes',
                                    },
                                    {
                                        name: 'Google',
                                        domain: 'google.com',
                                        desc: 'Google collects data for analytics purposes',
                                    },
                                    {
                                        name: 'Youtube',
                                        domain: 'www.youtube.com',
                                        desc: 'Show embedded youtube content, youtube collects data for analytics purposes',
                                    },
                                ],
                            },
                        },
                    ],
                },
            },
        },
    },
});

function showSpotifyIframe() {
    const spotifyContainer = document.getElementById('spotifyContainer');
    if (!spotifyContainer) return;
    spotifyContainer.innerHTML = `
        <iframe class="mt-4 md:w-8/12 w-full shadow-xl rounded-3xl"
            src="https://open.spotify.com/embed/artist/052Q9RnerwsOF5MDRHiSwk?utm_source=generator"
            width="100%" height="352" frameBorder="0" allowfullscreen=""
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
            loading="lazy"></iframe>
    `;
}

function removeSpotifyIframe() {
    const spotifyContainer = document.getElementById('spotifyContainer');
    spotifyContainer.innerHTML = '';
}

document.addEventListener("DOMContentLoaded", function() {
    const preferences = document.getElementsByClassName('openPreferences')
    if(!preferences) return;
    console.log(preferences.length)
    for (let i = 0; i < preferences.length; i++) {
        preferences[i].addEventListener('click', function () {
            CookieConsent.showPreferences();
        });
    }
});
