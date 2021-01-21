require("./bootstrap");
import Vue from "vue";
import HelloWorldDetail from "../components/HelloWorldDetail";
Vue.component("hello-world-detail", HelloWorldDetail);

new Vue({
  el: "#hello-world-detail"
});
