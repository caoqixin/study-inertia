<template>
    <section class="p-6 bg-gray-200">
        <header class="flex justify-between">
            <h1 class="font-bold text-lg">My App</h1>
            <Nav />
        </header>
    </section>

    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot></slot>
        </div>
    </section>
</template>
<script setup>
import Nav from "../Components/Nav.vue";
</script>
<script></script>
