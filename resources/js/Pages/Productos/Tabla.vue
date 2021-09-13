<template>
  <Link
    :href="route('productos.create')"
    type="button"
    class="custom-btn blue"
  >
    Crear Producto
  </Link>

  <table class="custom-table">
    <thead>
      <tr class="text-left border-b border-gray-300">
        <th scope="col" class="custom-th">
          Nombre
        </th>
         <th scope="col" class="custom-th">
          Talla
        </th>
        <th scope="col" class="custom-th">
          Observaciones
        </th>
         <th scope="col" class="custom-th">
          Marca
        </th>
        <th scope="col" class="custom-th">
          Cantidad
        </th>
        <th scope="col" class="custom-th">
          Fecha Embarque
        </th>
        <th scope="col" class="custom-th">
          Acciones
        </th>
      </tr>
    </thead>
    <tbody class="custom-tbody">
      <tr v-for="producto in productos" :key="producto.id">
        <td class="px-6 py-4 whitespace-nowrap">
          <div class="flex items-center">
            <div class="ml-4">
              <div class="text-sm font-medium">{{ producto.nombre }}</div>
            </div>
          </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm">{{ producto.talla }}</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm">{{ producto.observaciones }}</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm">{{ producto.marca.nombre }}</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm">{{ producto.cantidad }}</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm">{{ producto.fecha_embarque }}</div>
        </td>
        <td class="flex m-2">
          <Link
            :href="route('productos.edit', producto.id)"
            class="custom-btn purple"
            type="button"
          >
            Editar
          </Link>
          <Link
            method="delete"
            :href="route('productos.destroy', producto.id)"
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
    productos: Array,
  },
};
</script>
