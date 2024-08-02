<template>
  <div class="wrapper px-2 py-10">
    <div class="flex justify-center mb-5">
      <h1
        class="text-xl sm:text-3xl md:text-5xl font-bold underline decoration-wavy uppercase text-primary"
      >
        PROJECTS
      </h1>
    </div>
    <div class="flex justify-center w-full flex-wrap gap-2 sm:gap-5">
      <div
        v-for="items in experiences"
        :key="items"
        class="border-2 border-gray-200 border-opacity-60 rounded h-full m-2 flex justify-center items-center md:flex-col w-full md:w-[40%] lg:w-[30%]"
      >
        <div class="w-1/2 md:w-full">
          <img class="w-full rounded md:rounded-t-lg border-b-2" :src="items.image" alt="blog" />
        </div>
        <div class="w-1/2 md:w-full p-7 flex flex-col justify-center items-center gap-3">
          <h1 class="text-base sm:text-lg font-bold">{{ items.position }}</h1>
          <h1 class="text-base font-medium text-center hidden sm:block">{{ items.description }}</h1>
          <div class="w-full flex flex-col md:flex-row gap-3">
            <button
              class="text-sm sm:text-xl text-secondary border-2 bg-white border-secondary p-2 w-full rounded border-radius shadow-normal"
            >
              <a :href="items.link" target="_blank">
                {{ items.button }}
              </a>
            </button>
            <button
              class="text-sm sm:text-xl text-secondary border-2 bg-white border-secondary p-2 w-full rounded border-radius shadow-normal"
            >
              <a :href="items.videoLink" target="_blank">Video</a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>
const experiences = [
  {
    position: 'Front End Developer',
    image: '/image/ap.jpg',
    description:
      'Data3D is a hackathon submission project for HackTCNJ2024.  I used HTML, CSS, JavaScript, a-frameJs, threeJs, to create our 3D augmented reality environment to host our 3D objects! ',
    button: 'Github',
    link: 'https://github.com/FavioValentinoJasso/Data3D',
    videoLink: 'https://www.youtube.com/watch?v=_2OsnLILwTI'
  },
  {
    position: 'Analyst & Team Captain',
    image: '/image/asa.png',
    description:
      'I served as Captain for the County College of Morris’ Data Science team in A.S.A. Data Fest 2024, where we helped find insights for CourseKata, a learning platform for Data Science and Statistics, by analyzing over 3 million data points',
    button: 'Presentation',
    link: 'https://drive.google.com/file/d/1eJ0Pj5S1O0q4jvD9ZtG5hY4r2Y6f0q7A/view?usp=sharing',
    videoLink: 'https://www.youtube.com/watch?v=G3K2Pz4gKl0'
  }
]
</script>
<style scoped></style>
