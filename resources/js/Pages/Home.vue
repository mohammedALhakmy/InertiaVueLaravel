<template>
    <h1 class="text-5xl">Hello word , {{ name}}</h1>
    <Nav/>
    <ul>
        <li v-for="(framework, index) in frameworks" :key="index" v-text="framework"></li>
    </ul>
</template>

<script>
import  Nav  from "../Shared/Nav.vue"
export default {
    components: { Nav },
    name: "Welcome",
    props:{
        name: String,
        frameworks:Array
    }
}
</script>

<style scoped>

</style>
