<script lang="ts" setup>
defineProps<{
    title: String,
}>();
</script>

<template>
    <div v-animateonscroll="{ enterClass: 'animate-zoomin' }" class="animate-duration-100">
        <h2 class="text-4xl font-bold mb-12 text-center" v-text="title">
        </h2>
    </div>
</template>
