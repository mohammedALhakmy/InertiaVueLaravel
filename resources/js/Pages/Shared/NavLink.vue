<template>
    <Link class="text-black-500 hover:underline" :class="{'font-bold underline':active}">
        <slot/>
    </Link>
</template>

<script>
import { Link } from "@inertiajs/vue3";
export default {
    components :{ Link },
    name: "NavLink",
    props:{
        active : Boolean,
    }
}
</script>

<style scoped>

</style>
