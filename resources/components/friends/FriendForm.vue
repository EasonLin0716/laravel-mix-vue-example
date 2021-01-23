<template>
  <div>
    <label for="name">Name</label>
    <input v-model="form.name" type="text" id="name" /><br />
    <label for="age">Age</label>
    <input v-model="form.age" type="number" id="age" /><br />
    <label for="gender">Gender</label>
    <select v-model="form.gender" id="gender">
      <option value="M">男</option>
      <option value="F">女</option> </select
    ><br />
    <button @click="onSubmit">Submit</button>
  </div>
</template>

<script>
export default {
  name: "FriendForm",
  data() {
    return { form: { name: "", age: null, gender: "M" } };
  },
  methods: {
    onSubmit() {
      alert("submit");
    }
  }
};
</script>
