<script lang="ts" setup>
import TitleSection from "@/Components/TitleSection.vue";

const profileImageUrl = "/assets/images/IMG_6430.PNG";
</script>

<template>
    <section id="about" class="container-landing-page">
        <TitleSection>About Me</TitleSection>

        <div class="md:flex md:space-x-16 space-y-4">
            <div class="md:basis-2/3 content-center">
                <p
                    class="text-neutral-300 leading-relaxed md:text-lg text-justify"
                >
                    <!-- Cambia el texto según la versión de idioma que elijas -->
                    ¡Hola! Soy Miguel Uicab, pero para los amigos, simplemente
                    <em>Mort</em>. Tengo 24 años y una gran pasión por la
                    tecnología. También me interesa la filantropía y el servicio
                    público, con el sueño de convertirme en un empresario
                    exitoso. Ser extrovertido me ha ayudado a conectar con gente
                    increíble en todos lados: trabajo, viajes, cursos y
                    reuniones. <br /><br />
                    Mis pasatiempos incluyen la F1 y el boxeo. Aunque parecen
                    deportes individuales, cada victoria depende de un equipo.
                    Para mí, el éxito se logra mejor en equipo. En mi tiempo
                    libre, disfruto de ver películas, leer y pasar tiempo de
                    calidad con mis amigos. Gracias a mentores y errores en el
                    camino, he aprendido mucho. Profesionalmente, me enfoco en
                    soluciones eficientes y rápidas, siempre manteniendo buenas
                    prácticas y calidad.
                </p>
            </div>
            <div
                class="md:basis-1/3 min-h-full flex flex-col items-center justify-center"
            >
                <img
                    :src="profileImageUrl"
                    alt="Profile Image"
                    class="hidden md:block object-cover shadow-2xl shadow-red-600 rounded-full"
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
