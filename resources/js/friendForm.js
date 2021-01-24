require("./bootstrap");
import Vue from "vue";
import layout from "./layout";
layout(Vue);
import FriendForm from "../components/friends/FriendForm";
Vue.component("app-main", FriendForm);

new Vue({
  el: "#layout"
});
