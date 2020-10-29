import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

// import example from './components/ExampleComponent.vue'
import Main from './components/MainComponent.vue'
import Booking from './components/BookingComponent.vue'
import About from './components/AboutComponent.vue'
import Contact from './components/ContactComponent.vue'
import Privacy from './components/PrivacyComponent.vue'
import Cookies from './components/CookiesComponent.vue'

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'main-component',
      component: Main
    },
    {
      path: '/book-preview',
      name: 'booking-component',
      component: Booking
    },
    {
      path: '/about-us',
      name: 'about-component',
      component: About
    },
    {
      path: '/contact',
      name: 'contact-component',
      component: Contact
    },
    {
      path: '/privacy-policy',
      name: 'privacy-component',
      component: Privacy
    },
    {
      path: '/cookies-policy',
      name: 'cookies-component',
      component: Cookies
    }

  ]
})