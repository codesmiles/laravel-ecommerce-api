<template>
  <div class="">
    <h1 class="uppercase text to-blue-400 text-2xl">this is the list of my task</h1>

    <div v-for="task in tasksList.tasks" :key="task.id" class="flex justify-around">
      <h1 class="text-2xl">{{ task.name }}</h1>
      <p class="text-2xl">{{ task.completed }}</p>
      
    </div>

    
  </div>
</template>

<script setup>
import { useTaskStore } from '../stores/TaskStore';
import {components} from "vue"
const tasksList = useTaskStore();

</script>
