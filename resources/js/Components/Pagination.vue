<template>
  <nav
    class="relative z-0 inline-flex justify-center rounded-md shadow-sm"
    aria-label="Pagination"
  >

    <Link
      v-for="(link, key) in links"
      :key="key"
      v-html="link.label"
      :href="link.url"
      :disabled ="link.url === null"
      :class="{'bg-lightbg border border-mainbg text-mainbg text-sm' : link.active}"
      aria-current="page"
      class="relative inline-flex items-center px-4 py-2 text-sm font-medium border text-lightbg border-lightbg bg-mainbg hover:bg-lightbg hover:text-mainbg"
    />
    <!-- <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 hover:bg-gray-50"> 2 </a> -->
    <!-- class="relative z-10 inline-flex items-center px-4 py-2 text-sm font-medium text-indigo-600 border border-indigo-500 bg-indigo-50" -->
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

