<script setup>
import Landing from './mini_components/landing_page.vue'
import Skills from './mini_components/skills_page.vue'
import Experience from './mini_components/experience_page.vue'
import Project from './mini_components/project_page.vue'
import Footer from '../components/FooterPage.vue'

import { ref } from 'vue'

const isNavOpen = ref(false)

const toggleNav = () => {
  isNavOpen.value = !isNavOpen.value
}
</script>

<template>
  <div class="bg-tertiary w-full p-2 sm:p-5 fixed top-0 h-min shadow-md">
    <header
      class="container mx-auto flex w-full items-center relative justify-between py-4 px-2 sm:px-6"
    >
      <a href="#home">
        <div class="w-full text-center text-xl sm:text-4xl font-bold sm:w-fit sm:text-left">
          <span class="text-orange-950 font-bold">FAVIO JASSO</span>
        </div>
      </a>
      <nav class="hidden bg-tertiary text-base md:block">
        <ul class="flex items-center space-x-2">
          <li class="group relative">
            <a
              class="block whitespace-nowrap px-3 py-2 text-sm md:text-xl font-semibold text-orange-950 hover:text-white no-underline transition"
              href="#home"
            >
              Home
            </a>
          </li>
          <li class="group relative">
            <a
              class="block whitespace-nowrap px-3 py-2 text-sm md:text-xl font-semibold text-orange-950 hover:text-white no-underline transition"
              href="#skills"
            >
              Skills
            </a>
          </li>
          <li class="group relative">
            <a
              class="block whitespace-nowrap px-3 py-2 text-sm md:text-xl font-semibold text-orange-950 hover:text-white no-underline transition"
              href="#experience"
            >
              Experience
            </a>
          </li>
          <li class="group relative">
            <a
              class="block whitespace-nowrap px-3 py-2 text-sm md:text-xl font-semibold text-orange-950 hover:text-white no-underline transition"
              href="#projects"
            >
              Projects
            </a>
          </li>
          <li class="group relative">
            <a
              class="block whitespace-nowrap px-3 py-2 text-sm md:text-xl font-semibold text-orange-950 hover:text-white no-underline transition"
              href="#contact"
            >
              Contact
            </a>
          </li>
        </ul>
      </nav>
      <button
        @click="toggleNav"
        class="block text-slate-400 hover:text-slate-900 dark:hover:text-slate-50 md:hidden trasition-all"
        title="Open navigation menu"
      >
        <svg xmlns="http://www.w3.org/2000/svg" class="size-8 fill-white" viewBox="0 0 448 512">
          <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
          <path
            fill="#ffffff"
            d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"
          />
        </svg>
      </button>
      <nav
        v-if="isNavOpen"
        class="fixed bg-tertiary-light top-0 right-0 bottom-0 h-screen w-1/2 md:hidden transition-all"
      >
        <ul class="flex flex-col space-y-2">
          <li class="text-right">
            <button
              @click="toggleNav"
              class="px-6 py-8 text-slate-400 hover:text-slate-900 dark:hover:text-slate-50"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-7 fill-white"
                viewBox="0 0 448 512"
              >
                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  fill="#ffffff"
                  d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
                />
              </svg>
            </button>
          </li>
          <li class="group relative w-full overflow-x-visible text-right">
            <a
              class="mx-4 block whitespace-nowrap px-3 py-2 text-sm md:text-xl font-semibold text-orange-950 hover:text-white no-underline transition dark:hover:text-slate-50"
              href="#home"
            >
              Home
            </a>
          </li>
          <li class="group relative w-full overflow-x-visible text-right">
            <a
              class="mx-4 block whitespace-nowrap px-3 py-2 text-sm md:text-xl font-semibold text-orange-950 hover:text-white no-underline transition dark:hover:text-slate-50"
              href="#skills"
            >
              Skills
            </a>
          </li>
          <li class="group relative w-full overflow-x-visible text-right">
            <a
              class="mx-4 block whitespace-nowrap px-3 py-2 text-sm md:text-xl font-semibold text-orange-950 hover:text-white no-underline transition dark:hover:text-slate-50"
              href="#experience"
            >
              Experiences
            </a>
          </li>
          <li class="group relative w-full overflow-x-visible text-right">
            <a
              class="mx-4 block whitespace-nowrap px-3 py-2 text-sm md:text-xl font-semibold text-orange-950 hover:text-white no-underline transition dark:hover:text-slate-50"
              href="#projects"
            >
              Projects
            </a>
          </li>
          <li class="group relative w-full overflow-x-visible text-right">
            <a
              class="mx-4 block whitespace-nowrap px-3 py-2 text-sm md:text-xl font-semibold text-orange-950 hover:text-white no-underline transition dark:hover:text-slate-50"
              href="#contact"
            >
              Contact
            </a>
          </li>
        </ul>
      </nav>
    </header>
  </div>
  <div class="flex flex-col justify-center items-center">
    <Landing id="home" />
    <Skills id="skills" />
    <Experience id="experience" />
    <Project id="projects" />
    <Footer id="contact" />
  </div>
</template>

<style scoped></style>
