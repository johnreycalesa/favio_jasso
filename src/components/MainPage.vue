<script setup>
import Landing from './mini_components/landing_page.vue'
import Skills from './mini_components/skills_page.vue'
import Experience from './mini_components/experience_page.vue'
import Project from './mini_components/project_page.vue'
import Contact from './mini_components/contacts_page.vue'
</script>

<template>
  <div class="flex flex-col justify-center items-center">
    <Landing />
    <Skills />
    <Experience />
    <Project />
    <Contact />
  </div>
</template>

<style scoped></style>
