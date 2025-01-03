<script lang="ts" setup>
import TitleSection from "@/Components/TitleSection.vue";
import {onMounted, ref} from "vue";

interface Employee {
    jobTitle: string;
    companyName: string;
    dates: string;
    description: string;
}

// Definimos el estado reactivo para empleos
const employments = ref<Employee[]>([]);

const currentIndex = ref<number>(0);
const employeeSelected = ref<Employee>({});

const setEmployee = (index: number) => {
    currentIndex.value = index;
    employeeSelected.value = employments.value[index];
}


// Cargar los datos al montar el componente
onMounted(async () => {
    const response = await fetch(route('employments.index'));
    const data: Employee[] = await response.json();
    employments.value = data;
    if (employments.value.length) {
        employeeSelected.value = employments.value[0];
    }
});
</script>

<template>
    <section id="employments" class="py-20 bg-black text-white">
        <div class="container mx-auto px-4 section-fade-in">
            <TitleSection>Experiencia Laboral</TitleSection>
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/3 mb-8 md:mb-0">
                    <button v-for="(item, index) in employments" :key="index"
                            :class="{'w-full bg-gradient-to-r from-black via-slate-950 to-slate-900 ': currentIndex === index}"
                            class="w-full p-4 mb-2 text-lg uppercase transition-colors font-semibold hover:bg-gradient-to-r hover:from-black hover:via-slate-950 hover:to-slate-900"
                            v-on:click="setEmployee(index)">
                        {{ item.companyName }}
                    </button>
                </div>
                <div class="md:w-2/3 md:pl-8">
                    <h4 class="text-2xl uppercase font-semibold text-white" v-text="employeeSelected.jobTitle"></h4>
                    <div class="w-full md:flex md:justify-between">
                        <p class="text-base md:text-lg text-slate-400" v-text="employeeSelected.companyName"></p>
                        <p class="text-base md:text-lg text-slate-400 text-right" v-text="employeeSelected.dates"></p>
                    </div>
                    <p class="text-gray-100 mt-4 text-justify text-lg" v-text="employeeSelected.description"></p>
                </div>
            </div>
        </div>
    </section>
</template>
