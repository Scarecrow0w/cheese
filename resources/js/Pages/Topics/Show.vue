<template>
    <Head title="Topic" />

    <header class="relative">
        <div class="container mx-auto max-w-7xl max-h-[70px]">
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
                        <a href="#news" class="hover:border-b-4 border-secondary">Новости</a>
                    </li>
                    <li>
                        <a href="#about" class="hover:border-b-4 border-secondary">О проекте</a>
                    </li>
                    <li>
                        <a href="#" class="hover:border-b-4 border-secondary">СМИ о нас</a>
                    </li>
                    <li>
                        <a href="#" class="hover:border-b-4 border-secondary">Контакты</a>
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
                <h3 class="max-w-2xl text-3xl font-black tracking-wider text-start text-secondary">
                    {{ topic.title }}
                </h3>
                <div class="grid grid-cols-2 mt-5 lg:grid-cols-1 min-h-[400px]">
                    <div class="p-10">
                        <p>{{ topic.content }}</p>
                    </div>
                    <div class="pt-10 about-image max-h-[400px]">
                        <!-- <img src="../../images/cheesemaker.jpg" alt=""> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <footer class="bg-mainbg">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fdffb6" fill-opacity="1"
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

<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import Logo from "@/Components/Logo.vue";
import IconS1 from "@/Components/IconS1.vue";
import IconS2 from "@/Components/IconS2.vue";
import Icons from "@/Components/Icons.vue";
import IconS3 from "@/Components/IconS3.vue";
import Slider from "@/Components/Slider.vue";
import SlideMedia from "@/Components/SlideMedia.vue";
import Contact from "@/Components/Contact.vue";

const props = defineProps({
    topic: Object,
    image: String
})
</script>


<style scoped>
header,
footer {
    background: linear-gradient(to right,
            rgba(246, 229, 0, 0.7),
            rgba(255, 186, 0, 0.7)),
        url("../../../images/bg-image.jpg") repeat;

}

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

.about-image {
    position: relative;
    width: 100%;
    background: url("../../../images/cheesemaker.jpg");
    background-size: cover;
    display: none;
}

@media (min-width: 992px) {
    .about-image {
        display: block;
    }
}
.our-partners-news-list li {
    background-size: cover;
}
</style>
