<script setup>
import { computed } from 'vue';
import { usePage } from '@inertiajs/inertia-vue3';

const errors = computed(() => usePage().props.value.errors);

const hasErrors = computed(() => Object.keys(errors.value).length > 0);
</script>

<template>
    <div v-if="hasErrors" class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800">
        <div class="font-medium text-red-600">Ups! Da ist wohl etwas schief gegangen.</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            <p v-for="(error, key) in errors" :key="key">{{ error }}</p>
        </ul>
    </div>
</template>
