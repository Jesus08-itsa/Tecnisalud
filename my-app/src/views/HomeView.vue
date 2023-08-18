<script setup>
import TheWelcome from '../components/TheWelcome.vue'
import fotter from '../components/fotter.vue';
import Navbar from '../components/Navbar.vue';
</script>

<template>
  <Navbar />
  <TheWelcome />
  <fotter />
  <Router-view />
</template>
