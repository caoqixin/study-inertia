<template>
    <Head title="User"></Head>
    <div class="flex justify-between mb-6">
        <div class="flex items-center">
            <h1 class="text-4xl font-bold">Users</h1>

            <Link
                href="/users/create"
                as="button"
                type="button"
                class="inline-flex items-center rounded-full border border-transparent bg-indigo-600 px-5 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 ml-2"
                v-if="can.create_user"
            >
                New User
            </Link>
        </div>

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
                    v-if="user.can.editable"
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
import Pagination from "../../Shared/Components/Pagination.vue";
import { router } from "@inertiajs/vue3";
import debounce from "lodash/debounce";

const props = defineProps({
    users: Object,
    filters: Object,
    can: Object,
});

const search = ref(props.filters.search);
watch(
    search,
    debounce((value) => {
        router.get(
            "/users",
            { search: value },
            {
                preserveState: true,
                replace: true,
            }
        );
    }, 300)
);
</script>
