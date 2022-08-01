<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    topic: Object,
    image: String
})

const form = useForm({
  name: props.topic.name,
  image: props.topic.image,
});

function updateTopic() {
  Inertia.post(`/topics/${props.topic.id}`, {
  _method: 'put',
  name: form.name,
  image: form.image,
})
}
</script>

<template>
  <Head title="Topics" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Topic Update
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-start m-2 p-2">
          <Link
            href="/topics/"
            class="
              px-4
              py-2
              bg-indigo-500
              hover:bg-indigo-600
              text-white
              rounded
            "
            >Back</Link
          >
        </div>
        <form class="w-full max-w-sm" @submit.prevent="updateTopic">
          <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
              <label
                class="
                  block
                  text-gray-500
                  font-bold
                  md:text-right
                  mb-1
                  md:mb-0
                  pr-4
                "
                for="inline-full-name"
              >
                Name
              </label>
            </div>
            <div class="md:w-2/3">
              <input
                class="
                  bg-gray-200
                  appearance-none
                  border-2 border-gray-200
                  rounded
                  w-full
                  py-2
                  px-4
                  text-gray-700
                  leading-tight
                  focus:outline-none focus:bg-white focus:border-purple-500
                "
                id="inline-full-name"
                type="text"
                v-model="form.name"
              />
            </div>
          </div>
          <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
              <label
                class="
                  block
                  text-gray-500
                  font-bold
                  md:text-right
                  mb-1
                  md:mb-0
                  pr-4
                "
                for="file_input"
                >Upload file</label
              >
            </div>
            <div class="md:w-2/3">
                <img
                    :src="image"
                    alt=""
                    class="flex-shrink-0 h-32 w-32 rounded"
                  />
              <input
                class="
                  block
                  w-full
                  text-sm text-gray-900
                  bg-gray-50
                  rounded-lg
                  border border-gray-300
                  cursor-pointer
                  dark:text-gray-400
                  focus:outline-none
                  dark:bg-gray-700
                  dark:border-gray-600
                  dark:placeholder-gray-400
                "
                id="file_input"
                type="file"
                
               @input="form.image = $event.target.files[0]"
              />
            </div>
          </div>
          <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
              <button
                class="
                  shadow
                  bg-indigo-500
                  hover:bg-indigo-600
                  focus:shadow-outline focus:outline-none
                  text-white
                  font-bold
                  py-2
                  px-4
                  rounded
                "
                type="submit"
              >
                Update
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>
