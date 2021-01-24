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
    <input
      type="checkbox"
      id="swimming"
      value="swimming"
      v-model="form.hobbies"
    />
    <label for="swimming">swimming</label>
    <input
      type="checkbox"
      id="reading"
      value="reading"
      v-model="form.hobbies"
    />
    <label for="reading">reading</label>
    <input type="checkbox" id="coding" value="coding" v-model="form.hobbies" />
    <label for="coding">coding</label>
    <br />
    <button @click="onSubmit">Submit</button>
  </div>
</template>

<script>
export default {
  name: "FriendForm",
  data() {
    return { form: { name: "", age: null, gender: "M", hobbies: [] } };
  },
  methods: {
    async onSubmit() {
      const { data } = await axios.post("/friends", this.form);
      if (data.status === "OK") {
        location.href = "/friends";
      }
    }
  }
};
</script>
