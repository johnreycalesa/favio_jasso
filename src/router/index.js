import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import Portfolio from '../views/PortfolioPage.vue'
import Advocacy from '../views/AdvocacyPage.vue'
import About from '../views/AboutPage.vue'
import Contact from '../views/ContactPage.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'portfolio',
      component: Portfolio
    },
    {
      path: '/advocacy',
      name: 'advocacy',
      component: Advocacy
    },
    {
      path: '/about',
      name: 'about',
      component: About
    },
    {
      path: '/contact',
      name: 'contact',
      component: Contact
    }
  ]
})

export default router
