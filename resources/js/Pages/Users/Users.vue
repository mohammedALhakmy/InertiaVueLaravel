<template>
    <Head>
        <title>Users</title>
        <meta type="description" content="information about my app Users" head-key="description">
    </Head>
    <div class="flex justify-between mb-6">
        <div class="flex item-center">
            <h1 class="text-2xl font-bold">Users</h1>
            <!-- Uncomment the following line if needed -->

             <Link  v-if="can.createUser" href="/Users/Create" class="text-blue-500 text-sm ml-3">New User</Link>
        </div>
         <input v-model="search" type="text" placeholder="Search ..." class="border px-2 rounded-lg">
    </div>
    <div class="flex flex-col">
        <div class="my-2 overflow-x-auto sm:mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <tbody class="bg-white divide-y divide-gray-200">
                        <tr v-for="user in users.data" :key="user.id">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ user.name }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ user.email }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <Link v-if="user.can.edit" :href="'/Users/'+user.id+'/edit'" class="text-indigo-600 hover:text-indigo-900">Edit</Link>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <Pagination :links="users.links" />
</template>

<script setup>
import { Link,Head } from "@inertiajs/vue3";
import { defineProps,ref,watch } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import debounce from 'lodash/debounce';

import Pagination from "../Shared/Pagination.vue";

const props = defineProps({
    users: Object,
    filters: Object,
    can: Object,
});

// let search = ref( '');
 let search = ref(props.filters.search ?? '');
const searchUsers = debounce((value) => {
    Inertia.get('/Users', { search: value }, {
        preserveState: true,
        replace: true,
    });
});
watch(search, (value) => {
    searchUsers(value);
});
/*
const searchUsers = debounce((value) => {
    Inertia.get('/Users', { search: value }, {
        preserveState: true,
        replace: true,
    });
}, 300);

watch(search, (value) => {
    searchUsers(value);
});*/
</script>

<style scoped>
</style>
