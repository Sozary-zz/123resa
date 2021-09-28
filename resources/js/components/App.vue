<template>
  <v-app>
    <router-view name="header" />
    <div class="wrapper">
      <transition name="fade" mode="out-in">
        <router-view />
      </transition>
    </div>
    <router-view name="footer" />
  </v-app>
</template>

<script>
export default {
  mounted() {},
};
</script>
<style lang="scss">
@import "./../../sass/variables.scss";
.wrapper {
  z-index: 1;
  background: #e4e5cd;
  min-height: calc(
    100vh - $header-height - $footer-height - $header-links-height
  );
}
</style>
