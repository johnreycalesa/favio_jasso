<template>
    <div class="wrapper px-2 py-10">
        <div class="flex justify-center mb-5">
            <h1 class="text-xl sm:text-3xl md:text-5xl font-bold underline decoration-wavy uppercase text-primary">
                Experience
            </h1>
        </div>
        <div class="flex justify-center items-center w-full flex-wrap gap-2 sm:gap-5">
            <div v-for="items in experiences" :key="items"
                class="border-2 border-gray-200 border-opacity-60 rounded-lg p-5 lg:p-10 m-2 flex justify-center items-center md:flex-col w-full md:w-[40%] lg:w-[30%]">
                <img class="w-full object-contain object-center size-[150px] sm:size-[150px] md:size-[200px]"
                    :src="items.image" alt="blog">
                <div class="p-2 sm:p-5 flex flex-col gap-3 text-center">
                    <h1 class="text-xl sm:text-2xl font-bold text-secondary">{{ items.college }}</h1>
                    <h1 class="text-xl sm:text-2xl font-medium">{{ items.position }}</h1>
                    <button type="button"
                        class="text-sm sm:text-xl text-secondary border-2 bg-white border-secondary p-2 w-full rounded-xl border-radius shadow-normal"
                        @click="openPopup()">Read More</button>
                </div>

            </div>
        </div>
    </div>
</template>
<script setup>
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


</script>
<style scoped></style>
