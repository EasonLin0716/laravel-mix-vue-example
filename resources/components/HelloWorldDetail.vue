<template>
  <div id="hello-world-detail">
    <h1>Aloha</h1>
    {{ articleId }}
  </div>
</template>

<script>
export default {
  name: "HelloWorldDetail",
  props: {
    articleId: {
      type: Number,
      default: 0
    }
  }
};
</script>
