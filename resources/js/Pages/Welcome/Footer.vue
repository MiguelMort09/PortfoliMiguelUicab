<script lang="ts" setup>
const githubSVG = "/assets/icons/github/github-original-negative.svg";
const linkedin = "/assets/icons/linkedin/linkedin-original.svg";
</script>

<template>
    <footer class="bg-black w-full">
        <div class="container-landing-page py-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-bold">Miguel's Portfolio</h3>
                    <p class="text-justify mt-4">
                        Thank you for visiting my personal portfolio website.
                        Connect with me over socials.
                    </p>
                </div>
                <div class="text-right">
                    <h3 class="text-2xl font-bold">Contact Info</h3>
                    <div class="space-y-2 mt-4">
                        <p>+52 982 102 9769</p>
                        <p>devmigueluicab@gmail.com</p>
                        <div
                            class="w-full flex space-x-2 items-center justify-end"
                        >
                            <a
                                href="https://github.com/MiguelMort09"
                                rel="noopener noreferrer"
                                target="_blank"
                            >
                                <img
                                    :src="githubSVG"
                                    alt="GitHub"
                                    class="size-6 rounded-full object-cover"
                                />
                            </a>
                            <a
                                href="https://www.linkedin.com/in/miguel-ernesto-uicab-canabal-2b72601bb/"
                                rel="noopener noreferrer"
                                target="_blank"
                            >
                                <img
                                    :src="linkedin"
                                    alt="LinkedIn"
                                    class="size-6 rounded-full object-cover"
                                />
                            </a>
                            <a
                                href="https://github.com/MiguelMort09"
                                rel="noopener noreferrer"
                                target="_blank"
                            >
                                <img
                                    :src="githubSVG"
                                    alt="GitHub"
                                    class="size-6 object-cover"
                                />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<style scoped>
.container-landing-page {
    @apply w-full px-4 mx-auto lg:max-w-6xl content-center;
}
</style>
