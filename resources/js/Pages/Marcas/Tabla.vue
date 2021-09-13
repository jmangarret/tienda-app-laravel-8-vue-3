<template>
  <Link
    :href="route('marcas.create')"
    type="button"
    class="custom-btn blue"
  >
    Crear Marca
  </Link>

  <table class="rounded-t-lg mt-5 min-w-full mx-auto bg-gray-800 text-gray-100">
    <thead>
      <tr class="text-left border-b border-gray-300">
        <th scope="col" class="custom-th">
          Nombre
        </th>
       <th scope="col" class="custom-th">
          Referencia
        </th>
        <th scope="col" class="custom-th">
          Acciones
        </th>
      </tr>
    </thead>
    <tbody class="bg-gray-700 border-b border-gray-600 text-gray-200">
      <tr v-for="marca in marcas" :key="marca.id">
        <td class="px-6 py-4 whitespace-nowrap">
          <div class="flex items-center">
            <div class="ml-4">
              <div class="text-sm font-medium">{{ marca.nombre }}</div>
            </div>
          </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm">{{ marca.referencia }}</div>
        </td>
        <td class="flex m-2">
          <Link
            :href="route('marcas.edit', marca.id)"
            class="custom-btn purple"
            type="button"
          >
            Editar
          </Link>
          <Link
            method="delete"
            :href="route('marcas.destroy', marca.id)"
            class="custom-btn pink"
            type="button"
          >
            Borrar
          </Link>
        </td>
      </tr>
    </tbody>
  </table>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
  components: {
    Link,
  },
  props: {
    marcas: Array,
  },
};
</script>
