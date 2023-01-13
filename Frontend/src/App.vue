<script setup>
import { useCounterStore } from './stores/counter';
import { useTaskStore } from './stores/TaskStore';

    const counter = useCounterStore();
    const task = useTaskStore();


</script>

<template>
  <header>
    <h1>HELLO {{ task.compliment }}</h1>
  </header>

  <RouterView />
</template>

