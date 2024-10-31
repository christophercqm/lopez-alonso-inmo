<template>
  <div>
    <h1>Lista de Propiedades</h1>
    
    <!-- Verificación para mostrar un mensaje si no hay propiedades -->
    <div v-if="data.data.length === 0">No hay propiedades disponibles.</div>

    <ul>
      <li v-for="property in data.data" :key="property.id">
        {{ property.descripcion }} <!-- Ajusta esto según la propiedad que quieras mostrar -->
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: {
    data: {
      type: Object,
      required: true // Asegúrate de que el tipo de datos sea correcto
    }
  },

  // Utiliza el hook mounted para evitar problemas de consola
  mounted() {
    // Muestra los datos de propiedades en la consola
    console.log('Datos de propiedades:', this.data);
  }
}
</script>

<style scoped>
/* Puedes agregar estilos aquí */
</style>
