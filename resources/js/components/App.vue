<template>
  <div>Name: {{ name }}</div>
</template>

<script>
import { ref } from "vue";
export default {
  setup() {
    const name = ref("baris");
    return { name };
  },
};
</script>

<style>
</style>