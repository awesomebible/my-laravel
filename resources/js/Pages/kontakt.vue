<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Footer from '../Components/Footer.vue';
</script>

<template>
    <Head title="Kontakt" />
    <section class="w-full px-6 mb-12 antialiased bg-white select-none">
    <div class="mx-auto max-w-7xl">
        <nav class="relative z-50 h-24" x-data="{ showMenu: false }">
            <div class="container relative flex flex-wrap items-center justify-between h-24 mx-auto font-medium border-b border-gray-200 lg:justify-center sm:px-4 md:px-2">
                <Link as="a" href="/" class="w-1/4 py-4 pr-4 md:py-0">
                    <span class="text-xl font-black leading-none text-gray-900 select-none logo">my.awesomeBible<span class="text-indigo-600">.</span></span>
                </Link>
                <div class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:w-3/4 md:absolute lg:text-base md:h-auto md:bg-transparent md:p-0 md:relative md:flex" :class="{'flex fixed': showMenu, 'hidden': !showMenu }">
                    <div class="flex-col w-full h-auto overflow-hidden bg-white rounded-lg select-none md:bg-transparent md:rounded-none md:relative md:flex md:flex-row md:overflow-auto">
                        <Link as="a" href="/" class="inline-flex items-center w-auto h-16 px-6 text-xl font-black leading-none text-gray-900 dark:text-gray-100 select-none md:hidden">my.awesomeBible<span class="text-indigo-600">.</span></Link>
                        <div class="flex flex-col items-start justify-center w-full text-center md:w-2/3 md:mt-0 md:flex-row md:items-center">
                            <Link as="a" href="/" class="inline-block w-full px-6 py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-indigo-600 lg:mx-3 md:text-center">Home</Link>
                            <Link as="a" href="/#features" class="inline-block w-full px-6 py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-indigo-600 lg:mx-3 md:text-center">Features</Link>
                            <a href="https://changelog.awesomebible.de" class="inline-block w-full px-6 py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-indigo-600 lg:mx-3 md:text-center">Blog</a>
                            <Link as="a" href="/kontakt" class="inline-block w-full px-6 py-2 mx-0 font-medium text-left text-indigo-600 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Kontakt</Link>
                        </div>
                    </div>
                </div>
                <div @click="showMenu = !showMenu" class="absolute right-0 flex flex-col items-center items-end justify-center w-10 h-10 rounded-full cursor-pointer md:hidden hover:bg-gray-100">
                    <svg class="w-6 h-6 text-gray-700" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg class="w-6 h-6 text-gray-700" x-show="showMenu" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
            </div>
        </nav>
        <div class="container max-w-lg px-4 py-32 mx-auto text-left md:max-w-none md:text-center" id="">
            <h1 class="text-5xl font-extrabold tracking-tight text-left text-gray-900 leading-tightest md:leading-10 md:text-center sm:leading-none md:text-6xl lg:text-7xl"><span class="inline md:block" id="">Hast du eine Frage?</span> <span class="relative mt-2 text-transparent md:inline-block bg-clip-text bg-gradient-to-br from-purple-600 to-blue-500" id="">Stell sie. Wir haben Antworten, die wir dir gerne geben würden!</span></h1>
            <div class="mx-auto mt-5 text-gray-500 md:mt-12 md:max-w-lg md:text-center lg:text-lg" id=""></div>
        </div>
    </div>
</section>
<section class="w-full bg-white dark:bg-slate-800">
    <div class="mx-auto max-w-7xl">
        <div class="flex flex-col lg:flex-row">
            <div class="relative w-full bg-cover lg:w-6/12 xl:w-7/12 dark:slate-800">
                <div class="relative flex flex-col items-center justify-center w-full h-full px-10 my-20 lg:px-16 lg:my-0">
                    <div class="flex flex-col items-start space-y-8 tracking-tight lg:max-w-3xl">
                        <div class="relative">
                            <h2 class="text-5xl font-bold text-gray-300 xl:text-6xl">Wir sind hier, um dir zu helfen.</h2>
                        </div>
                        <p class="text-2xl text-gray-700 dark:text-gray-300">Keine Frage ist zu dumm, kein Wunsch zu wenig. Auch wenn du nur mal eben Hallo sagen willst - wir sind für dich da!</p>
                    </div>
                </div>
            </div>

            <div class="w-full bg-white lg:w-6/12 xl:w-5/12">
                <div class="flex flex-col items-start justify-start w-full h-full p-10 lg:p-16 xl:p-24">
                    <h4 class="w-full text-3xl font-bold">Schreib uns!</h4>
                    <p class="text-lg text-gray-500"></p>
                    <div class="relative w-full mt-10 space-y-8">
                        <a href="https://matrix.to/#/#awesomebible:matrix.org" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" width="16" height="16" viewBox="0 0 1536 1792">
                            <path style="fill:white;" d="M40.467 163.152v1465.696H145.92V1664H0V128h145.92v35.152zm450.757 464.64v74.14h2.069c19.79-28.356 43.717-50.215 71.483-65.575 27.765-15.656 59.963-23.336 96-23.336 34.56 0 66.165 6.795 94.818 20.086 28.652 13.293 50.216 37.22 65.28 70.893 16.246-23.926 38.4-45.194 66.166-63.507 27.766-18.314 60.848-27.472 98.954-27.472 28.948 0 55.828 3.545 80.64 10.635 24.812 7.088 45.785 18.314 63.508 33.968 17.722 15.656 31.31 35.742 41.354 60.85 9.747 25.107 14.768 55.236 14.768 90.683v366.573h-150.35V865.28c0-18.314-.59-35.741-2.068-51.987-1.476-16.247-5.316-30.426-11.52-42.24-6.499-12.112-15.656-21.563-28.062-28.653-12.405-7.088-29.242-10.634-50.214-10.634-21.268 0-38.4 4.135-51.397 12.112-12.997 8.27-23.336 18.608-30.72 31.901-7.386 12.997-12.407 27.765-14.77 44.602-2.363 16.542-3.84 33.379-3.84 50.216v305.133H692.971v-307.2c0-16.247-.294-32.197-1.18-48.149-.591-15.95-3.84-30.424-9.157-44.011-5.317-13.293-14.178-24.223-26.585-32.197-12.406-7.976-30.425-12.112-54.646-12.112-7.088 0-16.542 1.478-28.062 4.726-11.52 3.25-23.04 9.157-33.968 18.02-10.93 8.86-20.383 21.563-28.063 38.103-7.68 16.543-11.52 38.4-11.52 65.28v317.834H349.44V627.792zm1004.309 1001.056V163.152H1390.08V128H1536v1536h-145.92v-35.152z"/>
                        </svg>Matrix Community
                        </a>
                        <a href="https://codeberg.org/awesomebible/my-frontend" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700">
                        <svg xmlns="http://www.w3.org/2000/svg"  class="w-5 h-5 mr-2" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                        </svg>Codeberg Issues
                        </a>
                        <a href="mailto:hi@awesomebible.de" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>Schreib uns per E-Mail
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<Footer />
</template>
