import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import dashboard from './components/pages/dashboard'
import login from './components/pages/login'
const routes = [
    {
        path: '/login',
        component: login,
    },

    {
        path: '/dashboard',
        component: dashboard
    },
]

export default new VueRouter({
    mode:'history',
    routes
})
