<script setup>
import { onMounted, ref } from "vue";

// Importar componentes usados en el template
import GuestLayout from "@/Layouts/GuestLayout.vue";
import VideoPlayer from "@/Components/VideoPlayer/VideoPlayer.vue";
import Separator from "@/Components/Separator.vue";
import InfoAlonso from "@/Components/Home/InfoAlonso.vue";
import Contador from "@/Components/Home/Contador.vue";
import NuestraVision from "@/Components/Home/NuestraVision.vue";
import Banner from "@/Components/Home/Banner.vue";
import ServiciosGestion from "@/Components/Home/ServiciosGestion.vue";
import Colaboradores from "@/Components/Home/Colaboradores.vue";
import Asesoramiento from "@/Components/Home/Asesoramiento.vue";
import BlogActualidad from "@/Components/Home/BlogActualidad.vue";
import Resenias from "@/Components/Home/Resenias.vue";

// Variables reactivas para almacenar la información del backend
const dataFromBackend = ref({});
const isLoading = ref(true); // Estado de carga

onMounted(() => {
    // Verifica si el elemento con los datos JSON generados por PHP existe
    const phpDataElement = document.getElementById('php-data');
    
    if (phpDataElement) {
        const jsonText = phpDataElement.textContent;

        try {
            // Analiza el JSON y almacénalo en dataFromBackend
            dataFromBackend.value = JSON.parse(jsonText);
            console.log("Datos cargados desde PHP:", dataFromBackend.value);
            console.log("Datos cargados desde PHP:", JSON.parse(JSON.stringify(dataFromBackend.value)));

        } catch (error) {
            console.error("Error al analizar los datos JSON:", error);
        }
    } else {
        console.error("Elemento 'php-data' no encontrado en el DOM.");
    }
    isLoading.value = false; // Cambiar a falso una vez que los datos estén cargados
});
</script>

<template>
    <GuestLayout>
        <VideoPlayer videoId="gWTtOMnlpJc" videoTitle="House 2" />
        <div class="container-home">
            
            <div
                class="contain-info-home d-flex flex-column"
            >
                <h2 class="sub-title text-center">Vivir el verdadero sueño</h2>
                <h2 class="title text-center">
                    Espacios Que Transforman<br />Sueños en Realidad
                </h2>
                <p class="info-text-home text-center">
                    En nuestra inmobiliaria, cada cliente es una historia única,
                    un sueño por cumplir.<br />
                    Nos dedicamos a encontrar ese lugar perfecto, donde cada
                    rincón refleja tu esencia y cada espacio habla de futuro.
                </p>
                <a class="btn btn-transparent" href="#primer_elemento">
                    <span>Sigue leyendo</span>
                </a>
            </div>
        </div>

        <Separator></Separator>

        <InfoAlonso></InfoAlonso>

        <Contador></Contador>

        <NuestraVision></NuestraVision>
        <Banner></Banner>
        <h2 class="max-width padding-y">Bloque para las propiedades destacadas</h2>

        <ServiciosGestion></ServiciosGestion>
        <Colaboradores></Colaboradores>

        <BlogActualidad></BlogActualidad>
        <Resenias></Resenias>
        <Asesoramiento></Asesoramiento>
    </GuestLayout>
</template>

<style scoped>
.container-home {
    position: relative; 
    max-width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    right: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    color: var(--white);
}

.sub-title {
    color: #FFFFFF;
    font-size: 18px;
    font-weight: 400;
}

.title {
    color: #FFFFFF;
    font-size: 80px;
    font-weight: 200;
}

.info-text-home {
    font-size: 15px;
    color: var(--whitev2);
}



</style>

