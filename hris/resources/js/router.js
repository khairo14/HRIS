import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import dashboard from './components/pages/dashboard'
const routes = [
    {
        path: '/dashboard',
        component: dashboard
    },
]

export default new VueRouter({
    mode:'history',
    routes
})
