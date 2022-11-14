<script setup>
import Logo from '@/Components/Logo.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div class="w-full max-w-[600px] px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
