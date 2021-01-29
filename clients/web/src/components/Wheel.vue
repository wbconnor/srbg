<template>
  <div class="wheel">
    <div class="wheel-brand">{{wheel.brand_name}}</div>
    <div class="wheel-model">{{wheel.model}}</div>
    <div class="wheel-description">{{wheel.description}}</div>
  </div>
</template>

<script>
export default {
  name: 'Wheel',
  props: ['wheel'],
  // data() {
  //   return {
  //     wheel: this.wheel,
  //   };
  // },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
