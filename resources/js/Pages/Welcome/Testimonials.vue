<script lang="ts" setup>
import TitleSection from "@/Components/TitleSection.vue";
import {ref} from "vue";

const testimonials = [
    {
        name: "ING. CARLOS F DUARTE ANGULO",
        position: "DIRECTOR DE DESARROLLO DE SOFTWARE, GRUPO ICARUS",
        content: "Tuve el placer de supervisar y colaborar con Miguel en varios proyectos importantes. Su conocimiento técnico y su habilidad para traducir los requisitos del cliente en soluciones eficientes y de alta calidad fueron destacables. Sería de gran beneficio para cualquier empresa siendo capaz de impulsar el desarrollo y crecimiento de la misma."
    },
]

const currentTestimonial = ref<number>(0);

// Función para avanzar al siguiente testimonio
const nextTestimonial = () => {
    currentTestimonial.value = (currentTestimonial.value + 1)
}

// Función para retroceder al testimonio anterior
const prevTestimonial = () => {
    currentTestimonial.value = (currentTestimonial.value)
}
</script>
<template>
    <section id="testimonials" class="py-20 bg-slate-950 text-white bg-slate-950">
        <TitleSection :title="'Testimonials'"/>
        <div class="relative">
            <div
                v-animateonscroll="{ enterClass: 'animate-zoomin' }"
                class=" p-8 rounded-lg shadow-lg max-w-2xl mx-auto animate-duration-300"
            >

                <div class="max-w-screen-md mx-auto px-4 text-center">
                    <!-- Icono superior -->
                    <svg
                        aria-hidden="true"
                        class="w-12 h-12 mx-auto mb-6 text-gray-400 dark:text-gray-600"
                        fill="currentColor"
                        viewBox="0 0 18 14"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
                    </svg>

                    <!-- Bloque de Testimonio -->
                    <blockquote>
                        <p class="text-base sm:text-lg md:text-xl italic font-medium text-gray-900 dark:text-white">
                            {{ testimonials[currentTestimonial].content }}
                        </p>
                    </blockquote>

                    <!-- Información del autor -->
                    <div
                        class="mt-6 flex flex-col sm:flex-row items-center md:divide-x-2 md:divide-slate-500 justify-center space-y-2 sm:space-y-0 sm:space-x-4">
                        <cite class="text-sm sm:text-base font-semibold text-gray-900 dark:text-white">
                            {{ testimonials[currentTestimonial].name }}
                        </cite>
                        <cite class="text-sm sm:text-base text-gray-500 dark:text-gray-400">
                            {{ testimonials[currentTestimonial].position }}
                        </cite>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<style scoped></style>
