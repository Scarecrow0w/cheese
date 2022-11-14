<template>

    <Head title="Сырный саммит" />

    <header class="relative">
        <div class="container mx-auto max-w-7xl">
            <nav class="flex items-center justify-between -mt-20 sm:-mt-14">
                <!-- Logo -->
                <a href="/" class="flex flex-col items-center justify-center -mt-8 -ml-8 sm:-ml-20">
                    <Logo />
                    <div>
                        <h3 class="-mt-8 font-black tracking-wider md:hidden">Сырный</h3>
                        <h3 class="ml-1 -mt-2 md:hidden">саммит</h3>
                    </div>
                </a>
                <!-- Navigation desktop -->
                <ul class="flex gap-12 text-xl font-medium text-secondary lg:text-base md:hidden">
                    <li>
                        <a href="/#news" class="hover:border-b-4 border-secondary">Новости</a>
                    </li>
                    <li>
                        <a href="/#about" class="hover:border-b-4 border-secondary">О проекте</a>
                    </li>
                    <li>
                        <a href="/#mass_media_about_us" class="hover:border-b-4 border-secondary">СМИ о нас</a>
                    </li>
                    <li>
                        <a href="/#contacts" class="hover:border-b-4 border-secondary">Контакты</a>
                    </li>
                    <li>
                        <a :href="route('login')" class="hover:border-b-4 border-secondary">Войти</a>
                    </li>
                </ul>
                <!-- Navigation mobile -->
                <ul id="menu" class="
                    absolute
                    left-0
                    right-0
                    top-[130px]
                    bg-secondary
                    flex flex-col
                    items-center"
                    :class="{ hidden: !menuActive }">
                    <li>
                        <a href="#"
                            class="block py-4 duration-300 ease-in text-darkbg hover:scale-150 hover:text-lightbg">About</a>
                    </li>
                    <li>
                        <a href="#" class="block py-4 duration-300 ease-in text-lightbg hover:scale-150">Services</a>
                    </li>
                    <li>
                        <a href="#" class="block py-4 duration-300 ease-in text-lightbg hover:scale-150">Case
                            Studies</a>
                    </li>
                    <li>
                        <a href="#" class="block py-4 duration-300 ease-in text-lightbg hover:scale-150">Careers</a>
                    </li>
                    <li>
                        <a href="#" class="block py-4 duration-300 ease-in text-lightbg hover:scale-150">Blog</a>
                    </li>
                </ul>
                <!-- Burger button -->
                <button @click.prevent="menuActive = !menuActive" class="hidden burger md:block"
                    :class="{ active: menuActive }">
                    <span class="burger-line top-line dark:bg-white"></span>
                    <span class="burger-line mid-line dark:bg-white"></span>
                    <span class="burger-line bottom-line dark:bg-white"></span>
                </button>
            </nav>
            <!-- Section Hero -->
            <section class="flex flex-col items-start justify-start hero">
                <h3 class="mx-auto mt-10 text-2xl font-black text-start text-secondary lg: md:text-lg sm:text-sm">
                    Лучшие российские сыровары и винные дома
                </h3>
                <h5
                    class="max-w-xl mx-auto mt-5 text-xl font-black text-start text-secondary md:text-base sm:text-sm sm:mt-3">
                    представляют ежегодный
                </h5>
                <h1 class="
                    font-black
                    tracking-wider
                    text-[100px]
                    max-w-2xl
                    text-center text-secondary
                    mx-auto
                    leading-none
                    md:text-5xl md:mt-4">
                    Сырный саммит
                </h1>
                <button class="px-6 py-3 mx-auto mt-5 rounded-lg bg-secondary text-lightbg hover:bg-hover">
                    Подробнее
                </button>
            </section>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fdffb6" fill-opacity="1"
                d="M0,160L60,181.3C120,203,240,245,360,245.3C480,245,600,203,720,197.3C840,192,960,224,1080,229.3C1200,235,1320,213,1380,202.7L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
    </header>
    <main>
        <section class="bg-mainbg">
            <div class="container relative max-w-7xl features">
                <h3 class="max-w-2xl text-3xl font-black tracking-wider text-center text-secondary">
                    На прошедших саммитах
                </h3>
                <div class="grid grid-cols-3 gap-10 mt-24 sm:grid-cols-1">
                    <div class="flex flex-col items-center justify-center">
                        <IconS1 class="h-[120px] sm:w-[70px] mx-auto" />
                        <h5 class="max-w-2xl text-xl font-black tracking-wider text-secondary">
                            более
                        </h5>
                        <p class="max-w-2xl text-4xl font-black tracking-wider text-secondary">
                            100
                        </p>
                        <p class="max-w-2xl text-xl font-black tracking-wider text-secondary">
                            сыроварен
                        </p>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <IconS2 class="h-[120px] sm:w-[70px] mx-auto" />
                        <h5 class="max-w-2xl text-xl font-black tracking-wider text-secondary">
                            более
                        </h5>
                        <p class="max-w-2xl text-4xl font-black tracking-wider text-secondary">
                            400
                        </p>
                        <p class="max-w-2xl text-xl font-black tracking-wider text-secondary">
                            сортов сыра
                        </p>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <IconS3 class="h-[120px] sm:w-[70px] mx-auto" />
                        <h5 class="max-w-2xl text-xl font-black tracking-wider text-secondary">
                            более
                        </h5>
                        <p class="max-w-2xl text-4xl font-black tracking-wider text-secondary">
                            200
                        </p>
                        <p class="max-w-2xl text-xl font-black tracking-wider text-secondary">
                            рецептов сырных блюд
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- News -->
        <section class="bg-darkbg">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fdffb6" fill-opacity="1"
                    d="M0,224L60,197.3C120,171,240,117,360,128C480,139,600,213,720,229.3C840,245,960,203,1080,181.3C1200,160,1320,160,1380,160L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
                </path>
            </svg>
            <div class="mx-auto max-w-7xl news" id="news">
                <div class="container">
                    <h3 class="max-w-2xl text-3xl font-black tracking-wider text-center text-secondary">
                        Новости наших партнеров
                    </h3>

                    <ul class="grid grid-cols-4 grid-rows-4 gap-4 mt-5 sm:grid-cols-1 lg:grid-cols-2 our-partners-news-list">
                        <li v-if="partners_news_titles.data[0]"
                            @click="redirectToLink(`/topic/${partners_news_titles.data[0].id}`)"
                            class="relative col-span-1 rounded-lg shadow-lg bg-lightbg hover:scale-105"
                            :style="{ background: `url(${partners_news_titles.data[0].image}) center center no-repeat` }">
                            <div v-if="partners_news_titles.data[0].title "
                                class="min-h-[200px]">
                                <div class="absolute bottom-0 w-full rounded-b-lg h-1/3 bg-secondary">
                                    <h3 class="text-primary">{{ partners_news_titles.data[0].title }}</h3>
                                </div>
                            </div>
                        </li>
                        <li v-if="partners_news_titles.data[1]"
                            @click="redirectToLink(`/topic/${partners_news_titles.data[1].id}`)"
                            class="relative col-span-1 row-span-2 rounded-lg shadow-lg hover:scale-105 sm:row-span-1"
                            :style="{ background: `url(${partners_news_titles.data[1].image}) center center no-repeat` }">
                            <div v-if="partners_news_titles.data[1].title "
                                class="min-h-[200px]">
                                <div class="absolute bottom-0 w-full rounded-b-lg h-1/3 bg-secondary">
                                    <h3 class="text-primary">{{ partners_news_titles.data[1].title }}</h3>
                                </div>
                            </div>
                        </li>
                        <li v-if="partners_news_titles.data[2]"
                            @click="redirectToLink(`/topic/${partners_news_titles.data[2].id}`)"
                            class="relative row-span-1 rounded-lg shadow-lg hover:scale-105"
                            :style="{ background: `url(${partners_news_titles.data[2].image}) center center no-repeat` }">
                            <div v-if="partners_news_titles.data[2].title "
                                class="min-h-[200px]">
                                <div class="absolute bottom-0 w-full rounded-b-lg h-1/3 bg-secondary">
                                    <h3 class="text-primary">{{ partners_news_titles.data[2].title }}</h3>
                                </div>
                            </div>
                        </li>
                        <li v-if="partners_news_titles.data[3]"
                            @click="redirectToLink(`/topic/${partners_news_titles.data[3].id}`)"
                            class="relative col-span-1 row-span-2 rounded-lg shadow-lg hover:scale-105"
                            :style="{ background: `url(${partners_news_titles.data[3].image}) center center no-repeat` }">
                            <div v-if="partners_news_titles.data[3].title "
                                class="min-h-[200px]">
                                <div class="absolute bottom-0 w-full rounded-b-lg h-1/3 bg-secondary">
                                    <h3 class="text-primary">{{ partners_news_titles.data[3].title }}</h3>
                                </div>
                            </div>
                        </li>
                        <li v-if="partners_news_titles.data[4]"
                            @click="redirectToLink(`/topic/${partners_news_titles.data[4].id}`)"
                            class="relative col-span-1 row-span-1 rounded-lg shadow-lg hover:scale-105 sm:hidden"
                            :style="{ background: `url(${partners_news_titles.data[4].image}) center center no-repeat` }">
                            <div v-if="partners_news_titles.data[4].title "
                                class="min-h-[200px]">
                                <div class="absolute bottom-0 w-full rounded-b-lg h-1/3 bg-secondary">
                                    <h3 class="text-primary">{{ partners_news_titles.data[4].title }}</h3>
                                </div>
                            </div>
                        </li>
                        <li v-if="partners_news_titles.data[5]"
                            @click="redirectToLink(`/topic/${partners_news_titles.data[5].id}`)"
                            class="relative col-span-1 row-span-2 rounded-lg shadow-lg hover:scale-105 sm:hidden"
                            :style="{ background: `url(${partners_news_titles.data[5].image}) center center no-repeat` }">
                            <div v-if="partners_news_titles.data[5].title "
                                class="min-h-[200px]">
                                <div class="absolute bottom-0 w-full rounded-b-lg h-1/3 bg-secondary">
                                    <h3 class="text-primary">{{ partners_news_titles.data[5].title }}</h3>
                                </div>
                            </div>
                        </li>
                        <li v-if="partners_news_titles.data[6]"
                            @click="redirectToLink(`/topic/${partners_news_titles.data[6].id}`)"
                            class="relative col-span-1 row-span-2 rounded-lg shadow-lg hover:scale-105 sm:hidden"
                            :style="{ background: `url(${partners_news_titles.data[6].image}) center center no-repeat` }">
                            <div v-if="partners_news_titles.data[6].title "
                                class="min-h-[200px]">
                                <div class="absolute bottom-0 w-full rounded-b-lg h-1/3 bg-secondary">
                                    <h3 class="text-primary">{{ partners_news_titles.data[6].title }}</h3>
                                </div>
                            </div>
                        </li>
                        <li v-if="partners_news_titles.data[7]"
                            @click="redirectToLink(`/topic/${partners_news_titles.data[7].id}`)"
                            class="relative col-span-1 row-span-1 rounded-lg shadow-lg hover:scale-105 sm:hidden"
                            :style="{ background: `url(${partners_news_titles.data[7].image}) center center no-repeat` }">
                            <div v-if="partners_news_titles.data[7].title "
                                class="min-h-[200px]">
                                <div class="absolute bottom-0 w-full rounded-b-lg h-1/3 bg-secondary">
                                    <h3 class="text-primary">{{ partners_news_titles.data[7].title }}</h3>
                                </div>
                            </div>
                        </li>
                        <li v-if="partners_news_titles.data[8]"
                            @click="redirectToLink(`/topic/${partners_news_titles.data[8].id}`)"
                            class="relative col-span-1 row-span-2 rounded-lg shadow-lg hover:scale-105 sm:hidden"
                            :style="{ background: `url(${partners_news_titles.data[8].image}) center center no-repeat` }">
                            <div v-if="partners_news_titles.data[8].title "
                                class="min-h-[200px]">
                                <div class="absolute bottom-0 w-full rounded-b-lg h-1/3 bg-secondary">
                                    <h3 class="text-primary">{{ partners_news_titles.data[8].title }}</h3>
                                </div>
                            </div>
                        </li>
                        <li v-if="partners_news_titles.data[9]"
                            @click="redirectToLink(`/topic/${partners_news_titles.data[9].id}`)"
                            class="relative col-span-1 row-span-1 rounded-lg shadow-lg hover:scale-105 sm:hidden"
                            :style="{ background: `url(${partners_news_titles.data[9].image}) center center no-repeat` }">
                            <div v-if="partners_news_titles.data[9].title "
                                class="min-h-[200px]">
                                <div class="absolute bottom-0 w-full rounded-b-lg h-1/3 bg-secondary">
                                    <h3 class="text-primary">{{ partners_news_titles.data[9].title }}</h3>
                                </div>
                            </div>
                        </li>
                        <li v-if="partners_news_titles.data[10]"
                            @click="redirectToLink(`/topic/${partners_news_titles.data[10].id}`)"
                            class="relative col-span-1 row-span-1 rounded-lg shadow-lg hover:scale-105 sm:hidden"
                            :style="{ background: `url(${partners_news_titles.data[10].image}) center center no-repeat` }">
                            <div v-if="partners_news_titles.data[10].title "
                                class="min-h-[200px]">
                                <div class="absolute bottom-0 w-full rounded-b-lg h-1/3 bg-secondary">
                                    <h3 class="text-primary">{{ partners_news_titles.data[10].title }}</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="flex justify-center mt-8">
                        <Pagination :links="partners_news_titles.links" />
                    </div>
                </div>
            </div>
        </section>
        <!-- About -->
        <section class="bg-white about" id="about">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ff8500" fill-opacity="1"
                    d="M0,224L60,197.3C120,171,240,117,360,128C480,139,600,213,720,229.3C840,245,960,203,1080,181.3C1200,160,1320,160,1380,160L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
                </path>
            </svg>
            <div class="container max-w-7xl">
                <h3 class="max-w-2xl text-3xl font-black tracking-wider text-start text-secondary">
                    О проекте
                </h3>
                <div class="grid grid-cols-2 mt-5 lg:grid-cols-1">
                    <div class="p-10">
                        <p>
                            «Сырный Саммит» начался из-за впечатлений от путешествий. Друзья,
                            когда я приезжаю из экспедиций, постоянно требуют: «Олег,
                            расскажи, что было вкусного». Сначала с историями меня вытащили в
                            социальные сети. Потом решили придумать что-нибудь. Получился
                            «Сырный Саммит» с ресторанными сетами, где главным продуктом
                            выступает сыр. В этом году будет: закуска, горячее, салат, десерт
                            и сюрприз от шефа.
                        </p>
                        <p>
                            Пересечение многих интересов: знакомство с ремесленным
                            производством, что уходит из Европы. Большая часть сыров, которые
                            там производят - «технологичные». Маленьких фамильных сыроварен
                            становится меньше. У нас наоборот, все только развивается.
                            Сыровары - настоящие дауншифтеры, новые крестьяне. Ставят
                            эксперименты по производству, по генерации добавленной стоимости в
                            переработке молока.
                        </p>
                    </div>
                    <div class="pt-10 about-image">
                        <!-- <img src="../../images/cheesemaker.jpg" alt=""> -->
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fdffb6" fill-opacity="1"
                    d="M0,192L60,208C120,224,240,256,360,234.7C480,213,600,139,720,128C840,117,960,171,1080,181.3C1200,192,1320,160,1380,144L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
                </path>
            </svg>
        </section>
        <!-- History -->
        <section id="history" class="bg-mainbg">
            <div class="container max-w-7xl">
                <h3 class="max-w-2xl text-3xl font-black tracking-wider text-start text-secondary">
                    История сырных саммитов
                </h3>
                <Slider :summit_stories_titles="summit_stories_titles" />
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ff8500" fill-opacity="1"
                    d="M0,224L60,197.3C120,171,240,117,360,128C480,139,600,213,720,229.3C840,245,960,203,1080,181.3C1200,160,1320,160,1380,160L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
                </path>
            </svg>
        </section>
        <!-- Media -->
        <section class="bg-darkbg mass_media_about_us" id="mass_media_about_us">
            <div class="container max-w-7xl">
                <h3 class="max-w-2xl text-3xl font-black tracking-wider text-start text-secondary">
                    СМИ о нас
                </h3>
                <div class="flex justify-center screen">
                    <SlideMedia :mass_media_about_us_titles="mass_media_about_us_titles" />
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1"
                    d="M0,192L60,208C120,224,240,256,360,234.7C480,213,600,139,720,128C840,117,960,171,1080,181.3C1200,192,1320,160,1380,144L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
                </path>
            </svg>
        </section>
        <!-- Contact -->
        <section class="bg-white contacts" id="contacts">
            <div class="container max-w-7xl">
                <h3 class="max-w-2xl text-3xl font-black tracking-wider text-start text-secondary">
                    Связаться с нами
                </h3>
                <div class="relative mx-auto main-letter top-24">
                    <form action="/sendmail" method="POST">
                        <div class="flex items-center justify-center">
                            <div class="z-20 px-16 py-16 bg-white shadow-xl rounded-2xl">
                                <div>
                                    <h1 class="mb-4 text-3xl font-bold text-center cursor-pointer">Напишите нам</h1>
                                </div>
                                <div class="space-y-4">
                                    <input type="text" placeholder="Ваш email" class="block w-full px-4 py-3 text-sm border rounded-lg outline-none" />
                                    <textarea class="block w-full px-4 py-3 text-sm border rounded-lg outline-none"></textarea>
                                </div>
                                <div class="mt-6 text-center">
                                    <button class="w-64 py-3 text-xl text-lightbg bg-secondary rounded-2xl">Отправить</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <Icons />
        </section>
        <!-- /Contact -->
        <!-- Footer -->
        <footer class="mt-28">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1"
                    d="M0,96L60,128C120,160,240,224,360,213.3C480,203,600,117,720,96C840,75,960,117,1080,133.3C1200,149,1320,139,1380,133.3L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
                </path>
            </svg>
            <div class="container max-w-7xl">
                <div class="grid grid-cols-4 gap-8 px-6 py-8 text-xl md:grid-cols-2">
                    <div class="flex items-center justify-between md:hidden">
                        <!-- Logo -->
                        <a href="#" class="
                            flex flex-col
                            items-center
                            justify-center
                            -mt-[300px]
                            -ml-8">
                            <Logo />
                            <div>
                                <h3 class="-mt-8 font-black tracking-wider">Сырный</h3>
                                <h3 class="ml-1 -mt-2">саммит</h3>
                            </div>
                        </a>
                    </div>
                    <div>
                        <h2 class="mb-6 text-xl font-bold">Навигация</h2>
                        <ul class="">
                            <li class="mb-4">
                                <a href="#" class="hover:border-b-4 border-secondary">Новости</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">О проекте</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">СМИ о нас</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Контакты</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-xl font-bold">Наши партнеры</h2>
                        <ul class="">
                            <li class="mb-4">
                                <a href="#" class="hover:border-b-4 border-secondary">Сыроварня "Новый свет"</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Сыроварня "Новый свет"</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Сыроварня "Новый свет"</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Сыроварня "Новый свет"</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="mb-6 text-xl font-bold">Наши контакты</h3>
                    </div>
                </div>
            </div>

        </footer>
        <!-- /Footer -->
    </main>

</template>

<script>
// import MainLayout from '@/Layouts/MainLayout.vue'
import { Head } from "@inertiajs/inertia-vue3";
import Logo from "../Components/Logo.vue";
import IconS1 from "@/Components/IconS1.vue";
import IconS2 from "../Components/IconS2.vue";
import Icons from "../Components/Icons.vue";
import IconS3 from "../Components/IconS3.vue";
import Slider from "../Components/Slider.vue";
import SlideMedia from "../Components/SlideMedia.vue";
import Contact from "../Components/Contact.vue";
import Pagination from "../Components/Pagination.vue"

export default {
    name: "Home",
    // layout: MainLayout,
    components: {
        Head,
        Logo,
        IconS1,
        IconS2,
        Icons,
        IconS3,
        Slider,
        SlideMedia,
        Contact,
        Pagination
    },
    props: {
        partners_news_titles: Array,
        summit_stories_titles: Array,
        mass_media_about_us_titles: Array,
    },
    data() {
        return {
            menuActive: false,
        };
    },
    methods: {
        redirectToLink(link) {
            window.location = link;
        }
    }
};
</script>

<style>
header,
footer {
    background: linear-gradient(to right,
            rgba(246, 229, 0, 0.7),
            rgba(255, 186, 0, 0.7)),
        url("../../images/bg-image.jpg") repeat;

}

/* footer {
  height: 100vh;
} */

/* Logo */
.logo {
    fill: #805b10;
}

/* Burger */
.burger {
    height: 20px;
    position: relative;
    width: 30px;
}

.burger-line {
    display: flex;
    width: 30px;
    height: 2px;
    background: #805b10;
}

.top-line {
    position: absolute;
    left: 0;
    top: 0;
    transition: 0.3s all ease;
}

.mid-line {
    position: absolute;
    left: 0;
    top: 50%;
    transform: translate(0, -50%);
    transition: 0.3s all ease;
}

.bottom-line {
    position: absolute;
    left: 0;
    bottom: 0;
    transition: 0.3s all ease;
}

.burger.active>.top-line {
    transform: translateY(8px) rotate(45deg);
    transition: 0.3s all ease;
}

.burger.active>.mid-line {
    opacity: 0;
    transition: 0.3s all ease;
}

.burger.active>.bottom-line {
    transform: translateY(-10px) rotate(-45deg);
    transition: 0.3s all ease;
}

/* features */
.features {
    fill: #491e17;
}

/* .about */
.about {
    /* background: linear-gradient(
      to right,
      rgba(246, 229, 0, 0.7),
      rgba(255, 186, 0, 0.7)
    ); */
    /* url("../../images/bg-image.jpg") repeat; */
}

.about-image {
    position: relative;
    width: 100%;
    background: url("../../images/cheesemaker.jpg");
    background-size: cover;
    display: none;
}

.about-image::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url("../../images/cheese_screen.jpg");
    background-size: 110%;
    background-position: center;
    background-repeat: no-repeat;
    mix-blend-mode: screen;
    /* backdrop-filter: blur(2px); */
}

@media (min-width: 992px) {
    .about-image {
        display: block;
    }
}

/* contact */
.main-letter {

    /* transform: rotateZ(5deg); */
}

.our-partners-news-list li {
    background-size: cover;
}
</style>
