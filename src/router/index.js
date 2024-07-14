import { createRouter, createWebHistory } from 'vue-router'
import LoginView from '../views/LoginView.vue'
import AdminView from '../views/AdminView.vue'
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
    },
    {
      path: '/admin/login',
      name: 'login',
      component: ''
    },
    {
      path: '/admin/admin',
      name: 'admin',
      component: AdminView
    }
  ]
})

export default router
