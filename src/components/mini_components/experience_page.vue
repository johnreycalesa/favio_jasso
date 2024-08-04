<template>
  <div class="wrapper px-2 py-10">
    <div class="flex justify-center mb-5">
      <h1
        class="text-xl sm:text-3xl md:text-5xl font-bold underline decoration-wavy uppercase text-primary"
      >
        Experience
      </h1>
    </div>
    <div class="flex justify-center w-full flex-wrap gap-2 sm:gap-5">
      <div
        v-for="(item, index) in experiences"
        :key="index"
        class="border-2 bg-white border-gray-200 border-opacity-60 rounded p-5 lg:p-10 m-2 flex justify-center items-center h-max gap-5 md:flex-col w-full md:w-[40%] lg:w-[30%]"
      >
        <div class="w-1/2 md:w-full flex justify-center items-center flex-col gap-3">
          <img
            class="w-full object-contain object-center size-[125px] sm:size-[150px] md:size-[200px]"
            :src="item.image"
            alt="blog"
          />
        </div>
        <div class="w-1/2 md:w-full flex justify-center items-center text-center flex-col gap-3">
          <h1 class="text-xl sm:text-2xl font-bold text-secondary">{{ item.college }}</h1>
          <h1 class="text-xl sm:text-2xl font-medium">{{ item.position }}</h1>
          <button
            type="button"
            class="text-sm sm:text-xl text-secondary border-2 bg-[#fff5ee] border-secondary p-2 w-full rounded border-radius shadow-normal"
            @click="openPopup(item)"
          >
            Read More
          </button>
        </div>
      </div>
    </div>
    <div
      v-if="showDialog"
      class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
    >
      <div class="bg-white p-5 rounded max-w-lg w-full border-2 border-primary-light">
        <h2 class="text-2xl font-bold mb-4">{{ selectedExperience.college }}</h2>
        <p class="text-lg mb-4">{{ selectedExperience.description }}</p>
        <button @click="closePopup" class="text-white bg-primary px-4 py-2 rounded">Close</button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const experiences = [
  {
    college: 'County College of Morris',
    position: 'Software Dev. & IT, Intern',
    image: '/image/college.png',
    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, facilis?'
  },
  {
    college: 'Country College of Morris',
    position: 'Software Dev. & IT, Intern',
    image: '/image/college.png',
    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, facilis?'
  },
  {
    college: 'LetsPlott Inc.',
    position: 'Social Media Analyst',
    image: '/image/plott.png',
    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, facilis?'
  }
]

const showDialog = ref(false)
const selectedExperience = ref({})

const openPopup = (experience) => {
  selectedExperience.value = experience
  showDialog.value = true
}

const closePopup = () => {
  showDialog.value = false
  selectedExperience.value = {}
}
</script>

<style scoped></style>
