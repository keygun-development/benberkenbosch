// This prevents from loading in all fontawesome icons which has an impact for load time
import {library, dom} from '@fortawesome/fontawesome-svg-core';

// import the needed icons here
import {
    faChevronDown
} from '@fortawesome/free-solid-svg-icons';

library.add(
    faChevronDown
);

dom.watch();
