<script setup></script>

<template>
  <div class="bg-tertiary w-full p-2 sm:p-5 fixed top-0 h-min shadow-md">
    <header class="container mx-auto flex w-full items-center relative justify-between py-4 px-2 sm:px-6">
      <a href="#">
        <div class="w-full text-center text-xl sm:text-4xl font-bold sm:w-fit sm:text-left">
          <span class="text-white">FAVIO JASSO</span>
        </div>
      </a>
      <nav class="hidden bg-tertiary text-base sm:block">
        <ul class="flex items-center space-x-2">
          <li class="group relative">
            <a class="block whitespace-nowrap px-3 py-2 text-sm font-semibold text-white no-underline transition hover:text-orange-800"
              href="/">
              Home
            </a>
          </li>
          <li class="group relative">
            <a class="block whitespace-nowrap px-3 py-2 text-sm font-semibold text-white no-underline transition hover:text-orange-800"
              href="#">
              Services
            </a>
          </li>
          <li class="group relative">
            <a class="block whitespace-nowrap px-3 py-2 text-sm font-semibold text-white no-underline transition hover:text-orange-800"
              href="/about">
              About
            </a>
          </li>
          <li class="group relative">
            <a class="block whitespace-nowrap px-3 py-2 text-sm font-semibold text-white no-underline transition hover:text-orange-800"
              href="/contact">
              Contact
            </a>
          </li>
        </ul>
      </nav>
      <button class="block text-slate-400 hover:text-slate-900 dark:hover:text-slate-50 sm:hidden"
        title="Open navigation menu">
        <svg preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" width="1.2em" height="1.2em">
          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
      <nav
        class="fixed -right-1/2 top-0 z-20 h-full w-1/2 transform overflow-y-auto bg-white py-4 text-base transition sm:hidden">
        <ul class="flex flex-col space-y-2">
          <li class="text-right">
            <button class="px-6 py-2 text-slate-400 hover:text-slate-900 dark:hover:text-slate-50">
              <svg preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" width="1.2em" height="1.2em">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M5 12h14m-4 4l4-4m-4-4l4 4"></path>
              </svg>
            </button>
          </li>
          <li class="group relative w-full overflow-x-visible text-right">
            <a class="mx-4 block whitespace-nowrap px-3 py-2 text-sm font-semibold text-black no-underline transition hover:text-slate-900 dark:hover:text-slate-50"
              href="/">
              Home
            </a>
          </li>
          <li class="group relative w-full overflow-x-visible text-right">
            <a class="mx-4 block whitespace-nowrap px-3 py-2 text-sm font-semibold text-slate-400 no-underline transition hover:text-slate-900 dark:hover:text-slate-50"
              href="#">
              Services
            </a>
          </li>
          <li class="group relative w-full overflow-x-visible text-right">
            <a class="mx-4 block whitespace-nowrap px-3 py-2 text-sm font-semibold text-slate-400 no-underline transition hover:text-slate-900 dark:hover:text-slate-50"
              href="/about">
              About
            </a>
          </li>
          <li class="group relative w-full overflow-x-visible text-right">
            <a class="mx-4 block whitespace-nowrap px-3 py-2 text-sm font-semibold text-slate-900 no-underline transition hover:text-slate-900 dark:text-slate-50 dark:hover:text-slate-50"
              href="/contact">
              Contact
            </a>
          </li>
        </ul>
      </nav>
    </header>
  </div>
</template>

<style scoped></style>
