<template>
  <div>
    <p>{{ friend.name }}</p>
    <p>{{ friend.mobile }}</p>
    <p>{{ friend.gender }}</p>
    <p>hobbies</p>
    <ol>
      <li v-for="(hobby, index) in hobbies" :key="index">{{ hobby }}</li>
    </ol>
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
  },
  computed: {
    hobbies() {
      return JSON.parse(this.friend.hobbies) || [];
    }
  }
};
</script>
