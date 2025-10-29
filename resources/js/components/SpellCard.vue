<script setup lang="ts">
import { Spell } from '../types';

const props = defineProps<Spell>()
</script>

<template>
    <div class="mx-[15%] w-full p-4 bg-gray-700 rounded-md flex justify-between">
        <h1>{{ props.name }}</h1>
        <h1>Power: {{ props.power }}</h1>
    </div>
</template>
