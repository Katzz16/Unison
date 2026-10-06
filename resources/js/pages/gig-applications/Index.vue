<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { dashboard } from '@/routes';

defineOptions({
    layout: {
        breadcrumbs: [
            {
                title: 'Gig applications',
                href: dashboard(),
            },
        ],
    },
});

type GigApplication = {
    id: number;
    bandName: string;
    preferredDate: string;
    setLengthMinutes: number;
    status: string;
};

defineProps<{
    applications: GigApplication[];
}>();
</script>

<template>
    <Head title="Gig applications" />

    <div class="p-4">
        <h1 class="text-xl font-semibold">Gig applications</h1>

        <ul class="mt-4 space-y-2">
            <li
                v-for="application in applications"
                :key="application.id"
                class="rounded-lg border p-3"
            >
                <p class="font-medium">{{ application.bandName }}</p>

                <p class="text-sm text-gray-600">
                    {{ application.preferredDate }} ·
                    {{ application.setLengthMinutes }} min ·
                    {{ application.status }}
                </p>
            </li>
        </ul>
    </div>
</template>
