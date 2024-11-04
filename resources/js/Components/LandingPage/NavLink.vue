<script setup>
import { computed } from "vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});

const classes = computed(() =>
    props.active
        ? "text-red-600 text-lg font-bold hover:text-red-800 transition duration-150 ease-in-out"
        : "text-white text-lg hover:text-red-800 transition duration-150 ease-in-out",
);
</script>

<template>
    <Link :class="classes" :href="href">
        <slot />
    </Link>
</template>
