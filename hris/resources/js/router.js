import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


import login from './components/pages/login'
import home from './components/pages/home'
const routes = [
    {
        path: '/',
        component: home,
    },
    {
        path: '/login',
        component: login,
    },
]

export default new VueRouter({
    mode:'history',
    routes
})
