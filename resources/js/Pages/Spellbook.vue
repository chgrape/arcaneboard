<script setup lang="ts">
import { ref } from 'vue';
import CastConsole from '../components/CastConsole.vue';
import SpellCard from '../components/SpellCard.vue';
import { Element, Spell } from '../types';

const props = defineProps<{
    spells: Spell[],
}>()

const s = ref("")

const handleCallback = (spell: Spell) =>{
    s.value = spell.name
}

</script>

<template>
    <div class="text-2xl w-full px-16 flex justify-center flex-col items-center gap-5 pt-16">
        <SpellCard :id="s.id" :name="s.name" :power="s.power" v-for="s in spells" :key="s.id" />
        <CastConsole @cast="handleCallback" />
        <h1 v-if="s">{{ s }}</h1>
    </div>
</template>