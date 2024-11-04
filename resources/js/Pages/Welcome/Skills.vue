<script lang="ts" setup>
import TitleSection from "@/Components/TitleSection.vue";

const icons = {
    alpinejs: "/assets/icons/alpinejs/alpinejs-original.svg",
    amazonwebservices:
        "assets/icons/amazonwebservices/amazonwebservices-original-wordmark.svg",
    apache: "/assets/icons/apache/apache-original.svg",
    axios: "/assets/icons/axios/axios-plain.svg",
    azuredevops: "/assets/icons/azuredevops/azuredevops-original.svg",
    bash: "/assets/icons/bash/bash-original.svg",
    bootstrap: "/assets/icons/bootstrap/bootstrap-original.svg",
    cloudflare: "/assets/icons/cloudflare/cloudflare-original.svg",
    composer: "/assets/icons/composer/composer-original.svg",
    csharp: "/assets/icons/csharp/csharp-original.svg",
    css3: "/assets/icons/css3/css3-original.svg",
    digitalocean: "assets/icons/digitalocean/digitalocean-original.svg",
    docker: "/assets/icons/docker/docker-original.svg",
    git: "/assets/icons/git/git-original.svg",
    github: "/assets/icons/github/github-original-negative.svg",
    html5: "/assets/icons/html5/html5-original.svg",
    java: "/assets/icons/java/java-original.svg",
    javascript: "/assets/icons/javascript/javascript-original.svg",
    jquery: "/assets/icons/jquery/jquery-original.svg",
    json: "/assets/icons/json/json-original.svg",
    laravel: "/assets/icons/laravel/laravel-original.svg",
    linux: "/assets/icons/linux/linux-original.svg",
    livewire: "/assets/icons/livewire/livewire-original.svg",
    mariadb: "/assets/icons/mariadb/mariadb-original.svg",
    markdown: "/assets/icons/markdown/markdown-original-negative.svg",
    maven: "assets/icons/maven/maven-original.svg",
    microsoftsqlserver:
        "assets/icons/microsoftsqlserver/microsoftsqlserver-original.svg",
    mongodb: "/assets/icons/mongodb/mongodb-original.svg",
    mysql: "/assets/icons/mysql/mysql-original.svg",
    nextjs: "/assets/icons/nextjs/nextjs-original.svg",
    nginx: "/assets/icons/nginx/nginx-original.svg",
    nodejs: "/assets/icons/nodejs/nodejs-original.svg",
    npm: "assets/icons/npm/npm-original-wordmark.svg",
    nuget: "/assets/icons/nuget/nuget-original.svg",
    numpy: "/assets/icons/numpy/numpy-original.svg",
    nuxtjs: "/assets/icons/nuxtjs/nuxtjs-original.svg",
    oracle: "/assets/icons/oracle/oracle-original.svg",
    php: "/assets/icons/php/php-original.svg",
    postman: "/assets/icons/postman/postman-original.svg",
    python: "/assets/icons/python/python-original.svg",
    react: "/assets/icons/react/react-original.svg",
    redis: "/assets/icons/redis/redis-original.svg",
    sass: "/assets/icons/sass/sass-original.svg",
    spring: "/assets/icons/spring/spring-original.svg",
    sqlite: "/assets/icons/sqlite/sqlite-original.svg",
    ssh: "/assets/icons/ssh/ssh-original.svg",
    typescript: "/assets/icons/typescript/typescript-original.svg",
    tailwindcss: "/assets/icons/tailwindcss/tailwindcss-original.svg",
    ubuntu: "/assets/icons/ubuntu/ubuntu-original.svg",
    vercel: "assets/icons/vercel/vercel-original-negative.svg",
    vitejs: "/assets/icons/vitejs/vitejs-original.svg",
    vuejs: "/assets/icons/vuejs/vuejs-original.svg",
    webpack: "/assets/icons/webpack/webpack-original.svg",
    windows11: "assets/icons/windows11/windows11-original.svg",
    xml: "assets/icons/xml/xml-original.svg",
    yaml: "assets/icons/yaml/yaml-original-negative.svg",
    yarn: "assets/icons/yarn/yarn-original.svg",
};
</script>

<template>
    <section class="container-landing-page">
        <TitleSection>Work Experience</TitleSection>
        <div
            class="grid grid-cols-4 sm:grid-cols-6 lg:grid-cols-8 xl:grid-cols-12 gap-4"
        >
            <div
                v-for="(iconPath, iconName) in icons"
                :key="iconName"
                class="relative flex items-center justify-center"
            >
                <!-- Contenedor para sombra y degradado -->
                <div
                    class="absolute inset-1/2 bg-gradient-to-b from-transparent via-transparent to-red-600 rounded-lg"
                ></div>

                <!-- Ícono con sombra y borde redondeado -->
                <img
                    :alt="iconName + ' icon'"
                    :src="iconPath"
                    class="object-cover relative rounded-lg border border-red-100 p-3 shadow-lg shadow-red-600 transition-transform transform hover:scale-105"
                />
            </div>
        </div>
    </section>
</template>

<style scoped></style>
