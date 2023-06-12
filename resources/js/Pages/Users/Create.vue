<template>
    <Head title="Create User" />

    <h1 class="text-3xl font-bold">Create New User</h1>

    <form @submit.prevent="save">
        <div class="space-y-12">
            <p class="border-b border-gray-900/10 pb-12"></p>

            <div class="border-gray-900/10 pb-12">
                <div
                    class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6"
                >
                    <div class="sm:col-span-4">
                        <label
                            for="name"
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >Username</label
                        >
                        <div class="mt-2">
                            <input
                                v-model="form.name"
                                type="text"
                                name="name"
                                id="name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                required
                            />
                        </div>
                        <p
                            class="mt-2 text-sm text-red-600"
                            v-if="form.errors.name"
                        >
                            {{ form.errors.name }}
                        </p>
                    </div>

                    <div class="sm:col-span-4">
                        <label
                            for="email"
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >Email address</label
                        >
                        <div class="mt-2">
                            <input
                                id="email"
                                v-model="form.email"
                                name="email"
                                type="email"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                required
                            />
                        </div>
                        <p
                            class="mt-2 text-sm text-red-600"
                            v-if="form.errors.email"
                        >
                            {{ form.errors.email }}
                        </p>
                    </div>

                    <div class="sm:col-span-4">
                        <label
                            for="password"
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >Password</label
                        >
                        <div class="mt-2">
                            <input
                                type="password"
                                v-model="form.password"
                                name="password"
                                id="password"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                required
                            />
                        </div>
                        <p
                            class="mt-2 text-sm text-red-600"
                            v-if="form.errors.password"
                        >
                            {{ form.errors.password }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <Link
                href="/users"
                type="button"
                as="button"
                class="text-sm font-semibold leading-6 text-gray-900"
            >
                Back
            </Link>
            <button
                type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                :disabled="form.processing"
            >
                Create
            </button>
        </div>
    </form>
</template>
<script setup>
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    email: "",
    password: "",
});

const save = () => {
    form.post("/users");
};
</script>
<script></script>
