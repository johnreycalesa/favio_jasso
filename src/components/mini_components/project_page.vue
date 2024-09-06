<template>
  <div class="wrapper px-0 md:px-2 py-5 md:py-10">
    <div class="flex items-center text-center py-5 mb-2 md:mb-8 px-2 md:px-10">
      <div class="flex-grow h-1 bg-[#ff9000] rounded-xl"></div>
      <h3 class="px-10 text-xl sm:text-3xl md:text-5xl font-bold uppercase text-primary">
        Projects
      </h3>
      <div class="flex-grow h-1 bg-[#ff9000] rounded-xl"></div>
    </div>
    <div class="flex justify-center w-full flex-wrap gap-2 sm:gap-5">
      <div
        v-for="items in experiences"
        :key="items"
        class="border-2 bg-white border-gray-200 border-opacity-60 rounded-xl m-2 p-2 gap-2 flex justify-between items-center md:flex-col w-full md:w-[37.5%] lg:w-[32.5%] hover:shadow-2xl shadow-normal"
      >
        <div class="size-1/2 h-full flex md:size-[90%] md:p-2 justify-center items-center">
          <img
            class="rounded-lg object-contain size-full lg:size-full"
            :src="items.image"
            :alt="items.description"
          />
        </div>
        <div
          class="w-1/2 md:w-full lg:[60%] p-2 md:p-3 flex flex-col justify-center text-center items-center gap-3"
        >
          <h1 class="text-xl sm:text-2xl font-bold">{{ items.position }}</h1>
          <h1 class="text-lg font-medium text-center hidden sm:block">
            <div>{{ items.description }}</div>
          </h1>
          <div class="w-full flex flex-col xl:flex-row gap-3">
            <a
              :href="items.link"
              target="_blank"
              class="text-sm sm:text-xl w-full text-secondary border-2 bg-[#fff5ee] border-secondary p-2 rounded border-radius shadow-normal hover:bg-secondary hover:text-white"
            >
              {{ items.button }}
            </a>
            <a
              :href="items.videoLink"
              target="_blank"
              class="text-sm sm:text-xl text-secondary border-2 bg-[#fff5ee] border-secondary p-2 w-full rounded border-radius shadow-normal hover:bg-secondary hover:text-white"
              >Video</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>
const experiences = [
  {
    position: 'Front—End Developer',
    image: '/image/ap.png',
    description:
      'Data3D is a hackathon submission project for HackTCNJ2024.  I used HTML, CSS, JavaScript, a-frameJs, threeJs, to create our 3D augmented reality environment to host our 3D objects! ',
    button: 'Github',
    link: 'https://github.com/FavioJasso/D3DFrontend',
    videoLink: 'https://youtu.be/_2OsnLILwTI'
  },
  {
    position: 'Analyst & Team Captain',
    image: '/image/asa.png',
    description:
      'Representing County College of Morris, my team and I won Best Statistical Analysis in A.S.A. Data Fest 2024. Analyzing over 3 million data points and demonstrating high level topics in Data Science.',
    button: 'Presentation',
    link: 'https://drive.google.com/file/d/1pu0Z-T2j5GHh1wjnm0cjQdD2ENWWBx1o/view',
    videoLink: 'https://youtu.be/G3K2Pz4gKl0?si=VYJFETQ8ZBMEP0eU'
  }
]
</script>
<style scoped></style>
