<template>
    <div class="wrapper px-2 py-10">
        <div class="flex justify-center mb-5">
            <h1 class="text-xl sm:text-3xl md:text-5xl font-bold underline decoration-wavy uppercase text-primary">
                PROJECTS
            </h1>
        </div>
        <div class="flex justify-center items-center w-full flex-wrap gap-2 sm:gap-5">
            <div v-for="items in experiences" :key="items"
                class="border-2 border-gray-200 border-opacity-60 rounded-lg h-full m-2 flex justify-center items-center md:flex-col w-full md:w-[40%] lg:w-[30%]">
                <img class="w-full object-cover object-center rounded-t-lg size-48 sm:size-80" :src="items.image" alt="blog">
                <div class=" p-5 lg:p-10 flex flex-col gap-3 text-center justify-center items-center w-full">
                    <h1 class="text-base sm:text-lg font-bold">{{ items.position }}</h1>
                    <h1 class="text-base font-medium hidden sm:block">{{ items.description }}</h1>
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
        position: 'Front End Developer',
        image: '/image/ap.jpg',
        description: 'Data3D is a hackathon submission project for HackTCNJ2024.  I used HTML, CSS, JavaScript, a-frameJs, threeJs, to create our 3D augmented reality environment to host our 3D objects! '
    },
    {
        position: 'Analyst & Team Captain',
        image: '/image/asa.png',
        description: 'I served as Captain for the County College of Morris’ Data Science team in A.S.A. Data Fest 2024, where we helped find insights for CourseKata, a learning platform for Data Science and Statistics, by analyzing over 3 million data points'
    },
]


</script>
<style scoped></style>
