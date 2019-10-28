import Vue from "vue"
import Router from "vue-router"
import Home from "../pages/Home"
import Login from "../components/login/Login"
import NotFound from "../pages/NotFound"
// import Register from "../components/register/Register"

Vue.use(Router);

export default {
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home
        },
        {
            path: '/login',
            name: 'login',
            component: Login
        },
        {
            path: '*',
            name: 'NotFound',
            component: NotFound
        },
        // {
        //     path:'/password-reset',
        //     name:'password-reset',
        //     component: PasswordReset
        // },
        // {
        //     path:'/register',
        //     name: 'register',
        //     component: Register
        // }
    ]
}