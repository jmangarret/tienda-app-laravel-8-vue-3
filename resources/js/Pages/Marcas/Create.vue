<template>
  <app-layout title="Marcas">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Creación de Marca
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
                <label
                  class="custom-label"
                  >Nombre</label
                >
                <input
                  id="nombre"
                  v-model="form.nombre"
                  class="custom-input"
                  type="text"
                  placeholder="Nombre de la Marca"
                />
                <div class="bg-red-100 text-red-700" v-if="errors">{{ errors.nombre }}</div>
              </div>
              <div class="grid grid-cols-1">
                <label
                  class="custom-label"
                  >Referencia</label
                >
                <input
                  id="referencia"
                  v-model="form.referencia"
                  class="custom-input"
                  type="text"
                  placeholder="Referencia"
                />
                <div class="bg-red-100 text-red-700" v-if="errors">{{ errors.referencia }}</div>
              </div>
            </div>

            <div class="flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5">
              <Link
                :href="route('marcas.index')"
                class="custom-btn gray"
                type="button"
              >
                Cancelar
              </Link>
              <button
                type="submit"
                class="custom-btn purple"
              >
                Guardar
              </button>
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
  },
  data() {
    return {
      form: {
        nombre: null,
        referencia: null,
      },
    };
  },
  methods: {
    submit() {
      this.$inertia.post(route("marcas.store"), this.form);
    },
  },
};
</script>
