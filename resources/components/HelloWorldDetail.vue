<template>
  <div id="hello-world-detail">
    <h1>Aloha</h1>
    <p>{{ friend.name }}</p>
    <p>{{ friend.mobile }}</p>
    <p>{{ friend.gender }}</p>
  </div>
</template>

<script>
export default {
  name: "HelloWorldDetail",
  props: {
    friend: {
      type: Object,
      default: () => {}
    }
  }
};
</script>
