<template>
        <ul>
            <li v-for="(framework, index) in frameworks" :key="index" v-text="framework"></li>
        </ul>
    <h1 class="text-3xl font-bold underline">Home </h1>
</template>

<script>
import  Layout  from "../Shared/Layout.vue";
export default{
    frameworks:Array,
    layout:Layout
};
</script>

<style scoped>

</style>
