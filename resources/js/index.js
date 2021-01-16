require("./bootstrap");
import Vue from "vue";
import Index from "../components/Index";

new Vue({
  el: "#index",
  render: h => h(Index)
});
