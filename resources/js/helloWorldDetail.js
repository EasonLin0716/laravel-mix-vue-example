require("./bootstrap");
import Vue from "vue";
import layout from "./layout";
layout(Vue);
import HelloWorldDetail from "../components/HelloWorldDetail";
Vue.component("app-main", HelloWorldDetail);

new Vue({
  el: "#layout"
});
