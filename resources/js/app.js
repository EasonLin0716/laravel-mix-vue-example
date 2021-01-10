require("./bootstrap");
import Vue from "vue";
import HelloWorld from "../components/HelloWorld";

new Vue({
  el: "#app",
  template: "<HelloWorld></HelloWorld>",
  components: { HelloWorld },
});
