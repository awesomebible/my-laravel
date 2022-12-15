<script setup>
import { computed } from 'vue';
import BreezeButton from '@/Components/Button.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
    status: String,
});

const form = useForm();

const submit = () => {
    form.post(route('verification.send'));
};

const verificationLinkSent = computed(() => props.status === 'verification-link-sent');
</script>

<template>
    <BreezeGuestLayout class="bg-gradient-to-b from-slate-50 to-indigo-900">
        <Head title="Email Verification" />

        <h1 class="mb-4 text-2xl font-extrabold">E-Mail bestätigen</h1>

        <div class="mb-4 text-sm text-gray-600">
            Danke, dass du dich angemeldet hast. Bevor du loslegen kannst, musst du deine E-Mail verifizieren, in dem du auf den Link klickst, den wir dir gerade gesendet haben. Du hast keine E-Mail erhalten? Wir schicken dir gerne eine Neue.
        </div>

        <div class="mb-4 font-medium text-sm text-green-600" v-if="verificationLinkSent" >
            Ein neuer Verifikations-Link ist auf dem Weg in deinen Posteingang.
        </div>

        <form @submit.prevent="submit">
            <div class="mt-4 flex items-center justify-between">
                <BreezeButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Verifizierungs-E-Mail erneut senden
                </BreezeButton>

                <Link :href="route('logout')" method="post" as="button" class="underline text-sm text-rose-600 hover:text-rose-900">Abmelden</Link>
            </div>
        </form>
    </BreezeGuestLayout>
</template>
