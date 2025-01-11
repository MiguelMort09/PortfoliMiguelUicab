<script lang="ts" setup>
import TitleSection from "@/Components/TitleSection.vue";
import {onMounted, ref} from "vue";

interface Employee {
    id: number;
    jobTitle: string;
    companyName: string;
    dates: string;
    description: string;
}

// Estado reactivo para empleos
const employments = ref<Employee[]>([]);
const currentIndex = ref<number>(0);
const employeeSelected = ref<Employee | null>(null);

// Establecer empleado seleccionado
const setEmployee = (index: number) => {
    currentIndex.value = index;
    employeeSelected.value = employments.value[index];
};

// Cargar datos al montar el componente
onMounted(async () => {
    const response = await fetch(route('api.employments.index'));
    const data: Employee[] = await response.json();
    employments.value = data;
    if (employments.value.length) {
        employeeSelected.value = employments.value[0];
    }
});
</script>


<template>
    <section id="experiences" class="py-20 bg-black text-white">
        <div class="container mx-auto px-4">
            <TitleSection :title="'Experiences'"/>
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/3 mb-8 md:mb-0">
                    <button
                        v-for="(item, index) in employments"
                        :key="index"
                        v-animateonscroll="{ enterClass: 'animate-zoomin' }"
                        :class="{
                    'w-full bg-gradient-to-r from-black via-slate-950 to-slate-900 ': currentIndex === index
                    }"
                        class="w-full p-4 mb-2 text-lg uppercase transition-colors font-semibold hover:bg-gradient-to-r hover:from-black hover:via-slate-950 hover:to-slate-900"
                        @click="setEmployee(index)"
                    >
                        {{ item.companyName }}
                    </button>
                </div>

                <div v-if="employeeSelected !== null" class="md:w-2/3 md:pl-8">
                    <div
                        v-animateonscroll="{ enterClass: 'animate-zoomin' }"
                        class="w-full animate-duration-300">
                        <article
                            :key="employeeSelected.id"
                            class="w-full space-y-4 px-8 py-4 animate-duration-300"
                        >
                            <h4 class="text-2xl uppercase font-semibold text-white md:text-right text-center">
                                {{ employeeSelected.jobTitle }}
                            </h4>
                            <div class="flex flex-col md:flex-row md:justify-between">
                                <h3 class="text-slate-400 text-center">{{ employeeSelected.companyName }}</h3>
                                <h4 class="text-slate-400 md:text-right text-center">{{ employeeSelected.dates }}</h4>
                            </div>
                            <p class="text-gray-100 text-center md:text-left md:text-lg">
                                {{ employeeSelected.description }}
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
