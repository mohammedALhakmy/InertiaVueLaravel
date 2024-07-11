<template>
    <nav class="ml-6">
        <ul class="flex space-x-6 list-inside">
<!--            :class="{'font-bold underline':$page.url === '/'}"-->
            <li>
<!--                <Link href="/" class="text-gray-900 hover:underline" :class="{'font-bold underline':$page.component === 'Home'}">Home</Link>-->
                <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
            </li>
<!--            :class="{'font-bold underline':$page.url === '/Users'}"-->
<!--            :class="{'font-bold underline' :$page.url.startsWith('/Users')}"-->
            <li>
                <NavLink href="Users" :active="$page.component=== 'Users'">User</NavLink>
<!--                <Link href="Users" class="text-gray-900 hover:underline" :class="{'font-bold underline' :$page.component === 'Users'}">Users</Link>-->
            </li>
<!--            :class="{'font-bold underline':$page.url === '/Setting'}"-->
<!--            :class="{'font-bold underline' :$page.url.startsWith('/Setting')}"-->
            <li>
                <NavLink href="Setting" :active="$page.component === 'Setting'">Setting</NavLink>
<!--                <Link href="Setting" class="text-gray-900 hover:underline" :class="{'font-bold underline' :$page.component === 'Setting' }" >Setting</Link>-->
            </li>
<!--            :class="{'font-bold underline':$page.url === 'logout'}"-->
    <li>
<!--        <Link href="logout" method="post" as="button" :data="{foo:'bar'}" class="text-gray-900 hover:underline" :class="{'font-bold underline':$page.url.startsWith('logout')}" >Logout</Link>-->
        <NavLink href="logout" method="post" as="button" :active="$page.component === 'logout'">Logout</NavLink>
    </li>
        </ul>
    </nav>
</template>

<script>
import  NavLink  from "../Shared/NavLink.vue";
export default {
    components: { NavLink },
    name: "Nav"
}

export class Nav {
}
</script>

<style scoped>

</style>
