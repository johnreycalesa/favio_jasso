<template>
  <div class="wrapper px-12">
    <div class="flex items-center text-center py-5 mb-10 px-10">
      <div class="flex-grow h-1 bg-[#ff9000] rounded-xl"></div>
      <h3 class="px-10 text-xl sm:text-3xl md:text-5xl font-bold uppercase text-primary">Skills</h3>
      <div class="flex-grow h-1 bg-[#ff9000] rounded-xl"></div>
    </div>
    <div class="flex justify-around items-center w-full flex-wrap gap-2 sm:gap-10">
      <div
        class="relative size-[100px] bg-white sm:size-[150px] md:size-[200px] border-2 border-opacity-60 rounded-lg flex justify-around items-center p-2 sm:p-5 hover:scale-105 hover:shadow-normal flex"
        v-for="(item, index) in icons"
        :key="index"
        :style="`border-color: ${item.color}`"
        :class="`${item.hoverColor}`"
      >
        <img
          class="size-[150px] w-full object-contain object-center"
          :src="item.url"
          :alt="item.name + ' icon'"
        />
        <!-- <div
          class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-25 text-white text-lg font-bold opacity-0 hover:opacity-100 transition-opacity duration-300">
          {{ item.name }}
        </div> -->
      </div>
    </div>
  </div>
</template>
<script setup>
const icons = [
  {
    name: 'HTML',
    url: '/icons/html.svg',
    color: '#E44D26',
    hoverColor: 'hover:bg-[#ffece5]'
  },
  {
    name: 'CSS',
    url: '/icons/css.svg',
    color: '#1172B8',
    hoverColor: 'hover:bg-[#e9eef7]'
  },
  {
    name: 'Javascript',
    url: '/icons/javascript.svg',
    color: '#FFCA28',
    hoverColor: 'hover:bg-[#fff9e9]'
  },
  {
    name: 'Bootstrap',
    url: '/icons/bootstrap.svg',
    color: '#563D7C',
    hoverColor: 'hover:bg-[#ebe8f0]'
  },
  {
    name: 'Java',
    url: '/icons/java.svg',
    color: '#E76F00',
    hoverColor: 'hover:bg-[#ffefe4]'
  },
  {
    name: 'Python',
    url: '/icons/python.svg',
    color: '#2170B0',
    hoverColor: 'hover:bg-[#e9eef6]'
  },
  {
    name: 'Go',
    url: '/icons/go.svg',
    color: '#00ACD7',
    hoverColor: 'hover:bg-[#ebf6fb]'
  },
  {
    name: 'MySQL',
    url: '/icons/mysql.svg',
    color: '#F8981D',
    hoverColor: 'hover:bg-[#fff3e7]'
  },
  {
    name: 'DBeaver',
    url: '/icons/dbeaver.svg',
    color: '#45352F',
    hoverColor: 'hover:bg-[#e9e6e5]'
  },
  {
    name: 'Git',
    url: '/icons/git.svg',
    color: '#EE513B',
    hoverColor: 'hover:bg-[#ffede7]'
  },
  {
    name: 'R',
    url: '/icons/r.svg',
    color: '#2066B8',
    hoverColor: 'hover:bg-[#e9edf7]'
  },
  {
    name: 'Microsoft Excel',
    url: '/icons/msexcel.svg',
    color: '#215037',
    hoverColor: 'hover:bg-[#e5eae7]'
  },
  {
    name: 'Matplotlib',
    url: '/icons/matplotlib.svg',
    color: '#E4925C',
    hoverColor: 'hover:bg-[#fef3ec]'
  },
  {
    name: 'pandas',
    url: '/icons/pandas.svg',
    color: '#130754',
    hoverColor: 'hover:bg-[#e4e0eb]'
  },
  {
    name: 'Tableau Software',
    url: '/icons/tableau.svg',
    color: '#E8762C',
    hoverColor: 'hover:bg-[#fff0e7]'
  }
]
</script>
<style scoped></style>
