<template>
  <Link
    :href="route('marcas.create')"
    type="button"
    class="
      flex-shrink-0
      bg-blue-500
      text-white text-base
      font-semibold
      py-2
      px-4
      rounded-lg
      shadow-md
      hover:bg-blue-700
      focus:outline-none
      focus:ring-2
      focus:ring-blue-500
      focus:ring-offset-2
      focus:ring-offset-blue-200
    "
  >
    Crear Marca
  </Link>

  <table class="rounded-t-lg mt-5 min-w-full mx-auto bg-gray-800 text-gray-100">
    <thead>
      <tr class="text-left border-b border-gray-300">
        <th
          scope="col"
          class="
            px-6
            py-3
            text-left text-xs
            font-medium
            text-gray-100
            uppercase
            tracking-wider
          "
        >
          Nombre
        </th>
        <th
          scope="col"
          class="
            px-6
            py-3
            text-left text-xs
            font-medium
            text-gray-100
            uppercase
            tracking-wider
          "
        >
          Referencia
        </th>
        <th
          scope="col"
          class="
            px-6
            py-3
            text-center text-xs
            font-medium
            text-gray-100
            uppercase
            tracking-wider
          "
        >
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
            class="
              flex-shrink-0
              bg-purple-600
              text-white text-base
              font-semibold
              py-2
              px-4
              rounded-lg
              shadow-md
              hover:bg-purple-700
              focus:outline-none
              focus:ring-2
              focus:ring-purple-500
              focus:ring-offset-2
              focus:ring-offset-purple-200
            "
            type="button"
          >
            Editar
          </Link>
          <Link
            method="delete"
            :href="route('marcas.destroy', marca.id)"
            class="
              flex-shrink-0
              bg-pink-500
              text-white text-base
              font-semibold
              py-2
              px-4
              rounded-lg
              shadow-md
              hover:bg-pink-700
              focus:outline-none
              focus:ring-2
              focus:ring-pink-500
              focus:ring-offset-2
              focus:ring-offset-pink-200
            "
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
