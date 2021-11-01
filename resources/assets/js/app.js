// import { ZiggyVue } from 'ziggy';
import route from 'ziggy';
import { Ziggy } from './ziggy';

/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

require('isotope-layout');
require('fullcalendar');
require('magnific-popup');
require('jquery.scrollto');
require('arrive');
require('jquery-mousewheel');
require('video.js');
require('bootbox');
require('select2');
require('overlayscrollbars');
require('../../../public/js/succinct/jQuery.succinct.min.js');
require('../../../public/js/detectMobileBrowser.js');
require('../../../public/js/appear.js');
require('../../../public/js/matchHeight.js');
require('../../../public/js/number.min.js');
require('../../../public/js/tabcollapse.js');
require('../../../public/js/dotdotdot.js');
require('../../../public/js/jssocials/jssocials.js');
require('../../../public/js/shorten.1.0.js');
require('../../../public/js/swipebox-master/src/js/jquery.swipebox.min.js');
require('../../../public/js/magnificpopup/magnific-popup.min.js');
require('../../../public/js/hero-slider/js/main.js');
require('./parallax/parallax');

require('./global.js');
// require('./_menu_old.js');
// require('./_menu.js');
// require('./_sidebar.js');
var numeral = require('numeral');
// require('./store/catalog');


Vue.component('navigation', require('./components/Navigation/Navigation.vue'));

Ziggy.baseDomain = window.location.host
Ziggy.baseUrl = `${window.location.origin}/`

Vue.mixin({
    methods: {
        route: (name, params, absolute) => route(name, params, absolute, Ziggy).url(),
        hasRoute: (name) => Object.prototype.hasOwnProperty.call(Ziggy.namedRoutes, name),
    },
});

// Ziggy.baseUrl = window.location.protocol + '//' + window.location.hostname;
// Ziggy.baseProtocol = window.location.protocol;
// Ziggy.baseDomain = window.location.hostname;

// Vue.use(ZiggyVue, Ziggy);

export const EventBus = new Vue();

EventBus.$on('navigationToggled', isOpen => {
    app.navigationToggled(isOpen);
});

const app = new Vue({
    el: '#app',
    data() {
        return {
            isNavToggled: false,
        };
    },
    methods: {
        navigationToggled(isOpen) {
            this.isNavToggled = isOpen;
            if (isOpen) {
                this.$el.classList.add("navOpen");
            } else {
                this.$el.classList.remove("navOpen");
            }
        },
    }
});
