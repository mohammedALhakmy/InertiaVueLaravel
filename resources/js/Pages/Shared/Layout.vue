<template>
    <Head>
        <title>My App </title>
        <meta type="description" content="information about my app">
    </Head>
    <section class="p-6 bg-gray-200">
        <header class="flex justify-between">
            <div class="flex items-center">
                <h1 class="font-bold text-lg">My App</h1>
                <p class="text-sm ml-4">Welcome Back , {{username}}</p>
            </div>
            <Nav />
        </header>
    </section>

    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot />
        </div>
    </section>
</template>

<script>
import Nav from "./Nav.vue";
export default {
    components: { Nav },
props:{
    username:String,
},
computed:{
        username(){
            return this.$page.props.auth.user.username;
        }
}
}
</script>

<style scoped>

</style>
