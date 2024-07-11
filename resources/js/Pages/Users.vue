<template>
    <Head>
        <title>Users </title>
        <meta type="description" content="information about my app Users" head-key="description">

    </Head>
    <h1 class="text-3xl font-bold underline">Users </h1>
    <div style="margin-top: 600px">
        <p>The current time is {{ time }}</p>
    </div>
    <Link href="Users" class="text-blue-500" preseve-scroll>Refresh</Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import { Head } from "@inertiajs/vue3";
import  Layout  from "../Shared/Layout.vue"
 defineProps({
     time:String
 })
</script>

<style scoped>

</style>
