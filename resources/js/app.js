import './bootstrap';
import {createApp} from "vue/dist/vue.esm-bundler";
import dropdown from "./components/dropdown.vue"
import MobileMenu from "./components/MobileMenu.vue";
import MenuDisclosure from "./components/MenuDisclosure.vue";
import Editor from "./components/Editor.vue";
import '../css/app.scss';
import './font-awesome.js';

createApp({})
    .component('dropdown', dropdown)
    .component('MobileMenu', MobileMenu)
    .component('MenuDisclosure', MenuDisclosure)
    .mount('#header')

createApp({})
    .component('Editor', Editor)
    .mount('#app')
