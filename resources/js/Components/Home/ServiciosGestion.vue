<template>
    <section class="custom-section custom-top-section">
        <div class="custom-background-overlay"></div>
        <div class="red-overlay"></div> <!-- Capa roja overlay -->

        <div class="custom-container">
            <div class="custom-widget-wrap w-100">
                <section class="custom-inner-section padding-y position-relative">
                    <div class="overlay"></div>
                    <h2 class="custom-heading text-white mb-5">
                        Servicios de Gestión Inmobiliaria
                    </h2>
                    <!-- Shapes dentro del contenedor principal -->
                   <!--<div class="custom-shape custom-shape-top position-absolute" style="top: 0; left: 0; right: 0;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                            <path class="custom-shape-fill" d="M0,6V0h1000v100L0,6z"></path>
                        </svg>
                    </div>-->
                    <!--div class="custom-shape custom-shape-bottom position-absolute" style="bottom: 0; left: 0; right: 0;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                            <path class="custom-shape-fill" d="M0,6V0h1000v100L0,6z"></path>
                        </svg>
                    </div>-->
                    <div class="custom-container max-width">
                        <div class="custom-row row">
                            <div class="custom-column col-4" v-for="(item, index) in imageBoxes" :key="index">
                                <div class="custom-image-box custom-widget custom-widget-image-box">
                                    <div class="custom-widget-container">
                                        <div class="custom-image-box-wrapper d-flex flex-column align-items-center p-4">
                                            <figure class="custom-image-box-img mb-4">
                                                <img :src="item.src" class="img-personal" :alt="item.title"
                                                    loading="lazy" decoding="async" />
                                            </figure>
                                            <div class="custom-image-box-content text-center">
                                                <h3 class="custom-image-box-title">
                                                    {{ item.title }}
                                                </h3>
                                                <p class="custom-image-box-description text-white">
                                                    {{ item.description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref } from "vue";

// Array de objetos para las imágenes
const imageBoxes = ref([
    {
        src: "https://lopezalonsoinmobiliaria.com/wp-content/uploads/2024/08/icon-1-1.png",
        title: "Búsqueda de Propiedades",
        description:
            "Nos comprometemos a encontrar la propiedad ideal, garantizando una búsqueda efectiva y satisfactoria, más allá de lo convencional.",
    },
    {
        src: "https://lopezalonsoinmobiliaria.com/wp-content/uploads/2024/08/icon-3-1.png",
        title: "Gestión Legal",
        description:
            "Elaboramos documentación legal para asegurar transacciones sin contratiempos. De forma clara y segura, marcada por la confianza y tranquilidad.",
    },
    {
        src: "https://lopezalonsoinmobiliaria.com/wp-content/uploads/2024/08/icon-2-150x111-1.png",
        title: "Servicio Llave en Mano",
        description:
            "Gestionamos cada detalle con un servicio llave en mano. Con expertos cualificados para transformar cada espacio a tu gusto sin complicaciones.",
    },
]);
</script>

<style scoped>
.custom-section {
    padding: 50px 0;
}

.custom-inner-section {
    background: url("../../../images/home/bg-servicios-gestion.jpg") center no-repeat;
    position: relative; /* Para permitir posicionamiento absoluto de los shapes */
    background-size: cover;
}

.custom-heading {
    z-index: 1;
    position: relative;
    text-align: center;
    font-size: 3rem;
    font-weight: 400;
}

.custom-container {
    display: flex;
    z-index: 1;
    position: relative;
}

.custom-row {
    display: flex; /* Asegura que las columnas se alineen horizontalmente */
    flex-wrap: wrap; /* Permite que las columnas se ajusten en varias líneas si es necesario */
}

.custom-image-box {
    position: relative; /* Para permitir el contenido superpuesto */
    overflow: hidden; /* Para asegurar que nada salga del contenedor */
}

.custom-shape-fill {
    fill: #f0f0f0;
}

.custom-image-box-title {
    font-size: 18px;
    color: var(--white);
}

.custom-image-box-description {
    font-size: 14px;
}

.custom-image-box-img {
    width: 70px;
    max-width: 70px;
    height: 70px;
    max-height: 70px;
}

.img-personal {
    width: 100%;
    height: 100% !important;
    object-fit: contain;
}

.custom-shape-bottom {
    bottom: -1px;
}

.custom-shape-bottom svg {
    height: 65px;
    z-index: -1;
}

.custom-shape .elementor-shape-fill {
    fill: #fff;
    transform-origin: center;
    transform: rotateY(0deg);
}

.custom-shape-top {
    top: -1px;
}

.custom-shape {
    overflow: hidden;
    position: absolute;
    left: 0;
    width: 100%;
    line-height: 0;
    direction: ltr;
}
</style>
