<template>
  <div class="wheels">
    <Wheel v-for="(wheel, index) in wheels" :key="index" :wheel="wheel"/>
  </div>
</template>

<script>
import Wheel from './Wheel';

export default {
  name: 'Wheels',
  components: {
    Wheel,
  },
  props: ['wheels'],
  // data() {
  //   return {
  //     wheels: this.wheels,
  //   };
  // },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
