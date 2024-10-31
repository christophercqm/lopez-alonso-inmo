<template>
    <section class="custom-section padding-y">
        <div class="custom-background-overlay"></div>
        <div class="custom-shape-top">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 2600 131.1"
                preserveAspectRatio="none"
            >
                <path
                    class="custom-shape-fill"
                    d="M0 0L2600 0 2600 69.1 0 0z"
                    style="fill: #fff; transform-origin: center; transform: rotateY(0deg);"

                ></path>
                <path
                    class="custom-shape-fill"
                    style="opacity: 0.5; fill: #fff; transform-origin: center; transform: rotateY(0deg);"
                    d="M0 0L2600 0 2600 69.1 0 69.1z"
                ></path>
                <path
                    class="custom-shape-fill"
                    style="opacity: 0.25; fill: #fff; transform-origin: center; transform: rotateY(0deg);"
                    d="M2600 0L0 0 0 130.1 2600 69.1z"
                ></path>
            </svg>
        </div>
        <div class="custom-shape-bottom">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 2600 131.1"
                preserveAspectRatio="none"
            >
                <path
                    class="custom-shape-fill"
                    d="M0 0L2600 0 2600 69.1 0 0z"
                    style="fill: #fff; transform-origin: center; transform: rotateY(0deg);"
                ></path>
                <path
                    class="custom-shape-fill"
                    d="M0 0L2600 0 2600 69.1 0 69.1z"
                    style="opacity: 0.5; fill: #fff; transform-origin: center; transform: rotateY(0deg);"

                ></path>
                <path
                    class="custom-shape-fill"
                    style="opacity: 0.25; fill: #fff; transform-origin: center; transform: rotateY(0deg);"
                    d="M2600 0L0 0 0 130.1 2600 69.1z"
                ></path>
            </svg>
        </div>

        <div class="custom-container">
            <div class="custom-column">
                <h2 class="custom-heading">Colaboradores De Calidad</h2>
                <p class="text-center">
                    Nuestra máxima preocupación, se basa en conseguir el mejor
                    resultado en todas nuestras operaciones, <br />por lo que
                    nos asociamos, a profesionales que nos garantizan un trabajo
                    excelente.&nbsp;
                </p>
                <section class="custom-inner-section">
                    <div class="custom-row row max-width">
                        <div class="col d-flex justify-content-between flex-wrap">
                            <div
                                class="custom-image d-flex align-items-center justify-content-center"
                                v-for="(logo, index) in logos"
                                :key="index"
                            >
                                <img
                                    :src="logo.src"
                                    :alt="logo.alt"
                                    class="custom-logo"
                                    loading="lazy"
                                    decoding="async"
                                />
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

// Array de objetos para las imágenes de los logos
const logos = ref([
    {
        src: "https://lopezalonsoinmobiliaria.com/wp-content/uploads/2024/04/logotipo-beatriz_Mesa-de-trabajo-1-1024x598.webp",
        alt: "Logotipo Beatriz",
    },
    {
        src: "https://lopezalonsoinmobiliaria.com/wp-content/uploads/2024/04/logo-Abaloa-fondo-claro-1-1024x314.webp",
        alt: "Logo Abaloa",
    },
    {
        src: "https://lopezalonsoinmobiliaria.com/wp-content/uploads/2024/04/logo_elayudante_Mesa-de-trabajo-1-2-150x150.webp",
        alt: "Logo El Ayudante",
    },
    {
        src: "https://lopezalonsoinmobiliaria.com/wp-content/uploads/2024/04/panaderia_gallofa_logo.webp",
        alt: "Logo Panadería Gallofa",
    },
    {
        src: "https://lopezalonsoinmobiliaria.com/wp-content/uploads/2024/04/SAIZ_LOGO_AN_PNG_CLAIM.png",
        alt: "Logo SAIZ",
    },
]);
</script>

<style scoped>
.custom-section {
    position: relative;
    background-color: #E6E6E6;
}

.custom-background-overlay {
    /* Estilos para la superposición de fondo */
}



.custom-container {
    padding: 50px 0;
}

.custom-heading {
    text-align: center;
    font-size: 2rem;
    margin-bottom: 20px;
}

.custom-row {
    display: flex;
    justify-content: center;
    flex-wrap: wrap; /* Permite que los logos se ajusten en varias líneas si es necesario */
}

.custom-image {
    padding: 1rem;
    width: 200px;
    height: 200px;
}

.custom-logo {
    max-width: 100%; 
    height: 100%;
    object-fit: contain;
}

.custom-heading {
    font-size: 3rem;
    font-weight: 400;
    color: var(--red);
}


.custom-shape-top {
    top: -1px;
    position: absolute;
    overflow: hidden;
    left: 0;
    width: 100%;
    line-height: 0;
    direction: ltr;
}

.custom-shape-top svg{
    height: 71px;
    width: calc(100% + 1.3px);
    position: relative;
    left: 50%;
    transform: translateX(-50%);
}

.custom-shape-bottom {
    bottom: -1px;
    overflow: hidden;
    width: 100%;
    line-height: 0;
    direction: ltr;
    transform: rotate(180deg);
    bottom: -1px;
    position: absolute;
}

.custom-shape-bottom svg {
    height: 71px;
    z-index: -1;
    width: calc(100% + 1.3px);
    position: relative;
    left: 50%;
    transform: translateX(-50%);

}
</style>
