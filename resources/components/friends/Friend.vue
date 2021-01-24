<template>
  <div>
    <p>{{ friend.name }}</p>
    <p>{{ friend.mobile }}</p>
    <p>{{ friend.gender }}</p>
    <p>hobbies</p>
    <ol>
      <li v-for="(hobby, index) in hobbies" :key="index">{{ hobby }}</li>
    </ol>
    <button @click="onHandleDelete(friend.id)">Delete</button>
  </div>
</template>

<script>
export default {
  name: "Friend",
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
  },
  methods: {
    async onHandleDelete(id) {
      try {
        const { data } = await axios.delete(`/friends/${id}`);
        if (data.status === "OK") {
          location.href = "/friends";
        }
      } catch (error) {
        console.error(error);
      }
    }
  }
};
</script>
