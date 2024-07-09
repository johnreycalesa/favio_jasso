<template>
    <div class="wrapper">
        <div class="flex flex-col-reverse md:flex-row" id="home">
            <div class=" flex flex-col justify-center w-full p-3 md:p-16 md:w-3/5">
                <div class="flex items-center gap-1">
                    <h1 class="text-3xl font-extrabold text-orange-400 drop-shadow-md md:text-5xl ">
                        {{ t('Portfolio Landing Header') }}
                    </h1>
                    <div class="inline-block">
                        <div
                            class="w-full px-1 overflow-hidden font-extrabold tracking-wide text-orange-400 border-r-4 border-orange-500 border-solid hover:cursor-alias drop-shadow-md whitespace-nowrap text-3xl md:text-5xl  cursor-blink typing-effect hover:border-2">
                            Favio Jasso </div>
                    </div>
                </div>
                <p class="my-2 text-sm md:text-base">I help businesses grow through the power of digital marketing and
                    creative strategy. </p>
                <p class="my-2 text-sm md:text-base">Learn more about my award-winning tactics and experience!</p>
                <div class="my-2 ">
                    <button
                        class="h-10 px-5 border-2 border-orange-500 rounded-lg hover:bg-orange-400 hover:text-white">
                        <a href="contact" class="font-bold">{{ t('Portfolio Landing Button') }}</a>
                    </button>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center w-full md:w-2/5 ">
                <img :src="profileImage" alt="Profile"
                    class="block w-4/5 h-auto m-20 transition-all md:w-auto hover:scale-105 ">
            </div>
        </div>
        <div class="flex flex-row justify-center py-5 text-3xl font-bold md:text-5xl">
            <span>{{ t('Portfolio Landing Project Header') }}</span>
        </div>
        <div class="flex flex-col justify-center md:flex-row">
            <div class="flex flex-row justify-around w-full h-auto md:w-2/5">
                <div
                    class="flex flex-col items-center justify-center h-full gap-2 p-5 m-2 transition-all scale-95 border-2 border-orange-500 rounded-lg shadow-md md:gap-7 hover:scale-100">
                    <div class=" flex flex-col justify-center items-center h-[420px] ">
                        <img src="../assets/images/aphelion.png" alt="Aphelion" class="rounded-lg ">
                    </div>
                    <div class="flex flex-col items-center justify-center gap-5">
                        <h2 class="text-xl font-bold text-orange-600 underline md:text-3xl underline-offset-8">{{
                            t('Portfolio Landing Project Card Two Header') }}
                        </h2>
                        <p class="text-sm md:text-base">{{ t('Portfolio Landing Project Card Two Description') }}</p>
                        <button type="button" id="readMoreButtonOne"
                            class="p-3 font-bold border-2 border-orange-500 rounded-lg hover:bg-orange-400 hover:text-white"
                            @click="modalState('id01', 'open')">{{ t('Read More Button') }}</button>

                        <dialog id="id01" class="w-4/5 rounded-lg">
                            <div class="p-5">
                                <div class="flex items-center justify-between p-3">
                                    <h1 class="text-2xl font-bold">Aphelion Sports <span
                                            class="text-xl text-orange-400">Creative Project Lead</span></h1>
                                    <button
                                        class="px-3 py-2 text-2xl font-medium rounded-lg hover:bg-orange-400 hover:text-white"
                                        id="closeModalOne" @click="modalState('id01', 'close')">✖</button>
                                </div>
                                <hr class="w-[95%] m-auto">
                                <div>
                                    <ul class="py-5 pl-8 list-disc [&>*]:p-1">
                                        <li> {{ t('Portfolio Landing Project Card One Description 1') }} </li>
                                        <li>{{ t('Portfolio Landing Project Card One Description 2') }}</li>
                                    </ul>
                                </div>
                            </div>
                        </dialog>
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-around w-full h-auto md:w-2/5">
                <div
                    class="flex flex-col items-center justify-center h-full p-5 m-2 transition-all scale-95 border-2 border-orange-500 rounded-lg shadow-md gap-7 hover:scale-100">
                    <div class=" flex flex-col justify-center items-center h-[420px] ">
                        <img src="../assets/images/teamliquid.png" alt="TeamLiquid" class="rounded-lg">
                    </div>
                    <div class="flex flex-col items-center justify-center gap-5">
                        <h2 class="text-xl font-bold text-orange-600 underline md:text-3xl underline-offset-8">{{
                            t('Portfolio Landing Project Card One Header') }}
                        </h2>
                        <p class="text-sm md:text-base">{{ t('Portfolio Landing Project Card One Description') }}
                        </p>
                        <button type="button" id="readMoreButtonOne"
                            class="p-3 font-bold border-2 border-orange-500 rounded-lg hover:bg-orange-400 hover:text-white"
                            @click="modalState('id02', 'open')">{{ t('Read More Button') }}</button>
                        <dialog id="id02" class="w-4/5 rounded-lg">
                            <div class="p-5">
                                <div class="flex items-center justify-between p-3">
                                    <h1 class="text-2xl font-bold">Aphelion Sports <span
                                            class="text-xl text-orange-400">Creative Project Lead</span></h1>
                                    <button
                                        class="px-3 py-2 text-2xl font-medium rounded-lg hover:bg-orange-400 hover:text-white"
                                        id="closeModalTwo" @click="modalState('id02', 'close')">✖</button>
                                </div>
                                <hr class="w-[95%] m-auto">
                                <div>
                                    <ul class="py-5 pl-8 list-disc [&>*]:p-1">
                                        <li>{{ t('Portfolio Landing Project Card Two Description 1') }}</li>
                                        <li>{{ t('Portfolio Landing Project Card Two Description 2') }}</li>
                                        <li>{{ t('Portfolio Landing Project Card Two Description 3') }}</li>
                                        <li>{{ t('Portfolio Landing Project Card Two Description 4') }}</li>
                                    </ul>
                                </div>
                            </div>
                        </dialog>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-10">
            <div class="flex flex-row justify-center py-5 text-3xl font-bold md:text-5xl">
                <span>{{ t('Portfolio Landing Services Header') }}</span>
            </div>
            <div class="flex justify-center flex-row p-5 gap-5 flex-wrap [&>*]:w-[320px]">
                <div
                    class="flex flex-col items-center justify-center gap-5 p-10 transition-all border-2 border-orange-500 rounded-lg hover:scale-105 hover:shadow-lg">
                    <i class="text-center text-orange-400 fa-solid fa-bullhorn fa-4x"></i>
                    <p class="flex justify-center text-base font-bold text-center text-orange-600 md:text-xl"> {{
                        t('Portfolio Landing Services Card One Header') }} </p>
                    <p class="text-sm md:text-base">{{ t('Portfolio Landing Services Card One Description') }}
                    </p>
                </div>
                <div
                    class="flex flex-col items-center justify-center gap-5 p-10 transition-all border-2 border-orange-500 rounded-lg hover:scale-105 hover:shadow-lg">
                    <i class="text-center text-orange-400 fa-solid fa-rectangle-ad fa-4x"></i>
                    <p class="flex justify-center text-base font-bold text-center text-orange-600 md:text-xl">{{
                        t('Portfolio Landing Services Card Two Header') }}</p>
                    <p class="text-sm md:text-base">{{ t('Portfolio Landing Services Card Two Description') }}</p>
                </div>
                <div
                    class="flex flex-col items-center justify-center gap-5 p-10 transition-all border-2 border-orange-500 rounded-lg hover:scale-105 hover:shadow-lg">
                    <i class="text-center text-orange-400 fa-solid fa-desktop fa-4x"></i>
                    <p class="flex justify-center text-base font-bold text-center text-orange-600 md:text-xl"> {{
                        t('Portfolio Landing Services Card Three Header') }} </p>
                    <p class="text-sm md:text-base">{{ t('Portfolio Landing Services Card Three Description') }} </p>
                </div>
                <div
                    class="flex flex-col items-center justify-center gap-5 p-10 transition-all border-2 border-orange-500 rounded-lg hover:scale-105 hover:shadow-lg">
                    <i class="text-center text-orange-400 fa-solid fa-people-line fa-4x"></i>
                    <p class="flex justify-center text-base font-bold text-center text-orange-600 md:text-xl"> {{
                        t('Portfolio Landing Services Card Four Header') }} </p>
                    <p class="text-sm md:text-base"> {{ t('Portfolio Landing Services Card Four Description') }} </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { useI18n } from 'vue-i18n';
import profile from '../assets/images/faviodp.png';

const { t } = useI18n();
const profileImage = ref(profile);

function modalState(id, action) {
    const modal = document.getElementById(id);
    if (action === 'open') {
        modal.showModal();
        document.body.classList.add('no-scroll');
    } else {
        modal.close();
        document.body.classList.remove('no-scroll');
    }
}

</script>

<style scoped>
.cursor-blink {
    animation: cursor 1s step-end infinite;
}

body.no-scroll {
    overflow: hidden;
}

dialog {
    max-height: 90vh;
    overflow: auto;
}

.typing-effect {
    width: 100%;
    white-space: nowrap;
    overflow: hidden;
    border-right: 4px solid orange;
    animation: typing 3s steps(30, end), blink-caret .75s step-end infinite;
}

@keyframes typing {
    from {
        width: 0;
    }

    to {
        width: 100%;
    }
}

@keyframes cursor {
    50% {
        border-color: transparent;
    }
}
</style>
