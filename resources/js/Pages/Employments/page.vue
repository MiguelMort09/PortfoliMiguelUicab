<script lang="ts" setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";
import {Button, Column, DataTable} from 'primevue';

import {ref} from "vue";

const value = ref('');

defineProps<{
    employments: [],
}>();
</script>
<template>
    <Head title="Dashboard"/>
    <AuthenticatedLayout>


        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                Dashboard
            </h2>
        </template>
        <div class="max-w-7xl mx-auto content-center py-10">
            <Button :href="route('employments.create')" as="a" label="External" rel="noopener" target="_blank"/>
            <DataTable :value="employments" table-class="w-full">
                <Column field="role" header="role"></Column>
                <Column field="company_name" header="company_name"></Column>
            </DataTable>
        </div>

    </AuthenticatedLayout>

</template>

<style>


</style>
