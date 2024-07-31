<template>
    <div class="wrapper p-12">
        <div class="flex justify-center mb-12">
            <h1 class="text-xl sm:text-3xl md:text-5xl font-bold underline decoration-wavy uppercase text-primary">
                Experience
            </h1>
        </div>
        <div class="flex justify-around items-center w-full flex-wrap gap-2 sm:gap-10" v-for="items in experiences"
            :key="items">
            <div class="size-48 border-2 border-gray-200 border-opacity-60 rounded-lg flex flex-col">
                <div class="p-5">
                    <img class="w-full object-cover object-center p-5" :src="items.image" alt="blog">
                </div>
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{ items.college }}
                </h2>
                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ items.position }}</h1>
                <a class="text-primary inline-flex items-center">Learn More
                </a>
            </div>
        </div>
    </div>
</template>
<script setup>
const experiences = [
    {
        college: 'County College of Morris',
        position: 'Software Dev. & IT, Intern',
        image: '/public/image/college.png',
        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, facilis?'
    },
    {
        college: 'Country College of Morris',
        position: 'Software Dev. & IT, Intern',
        image: '/public/image/college.png',
        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, facilis?'
    },
    {
        college: 'LetsPlott Inc.',
        position: 'Social Media Analyst',
        image: '/public/image/plott.png',
        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, facilis?'
    }
]
</script>
<style scoped></style>
