<template>
  <header>
    <div id="menuBtn" @click="toggleSidebar">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </header>
</template>

<script>
export default {
  mounted() {},
  methods: {
    toggleSidebar() {
      document.querySelector("#sidebar").classList.toggle("closed");
    }
  }
};
</script>
