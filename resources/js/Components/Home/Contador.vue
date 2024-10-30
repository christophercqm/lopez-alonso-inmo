<template>
    <section class="stats-section max-width">
        <div class="container">
            <div class="row">
                <div class="col d-flex">
                    <div
                        v-for="(stat, index) in stats"
                        :key="index"
                        class="stat-column animated slideInUp"
                    >
                        <div class="stat-counter">
                            <div class="stat-number-wrapper">
                                <span
                                    class="stat-number"
                                    v-html="formatNumber(stat.value)"
                                ></span>
                                <span
                                    v-if="stat.suffix"
                                    class="stat-number-suffix"
                                >{{ stat.suffix }}</span>
                            </div>
                            <div class="stat-title">{{ stat.title }}</div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref } from "vue";

// Datos de los contadores en un objeto
const stats = ref([
    { title: "Inmuebles Disponibles", value: 350 },
    { title: "Ratio Éxito", value: 78, suffix: "%" },
    { title: "Precio promedio", value: 240, suffix: "M€" },
    { title: "Años de Experiencia", value: 25, suffix: "+" },
]);

// Formato para agregar comas a los números si es necesario
const formatNumber = (num) => {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
};
</script>

<style scoped>
.stats-section {
    padding: 20px;
    width: 100%; 
}
.container {
    display: flex;
    justify-content: center; 
    flex-wrap: wrap; 
    width: 100%; 
}
.row {
    display: flex;
    width: 100%; 
}
.stat-column {
    flex: 1 1 25%; 
    padding: 10px;
    text-align: center;
    box-sizing: border-box; 
}
.stat-counter {
    padding: 20px;
    border-radius: 8px;
    width: 100%; 
}
.stat-title {
    font-size: 1rem;
    margin-bottom: 10px;
    color: var(--red);
}
.stat-number-wrapper {
    color: #222222;
    font-family: "Poppins", Sans-serif;
    font-size: 65px;
    font-weight: 200;
}
@media (max-width: 768px) {
    .stat-column {
        flex: 1 1 50%; 
    }
}
@media (max-width: 480px) {
    .stat-column {
        flex: 1 1 100%; 
    }
}
</style>
