<template>
    <nav class="ml-6">
        <ul class="flex space-x-6">
            <li>
                <NavLink :active="$page.component === 'Home'" href="/"
                    >Home</NavLink
                >
            </li>
            <li>
                <NavLink
                    :active="$page.component === 'Users/Index'"
                    href="/users"
                    >Users</NavLink
                >
            </li>
            <li>
                <NavLink
                    :active="$page.component === 'Settings'"
                    href="/settings"
                    >Settings</NavLink
                >
            </li>
        </ul>
    </nav>
</template>
<script setup>
import NavLink from "./NavLink.vue";
</script>
<script></script>
