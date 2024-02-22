<template>
    <div class="border-2 border-slate-200 p-5 rounded-lg flex flex-col gap-12">
        <div class="flex items-center gap-2">
            <img class="w-8" :src="horario" alt="horario">
            <h1>Horário</h1>
        </div>
        <div class="text-slate-500">
            <h1 class="border-b border-slate-300 mb-2 p-2">Qual período quer treinar?</h1>
            <label class="flex justify-between border-b border-slate-300 mb-2 py-2">
                <div class="flex items-center gap-2">
                    <input type="radio" name="period" id="period" value="manha" v-model="formulario.period">
                    <p>Manhã</p>
                </div>
                <div>06:00 às 12:00</div>
            </label>
            <label class="flex justify-between border-b border-slate-300 mb-2 py-2">
                <div class="flex items-center gap-2">
                    <input type="radio" name="period" id="period" value="tarde" v-model="formulario.period">
                    <p>Tarde</p>
                </div>
                <div>12:01 às 18:00</div>
            </label>
            <label class="flex justify-between border-b border-slate-300 mb-2 py-2">
                <div class="flex items-center gap-2">
                    <input type="radio" name="period" id="period" value="noite" v-model="formulario.period">
                    <p>Noite</p>
                </div>
                <div>18:01 às 23:00</div>
            </label>
        </div>
        <div class="flex items-center justify-between">
            <label class="flex items-center gap-2">
                <input type="checkbox" id="closed" name="closed" v-model="formulario.closed">
                <p class="text-slate-600">Exibir unidades fechadas</p>
            </label>
            <p class="text-slate-600">Resultados encontrados: <span class="text-slate-600 font-bold">{{ total }}</span></p>
        </div>
        <div class="flex gap-4 justify-center">
            <button @click="selecionado()" class="bg-yellow-smartfit w-[250px] rounded font-bold uppercase">Encontrar unidade</button>
            <button @click="clearForm()" class="bg-white border-2 border-slate-300 py-4 w-[250px] rounded font-bold uppercase">Limpar</button>
        </div>
    </div>
</template>

<script setup lang="ts">
import horario from '../../../public/images/icon-hour.png'
import {ref} from "vue";

type Formulario = {
    period: string
    closed: boolean
}

const formulario = ref<Formulario>({
    period: 'todos',
    closed: false
})

const total = ref(0)

async function selecionado() {
    const response = await fetch(`/buscadados/${formulario.value.period}/${formulario.value.closed}`)
    const data = await response.json()


    this.total = data.total
}

function clearForm() {
    formulario.value.period = 'todos'
    formulario.value.closed = false
}
</script>
