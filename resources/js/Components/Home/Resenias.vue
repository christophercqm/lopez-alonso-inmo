<script setup>
import { ref, onMounted } from "vue";
import customer_review_principal from "@images/home/customer-review.webp"; // Ajusta la ruta

const reviews = ref([
    {
        text: "El servicio fue excelente. Todo el proceso fue muy rápido y profesional.",
        author: "Juan Pérez",
        date: "Hace 2 semanas",
        image: "path_to_image_1.jpg",
    },
    {
        text: "Muy buena atención y profesionalismo. Recomendado para cualquier gestión.",
        author: "María García",
        date: "Hace 1 mes",
        image: "path_to_image_2.jpg",
    },
    {
        text: "Atención personalizada y rápida. Logré vender mi propiedad sin problemas.",
        author: "Carlos López",
        date: "Hace 5 meses",
        image: "path_to_image_3.jpg",
    },
    {
        text: "El mejor servicio inmobiliario que he tenido. Amables y eficientes.",
        author: "Ana Martínez",
        date: "Hace 11 meses",
        image: "path_to_image_4.jpg",
    },
]);

const currentIndex = ref(0);
let interval = null;

function startSlider() {
    interval = setInterval(() => {
        currentIndex.value = (currentIndex.value + 1) % reviews.value.length;
    }, 3000); // Cambia de slide cada 3 segundos
}

function stopSlider() {
    clearInterval(interval);
}

function goToSlide(index) {
    currentIndex.value = index;
    stopSlider();
    startSlider(); // Reinicia el slider para que continúe automáticamente
}

onMounted(() => {
    startSlider();
});
</script>

<template>
    <div class="custom-shape elementor-shape-top">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 2600 131.1"
            preserveAspectRatio="none"
        >
            <path
                class="custom-shape-fill path-1"
                d="M0 0L2600 0 2600 69.1 0 0z"
            ></path>
            <path
                class="custom-shape-fill path-2"
                style="opacity: 0.5"
                d="M0 0L2600 0 2600 69.1 0 69.1z"
            ></path>
            <path
                class="custom-shape-fill path-3"
                style="opacity: 0.25"
                d="M2600 0L0 0 0 130.1 2600 69.1z"
            ></path>
        </svg>
    </div>

    <div class="reviews-container flex-column py-5">
        <h2 class="title-resenias text-center">
            Reseñas reales<br />
            Google My Business
        </h2>
        <div class="container-slider-image d-flex align-items-center">
            <div class="slider h-100 bg-white">
                <div
                    class="slider-inner"
                    :style="{
                        transform: `translateX(-${currentIndex * 100}%)`,
                    }"
                >
                    <div
                        class="review-slide"
                        v-for="(review, index) in reviews"
                        :key="index"
                    >
                        <div class="review-card d-flex flex-column">
                            <div class="review-text">
                                <p class="stars">⭐⭐⭐⭐⭐</p>
                                <p>{{ review.text }}</p>
                                <p>
                                    <strong>{{ review.author }}</strong>
                                </p>
                                <p>{{ review.date }}</p>
                            </div>
                            <div class="review-image">
                                <img
                                    :src="review.image"
                                    alt="Customer Review"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Puntos de navegación -->
                <div class="dots">
                    <span
                        v-for="(review, index) in reviews"
                        :key="index"
                        class="dot"
                        :class="{ active: index === currentIndex }"
                        @click="goToSlide(index)"
                    ></span>
                </div>
            </div>
            <div class="main-image">
                <img
                    :src="customer_review_principal"
                    class="img-principal"
                    alt="Imagen principal"
                />
            </div>
        </div>
    </div>

    <div class="custom-shape elementor-shape-bottom">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 2600 131.1"
            preserveAspectRatio="none"
        >
            <path
                class="custom-shape-fill path-1"
                d="M0 0L2600 0 2600 69.1 0 0z"
            ></path>
            <path
                class="custom-shape-fill path-2"
                style="opacity: 0.5"
                d="M0 0L2600 0 2600 69.1 0 69.1z"
            ></path>
            <path
                class="custom-shape-fill path-3"
                style="opacity: 0.25"
                d="M2600 0L0 0 0 130.1 2600 69.1z"
            ></path>
        </svg>
    </div>
</template>

<style scoped>
.reviews-container {
    display: flex;
    align-items: center;
    font-family: Arial, sans-serif;
    background-color: #e6e6e6;
}

h2 {
    color: #d32f2f;
    font-size: 24px;
    margin-bottom: 20px;
}

.slider {
    overflow: hidden;
    max-width: 500px;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    z-index: 1;
    padding: 1rem;
}

.slider-inner {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.review-slide {
    min-width: 100%;
    display: flex;
    justify-content: center;
}

.review-card {
    display: flex;
    border-radius: 5px;
    padding: 20px;
    width: 100%;
    max-width: 800px;
}

.review-text {
    flex: 1;
    margin-right: 20px;
}

.stars {
    color: #ffbf00;
    font-size: 18px;
}

.review-image img {
    width: 100px;
    height: auto;
    border-radius: 8px;
}

/* Puntos de navegación */
.dots {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}

.dot {
    width: 10px;
    height: 10px;
    background-color: #ccc;
    border-radius: 50%;
    margin: 0 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.dot.active {
    background-color: #d32f2f;
}

.dot:hover {
    background-color: #ff6666;
}

.main-image {
    margin-top: 20px;
    width: 80%;
    max-width: 800px;
}

.main-image img {
    width: 100%;
    border-radius: 5px;
}

.title-resenias {
    font-size: 3rem;
    font-weight: 400;
}

.img-principal {
    transform: translateX(-2rem);
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

.custom-shape-top svg {
    height: 71px;
}

.custom-shape svg {
    display: block;
    width: calc(100% + 1.3px);
    position: relative;
    left: 50%;
    transform: translateX(-50%);
}

.custom-shape .custom-shape-fill {
    fill: #fff;
    transform-origin: center;
    transform: rotateY(0deg);
}

svg {
    height: 71px;
    overflow: hidden;
    display: inline;
    width: calc(100% + 1.3px);
    position: relative;
    left: 50%;
    transform: translateX(-50%);
}

.custom-shape.elementor-shape-bottom {
    transform: rotate(-180deg);
    background-color: #80808040;
    z-index: -1px;
}

</style>
