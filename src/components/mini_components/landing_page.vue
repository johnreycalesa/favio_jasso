<template>
  <div class="flex justify-center items-center w-full h-full sm:h-[850px] p-2 sm:p-12 wrapper">
    <div class="flex justify-around items-center w-full flex-col-reverse sm:flex-row">
      <div class="w-full sm:w-1/2 flex flex-col gap-3 p-2 sm:p-5">
        <div>
          <h1 class="text-2xl md:text-4xl font-extrabold text-secondary">Hi! I'm</h1>
          <h1 class="text-2xl md:text-4xl font-extrabold text-secondary">Favio Valentino Jasso</h1>
        </div>
        <div>
          <p class="text-base md:text-xl">
            I am a current Computer Science student at the County College of Morris. My previous
            work experiences are in strategic marketing and analytics. I am currently working in
            Software Development and Data Analysis.
          </p>
        </div>
        <div>
          <button
            type="button"
            class="rounded border-2 border-secondary p-2 sm:p-3 hover:bg-primary hover:text-white hover:animate-bounce"
          >
            Get Started
          </button>
        </div>
        <div>
          <button type="button" class=""></button>
        </div>
      </div>
      <div class="w-[80%] sm:w-1/2 flex justify-center items-center p-2 mt-32 sm:p-5">
        <img
          src="/image/favio.png"
          alt=""
          class="w-full sm:w-[300px] lg:w-[550px] object-cover rounded-bl-[100px] md:rounded-bl-[250px] rounded-tl-xl rounded-br-xl rounded-tr-xl transition-all"
          id="box"
        />
      </div>
    </div>
  </div>
</template>

<script setup></script>

<style scoped>
@media screen and (max-width: 767px) {
  #box {
    box-shadow:
      -25px 25px #ffd09b,
      25px -25px #ff9500;
    border-radius: 10px 10px 10px 250px;
  }
}

@media screen and (min-width: 768px) {
  #box:hover {
    box-shadow:
      -25px 25px #ffd09b,
      25px -25px #ff9500;
    border-radius: 10px 10px 10px 250px;
  }
}
</style>
