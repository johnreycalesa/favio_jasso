<template>
  <div :style="{ boxShadow: '0 2px 4px 0 rgba(0,0,0,.5)' }" class="sticky top-0 z-50 h-auto bg-[#FC9E11] w-full">
    <div class="wrapper flex flex-row justify-between">
      <div class="flex items-center justify-center p-2 md:p-9">
        <router-link to="/">
          <img :src="logo" alt="Logo" class="h-auto">
        </router-link>
      </div>
      <div class="flex flex-row-reverse items-center justify-center">
        <div class="flex md:hidden" id="toggle-menu">
          <button @click="toggleMenu">
            <i class="m-5 open fa-solid fa-bars fa-2x md:fa-3x"></i>
          </button>
        </div>
        <ul :class="['items-center justify-center', { hidden: !menuOpen }, 'font-medium md:flex']" id="nav">
          <li><router-link class="mx-10 hover:underline hover:underline-offset-4" to="/">Portfolio</router-link></li>
          <li><router-link class="mx-10 hover:underline hover:underline-offset-4"
              to="/advocacy">Experience</router-link>
          </li>
          <li><router-link class="mx-10 hover:underline hover:underline-offset-4" to="/about">About</router-link></li>
          <li><router-link class="mx-10 hover:underline hover:underline-offset-4" to="/contact">Contact</router-link>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import logoImage from '../assets/images/Logo.png';

const logo = ref(logoImage);
const menuOpen = ref(false);

const toggleMenu = () => {
  menuOpen.value = !menuOpen.value;
};
</script>

<style scoped>
@import 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css';
</style>
