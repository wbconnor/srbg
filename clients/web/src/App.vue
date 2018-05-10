<template>
  <div id="app">
    <img src="./assets/logo.png">
    <Wheels :wheels="wheels"/>
  </div>
</template>

<script>
import Wheels from './components/Wheels';

export default {
  name: 'App',
  components: {
    Wheels,
  },
  data() {
    return {
      wheels: [],
    };
  },
  created() {
    fetch(new Request('/api/wheels'))
      .then(response => response.json())
      .then((response) => {
        this.wheels = response;
      });
  },
};
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
