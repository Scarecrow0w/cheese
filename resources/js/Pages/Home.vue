<template>
  <Head title="Сырный саммит" />

  <header class="relative">
    <div class="container mx-auto">
      <nav class="flex justify-between items-center -mt-20 sm:-mt-14">
        <!-- Logo -->
        <a
          href="#"
          class="
            flex flex-col
            items-center
            justify-center
            -mt-8
            -ml-8
            sm:-ml-20
          "
        >
          <Logo />
          <div>
            <h3 class="-mt-8 font-black tracking-wider md:hidden">Сырный</h3>
            <h3 class="-mt-2 ml-1 md:hidden">саммит</h3>
          </div>
        </a>
        <!-- Navigation desktop -->
        <ul
          class="
            flex
            gap-12
            font-medium
            text-xl text-secondary
            lg:text-base
            md:hidden
          "
        >
          <li>
            <a href="#news" class="hover:border-b-4 border-secondary"
              >Новости</a
            >
          </li>
          <li>
            <a href="#about" class="hover:border-b-4 border-secondary"
              >О проекте</a
            >
          </li>
          <li>
            <a href="#" class="hover:border-b-4 border-secondary">СМИ о нас</a>
          </li>
          <li>
            <a href="#" class="hover:border-b-4 border-secondary">Контакты</a>
          </li>
          <li>
            <a href="#" class="hover:border-b-4 border-secondary">Войти</a>
          </li>
        </ul>
        <!-- Navigation mobile -->
        <ul
          id="menu"
          class="
            absolute
            left-0
            right-0
            top-[130px]
            bg-secondary
            flex flex-col
            items-center
          "
          :class="{ hidden: !menuActive }"
        >
          <li>
            <a
              href="#"
              class="
                block
                py-4
                text-darkbg
                hover:scale-150 hover:text-lightbg
                ease-in
                duration-300
              "
              >About</a
            >
          </li>
          <li>
            <a
              href="#"
              class="
                block
                py-4
                text-lightbg
                hover:scale-150
                ease-in
                duration-300
              "
              >Services</a
            >
          </li>
          <li>
            <a
              href="#"
              class="
                block
                py-4
                text-lightbg
                hover:scale-150
                ease-in
                duration-300
              "
              >Case Studies</a
            >
          </li>
          <li>
            <a
              href="#"
              class="
                block
                py-4
                text-lightbg
                hover:scale-150
                ease-in
                duration-300
              "
              >Careers</a
            >
          </li>
          <li>
            <a
              href="#"
              class="
                block
                py-4
                text-lightbg
                hover:scale-150
                ease-in
                duration-300
              "
              >Blog</a
            >
          </li>
        </ul>
        <!-- Burger button -->
        <button
          @click.prevent="menuActive = !menuActive"
          class="burger hidden md:block"
          :class="{ active: menuActive }"
        >
          <span class="burger-line top-line dark:bg-white"></span>
          <span class="burger-line mid-line dark:bg-white"></span>
          <span class="burger-line bottom-line dark:bg-white"></span>
        </button>
      </nav>
      <!-- Section Hero -->
      <section class="hero flex justify-start items-start flex-col">
        <h3
          class="
            mt-10
            font-black
            text-2xl text-start text-secondary
            mx-auto
            lg:
            md:text-lg
            sm:text-sm
          "
        >
          Лучшие российские сыровары и винные дома
        </h3>
        <h5
          class="
            mt-5
            font-black
            text-xl
            max-w-xl
            text-start text-secondary
            mx-auto
            md:text-base
            sm:text-sm sm:mt-3
          "
        >
          представляют ежегодный
        </h5>
        <h1
          class="
            font-black
            tracking-wider
            text-[100px]
            max-w-2xl
            text-center text-secondary
            mx-auto
            leading-none
            md:text-5xl md:mt-4
          "
        >
          Сырный саммит
        </h1>
        <button
          class="
            bg-secondary
            text-lightbg
            px-6
            py-3
            rounded-lg
            mx-auto
            mt-5
            hover:bg-hover
          "
        >
          Подробнее
        </button>
      </section>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#fdffb6"
        fill-opacity="1"
        d="M0,160L60,181.3C120,203,240,245,360,245.3C480,245,600,203,720,197.3C840,192,960,224,1080,229.3C1200,235,1320,213,1380,202.7L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
      ></path>
    </svg>
  </header>
  <main>
    <section class="bg-mainbg container relative features">
      <h3
        class="
          text-center
          font-black
          tracking-wider
          text-3xl
          max-w-2xl
          text-secondary
        "
      >
        На прошедших саммитах
      </h3>
      <div class="grid grid-cols-3 mt-14 sm:grid-cols-1 gap-10">
        <div class="flex flex-col justify-center items-center">
          <IconS1 class="md:w-[100px] sm:w-[70px] mx-auto" />
          <h5
            class="font-black tracking-wider text-xl max-w-2xl text-secondary"
          >
            более
          </h5>
          <p
            class="font-black tracking-wider text-5xl max-w-2xl text-secondary"
          >
            100
          </p>
          <p class="font-black tracking-wider text-xl max-w-2xl text-secondary">
            сыроварен
          </p>
        </div>
        <div class="flex flex-col justify-center">
          <IconS2 class="md:w-[100px] sm:w-[70px] mx-auto" />
          <h3
            class="
              text-center
              font-black
              tracking-wider
              text-3xl
              max-w-2xl
              text-secondary
            "
          >
            более 400 сортов сыра
          </h3>
        </div>
        <div class="flex flex-col">
          <IconS3 class="md:w-[100px] sm:w-[70px] mx-auto" />
          <h3
            class="
              text-center
              font-black
              tracking-wider
              text-3xl
              max-w-2xl
              text-secondary
              mx-auto
            "
          >
            более 200 рецептов сырных блюд
          </h3>
        </div>
      </div>
    </section>
    <!-- News -->
    <section class="news bg-darkbg" id="news">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fdffb6"
          fill-opacity="1"
          d="M0,224L60,197.3C120,171,240,117,360,128C480,139,600,213,720,229.3C840,245,960,203,1080,181.3C1200,160,1320,160,1380,160L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"
        ></path>
      </svg>
      <div class="container">
        <h3
          class="
            text-center
            font-black
            tracking-wider
            text-3xl
            max-w-2xl
            text-secondary
          "
        >
          Новости наших партнеров
        </h3>

        <ul
          class="
            grid grid-cols-4 grid-rows-4
            mt-5
            sm:grid-cols-1
            md:grid-cols-2
            gap-4
          "
        >
          <li
            class="bg-lightbg relative rounded-lg shadow-lg col-span-1 hover:scale-105"
          >
            <a href="#"><div class="min-h-[200px]">
              <div class="absolute bottom-0 h-1/3 w-full rounded-b-lg bg-secondary">
          <h3 class="text-primary">Новости дня</h3></div>
            </div></a>
          </li>
          <li
            class="
              bg-lightbg
              rounded-lg
              shadow-lg
              col-span-1
              row-span-2
              hover:scale-105
              sm:row-span-1
              relative
            "
          >
            <a href="#"><div class="min-h-[200px]">
              <div class="absolute bottom-0 h-1/3 w-full rounded-b-lg bg-secondary">
          <h3 class="text-primary">Новости дня</h3></div>
            </div></a>
          </li>
          <li
            class="bg-lightbg rounded-lg shadow-lg row-span-1 hover:scale-105"
          >
            <a href="#"><div class="min-h-[200px]">3</div></a>
          </li>
          <li
            class="
              bg-lightbg
              rounded-lg
              shadow-lg
              col-span-1
              row-span-2
              hover:scale-105
            "
          >
            <a href="#"><div class="min-h-[200px]">4</div></a>
          </li>
          <li
            class="
              bg-lightbg
              rounded-lg
              shadow-lg
              col-span-1
              row-span-1
              hover:scale-105
              sm:hidden
            "
          >
            <a href="#"><div class="min-h-[200px]">5</div></a>
          </li>
          <li
            class="
              bg-lightbg
              rounded-lg
              shadow-lg
              col-span-1
              row-span-2
              hover:scale-105
              sm:hidden
            "
          >
            <a href="#"><div class="min-h-[200px]">6</div></a>
          </li>
          <li
            class="
              bg-lightbg
              rounded-lg
              shadow-lg
              col-span-1
              row-span-2
              hover:scale-105
              sm:hidden
            "
          >
            <a href="#"><div class="min-h-[200px]">7</div></a>
          </li>
          <li
            class="
              bg-lightbg
              rounded-lg
              shadow-lg
              col-span-1
              row-span-1
              hover:scale-105
              sm:hidden
            "
          >
            <a href="#"><div class="min-h-[200px]">8</div></a>
          </li>
          <li
            class="
              bg-lightbg
              rounded-lg
              shadow-lg
              col-span-1
              row-span-2
              hover:scale-105
              sm:hidden
            "
          >
            <a href="#"><div class="min-h-[200px]">9</div></a>
          </li>
          <li
            class="
              bg-lightbg
              rounded-lg
              shadow-lg
              col-span-1
              row-span-1
              hover:scale-105
              sm:hidden
            "
          >
            <a href="#"><div class="min-h-[200px]">10</div></a>
          </li>
          <li
            class="
              bg-lightbg
              rounded-lg
              shadow-lg
              col-span-1
              row-span-1
              hover:scale-105
              sm:hidden
            "
          >
            <a href="#"><div class="min-h-[200px]">11</div></a>
          </li>
        </ul>
        <div class="flex justify-center mt-3">
          <button
            class="
              bg-secondary
              text-lightbg
              px-6
              py-3
              rounded-lg
              mx-auto
              mt-5
              hover:bg-hover
            "
          >
            Все новости
          </button>
        </div>
      </div>
    </section>
    <!-- About -->
    <section class="about bg-white" id="about">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ff8500"
          fill-opacity="1"
          d="M0,224L60,197.3C120,171,240,117,360,128C480,139,600,213,720,229.3C840,245,960,203,1080,181.3C1200,160,1320,160,1380,160L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"
        ></path>
      </svg>
      <div class="container">
        <h3
          class="
            text-start
            font-black
            tracking-wider
            text-3xl
            max-w-2xl
            text-secondary
          "
        >
          О проекте
        </h3>
        <div class="grid grid-cols-2 sm:grid-cols-1 mt-5">
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
        <path
          fill="#fdffb6"
          fill-opacity="1"
          d="M0,192L60,208C120,224,240,256,360,234.7C480,213,600,139,720,128C840,117,960,171,1080,181.3C1200,192,1320,160,1380,144L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- History -->
    <section id="history" class="bg-mainbg">
      <div class="container">
        <h3
          class="
            text-start
            font-black
            tracking-wider
            text-3xl
            max-w-2xl
            text-secondary
          "
        >
          История сырных саммитов
        </h3>
        <Slider />
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ff8500"
          fill-opacity="1"
          d="M0,224L60,197.3C120,171,240,117,360,128C480,139,600,213,720,229.3C840,245,960,203,1080,181.3C1200,160,1320,160,1380,160L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Media -->
    <section class="bg-darkbg">
      <div class="container">
        <h3
          class="
            text-start
            font-black
            tracking-wider
            text-3xl
            max-w-2xl
            text-secondary
          "
        >
          СМИ о нас
        </h3>
        <div class="screen flex justify-center">
          <SlideMedia />
        </div>
      </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1"
        d="M0,192L60,208C120,224,240,256,360,234.7C480,213,600,139,720,128C840,117,960,171,1080,181.3C1200,192,1320,160,1380,144L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
      </path>
    </svg>
    </section>
    <!-- Contact -->
    <section class="bg-white">
      <div class="container">
          <h3
          class="
            text-start
            font-black
            tracking-wider
            text-3xl
            max-w-2xl
            text-secondary
          "
        >
          Связаться с нами
        </h3>
        <div class="main-letter relative mx-auto top-24">
        <Contact />
        </div>
        <Icons />
      </div>
    </section>
    <!-- /Contact -->
    <!-- Footer -->
    <footer class="mt-28">
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1"
        d="M0,96L60,128C120,160,240,224,360,213.3C480,203,600,117,720,96C840,75,960,117,1080,133.3C1200,149,1320,139,1380,133.3L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
      </path>
    </svg>
    <div class="container">
       <div class="grid grid-cols-4 gap-8 py-8 px-6 md:grid-cols-2 text-xl">
          <div class="flex justify-between items-center md:hidden">
          <!-- Logo -->
          <a
            href="#"
            class="
              flex flex-col
              items-center
              justify-center
              -mt-[300px]
              -ml-8
            "
          >
            <Logo />
            <div>
              <h3 class="-mt-8 font-black tracking-wider">Сырный</h3>
              <h3 class="-mt-2 ml-1">саммит</h3>
            </div>
          </a>
          </div>
          <div>
              <h2 class="mb-6 font-bold text-xl">Навигация</h2>
              <ul class="">
                  <li class="mb-4">
                      <a href="#" class="hover:border-b-4 border-secondary">Новости</a>
                  </li>
                  <li class="mb-4">
                      <a href="#" class="hover:underline">О  проекте</a>
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
              <h2 class="mb-6 font-bold text-xl">Наши партнеры</h2>
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
            <h3 class="mb-6 font-bold text-xl">Наши контакты</h3>
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
    Contact
},
  data() {
    return {
      menuActive: false,
    };
  },
};
</script>

<style>
header,
footer {
  background: linear-gradient(
      to right,
      rgba(246, 229, 0, 0.7),
      rgba(255, 186, 0, 0.7)
    ),
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
.burger.active > .top-line {
  transform: translateY(8px) rotate(45deg);
  transition: 0.3s all ease;
}
.burger.active > .mid-line {
  opacity: 0;
  transition: 0.3s all ease;
}
.burger.active > .bottom-line {
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
@media (min-width: 1020px) {
  .about-image {
    display: block;
  } 
}
/* contact */ 
.main-letter {

  /* transform: rotateZ(5deg); */
}
</style>