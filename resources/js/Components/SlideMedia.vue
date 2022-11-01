<template>
  <swiper
   :style="{
      '--swiper-navigation-color': '#491e17',
      '--swiper-pagination-color': '#491e17',
    }"
    :effect="'coverflow'"
    :grabCursor="true"
    :centeredSlides="true"
    :slidesPerView="'auto'"
    :coverflowEffect="{
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    }"
    :pagination="true"
    :modules="modules"
    class="mySwiper"
  >
    <swiper-slide
        v-for="slide in mass_media_about_us_titles"
        @click="redirectToLink(`/topic/${slide.id}`)"
        :key="slide.id"
        class="flex justify-center text-center">
        <img class="relative rounded-lg"
            :src="slide.image" />
        <div class="absolute bottom-0 w-full rounded-b-lg h-1/3 bg-secondary">
            <h3 class="text-primary">{{ slide.title }}</h3>
        </div>
    </swiper-slide >
  </swiper>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";

import "swiper/css/effect-coverflow";
import "swiper/css/pagination";



// import required modules
import { EffectCoverflow, Pagination } from "swiper";

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    props: {
        mass_media_about_us_titles: Array,
    },
    methods: {
        redirectToLink(link) {
            window.location = link;
        }
    },
    setup() {
        return {
        modules: [EffectCoverflow, Pagination],
        };
    },
};
</script>

<style scoped>
.swiper {
  width: 100%;
  padding-top: 50px;
  padding-bottom: 50px;
}

.swiper-slide {
  background-position: center;
  background-size: cover;
  width: 300px;
  height: 300px;
}

.swiper-slide img {
  display: block;
  width: 100%;
}
</style>
