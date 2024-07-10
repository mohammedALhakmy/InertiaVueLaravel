<template>
    <h1 class="text-3xl font-bold underline">Users </h1>
    <div style="margin-top: 600px">
        <p>The current time is {{ time }}</p>
    </div>
    <Link href="Users" class="text-blue-500" preseve-scroll>Refresh</Link>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import  Layout  from "../Shared/Layout.vue"
 export default{
     time:String,
 };
</script>

<style scoped>

</style>
