
window._ = require('lodash');

import Popper from 'popper.js/dist/umd/popper.js';
import 'simplebar';
import 'simplebar/dist/simplebar.css';
/**
 * Font Awesome 5
 */
// import fontawesome from '@fortawesome/fontawesome';
// import free from '@fortawesome/fontawesome-free';
// import solid from '@fortawesome/fontawesome-free-solid';
// import regular from '@fortawesome/fontawesome-free-regular';
// import brands from '@fortawesome/fontawesome-free-brands';
//
// fontawesome.library.add(free);
// fontawesome.library.add(solid);
// fontawesome.library.add(regular);
// fontawesome.library.add(brands);
/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

// window.$ = window.jQuery = require('jquery');
// require('bootstrap');

try {
    window.$ = window.jQuery = require('jquery');
    require('jquery-ui');

    // Required for BS4
    window.Tether = require('tether');
    window.Popper = Popper;

    require('bootstrap');
    window.moment = require('moment');
} catch (e) {}

/**
 * Vue is a modern JavaScript library for building interactive web interfaces
 * using reactive data binding and reusable components. Vue's API is clean
 * and simple, leaving you to focus on building your next great project.
 */

window.Vue = require('vue');
// require('vue-resource');


/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * We'll register a HTTP interceptor to attach the "CSRF" header to each of
 * the outgoing requests issued by this application. The CSRF middleware
 * included with Laravel will automatically verify the header's value.
 */
//
// Vue.http.interceptors.push((request, next) => {
//     request.headers.set('X-CSRF-TOKEN', Laravel.csrfToken);
//
//     next();
// });

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from "laravel-echo"

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
