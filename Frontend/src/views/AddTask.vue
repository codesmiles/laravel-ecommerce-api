<template>
    <form @submit.prevent="handleSubmit">
        <FormInput name="name" v-model="name" />
        <FormInput name="description" v-model="description" />
        <FormInput name="completed" v-model="completed" />
        
            <button type="submit" class="bg-blue-500 text-white px-5 py-2 rounded inline-block mx-auto">
                Submit
            </button>
        
    </form>
</template>

<script setup>
import { ref } from "vue";
import { useTaskStore } from "../stores/TaskStore";
import FormInputVue from "../components/FormInput.vue";
import { useRouter } from "vue-router";

const FormInput = FormInputVue;
const router = useRouter();

const name = ref("");
const description = ref("");
const completed = ref(false);

const task = useTaskStore();

const handleSubmit = () => {
    task.addTask({
        id: Math.floor(Math.random() * 1000),
        name: name.value,
        description: description.value,
        completed: completed.value,
    });

    // redirect to the home page
    return router.push("/");
};
</script>
