<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-3">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h2 class="text-2xl">Hallo {{$page.props.auth.user.name}}! 👋</h2>
                    </div>
                </div>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-3">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h2 class="text-2xl">Vers des Tages</h2>
                        <p class="text-1xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium cupiditate reiciendis molestias, vel tenetur saepe ipsa placeat totam iusto quis veniam maiores culpa commodi, aperiam nostrum illum rem consequatur quod?</p>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
