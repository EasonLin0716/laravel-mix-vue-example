require("./bootstrap");
import Vue from "vue";
import layout from "./layout";
layout(Vue);
import Friend from "../components/friends/Friend";
Vue.component("app-main", Friend);

new Vue({
  el: "#layout"
});
