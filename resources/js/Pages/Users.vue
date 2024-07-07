<template>
    <h1 class="text-3xl font-bold underline">Users</h1>
    <Nav/>
    <div style="margin-top: 600px">
        <p>The current time is {{ time }}</p>
    </div>
    <Link href="Users" class="text-blue-500" preseve-scroll>Refresh</Link>
</template>

<script>
import Nav from "../Shared/Nav.vue";
import { Link } from "@inertiajs/vue3";
export default {
    components:{ Nav,Link},
name: "Users",
    props:{
        time:String,
    }
}
</script>

<style scoped>

</style>
