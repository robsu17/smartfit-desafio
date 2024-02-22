<template>
    <div class="max-w-[360px] h-[500px] border-4 border-gray-200 bg-gray-100 rounded p-4 flex flex-col gap-4">
        <div>
            <p class="text-green-smartfit font-bold">Aberto</p>
        </div>
        <div class="flex flex-col gap-2">
            <h1 class="text-2xl text-dark-grey font-bold">Vincente Linhares</h1>
            <p class="text-light-grey">
                Rua Tibúrcio Cavalcante, 1885 - Meireles, Fortaleza, Ce
            </p>
            <span class="mt-1 h-[3px] bg-gray-300"></span>
        </div>
        <div class="flex items-center">
            <img class="w-[80px]" :src="requiredmask" alt="mark">
            <img class="w-[80px]" :src="requiredtower" alt="mark">
            <img class="w-[80px]" :src="partialfountain" alt="mark">
            <img class="w-[80px]" :src="forbiddenlockerroom" alt="mark">
        </div>
        <div class="flex flex-wrap gap-10">
            <div>
                <h1 class="text-dark-grey text-xl font-bold">Seg. à Sex.</h1>
                <p class="text-light-grey">06h às 22h</p>
            </div>
            <div>
                <h1 class="text-dark-grey text-xl font-bold">Sáb.</h1>
                <p class="text-light-grey">09h às 18h</p>
            </div>
            <div>
                <h1 class="text-dark-grey text-xl font-bold">Dom.</h1>
                <p class="text-light-grey">Fechada</p>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import requiredmask from '../assets/required-mask.png'
import requiredtower from '../assets/required-towel.png'
import partialfountain from '../assets/partial-fountain.png'
import forbiddenlockerroom from '../assets/forbidden-lockerroom.png'

</script>
