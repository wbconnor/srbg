<template>
  <div id="app">
    <table-component :data="wheels" sort-by="songs" sort-order="asc">
      <table-column show="brand_name" label="Brand Name"></table-column>
      <table-column show="model" label="Model"></table-column>
      <table-column show="description" label="Description"></table-column>
      <!-- <table-column show="songs" label="Songs" data-type="numeric"></table-column>
      <table-column show="birthday" label="Birthday" data-type="date:DD/MM/YYYY"></table-column>
      <table-column label="" :sortable="false" :filterable="false">
        <template slot-scope="row">
        <a :href="`#${row.firstName}`">Edit</a>
        </template>
      </table-column> -->
    </table-component>
    <!-- <Wheels :wheels="wheels"/> -->
  </div>
</template>

<script>
import { TableComponent, TableColumn } from 'vue-table-component';
import Wheels from './components/Wheels';

export default {
  name: 'App',
  components: {
    Wheels,
    TableComponent,
    TableColumn,
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
