// This prevents from loading in all fontawesome icons which has an impact for load time
import {library, dom} from '@fortawesome/fontawesome-svg-core';

// import the needed icons here
import {
    faChevronDown,
    faEnvelope,
    faArrowLeft,
    faHouse,
    faCompactDisc,
    faImage,
    faUser
} from '@fortawesome/free-solid-svg-icons';

import {
    faYoutube,
    faInstagram,
    faSpotify,
    faAmazon,
    faDiscord,
    faItunesNote,
    faBandcamp
} from "@fortawesome/free-brands-svg-icons";

library.add(
    faChevronDown,
    faYoutube,
    faInstagram,
    faSpotify,
    faAmazon,
    faDiscord,
    faEnvelope,
    faArrowLeft,
    faHouse,
    faCompactDisc,
    faImage,
    faItunesNote,
    faUser,
    faBandcamp
);

dom.watch();
