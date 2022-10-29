<template>

    <Head title="Topics" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Topics index
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end m-2 p-2">
                    <Link href="/topics/create" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded">
                    Create</Link>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="
                            text-xs text-gray-700
                            uppercase
                            bg-gray-50
                            dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Title</th>
                                <th scope="col" class="px-6 py-3">Image</th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="
                                bg-white
                                border-b
                                dark:bg-gray-800 dark:border-gray-700
                                hover:bg-gray-50
                                dark:hover:bg-gray-600"
                                v-for="topic in topics"
                                :key="topic.id">
                                <th scope="row" class="
                                    px-6
                                    py-4
                                    font-medium
                                    text-gray-900
                                    dark:text-white
                                    whitespace-nowrap
                                    flex">
                                    {{ topic.title }}
                                </th>
                                <td class="px-6 py-4">
                                    <img :src="topic.image" alt="topic_image" class="flex-shrink-0 h-12 w-12 rounded" />
                                </td>
                                <td class="px-6 py-4 text-right">
                                <Link :href="`/topics/${topic.id}/edit`" class="
                                    font-medium
                                    text-blue-600
                                    dark:text-blue-500
                                    hover:underline">
                                    Edit
                                </Link>
                                <Link :href="`/topics/${topic.id}`" method="delete" as="button" type="button" class="
                                    font-medium
                                    text-red-600
                                    dark:text-blue-500
                                    hover:underline
                                    px-6">
                                    Delete
                                </Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

const props = defineProps({
    topics: Array
})
</script>
