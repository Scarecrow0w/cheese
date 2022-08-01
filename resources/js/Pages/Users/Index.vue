<template>
  <Head :title="title" />
     <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
           <table
            class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
          >
            <thead
              class="
                text-xs text-gray-700
                uppercase
                bg-gray-50
                dark:bg-gray-700 dark:text-gray-400
              "
            >
              <tr>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">E-mail</th>
                <th scope="col" class="px-6 py-3"> Edit
                  
                </th>
                <th scope="col" class="px-6 py-3"> Delete
                 
                </th>
              </tr>
            </thead>
            <tbody v-if="users.data">
              <tr
                class="
                  bg-white
                  border-b
                  dark:bg-gray-800 dark:border-gray-700
                  hover:bg-gray-50
                  dark:hover:bg-gray-600
                "
               v-for="user in users.data"
               :key="user.id"
              >
                <th
                  scope="row"
                  class="
                    px-6
                    py-4
                    font-medium
                    text-gray-900
                    dark:text-white
                    whitespace-nowrap
                    flex
                  "
                >
                 {{user.name}}                  
                </th>
                <td class="px-6 py-4">
                  {{user.email}}
                </td>
               
                <td class="px-6 py-4">
                  <Link
                    :href="`/users/${user.id}/edit`"
                    class="
                      font-bold 
                      text-blue-600
                      dark:text-blue-500
                      hover:underline
                    "
                    >Edit</Link
                  >
                  </td>
                  <td>
                  <Link
                    :href="`/users/${user.id}`"
                    method="delete" as="button" type="button"
                    class="
                      font-bold
                      text-red-600
                      dark:text-blue-500
                      hover:underline
                      px-6
                    "
                    >Delete</Link 
                  >
                  <!-- <a @click.prevent="deleteUser(user.id)"
                  class="
                      font-bold
                      text-red-600
                      dark:text-blue-500
                      hover:underline
                      px-6
                      cursor-pointer
                    "
                  >
                    Delete
                  </a> -->
                </td>
              </tr>
            </tbody>
            <tbody v-else>
                <h3>Пользователей пока нет</h3>
            </tbody>       
            
           </table>
            <div class="flex justify-center">
                <Pagination :links="users.links"/>
            </div>
        </div>
      </div>
    </div>
  
</template>

<script>
import MainLayout from '@/Layouts/MainLayout.vue'

import { Head, Link } from '@inertiajs/inertia-vue3';
import Pagination from '../../Components/Pagination.vue';

export default {
  name: 'Home',
  layout: MainLayout,
  components: {
    Head,
    Link,
    Pagination
},
  props: {
    title: String,
    users: Array

  },
  methods: {
    deleteUser() {
        if (confirm('Вы уверены, сто хотите удалить пользователя?')) {
            this.$inertia.delete(this.route('users.destroy', id))
        }
    }
  }
}
</script>

<style>

</style>