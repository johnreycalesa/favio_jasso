<template>
  <div class="wrapper px-12">
    <div class="flex justify-center mb-12">
      <h3
        class="text-xl sm:text-3xl md:text-5xl font-bold underline decoration-wavy uppercase text-primary"
      >
        Skills
      </h3>
    </div>
    <div class="flex justify-around items-center w-full flex-wrap gap-2 sm:gap-10">
      <div
        class="size-[100px] bg-white sm:size-[150px] md:size-[200px] border-2 border-opacity-60 rounded-lg flex justify-around items-center p-2 sm:p-5 hover:scale-105 hover:shadow-normal hover:bg-[#E8762C]"
        v-for="(item, index) in icons"
        :key="index"
        :style="`border-color: ${item.color}`"
        :class="`hover:bg-[${item.color}]`"
      >
        <img
          class="size-[150px] w-full object-contain object-center"
          :src="item.url"
          :alt="item.name + ' icon'"
        />
      </div>
    </div>
  </div>
</template>
<script setup>
const icons = [
  {
    name: 'html',
    url: '/icons/html.svg',
    color: '#E44D26',
    animation: false
  },
  {
    name: 'css',
    url: '/icons/css.svg',
    color: '#1172B8',
    animation: false
  },
  {
    name: 'javascript',
    url: '/icons/javascript.svg',
    color: '#FFCA28'
  },
  {
    name: 'bootstrap',
    url: '/icons/bootstrap.svg',
    color: '#563D7C'
  },
  {
    name: 'java',
    url: '/icons/java.svg',
    color: '#E76F00'
  },
  {
    name: 'python',
    url: '/icons/python.svg',
    color: '#2170B0'
  },
  {
    name: 'go',
    url: '/icons/go.svg',
    color: '#00ACD7'
  },
  {
    name: 'mysql',
    url: '/icons/mysql.svg',
    color: '#F8981D'
  },
  {
    name: 'dbeaver',
    url: '/icons/dbeaver.svg',
    color: '#45352F'
  },
  {
    name: 'git',
    url: '/icons/git.svg',
    color: '#EE513B'
  },
  {
    name: 'r',
    url: '/icons/r.svg',
    color: '#2066B8'
  },
  {
    name: 'msexcel',
    url: '/icons/msexcel.svg',
    color: '#215037'
  },
  {
    name: 'matplotlib',
    url: '/icons/matplotlib.svg',
    color: '#E4925C'
  },
  {
    name: 'pandas',
    url: '/icons/pandas.svg',
    color: '#E4925C'
  },
  {
    name: 'tableau',
    url: '/icons/tableau.svg',
    color: '#E8762C'
  }
]
</script>
<style scoped></style>
