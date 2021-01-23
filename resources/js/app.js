require("./bootstrap");
import Vue from "vue";
import HelloWorld from "../components/HelloWorld";

new Vue({
  el: "#app",
  render: h => h(HelloWorld)
});
