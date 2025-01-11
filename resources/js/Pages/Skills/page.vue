<script lang="ts" setup>
import {DataView, InputNumber, InputText, Knob, Select} from "primevue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import {Head, useForm} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {onMounted, ref} from "vue";


interface Icon {
    name: string;
    url: string;
}


defineProps<{
    skills: [],
    typesSkill: []
}>();
const icons = ref<Icon[]>([]);

const selectedIcon = ref<Icon | null>(null);
const loading = ref(false);
let lastLoaded = 0;  // Para controlar la carga de íconos

const skillForm = useForm({
    name: '',
    level: 0,
    type: 1,
    link_icon: ''
});

const saveSkill = () => {
    skillForm.post(route('skills.store'), {
        onError: (errors) => {
            console.error(errors); // Opcional: Log para debugging
        },
        onSuccess: () => {
            console.log('Skill created successfully!');
        }
    });
};

const updateLinkIcon = (newIcon: Icon) => {
    skillForm.link_icon = newIcon?.url || '';
};

// Función para cargar íconos de la API
const fetchIcons = async (start: number, limit: number) => {
    try {
        loading.value = true;
        // Llamada a la API para obtener los íconos (ajustar 'start' y 'limit' según sea necesario)
        const response = await fetch(route('get-icons', {start, limit}));
        const data = await response.json();
        loading.value = false;
        return data;  // Devuelve los íconos obtenidos
    } catch (error) {
        console.error('Error fetching icons:', error);
        loading.value = false;
    }
};

// Función que se llama para cargar más íconos cuando el usuario hace scroll
const onLazyLoad = async (event: any) => {
    // Definir cuántos íconos cargar por vez
    const limit = 20;
    const start = lastLoaded;

    const newIcons = await fetchIcons(start, limit);
    icons.value = [...icons.value, ...newIcons];  // Agregar los nuevos íconos a la lista
    lastLoaded += newIcons.length;  // Actualizar el índice de los íconos cargados
};


// Cargar los primeros íconos al montar el componente
onMounted(() => {
    onLazyLoad({first: 0, rows: 20});  // Cargar los primeros 20 íconos
});
</script>
<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                Dashboard
            </h2>
        </template>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid grid-col-1 md:grid-cols-2 xl:grid-cols-3 gap-8 lg:gap-12">
                    <div class="w-full h-full flex flex-col justify-center items-stretch">
                        <form @submit.prevent="saveSkill">
                            <div class="grid grid-cols-2 gap-8">
                                <div class="w-full">
                                    <label class="block mb-2" for="username">Nombre</label>
                                    <InputText
                                        v-model="skillForm.name"
                                        fluid
                                        name="name"
                                        required
                                    />
                                </div>
                                <div class="w-full">
                                    <label class="block mb-2" for="username">Tipo</label>
                                    <Select v-model="skillForm.type"
                                            :highlightOnSelect="false"
                                            :options="typesSkill"
                                            checkmark
                                            fluid
                                            option-label="label"
                                            option-value="value"
                                            placeholder="Select a City"/>
                                </div>
                                <div class="w-full">
                                    <label class="block mb-2" for="username">Dominio del 1 al 100</label>
                                    <InputNumber
                                        v-model="skillForm.level"
                                        :max="100"
                                        :min="0" fluid inputId="minmax-buttons"
                                        mode="decimal" showButtons/>
                                </div>
                                <div class="w-full">
                                    <label class="block mb-2" for="username">Icono</label>
                                    <Select v-model="selectedIcon"
                                            :options="icons"
                                            filter
                                            fluid
                                            optionLabel="name"
                                            placeholder="Select an Icon"
                                            @update:modelValue="updateLinkIcon"

                                    >
                                        <template #value="slotProps">
                                            <div v-if="slotProps.value" class="flex items-center">
                                                <!-- Mostrar la imagen relacionada con el nombre del ícono -->
                                                <img :alt="slotProps.value.name" :src="slotProps.value.url" class="mr-2"
                                                     style="width: 18px"/>
                                                <div>{{ slotProps.value.name }}</div>
                                            </div>
                                            <span v-else>{{ slotProps.placeholder }}</span>
                                        </template>
                                        <template #option="slotProps">
                                            <div class="flex items-center">
                                                <img :alt="slotProps.option.name" :src="slotProps.option.url"
                                                     class="size-8 mr-4"/>
                                                <div>{{ slotProps.option.name }}</div>
                                            </div>
                                        </template>
                                        <template #header>
                                            <div class="font-medium p-3">Available Countries</div>
                                        </template>
                                    </Select>
                                </div>
                            </div>
                            <div class="mt-6 flex w-full justify-end">
                                <PrimaryButton
                                    class="px-4 py-2 bg-gradient-to-r from-green-400 to-green-600 text-white font-bold rounded-full shadow-md hover:scale-105 transition-transform duration-300 hover:shadow-lg"
                                    type="submit"
                                >
                                    Guardar
                                </PrimaryButton>
                            </div>
                        </form>
                    </div>

                    <div class="xl:col-span-2 shadow-xl rounded-xl">
                        <DataView :paginator="true" :rows="8" :value="skills" dataKey="id" unstyled>
                            <template #list="slotProps">
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                    <div v-for="(item, index) in slotProps.items" :key="index">
                                        <div
                                            class="flex flex-wrap p-6 rounded-lg border border-gray-300 bg-slate-950">


                                            <!-- Nombre -->
                                            <div
                                                class="flex-shrink-0 w-full md:w-1/2 md text-center">
                                                <span class="text-lg font-medium text-center md:text-left">
                                                    {{ item.name }}
                                                </span>
                                            </div>
                                            <!-- Icono -->
                                            <div class="w-1/2 md:w-1/4 justify-items-center md:order-first">
                                                <img
                                                    :alt="item.name"
                                                    :src="item.link_icon"
                                                    class="size-20 rounded-full object-cover"
                                                />
                                            </div>


                                            <!-- Nivel -->
                                            <div class="w-1/2 md:w-1/4  justify-items-center">
                                                <Knob v-model="item.level" :size="100" readonly/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </DataView>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>

</template>

