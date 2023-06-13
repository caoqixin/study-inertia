<template>
    <section class="h-full bg-gray-50">
        <main class="h-full">
            <div
                class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8"
            >
                <div class="sm:mx-auto sm:w-full sm:max-w-md">
                    <img
                        class="mx-auto h-12 w-auto"
                        src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                        alt="Your Company"
                    />
                    <h2
                        class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900"
                    >
                        Sign in to your account
                    </h2>
                    <p class="mt-2 text-center text-sm text-gray-600">
                        <slot name="register"></slot>
                    </p>
                </div>

                <slot></slot>
            </div>
        </main>
    </section>
</template>
<script setup></script>
<script></script>
