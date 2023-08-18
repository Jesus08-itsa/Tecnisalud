import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue';
import homeusr from '../views/homeusr.vue';
import descargas from '../views/descargas.vue'
import alarma from '../views/Alarm.vue'
import horario from '../views/ConsultHor.vue'
import perfil from '../views/ActualizarPerfil.vue'
import appointment from '../views/appointment.vue'
//import dashboard from ''

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/login',
      name: 'login',
      component: () => import('../views/login.vue')
    },
    {
      path: '/objetivos',
      name: 'objetivos',
      component: () => import('../views/objetivos.vue')
    },
    {
      path: '/pqrs',
      name: 'pqrs',
      component: () => import('../views/pqrs.vue')
    },
    {
      path: '/contactos',
      name: 'contactos',
      component: () => import('../views/contactos.vue')
    },
    {
      path: '/register',
      name: 'register',
      component: () => import('../views/register.vue')
    },
    {
      path: '/user',
      name: 'user',
      component: homeusr
    },
    {
      path: '/user/descargar',
      name: descargas,
      component: descargas

    },
    {
      path: '/user/alarma',
      name: alarma,
      component: alarma

    },
    {
      path: '/user/consultarH',
      name: horario,
      component: horario
    },
    {
      path: '/user/actualizar',
      name: perfil,
      component: perfil
    },
    {
      path: '/user/appointment',
      name: appointment,
      component: appointment
    },
    //Router - Administrador
    {
      path: '/dashboard',
      //name: dashboard,
      //component: dashboard
    },
    
  ]
})

export default router
