<template>
<div class="laptop">
  <div class="laptop__top">
    <img @click.prevent="close = !close" class="laptop__top-img" :class="{'.laptop__top--active': close}" src="https://i.ibb.co/bQ1rnm1/top.png" alt="">
  </div>
  <div class="laptop__bottom">
    <img class="laptop__bottom-img" src="https://i.ibb.co/RprQ0Ft/bottom.png" alt="">
  </div>
</div>
</template>

<script>
export default {
    data: {
        return: {
            close: false
        }
    }
}
</script>

<style scoped>
img {
  max-width: 100%;
  height: auto;
}

.laptop {
  text-align: center;
  margin: 2em auto;
  perspective: 2500px;
  perspective-origin: 50% 100%;
  transform-style: preserve-3d;
}

.laptop__top {
  max-width: 600px;
  margin: 0 auto;
  will-change: transform;
  transition: transform .3s ease;
  position: relative;
  overflow: hidden;
  transform-origin: center bottom;
}

.laptop__top::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  color: #fff;
  font-size: .5em;
  background-color: #292929;
  border-radius: 16px 16px 0 0;
  z-index: 1;
}

.laptop__top-img {
  position: relative;
  z-index: 2;
}

.laptop__bottom {
  max-width: 720px;
  margin: 0 auto;
}

.laptop__top-img,
.laptop__bottom-img {
  display: block;
  margin: 0 auto;
}

.laptop__top--active {
  transform: rotateX(-100.5deg) rotateY(0deg);
}

.laptop__top--active .laptop__top-img {
  opacity: 0;
}
</style>