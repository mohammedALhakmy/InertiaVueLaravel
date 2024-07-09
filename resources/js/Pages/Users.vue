<template>
    <Layout>
        <h1 class="text-3xl font-bold underline">Users </h1>
        <div style="margin-top: 600px">
            <p>The current time is {{ time }}</p>
        </div>
        <Link href="Users" class="text-blue-500" preseve-scroll>Refresh</Link>
    </Layout>
</template>

<script setup>
import Layout from "../Shared/Layout.vue";
import { Link } from "@inertiajs/vue3";
 defineProps({
     time:String,
 });
</script>

<style scoped>

</style>
