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
    class="mySwiper">
    <div class="parallax-bg bg-mainbg" data-swiper-parallax="-23%"></div>
    <swiper-slide
        v-for="story in summit_stories_titles"
        :key="story.id"
        class="flex flex-col justify-center text-center">
      <!-- <img src="../../images/photo_slider1.jpg" class="w-24" alt=""> -->
      <div class="title text-secondary" data-swiper-parallax="-300">
        {{ story.title }}
      </div>
      <div class="mt-3 text text-secondary" data-swiper-parallax="-100">
        <p>{{ story.content }}</p>
      </div>
      <a :href="`/topic/${story.id}`" class="px-6 py-3 mx-auto mt-5 rounded-lg bg-secondary text-lightbg hover:bg-hover" >
        Подробнее
      </a>
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
    props: {
        summit_stories_titles: Array,
    },
    setup() {
        return {
            modules: [Parallax, Pagination, Navigation],
            pagination: {
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + (index + 1) + "</span>";
                }
            }
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
