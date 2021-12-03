<template>
    <app-layout title="Producto">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Producto
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <h1 v-for="(objeto, index) in producto" :key="index">{{objeto.nombre}}</h1>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'

    export default defineComponent({
        components: {
            AppLayout,
            
        },
        props:['producto']
    })
</script>
