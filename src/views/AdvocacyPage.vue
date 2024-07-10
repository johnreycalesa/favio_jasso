<template>
    <div class="wrapper relative w-full overflow-hidden">
        <div class="flex transition-transform duration-500 ease items-center justify-center" id="carousel-inner">
            <div class="flex-none w-full carousel-item ">
                <img src="../assets/images/1a.png" alt="Image" class="border-b-4 border-orange-400">
                <div class="flex items-center justify-center m-2 md:m-5">
                    <a href="https://buytokenllc.com/"
                        class="w-1/3 p-1 text-xs text-center text-orange-500 border-2 border-orange-500 rounded-lg md:p-2 md:text-lg lg:text-xl md:border-2 lg:border-4 md:px-4 md:py-3 lg:py-5 bg-slate-50 hover:opacity-80">Go
                        to Site</a>
                </div>
            </div>
            <div class="flex-none w-full carousel-item ">
                <img src="../assets/images/2b.png" alt="Image" class="border-b-4 border-orange-400">
                <div class="flex items-center justify-center m-2 md:m-5">
                    <a href="https://buytokenllc.com/"
                        class="w-1/3 p-1 text-xs text-center text-orange-500 border-2 border-orange-500 rounded-lg md:p-2 md:text-lg lg:text-xl md:border-2 lg:border-4 md:px-4 md:py-3 lg:py-5 bg-slate-50 hover:opacity-80">Go
                        to Site</a>
                </div>
            </div>
            <div class="flex-none w-full carousel-item ">
                <img src="../assets/images/3c.png" alt="Image" class="border-b-4 border-orange-400">
                <div class="flex items-center justify-center m-2 md:m-5">
                    <a href="https://buytokenllc.com/"
                        class="w-1/3 p-1 text-xs text-center text-orange-500 border-2 border-orange-500 rounded-lg md:p-2 md:text-lg lg:text-xl md:border-2 lg:border-4 md:px-4 md:py-3 lg:py-5 bg-slate-50 hover:opacity-80">Go
                        to Site</a>
                </div>
            </div>
        </div>
        <div class="absolute left-0 flex items-center justify-end w-[50px] md:w-[75px] lg:w-[100px] p-3 text-white transition duration-300 ease-in-out transform -translate-y-1/2 bg-black bg-opacity-50 cursor-pointer top-1/2 hover:bg-black hover:bg-opacity-80"
            id="carousel-prev" @click="prevSlide()">
            <i class="p-1 md:p-2 lg:p-3 fa-solid fa-chevron-left md:fa-3x hover:scale-110"></i>
        </div>
        <div class="absolute right-0 flex items-center justify-start w-[50px] md:w-[75px] lg:w-[100px] p-3 text-white transition duration-300 ease-in-out transform -translate-y-1/2 bg-black bg-opacity-50 cursor-pointer top-1/2 hover:bg-black hover:bg-opacity-80"
            id="carousel-next" @click="nextSlide()">
            <i class="p-1 md:p-2 lg:p-3 fa-solid fa-chevron-right md:fa-3x hover:scale-110"></i>
        </div>
    </div>
    <div class="dots">
        <span v-for="(dot, index) in slides" :key="index" class="dot" :class="{ active: index === currentIndex }"
            @click="currentSlide(index)"></span>
    </div>
    <!-- End Main Section -->
    <!-- Experience Section -->
    <dialog class="w-2/3 p-5 rounded-lg" id="modalOne">
        <div class="flex items-center justify-between p-3">
            <h1 class="text-2xl font-bold">Administrative Assistant <span class="text-xl text-orange-400">@
                    Buying.com</span></h1>
            <button class="px-3 py-2 text-2xl font-medium rounded-lg hover:bg-orange-400 hover:text-white"
                @click="openModal('modalOne', 'close')">✖</button>
        </div>
        <hr class="w-[95%] m-auto">
        <div>
            <ul class="py-5 pl-8 list-disc [&>*]:p-1">
                <li>Leads group of customer service admins to monitor and serve over <span
                        class="p-1 font-bold bg-orange-200">31,000 monthly delivery food orders</span>.</li>
                <li>Liaise with executive and senior administrative assistants to handle requests from senior
                    management.</li>
                <li>Lead and trained a team of sales reps to generate monthly sales of <span
                        class="p-1 font-bold bg-orange-200">$100,000 gross software sales</span>.</li>
                <li>Write and distribute email, correspondence memos, letters, faxes and forms.</li>
            </ul>

        </div>
    </dialog>
    <dialog class="w-2/3 p-5 rounded-lg" id="modalTwo">
        <div class="flex items-center justify-between p-3">
            <h1 class="text-2xl font-bold">Social Media Manager <span class="text-xl text-orange-400">@
                    Buying.com</span></h1>
            <button class="px-3 py-2 text-2xl font-medium rounded-lg hover:bg-orange-400 hover:text-white"
                @click="openModal('modalTwo', 'close')">✖</button>
        </div>
        <hr class="w-[95%] m-auto">
        <div>
            <ul class="py-5 pl-8 list-disc [&>*]:p-1">
                <li>Managed a budget of <span class="p-1 font-bold bg-orange-200">$250,000 dollars</span> in yearly
                    ad
                    spend on social media + e-commerce, which generated <span
                        class="p-1 font-bold bg-orange-200">$37,500</span> in monthly gross sales revenue.</li>
                <li><span class="p-1 font-bold bg-orange-200">Best in App honoree at CES 2022</span> for our newest
                    advancements in XR and AR within our App, assisted in Awards submission, in app testing, taking
                    photos, coordinating slides and more.</li>
                <li>Directed all content and strategy on TikTok, YouTube, Instagram and Facebook; Instagram
                    engagement
                    increase by <span class="p-1 font-bold bg-orange-200">50%</span>, <span
                        class="p-1 font-bold bg-orange-200">35 million global impressions</span> combined.</li>
                <li>Front camera personality, hosted content series/pieces and sprouting new company culture.</li>
                <li><span class="p-1 font-bold bg-orange-200">Plott</span> is a group of creatives, engineers,
                    inventors, military veteran designers, weekend warriors, and DIYers. Plott is based out of <span
                        class="p-1 font-bold bg-orange-200">New Jersey</span> with their own factory in <span
                        class="p-1 font-bold bg-orange-200">Kunshan, China</span>. Through working with construction
                    professionals and our own DIY experiences, Plott understands it’s not easy to change your
                    surroundings. Taking all the necessary measurements for your designs, then applying those
                    designs to
                    your living space is a complicated and time-consuming process. Plott makes <span
                        class="p-1 font-bold bg-orange-200">smart tools</span> that bring the real world into a
                    visual
                    app. There, you can design with dimensional context, then use our tools to help you install with
                    dimensional guidance—all without the need for calculations.</li>
            </ul>

        </div>
    </dialog>
    <dialog class="w-2/3 p-5 rounded-lg" id="modalThree">
        <div class="flex items-center justify-between p-3">
            <h1 class="text-2xl font-bold">Social Media Specialist <span class="text-xl text-orange-400">@
                    TribeGaming</span></h1>
            <button class="px-3 py-2 text-2xl font-medium rounded-lg hover:bg-orange-400 hover:text-white"
                @click="openModal('modalThree', 'close')">✖</button>
        </div>
        <hr class="w-[95%] m-auto">
        <div>
            <ul class="py-5 pl-8 list-disc [&>*]:p-1">
                <li>Executed social media strategy collaborating with influencers and talent in the <span
                        class="p-1 font-bold bg-orange-200">“One Tribe Campaign”</span> which amassed an increase of
                    <span class="p-1 font-bold bg-orange-200">50,000 followers</span> across platforms over a <span
                        class="p-1 font-bold bg-orange-200">2 months span</span>.
                </li>
                <li>Content strategy on @TribeGaming YouTube channel contributed to a total amassed <span
                        class="p-1 font-bold bg-orange-200">28,000,000 views</span> over <span
                        class="p-1 font-bold bg-orange-200">6 months</span>.</li>
                <li>Worked with high-level brands like <span class="p-1 font-bold bg-orange-200">Ford, San Antonio
                        Spurs, and Razer</span> to create sponsor activations, partnerships announcements, and more.
                </li>
                <li>Trained and consulted on content with top creator talent, @OrangeJuiceGaming, @SirTagCR, @Godzly
                    and
                    more which led to accumulating over <span class="p-1 font-bold bg-orange-200">500,000,000
                        views</span> over TribeGaming network over a <span class="p-1 font-bold bg-orange-200">6
                        months
                        span</span>.</li>
                <li>I took up a role at the most prestigious mobile gaming organizations assisting in social media
                    and
                    content creation and working alongside <span class="p-1 font-bold bg-orange-200">Cody
                        Grey</span>,
                    collaborating with other peers to make some fantastic content for our fans to interact with,
                    while
                    also building Tribe Gaming’s brand voice and fulfilling objectives.</li>
                <li><span class="p-1 font-bold bg-orange-200">Tribe Gaming</span> is the largest mobile gaming
                    esports
                    organization in <span class="p-1 font-bold bg-orange-200">North America</span>; point-blank. As
                    the
                    home of the biggest creators and best teams within mobile gaming, they have asserted themselves
                    as
                    the premier brand of the hottest-growing platform in gaming — mobile.</li>
            </ul>

        </div>
    </dialog>

    <div id="experience" class="flex flex-col">
        <div class="wrapper flex flex-col w-full">
            <div class="flex flex-col items-center justify-center gap-8 py-12">
                <h5 class="text-xl font-bold md:text-5xl">EXPERIENCE</h5>
                <p class="text-base text-center md:text-lg">It's the experience section dedicated to showcasing the
                    projects
                    that Mr. Favio has completed, providing a comprehensive overview of his roles, responsibilities,
                    accomplishments, and relevant skills within each project.</p>
            </div>
            <div class="flex flex-col flex-wrap items-center justify-center w-full gap-5 py-12 md:flex-row">
                <div
                    class="flex flex-col items-center justify-center gap-5 p-5 transition-all md:border-2 border-orange-500 rounded-lg min-w-[30%] hover:scale-105">
                    <img src="../assets/images/1.png" alt="" srcset="" class="object-cover size-80">
                    <h5 class="text-sm font-bold md:text-2xl">Buying.com</h5>
                    <p class="font-bold">Administrative Assistant</p>
                    <button type="button"
                        class="p-3 text-sm text-white bg-orange-400 border-2 rounded-lg md:text-base hover:bg-white hover:border-orange-400 hover:text-orange-500"
                        @click="openModal('modalOne', 'open')">Read More</button>
                </div>
                <div
                    class="flex flex-col items-center justify-center gap-5 p-5 transition-all md:border-2 border-orange-500 rounded-lg min-w-[30%] hover:scale-105">
                    <img src="../assets/images/2.png" alt="" srcset="" class="object-cover size-80">
                    <h5 class="text-sm font-bold md:text-2xl">LetsPlott</h5>
                    <p class="font-bold">Social Media Manager</p>
                    <button type="button"
                        class="p-3 text-sm text-white bg-orange-400 border-2 rounded-lg md:text-base hover:bg-white hover:border-orange-400 hover:text-orange-500"
                        @click="openModal('modalTwo', 'open')">Read More</button>
                </div>
                <div
                    class="flex flex-col items-center justify-center gap-5 p-5 transition-all md:border-2 border-orange-500 rounded-lg min-w-[30%] hover:scale-105">
                    <img src="../assets/images/3.png" alt="" srcset="" class="object-cover size-80">
                    <h5 class="text-sm font-bold md:text-2xl">TribeGaming</h5>
                    <p class="font-bold">Social Media Specialist</p>
                    <button type="button"
                        class="p-3 text-sm text-white bg-orange-400 border-2 rounded-lg md:text-base hover:bg-white hover:border-orange-400 hover:text-orange-500"
                        @click="openModal('modalThree', 'open')">Read More</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
let currentIndex = ref(0);
const slides = document.querySelectorAll('.carousel-item');
const totalSlides = slides.length;

onMounted(() => {
    showSlide(0);
});

function showSlide(index) {
    const carouselInner = document.getElementById('carousel-inner');
    const percentage = index * -100;
    carouselInner.style.transform = `translateX(${percentage}%)`;
    currentIndex.value = index;
    updateDots();
}

function prevSlide() {
    console.log(currentIndex.value);
    currentIndex.value = (currentIndex.value - 1 + totalSlides) % totalSlides;
    showSlide(currentIndex);
}

function nextSlide() {
    console.log(currentIndex.value);
    currentIndex.value = (currentIndex.value + 1) % totalSlides;
    showSlide(currentIndex);
}

function currentSlide(index) {
    showSlide(index);
}

function updateDots() {
    const dots = document.querySelectorAll('.dot');
    dots.forEach((dot, i) => {
        dot.className = dot.className.replace(' active', '');
        if (i === currentIndex.value) {
            dot.className += ' active';
        }
    });
}

function openModal(modalName, state) {
    const modal = document.getElementById(modalName);
    if (state === "open") {
        modal.showModal();
    } else {
        modal.close();
    }
}
</script>

<style scoped>
.carousel-inner {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.carousel-item {
    min-width: 100%;
}

.dot.active {
    background-color: #000;
}

.navigation-small {
    display: none;
}

.navigation-small[v-show] {
    display: flex;
}
</style>
