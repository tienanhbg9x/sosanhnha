import Home from "./modules/Home"
export default {
    state:{

    },
    getters:{
        // GET_DEMO(state){
        //     return state.demo;
        // }
    },
    mutations:{

    },
    actions:{
        // ACTION_DEMO({commit},data){
        //
        // }
    },
    modules:{
        Home: Home()
    }
};
// import Vue from 'vue'
// import Vuex from 'vuex'
//
// Vue.use(Vuex);
//
// const state = {
//     isLogged: !!localStorage.getItem('token')
// };
//
// const mutations = {
//     LOGIN_USER (state) {
//         state.isLogged = true
//     },
//
// };
//
// export default new Vuex.Store({
//     strict: process.env.NODE_ENV !== 'production',
//     state,
//     mutations
// })