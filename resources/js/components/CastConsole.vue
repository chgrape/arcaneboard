<script setup lang="ts">
import { Form, useForm } from '@inertiajs/vue3';
import axios from 'axios';
import { ref } from 'vue';
import { Spell } from '../types';

const command = ref("")

const emit = defineEmits<{
    cast: [spell:Spell]
}>()

const handleSubmit = async () =>{
    const res = await axios.post('http://localhost:8000/api/cast', {
        name: command.value
    })
    
    emit('cast', res.data.spell)
}

</script>

<template>
    <form @submit.prevent="handleSubmit" class="w-full">
        <input v-model="command" type="text" class="bg-black border-2 
        focus:outline-0 border-gray-600 
        text-white w-full rounded-md p-4" placeholder="Cast command">
    </form>
</template>