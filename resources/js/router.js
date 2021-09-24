import Router from "vue-router";
import Home from "./components/Home.vue";

export default new Router({
    routes: [
        {
            path: "/",
            component: Home
        }
    ]
});
