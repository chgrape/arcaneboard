<script setup lang="ts">
const props = defineProps<{
    player: string
}>()

</script>

<template>
    <div>
        <h1>Match</h1>
        <h1>Player 1 hp: {{ props.player }}</h1>
    </div>
</template>