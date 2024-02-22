<template>
    <h1>App from vue</h1>
    <p>Digite seu nome: </p>
    <input type="text" v-model="name">
    <p>{{ name }}</p>
</template>

<script setup>
    import {ref} from "vue";

    const name = ref()
</script>


<style scoped>

</style>
