<script lang="ts" setup>
import {format} from "date-fns";
import InputText from "primevue/inputtext";
import DatePicker from "primevue/datepicker";
import Editor from "primevue/editor";
import {Head, useForm} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const form = useForm({
    role: "",
    company: "",
    startDate: null,
    endDate: null,
    description: "",
});
</script>

<template>
    <Head title="Dashboard"/>
    <AuthenticatedLayout>
        <div class="max-w-7xl mx-auto content-center py-10">
            <div class="flex flex-col lg:flex-row gap-8">
                <div class="w-full lg:w-1/2">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-8 mb-6">
                        <div>
                            <label class="mb-2 block font-medium text-gray-700">Role</label>
                            <InputText v-model="form.role" fluid/>
                        </div>
                        <div>
                            <label class="mb-2 block font-medium text-gray-700">Empresa</label>
                            <InputText v-model="form.company" fluid/>
                        </div>
                        <div>
                            <label class="mb-2 block font-medium text-gray-700">Inicio</label>
                            <DatePicker v-model="form.startDate" fluid/>
                        </div>
                        <div>
                            <label class="mb-2 block font-medium text-gray-700">Fin</label>
                            <DatePicker v-model="form.endDate" fluid/>
                        </div>
                    </div>
                    <div class="w-full max-w-3xl">
                        <Editor v-model="form.description" editorStyle="height: 320px"/>
                    </div>
                </div>

                <section
                    class="w-full lg:w-1/2 p-6 rounded-lg shadow-sm bg-slate-900 container !text-white max-w-none break-words">
                    <h4 class="text-2xl uppercase font-semibold md:text-right text-center text-white">
                        {{ form.role || "Título" }}
                    </h4>
                    <h3 class="text-xl font-bold md:text-left text-center">
                        {{ form.company || "Nombre de la empresa" }}
                    </h3>
                    <div class="flex flex-col md:flex-row md:justify-between text-white">
                        <h4 class="md:text-right text-center text-white">
                            {{
                                form.startDate && form.endDate
                                    ? `${format(new Date(form.startDate), 'dd/MM/yyyy')} - ${format(new Date(form.endDate), 'dd/MM/yyyy')}`
                                    : "Fechas no especificadas"
                            }}
                        </h4>
                    </div>
                    <article
                        class="whitespace-pre-wrap prose prose-base overflow-auto max-h-[320px] break-words !text-white"
                        v-html="form.description">
                    </article>
                </section>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
