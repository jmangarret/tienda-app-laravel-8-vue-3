<template>
    <app-layout title="Marcas">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Marcas de Productos
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Tabla :marcas="$page.props.marcas.data" />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Tabla from '@/Pages/Marcas/Tabla'

export default {
    components:{
        AppLayout,
        Tabla
    },
    props:{
        marcas: Array
    },
}
</script>
