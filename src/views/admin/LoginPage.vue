<template>
  <div class="w-[750px] h-[500px] flex border rounded-lg hover:shadow-md">
    <div class="w-1/2 flex flex-col items-center justify-center bg-[url('/public/images/bgpic.jpg')]">
      <div>
        <p class="italic">Hello, Good day</p>
      </div>
    </div>
    <div class="flex justify-center w-1/2 bg-white rounded-r-lg">
      <div class="flex flex-col items-center justify-center w-full gap-5 p-8">
        <div id="logo-container">
          <img :src="logoSrc" alt="Logo">
        </div>
        <form id="login-form" @submit.prevent="handleSubmit" class="flex flex-col justify-center items-center w-full gap-4 [&>input]:w-full [&>input]:shadow [&>input]:outline-none [&>input]:border [&>input]:p-2 [&>input]:rounded-lg">
          <div v-if="errorMessage" class="p-4 mb-4 text-red-700 bg-red-100 rounded-lg" role="alert">
            {{ errorMessage }}
          </div>
          <input type="text" class="input" id="email" v-model="email" required autocomplete="off" placeholder="Email">
          <input type="password" class="input" id="password" v-model="password" placeholder="Password" required>
          <div class="flex justify-center w-full">
            <input type="submit" value="Sign In" class="w-2/3 p-2 text-orange-600 border-2 border-orange-600 rounded-lg hover:bg-orange-600 hover:text-white" />
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const logoSrc = "/images/Logo.png";
const email = ref('');
const password = ref('');
const errorMessage = ref(null);

const handleSubmit = () => {
  // Here you can handle the form submission, e.g., send data to your server
  // For now, we'll just log the form data
  console.log('Email:', email.value);
  console.log('Password:', password.value);

  // Simulate an error response for demonstration purposes
  errorMessage.value = 'Invalid email or password';
};
</script>

<style scoped>
/* Add any scoped styles here */
</style>
