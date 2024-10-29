<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import VideoPlayer from "@/Components/VideoPlayer/VideoPlayer.vue";
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
                <a class="custom-button text-center btn btn-primary mx-auto" href="#primer_elemento">
                    <span class="button-text text-center ">Sigue leyendo</span>
                </a>
            </div>
        </div>
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
