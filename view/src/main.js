import Vue from 'vue'
import App from './App.vue'
import Vuex from 'vuex'
import Router from 'vue-router'
import StoreInit from  './store'
import RouterInit from "./router"

Vue.use(Vuex);
Vue.use(Router);

Vue.config.productionTip = false;

const store = new Vuex.Store(StoreInit);
const router = new Router(RouterInit);

new Vue({
  router,
  store,
  render: h => h(App),
}).$mount('#app');
