<template>

    <Head title="Topics" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Новости
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex justify-end p-2 m-2">
                    <Link href="/dashboard/topics/create" class="px-4 py-2 text-white bg-indigo-500 rounded hover:bg-indigo-600">
                        Создать
                    </Link>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Заголовок</th>
                                <th scope="col" class="px-6 py-3">Изображение</th>
                                <th scope="col" class="px-6 py-3">Контент</th>
                                <th scope="col" class="px-6 py-3">Тип блока</th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Редактировать</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                                v-for="topic in topics"
                                :key="topic.id">
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    {{ topic.title }}
                                </td>
                                <td class="px-6 py-4">
                                    <img :src="topic.image" alt="topic_image" class="flex-shrink-0 w-12 h-12 rounded" />
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                    {{ topic.content }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    {{ topic.type }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <Link :href="`/dashboard/topics/${topic.id}/edit`" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        Редактировать
                                    </Link>
                                    <Link :href="`/dashboard/topics/${topic.id}`" method="delete" as="button" type="button" class="px-6 font-medium text-red-600 dark:text-blue-500 hover:underline">
                                        Удалить
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
