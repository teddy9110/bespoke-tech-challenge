<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { defineProps } from "vue";
import Card from "@/Components/Card";

const props = defineProps({
    items: Array,
    searchTerm: String,
    itemCatagories: Array,
    catagory: String
})
</script>

<script>
export default {
    methods: {
        search: _.throttle(function () {
            this.$inertia.get(route('dashboard', { searchTerm: this.searchTerm, catagory: this.catagory }, { preserveState: true }))
        }, 0),
    }
}
</script> 

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Company Y Portal
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 flex-between">
                        <div class="mb-2 flex flex-row ">
                            <input type="text" v-model="searchTerm" @change="search" placeholder="Search..."
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-60 p-2.5 " />

                            <select id="content_type" name="content_type" @change="search()" v-model="catagory"
                                class="g-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-60 p-2.5 ">
                                <option :value="null" disabled selected hidden>Please Choose a content type...</option>
                                <template v-for="type in itemCatagories" :key="type.content_type">
                                    <option :value="type.content_type">{{ type.content_type }}</option>
                                </template>
                            </select>

                            <button v-on:click="catagory = null, search()" class="w-auto flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"> Reset Filter </button>
                        </div>

                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="text-2xl">Latest Items</h3>

                        <div class="grid gap-4 grid-cols-6 mt-4">
                            <Card v-for="item in items" :key="item.id" :item="item" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
