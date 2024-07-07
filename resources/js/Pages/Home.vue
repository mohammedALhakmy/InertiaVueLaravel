<template>
    <h1>Hello word , {{ name}}</h1>
    <ul>
        <li v-for="index,framework of frameworks" v-text="index"></li>
    </ul>
</template>

<script>
export default {
    name: "Welcome",
    props:{
        name: String,
        frameworks:Array
    }
}
</script>

<style scoped>

</style>
