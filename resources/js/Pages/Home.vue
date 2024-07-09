<template>
    <Layout>
    <h1 class="text-5xl">Hello word , {{ name}}</h1>
        <ul>
            <li v-for="(framework, index) in frameworks" :key="index" v-text="framework"></li>
        </ul>
    </Layout>
</template>

<script>
import  Layout  from "../Shared/Layout.vue"
export default {
    components: { Layout },
    name: "Welcome",
    props:{
        name: String,
        frameworks:Array
    }
}
</script>

<style scoped>

</style>
