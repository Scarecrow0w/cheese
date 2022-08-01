<template>
  <nav
    class="
      relative
      z-0
      inline-flex
      justify-center
      rounded-md
      shadow-sm
      
    "
    aria-label="Pagination"
  >
  
    <Link
      v-for="(link, key) in links"
      :key="key"
      v-html="link.label"
      :href="link.url"
      :disabled ="link.url === null"
      :class="{'bg-indigo-50 border border-indigo-500 text-indigo-600 text-sm' : link.active}"
      aria-current="page"
      class="
        bg-white
        border-gray-300
        text-gray-500
        hover:bg-gray-50
        relative
        inline-flex
        items-center
        px-4
        py-2
        border
        text-sm
        font-medium
    "      
    />
    <!-- <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 2 </a> -->
    <!-- class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium" -->
  </nav>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  name: "Pagination",
  props: {
    links: Array,
  },
  components: { Link },
};
</script>

