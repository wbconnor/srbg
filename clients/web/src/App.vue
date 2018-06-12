<template>
  <div id="app">
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
  mounted() {
    this.getWheels();
  },
  methods: {
    getWheels() {
      const vThis = this;
      fetch('/api/wheels').then(response => {
        response.json().then(function (data) {
          vThis.wheels = data;
        })
      });
    }
  }
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
