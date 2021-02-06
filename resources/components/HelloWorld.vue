<template>
  <div>
    <h1>大大安安</h1>
  </div>
</template>

<script>
import { setCookie, getCookie } from "../utils/cookieUtil";
export default {
  name: "HelloWorld",
  mounted() {
    console.log("大大安安");
    axios.get("/api/curltest").then(res => {
      console.log(res);
      console.log(setCookie);
      setCookie("title", res.data.data.title, 2);
      console.log(getCookie("title"));
      // and use cookie!!
    });
  }
};
</script>
