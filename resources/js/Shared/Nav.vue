<template>
    <nav class="mt-6">
        <ul class="list-disc">
            <li><Link href="/" class="text-gray-900 hover:underline">Home</Link></li>
            <li><Link href="Users" class="text-gray-900 hover:underline">Users</Link></li>
            <li><Link href="Setting" class="text-gray-900 hover:underline">Setting</Link></li>
            <li><Link href="logout" method="post" as="button" :data="{foo:'bar'}" class="text-gray-900 hover:underline">Logout</Link></li>
        </ul>
    </nav>
</template>

<script>
import { Link } from "@inertiajs/vue3";
export default {
    components: { Link },
    name: "Nav"
}

export class Nav {
}
</script>

<style scoped>

</style>
