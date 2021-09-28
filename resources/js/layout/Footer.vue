<template>
  <div class="d-flex justify-space-between" id="footer">
    <img src="/img/header/logo.bmp" alt="123resa" id="logo" @click="toIndex" />
  </div>
</template>
<script>
export default {
  methods: {
    toIndex() {
      if (this.$route.name !== "home") {
        this.$router.push({ name: "home" });
      }
    },
  },
};
</script>
<style lang="scss">
@import "./../../sass/variables.scss";
#footer {
  background: #495a6f;
  height: $footer-height;
}
</style>
