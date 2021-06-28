import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


import Login from './components/pages/Login'
import Home from './components/pages/Home'
import Users from './components/pages/admin/Users'
const routes = [
    {
        path: '/home',
        component: Home,
    },
    {
        path: '/login',
        component: Login,
    },
    {
        path: '/users',
        component: Users,
    },
]

export default new VueRouter({
    mode:'history',
    routes
})
