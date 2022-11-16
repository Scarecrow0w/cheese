<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
    title: null,
    content: null,
    image: null,
    type: 'partners_news',
    foreign_link: null,
});

function storeTopic() {
    form.post("/dashboard/topics");
}
</script>

<template>

    <Head title="Topics" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Создание новости
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex justify-start p-2 m-2">
                <Link href="/dashboard/topics/" class="px-4 py-2 text-white bg-indigo-500 rounded hover:bg-indigo-600">
                    Назад
                </Link>
                </div>
                <form class="w-full max-w-sm" @submit.prevent="storeTopic">
                    <div class="mb-6 md:flex md:items-center">
                        <div class="md:w-1/3">
                            <label class="block pr-4 mb-1 font-bold text-gray-500 md:text-right md:mb-0"
                                for="inline-full-title">
                                Заголовок
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-purple-500"
                                id="inline-full-title"
                                type="text"
                                v-model="form.title" />
                        </div>
                    </div>
                    <div class="mb-6 md:flex md:items-center">
                        <div class="md:w-1/3">
                            <label class="block pr-4 mb-1 font-bold text-gray-500 md:text-right md:mb-0"
                                for="inline-full-content">
                                Контент
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-purple-500"
                                id="inline-full-content"
                                type="text"
                                v-model="form.content" />
                        </div>
                    </div>
                    <div class="mb-6 md:flex md:items-center">
                        <div class="md:w-1/3">
                            <label class="block pr-4 mb-1 font-bold text-gray-500 md:text-right md:mb-0"
                                for="inline-full-type">
                                Блок
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <select
                                v-model="form.type"
                                id="inline-full-type"
                                class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-purple-500">
                                <option selected value="partners_news">Новости наших партнеров</option>
                                <option value="summit_stories">Истории сырных саммитов</option>
                                <option value="mass_media_about_us">СМИ о нас</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-6 md:flex md:items-center">
                        <div class="md:w-1/3">
                            <label class="block pr-4 mb-1 font-bold text-gray-500 md:text-right md:mb-0"
                                for="inline-full-foreign-link">
                                Ссылка
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-purple-500"
                                id="inline-full-foreign-link"
                                type="text"
                                v-model="form.foreign_link" />
                        </div>
                    </div>
                    <div class="mb-6 md:flex md:items-center">
                        <div class="md:w-1/3">
                            <label class="block pr-4 mb-1 font-bold text-gray-500 md:text-right md:mb-0"
                                for="file_input">
                                Загрузить картинку
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="file_input"
                                type="file"
                                @input="form.image = $event.target.files[0]" />
                        </div>
                    </div>
                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <button class="px-4 py-2 font-bold text-white bg-indigo-500 rounded shadow hover:bg-indigo-600 focus:shadow-outline focus:outline-none"
                                type="submit">
                                Создать
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
