require("./bootstrap");
import Vue from "vue";
import AppHeader from "../components/theme/Header.vue";
import AppFooter from "../components/theme/Footer.vue";
Vue.component("app-header", AppHeader);
Vue.component("app-footer", AppFooter);

new Vue({
  el: "#layout"
});
