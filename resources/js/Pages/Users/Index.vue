<template>
    <Head title="User"></Head>
    <div class="flex justify-between mb-6">
        <h1 class="text-4xl font-bold">Users</h1>

        <input
            v-model="search"
            type="text"
            placeholder="search..."
            class="border px-2 rounded-lg"
        />
    </div>

    <ul role="list" class="divide-y divide-gray-100">
        <li
            v-for="user in users.data"
            :key="user.id"
            class="flex justify-between gap-x-6 py-5"
        >
            <div class="flex gap-x-4">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">
                        {{ user.name }}
                    </p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                        {{ user.email }}
                    </p>
                </div>
            </div>
            <div
                class="whitespace-nowrap px-6 py-4 font-medium sm:flex sm:flex-col sm:items-end"
            >
                <Link
                    class="text-indigo-600 hover:text-indigo-900"
                    as="button"
                    type="button"
                    :href="`/users/${user.id}/edit`"
                    >Edit</Link
                >
            </div>
        </li>
    </ul>

    <!-- paginator -->
    <div class="mt-6 flex justify-center">
        <Pagination :links="users.links" />
    </div>
</template>
<script setup>
import { ref, watch } from "vue";
import Pagination from "../../Shared/Pagination.vue";
import { router } from "@inertiajs/vue3";

const props = defineProps({
    users: Object,
    filters: Object,
});

const search = ref(props.filters.search);
watch(search, (value) => {
    router.get(
        "/users",
        { search: value },
        {
            preserveState: true,
            replace: true,
        }
    );
});
</script>
