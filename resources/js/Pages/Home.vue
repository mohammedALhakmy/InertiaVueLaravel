<template>
    <Head title="Home"/>
        <ul>
            <li v-for="(framework, index) in frameworks" :key="index" v-text="framework"></li>
        </ul>
    <h1 class="text-3xl font-bold underline">Home </h1>
</template>

<script setup>
import { Head } from "@inertiajs/vue3";
defineProps({
    frameworks:Array
})
</script>

<style scoped>

</style>
