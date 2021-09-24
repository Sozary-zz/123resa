require("./bootstrap");
import vuetify from "./plugins/vuetify/vuetify";

window.Vue = require("vue").default;
Vue.component("App", require("./components/App.vue").default);
const app = new Vue({
    el: "#app",
    vuetify
});
