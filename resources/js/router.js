import Router from "vue-router";
import Home from "./components/Home.vue";
import NotFound from "./components/NotFound.vue";
import Header from "./layout/Header.vue";
import Footer from "./layout/Footer.vue";

export default new Router({
    routes: [
        {
            path: "/",
            name: "home",
            components: {
                default: Home,
                header: Header,
                footer: Footer
            }
        },
        {
            path: "*",
            name: "404",
            components: {
                default: NotFound,
                header: Header,
                footer: Footer
            }
        }
    ]
});
