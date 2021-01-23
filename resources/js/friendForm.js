require("./bootstrap");
import Vue from "vue";
import FriendForm from "../components/friends/FriendForm";

new Vue({
  el: "#friend-form",
  render: h => h(FriendForm)
});
