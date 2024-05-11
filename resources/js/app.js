import './bootstrap';
import "vanilla-cookieconsent/dist/cookieconsent.css";
import "./cookie-consent.config.js"
import {createApp} from "vue/dist/vue.esm-bundler";
import dropdown from "./components/dropdown.vue"
import MobileMenu from "./components/MobileMenu.vue";
import MenuDisclosure from "./components/MenuDisclosure.vue";
import Editor from "./components/Editor.vue";
import Popup from "./components/Popup.vue";
import AlbumLink from "./components/AlbumLink.vue";
import AlbumMusic from "./components/AlbumMusic.vue";
import ImagesSlide from "./components/ImagesSlide.vue";
import './font-awesome.js';

createApp({})
    .component('dropdown', dropdown)
    .component('MobileMenu', MobileMenu)
    .component('MenuDisclosure', MenuDisclosure)
    .mount('#header')

createApp({})
    .component('Editor', Editor)
    .component('Popup', Popup)
    .component('AlbumLink', AlbumLink)
    .component('AlbumMusic', AlbumMusic)
    .component('ImagesSlide', ImagesSlide)
    .mount('#app')
