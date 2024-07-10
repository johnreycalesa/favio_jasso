<template>
<!-- First Section -->
<div class="w-full">
    <div>
        <div class="flex flex-col items-center justify-center gap-10 h-96" style="background-image: url({{ asset('images/aboutb.png') }}); background-repeat: no-repeat; background-size: cover;">
            <h1 class="text-3xl font-bold text-center text-orange-600 md:text-5xl">
                HI! I’M
                <span class="font-extrabold text-orange-800 hover:text-white hover:outline-dashed">
                    Favio-Valentino Jasso
                </span>
            </h1>
            <p class="text-lg font-medium md:text-2xl">Marketing and Branding Expert</p>
        </div>
    </div>
</div>
<!-- End First Section -->
<!-- Second Section -->
<div class="flex flex-col-reverse items-center justify-between w-full h-auto p-5 md:flex-row">
    <div class="flex flex-col w-full gap-5 p-5 m-5 md:w-1/3">
        <h2 class="text-base font-medium md:text-3xl">Who Am I?</h2>
        <p class="text-sm md:text-base">
            Favio Jasso is a Mexican-American marketer based in the New York Metropolitan area. Favio is
            accompanied by 4 years of experience working with high-profile entertainment brands like
            Team Liquid and the San Antonio Spurs.
        </p>
        <button class="p-2 font-medium border-2 border-orange-500 rounded-lg btn hover:text-white hover:bg-orange-400" id="read" @click="modal('modal', 'open')">Read More
        </button>
        <dialog id="modal" class="w-4/5 rounded-lg">
            <div class="p-5">
                <div class="flex justify-end">
                    <button id="close" class="px-4 py-2 rounded-lg hover:bg-slate-100" @click="modal('modal', 'close')">&times;</button>
                </div>
                <div class="p-5">
                    <p>
                        Additionally, he has achieved national recognition as CES 2022 honoree award and South
                        by SouthWest nominee for best in innovation under the tech focus led brand LetsPlott.
                        Favio’s marketing expertise has allowed him to expand into consulting influencer
                        talent who have amassed six to seven-figure followings. Favio’s extensive industry
                        experience has proven his intellect in regard to the neverending outlook of the
                        marketing world.
                    </p>
                </div>
            </div>
        </dialog>
    </div>
    <div class="flex flex-col items-center w-full gap-5 p-5 m-5 md:w-1/3">
        <img src="../assets/images/faviodp.jpg" alt="Profile" class="w-2/3 transition-all rounded-lg hover:scale-105" />
    </div>
    <div class="flex-col hidden w-full gap-3 md:flex md:w-1/3">
        <div class="">
            <a href="tel:973-234-2073" class="flex items-center gap-3 hover:scale-95">
                <i class="text-orange-500 fa-2x fa-solid fa-mobile-screen"></i>
                <span class=""> 973-234-2073 </span>
            </a>
        </div>
        <div class="">
            <a href="https://github.com/FavioJasso" class="flex items-center gap-3 hover:scale-95">
                <i class="text-orange-500 fa-solid fa-envelope fa-2x"></i>
                <span class=""> fjporras04@gmail.com </span>
            </a>
        </div>
        <div class="">
            <a href="https://www.linkedin.com/in/faviojasso/" class="flex items-center gap-3 hover:scale-95">
                <i class="text-orange-500 fa-brands fa-linkedin fa-2x"></i>
                <span class=""> Favio Jasso </span>
            </a>
        </div>
        <div class="">
            <a href="https://github.com/FavioJasso" class="flex items-center gap-3 hover:scale-95">
                <i class="text-orange-500 fa-brands fa-github fa-2x"></i>
                <span class=""> Favio Jasso </span>
            </a>
        </div>
    </div>
</div>
<!-- End Second Section -->
</template>

<script setup>
const readModal = document.getElementById('read')
const close = document.getElementById('close')
// readModal.addEventListener('click', function () {
//     const modal = document.getElementById('modal')
//     modal.showModal()
//     console.log('clicked')
// })
// close.addEventListener('click', function () {
//     const modal = document.getElementById('modal')
//     modal.close()
//     console.log('closed')
// })

function modal(modalName, state) {
    const readModal = document.getElementById(modalName);
    console.log(readModal);
    if (state === "open") {
        readModal.showModal()
    } else {
        readModal.close();
    }
}
</script>

<style scoped></style>
