<template>
  <div class="flex justify-center items-center w-full h-auto sm:h-[850px] p-2 sm:p-12 wrapper">
    <div class="flex justify-around items-center w-full sm:flex-row flex-col-reverse">
      <div class="w-full sm:w-1/2 flex flex-col gap-3 p-2 sm:p-5">
        <div>
          <h1 class="text-2xl sm:text-5xl font-extrabold text-secondary">Hi! I'm</h1>
          <h1 class="text-2xl sm:text-5xl font-extrabold text-secondary">Favio Valentino Jasso</h1>
        </div>
        <div>
          <p class="text-base sm:text-xl">
            I am a current Computer Science student at the County College of Morris. My previous
            work experiences are in strategic marketing and analytics. I am currently working in
            Software Development and Data Analysis.
          </p>
        </div>
        <div>
          <button type="button"
            class="rounded border-2 border-secondary p-2 sm:p-3 hover:bg-primary hover:text-white hover:animate-bounce">
            Get Started
          </button>
        </div>
        <div>
          <button type="button" class=""></button>
        </div>
      </div>
      <div class="w-[80%] sm:w-1/2 flex justify-center items-center p-2 mt-10 sm:p-5">
        <img src="https://picsum.photos/200.webp" alt=""
          class="size-full sm:size-[300px] md:size-[550px] object-cover rounded-bl-[250px] rounded-tl-xl rounded-br-xl rounded-tr-xl transition-all"
          id="box" />
      </div>
    </div>
  </div>
</template>

<script setup></script>

<style scoped>
#box:hover {
  box-shadow:
    -25px 25px #d9d9d9,
    25px -25px #ff9500;
  border-radius: 10px 10px 10px 250px;
}
</style>
