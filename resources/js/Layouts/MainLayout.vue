<template>
  <div class="container mx-auto mt-5">
    <ul class="font-bold tracking-widest leading-5 uppercase list-none flex justify-center">
        <li class="mr-5 border-b-4 border-transparent hover:border-indigo-500">
            <Link :href="route('home')">Home</Link>
        </li>
        <li class="mr-5 hover:border-b-4 border-indigo-500">
            <Link :href="route('about')">About</Link>
        </li>
        <li class="mr-5 hover:border-b-4 border-indigo-500">
            <Link :href="route('users.index')">Users</Link>
        </li>
        <li class="mr-5 hover:border-b-4 border-indigo-500">
            <Link :href="route('topics.index')">Topics</Link>
        </li>
    </ul>
    <slot />
  </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
 components: {
    Link
 }
}
</script>

<style>

</style>