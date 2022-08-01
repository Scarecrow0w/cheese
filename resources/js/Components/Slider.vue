<template>
  <swiper
    :style="{
      '--swiper-navigation-color': '#491e17',
      '--swiper-pagination-color': '#491e17',
    }"
    :speed="900"
    :parallax="true"
    :pagination="{
      clickable: true,
    }"
    :navigation="true"
    :modules="modules"
    class="mySwiper"
  >
    <div class="parallax-bg bg-mainbg" data-swiper-parallax="-23%"></div>
    <swiper-slide class="flex flex-col justify-center text-center">
      <!-- <img src="../../images/photo_slider1.jpg" class="w-24" alt=""> -->
      <div class="title text-secondary" data-swiper-parallax="-300">
        I Сырный саммит
      </div>
      <div class="subtitle text-secondary mt-3" data-swiper-parallax="-200">
        Прошел в январе 2016 года
      </div>
      <div class="text text-secondary mt-3" data-swiper-parallax="-100">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
          dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
          laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
          Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
          Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper
          velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut
          libero. Aenean feugiat non eros quis feugiat.
        </p>
      </div>
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
    </swiper-slide>
    <swiper-slide class="flex flex-col justify-center text-center">
      <!-- <img src="../../images/photo_slider1.jpg" class="w-24" alt=""> -->
      <div class="title text-secondary" data-swiper-parallax="-300">
        II Сырный саммит
      </div>
      <div class="subtitle text-secondary mt-3" data-swiper-parallax="-200">
        Прошел в январе 2016 года
      </div>
      <div class="text text-secondary mt-3" data-swiper-parallax="-100">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
          dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
          laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
          Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
          Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper
          velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut
          libero. Aenean feugiat non eros quis feugiat.
        </p>
      </div>
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
    </swiper-slide>
    <swiper-slide class="flex flex-col justify-center text-center">
      <!-- <img src="../../images/photo_slider1.jpg" class="w-24" alt=""> -->
      <div class="title text-secondary" data-swiper-parallax="-300">
        III Сырный саммит
      </div>
      <div class="subtitle text-secondary mt-3" data-swiper-parallax="-200">
        Прошел в январе 2016 года
      </div>
      <div class="text text-secondary mt-3" data-swiper-parallax="-100">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
          dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
          laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
          Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
          Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper
          velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut
          libero. Aenean feugiat non eros quis feugiat.
        </p>
      </div>
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
    </swiper-slide>
    <swiper-slide class="flex flex-col justify-center text-center">
      <!-- <img src="../../images/photo_slider1.jpg" class="w-24" alt=""> -->
      <div class="title text-secondary" data-swiper-parallax="-300">
        IV Сырный саммит
      </div>
      <div class="subtitle text-secondary mt-3" data-swiper-parallax="-200">
        Прошел в январе 2016 года
      </div>
      <div class="text text-secondary mt-3" data-swiper-parallax="-100">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
          dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
          laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
          Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
          Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper
          velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut
          libero. Aenean feugiat non eros quis feugiat.
        </p>
      </div>
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
    </swiper-slide>
    <swiper-slide class="flex flex-col justify-center text-center">
      <!-- <img src="../../images/photo_slider1.jpg" class="w-24" alt=""> -->
      <div class="title text-secondary" data-swiper-parallax="-300">
        V Сырный саммит
      </div>
      <div class="subtitle text-secondary mt-3" data-swiper-parallax="-200">
        Прошел в январе 2016 года
      </div>
      <div class="text text-secondary mt-3" data-swiper-parallax="-100">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
          dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
          laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
          Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
          Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper
          velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut
          libero. Aenean feugiat non eros quis feugiat.
        </p>
      </div>
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
    </swiper-slide>
  </swiper>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";

import "swiper/css/pagination";
import "swiper/css/navigation";

// import required modules
import { Parallax, Pagination, Navigation } from "swiper";

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    return {
      modules: [Parallax, Pagination, Navigation],
      pagination: {
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
      },
    };
  },
};
</script>

<style scoped>
/* #app { height: 100% }
html,
body {
  position: relative;
  height: 100%;
} */

/* body {
  background: #eee;
  font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
  font-size: 14px;
  color: #000;
  margin: 0;
  padding: 0;
} */

.swiper {
  width: 100%;
  height: 100vh;
  background: #000;
}

.swiper-slide {
  font-size: 18px;

  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  padding: 40px 60px;
}

.parallax-bg {
  position: absolute;
  left: 0;
  top: 0;
  width: 130%;
  height: 100%;
  -webkit-background-size: cover;
  background-size: cover;
  background-position: center;
}

.swiper-slide .title {
  font-size: 41px;
  font-weight: 300;
}

.swiper-slide .subtitle {
  font-size: 21px;
}

.swiper-slide .text {
  font-size: 14px;
  /* max-width: 400px; */
  line-height: 1.3;
}
</style>