<script lang="ts" setup>
import TitleSection from "@/Components/TitleSection.vue";

const profileImageUrl = "/assets/images/IMG_6430.PNG";
</script>

<template>
    <section id="about" class="w-full px-4 mx-auto lg:max-w-6xl content-center">
        <TitleSection>Sobre Mí</TitleSection>

        <div class="md:flex md:space-x-16 space-y-4 md:space-y-0 content-center">
            <!-- Text Content -->
            <div
                class="md:basis-2/3 space-y-4 text-neutral-300 leading-relaxed rounded-md ">
                <p class="md:text-xl text-justify">
                    ¡Hola! Soy Miguel Uicab, aunque todos me llaman <em>Mort</em>. Tengo 24 años y una gran pasión por
                    la tecnología. Tengo intereses filantropicos así como en el servicio público, con el propósito de
                    convertirme en un empresario exitoso. Soy extrovertido, lo que me ha permitido conectar con gente
                    increíble en diversos ámbitos: trabajo, viajes, cursos, reuniones, etc.
                </p>
                <p class="md:text-lg text-justify">
                    En mi tiempo libre, disfruto pasar tiempo con amigos, ver películas, escuchar música, leer, meditar
                    y buscar mi crecimiento personal. Mis deportes favoritos son la F1 y el boxeo, que, aunque parecen
                    individuales, dependen de un equipo para lograr el éxito. Creo firmemente que "el éxito se logra
                    mejor en equipo". Mis experiencias y errores me han ayudado a crecer tanto personal como
                    profesionalmente. Lo cual me ha ayudado a tener un enfoque en soluciones rápidas y eficientes,
                    manteniendo las buenas prácticas y calidad.
                </p>

            </div>

            <!-- Image -->
            <div class="md:basis-1/3 flex justify-center items-center">
                <img
                    alt="Profile Picture"
                    class="w-60 h-60 md:w-72 md:h-72 rounded-full shadow-2xl border-4 border-slate-700 object-cover"
                    src="/assets/images/IMG_6430.PNG"
                />
            </div>
        </div>
    </section>
</template>
<style scoped>
.back-body {
    background: radial-gradient(circle, rgba(255, 255, 255, 0.1), #0a0a0a 60%);
    background-color: #0a0a0a;
    height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
}
</style>
