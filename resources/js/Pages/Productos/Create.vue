<template>
  <app-layout title="Productos">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Creación de Producto
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <form @submit.prevent="submit" class="mb-6">
            <div
              class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7"
            >
              <div class="grid grid-cols-1">
                <label class="custom-label">Nombre</label>
                <input
                  id="nombre"
                  v-model="form.nombre"
                  class="custom-input"
                  type="text"
                  placeholder="Nombre del Producto"
                />
                <div class="bg-red-100 text-red-700" v-if="errors">{{ errors.nombre }}</div>
              </div>

              <div class="grid grid-cols-1">
                <label class="custom-label">Talla</label>
                 <select id="talla" v-model="form.talla" class="custom-input">
                    <option v-for="(item, key) in tallas" :value="key">
                    {{item}}
                    </option>
                </select>
                <div class="bg-red-100 text-red-700" v-if="errors">{{ errors.talla }}</div>
              </div>

              <div class="grid grid-cols-1">
                <label class="custom-label">Observaciones</label>
                <input
                  id="observaciones"
                  v-model="form.observaciones"
                  class="custom-input"
                  type="text"
                  placeholder="Observaciones"
                />
                <div class="bg-red-100 text-red-700" v-if="errors">{{ errors.observaciones }}</div>
              </div>

              <div class="grid grid-cols-1">
                <label class="custom-label">Marca</label>
                 <select id="marca" v-model="form.marca_id" class="custom-input">
                    <option v-for="(item, key) in marcas" :value="key">
                    {{item}}
                    </option>
                </select>
                <div class="bg-red-100 text-red-700" v-if="errors">{{ errors.marca_id }}</div>
              </div>

              <div class="grid grid-cols-1">
                <label class="custom-label">Cantidad</label>
                <input
                  id="cantidad"
                  v-model="form.cantidad"
                  class="custom-input"
                  type="text"
                  placeholder="Cantidad en Inventario"
                />
                <div class="bg-red-100 text-red-700" v-if="errors">{{ errors.cantidad }}</div>
              </div>

              <div class="grid grid-cols-1">
                <label class="custom-label">Fecha Embarque</label>
                <input
                  id="fecha_embarque"
                  v-model="form.fecha_embarque"
                  class="custom-input"
                  type="date"
                  placeholder="Fecha de Embarque"
                />
                <div class="bg-red-100 text-red-700" v-if="errors">{{ errors.fecha_embarque }}</div>
              </div>

            </div>

            <div class="flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5">
              <Link
                :href="route('productos.index')"
                class="custom-btn gray"
                type="button"
              >
                Cancelar
              </Link>
              <button type="submit" class="custom-btn purple">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import { Link } from "@inertiajs/inertia-vue3";

export default {
  components: {
    AppLayout,
    Link,
  },
  props: {
    errors: Object,
    tallas: Array,
    marcas: Array,
  },
  data() {
    return {
      form: {
        nombre: null,
        talla: null,
        observaciones: null,
        marca_id: null,
        cantidad: null,
        fecha_embarque: null,
      },
    };
  },
  methods: {
    submit() {
      this.$inertia.post(route("productos.store"), this.form);
    },
  },
};
</script>
