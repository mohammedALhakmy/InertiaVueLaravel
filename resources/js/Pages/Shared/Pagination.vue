<template>
    <div class="mt-6 flex justify-center">
        <Component
            :is="link.url ? 'Link' : 'span'"
            v-for="link in links"
            :key="link.label"
            :href="link.url"
            v-html="link.label"
            class="px-2 py-1 mx-1"
            :class="[
                link.url ? 'text-blue-500 hover:text-blue-700' : 'text-gray-500 cursor-default',
                { 'font-bold': link.active }
            ]"
        />
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
export default {
    props: {
        links: {
            type: Array,
            required: true
        }
    }, components: {
        Link
    }
}
</script>

<style scoped>

</style>
