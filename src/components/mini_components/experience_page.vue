<template>
  <div class="wrapper px-0 md:px-2 py-5 md:py-10">
    <div
      class="flex items-center text-center py-5 mb-2 md:mb-10 px-2 md:px-10 slide-bottom-to-top opacity-0 translate-y-10"
    >
      <div class="flex-grow h-1 bg-[#ff9000] rounded-xl"></div>
      <h3 class="px-10 text-xl sm:text-3xl md:text-5xl font-bold uppercase text-primary">
        Experience
      </h3>
      <div class="flex-grow h-1 bg-[#ff9000] rounded-xl"></div>
    </div>
    <div class="flex justify-center w-full flex-wrap gap-2 sm:gap-5">
      <div
        v-for="(item, index) in experiences"
        :key="index"
        class="experience-item border-2 bg-white border-gray-200 border-opacity-60 rounded-xl p-5 lg:p-10 m-2 flex justify-between items-center gap-5 md:flex-col w-full md:w-[40%] lg:w-[30%] hover:shadow-2xl shadow-normal slide-bottom-to-top opacity-0 translate-y-10"
        ref="experienceItem"
      >
        <div class="w-1/2 md:w-full flex justify-center items-center flex-col gap-3">
          <img
            class="w-full object-contain object-center size-[125px] sm:size-[150px] md:size-[200px]"
            :src="item.image"
            :alt="item.college + ' icon'"
          />
        </div>
        <div class="w-1/2 md:w-full flex justify-center items-center text-center flex-col gap-3">
          <h1 class="text-xl sm:text-2xl font-bold text-secondary w-full">{{ item.college }}</h1>
          <h1 class="text-lg font-medium md:max-w-[220px]">{{ item.position }}</h1>
          <button
            type="button"
            class="text-sm sm:text-xl text-secondary border-2 bg-[#fff5ee] border-secondary p-2 w-full rounded border-radius shadow-normal hover:bg-secondary hover:text-white"
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
      <div class="bg-white p-5 rounded max-w-4xl w-full border-2 border-primary-light">
        <h2 class="text-2xl font-bold mb-4 text-primary">{{ selectedExperience.college }}</h2>
        <p class="text-sm md:text-lg mb-4" v-html="selectedExperience.description"></p>
        <div class="flex justify-end items-center w-full">
          <button
            @click="closePopup"
            class="text-white bg-primary px-4 py-2 rounded hover:opacity-80"
          >
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'

const experiences = [
  {
    college: 'County College of Morris',
    position: 'Software Dev. & IT, Intern',
    image: '/image/college.png',
    description: ` <ul class="ml-3 list-disc">
  <li>Automated business processes by developing dynamic macros in <strong> VBA & Python </strong> , increasing productivity by 50%.</li>
  <li>Provided <strong> technical support and troubleshooting</strong> for both hardware and software issues across the college.</li>
  <li>Helped in the setup, configuration, and maintenance of servers, workstations, and other IT equipment.</li>
  <li>Assisted in the deployment, configuration, and maintenance of enterprise software applications. Ensured software was up-to-date and compatible with existing systems.</li>
</ul>`
  },
  {
    college: 'County College of Morris',
    position: 'Data Analyst and Research, Intern',
    image: '/image/college.png',
    description: `<ul class="ml-3 list-disc">
    <li>Maintains, cleans, and updates <strong> Microsoft  Excel </strong> database of student enrollment in continuing education certifications.</li>
    <li>Leveraged <strong> Python </strong>  to manipulate, explore, clean analyze and report data on student enrollment.</li>
    <li>Develop <strong> Tableau </strong> dashboards visualizing net spend, conducting enrollment analysis and creating key insights.</li>
    <li>Assists staff on research projects, information gathering, automating processes, and provides occasional IT solutions.</li>
      </ul> 
    `
  },
  {
    college: 'LetsPlott Incorporated',
    position: 'Social Media Analyst',
    image: '/image/plott.png',
    description: `<ul class="ml-3 list-disc">
    <li>Implement and monitor A/B tests for website, app, and social media pages, using relevant tools and platforms (e.g., <strong> Google Analytics, Facebook Ads Manager </strong> ), which increased e-commerce sales growth of 20% for 3 quarters. </li>
    <li>Directed all content and strategy on TikTok, YouTube Instagram, and Facebook; Instagram engagement increased by <strong> 50% over 6 months </strong>, 35 million global impressions combined. </li>
    <li>Developed and implemented a social media strategy that increased followers on Instagram by <strong> 30% in 3 months </strong> and engagement by 50% in 6 months. </li>
    <li>Best in App honoree at CES 2022 for our newest advancements in XR and AR within our App, assisted in Awards submission, in-app testing, taking photos, coordinating slides, and more. </li>
    </ul> 
    `
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

let observer

const handleScroll = () => {
  const elements = document.querySelectorAll('.slide-bottom-to-top')
  observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('slide-up')
        } else {
          entry.target.classList.remove('slide-up')
        }
      })
    },
    { threshold: 0.3 }
  )

  elements.forEach((element) => {
    observer.observe(element)
  })
}

onMounted(() => {
  handleScroll()
})
</script>

<style scoped>
@keyframes slideFromBottom {
  from {
    opacity: 0;
    transform: translateY(36px);
  }

  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.slide-up {
  animation: slideFromBottom 0.5s ease forwards;
}

.slide-bottom-to-top {
  transition:
    opacity 0.3s ease,
    transform 0.3s ease;
  opacity: 0;
  transform: translateY(36px);
}
</style>
