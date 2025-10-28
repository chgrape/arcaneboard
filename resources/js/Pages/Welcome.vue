<script setup lang="ts">
import { Element } from '../types';

const props = defineProps<{
    elements: Element[]
}>()

console.log(props.elements)

</script>

<template>
    <div class="text-2xl">
        <h1 v-for="el in elements">{{ el.name }}</h1>
    </div>
</template>