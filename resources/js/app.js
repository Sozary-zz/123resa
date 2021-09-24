require("./bootstrap");
import vuetify from "./plugins/vuetify/vuetify";
import VueRouter from "vue-router";
import router from "./router.js";

window.Vue = require("vue").default;
Vue.use(VueRouter);
Vue.component("App", require("./components/App.vue").default);

const app = new Vue({
    el: "#app",
    router,
    vuetify
});
