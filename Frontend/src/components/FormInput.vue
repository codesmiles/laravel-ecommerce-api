<template lang="">
    <div class="flex justify-around py-2">
    <label :for="name" class="inline-block w-20">{{name}}</label>
        <input :type="text" :v-model="name" class=" border border-lg border-x-rose-600"/>        
    </div>
</template>
<script>

export default {
    name: "FormInput",
    props: {
        name: {
            type: String,
            default: "",
        },
        type: {
            type: String,
            default: "text",
        },
        modelValue: {
            type: String,
            default: "",
        },
        }


    
}
</script>
