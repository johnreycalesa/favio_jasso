<template>
  <div class="w-full">
    <div class="flex flex-col items-center justify-center gap-3 p-3 h-96"
      :style="{ backgroundImage: `url(${backgroundImage})`, backgroundRepeat: 'no-repeat', backgroundSize: 'cover' }">
      <p class="text-base font-medium md:text-xl">
        {{ t('Portfolio Landing Footer Subheader') }}
      </p>
      <h1 class="text-3xl font-bold text-center text-white md:text-5xl drop-shadow-md">
        {{ t('Portfolio Landing Footer Header') }}
      </h1>
      <button
        class="p-2 text-base font-bold border-2 border-orange-500 rounded-lg md:p-5 md:text-xl hover:text-white hover:bg-orange-400">
        <router-link to="/contact">
          {{ t('Portfolio Landing Footer Button') }}
        </router-link>
      </button>
    </div>
  </div>
  <div class="w-full">
    <div class="flex flex-col items-center justify-center h-48 p-3 bg-black">
      <ul class="flex flex-row flex-wrap justify-around w-full">
        <li class="text-orange-600 hover:underline"><router-link to="/portfolio">
            {{ t('Portfolio') }}
          </router-link></li>
        <li class="text-orange-600 hover:underline"><router-link to="/advocacy">Experience</router-link></li>
        <li class="text-orange-600 hover:underline"><router-link to="/about">
            {{ t('About') }}
          </router-link>
        </li>
        <li class="text-orange-600 hover:underline"><router-link to="/contact">
            {{ t('Contact') }}
          </router-link></li>
      </ul>
    </div>
    <div class="flex justify-end py-9 bg-[#413E3E]">
      <router-link to="#" class="px-1 text-orange-400 md:px-10 hover:underline">Go back</router-link>
    </div>
    <div class="flex justify-between items-center bg-[#413E3E]">
      <div class="flex flex-col items-center justify-center px-1 md:px-10">
        <h6 class="text-sm text-orange-400 md:text-base">
          {{ t('Portfolio Landing Footer Ending Button') }}
        </h6>
        <div class="flex justify-between">
          <a href="https://instagram.com/faviojasso?igshid=YWYwM2I1ZDdmOQ==" class="m-2">
            <i class="text-orange-400 fa-brands fa-instagram md:fa-2x hover:scale-110"></i>
          </a>
          <a href="https://github.com/FavioJasso" class="m-2">
            <i class="text-orange-400 fa-brands fa-github md:fa-2x hover:scale-110"></i>
          </a>
          <a href="https://twitter.com/FavioJasso" class="m-2">
            <i class="text-orange-400 fa-brands fa-twitter md:fa-2x hover:scale-110"></i>
          </a>
        </div>
      </div>
      <div class="flex justify-center px-1 text-sm text-orange-400 md:px-10 :md:text-base">
        {{ t('Portfolio Landing Footer Credits') }}
      </div>
    </div>
  </div>
</template>

<script setup>
import { useI18n } from 'vue-i18n';
import { ref } from 'vue';
import bgImage from '@/assets/images/aboutb.png';

const backgroundImage = ref(bgImage);

const { t } = useI18n();
console.log(t('Portfolio Landing Footer Header'));
</script>

<style scoped>
@import 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css';
</style>
