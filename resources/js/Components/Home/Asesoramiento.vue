<script setup>
import logo_lopez from "@images/home/logo_alonso.webp";
</script>
<template>
    <section class="section asesoramiento fadeIn padding-y">
        <div class="background-overlay"></div>
        <div class="container">
            <div class="column">
                <div class="widget-wrap d-flex flex-column align-items-center">
                    <div class="heading">
                        <h2 class="title-asesoramiento">Necesitas Asesoramiento</h2>
                    </div>
                    <div class="text-content">
                        <p class="mb-4">
                            Estamos a tu entera disposición, para cualquier duda
                            que pueda surgir.
                        </p>
                    </div>
                    <div class="container-button">
                        <a
                            class="button-wrap button"
                            href="https://nueva.lopezalonsoinmobiliaria.com/contacto-lopez-alonso-inmobiliaria/"
                        >
                            Contacto
                        </a>
                    </div>

                    <div class="logo">
                        <img :src="logo_lopez" class="w-100 h-100 img-fluid" alt="Logo López Alonso" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* General Section Styles */
.section {
    position: relative;
    padding: 20px;
    text-align: center;
    animation: fadeIn 1s ease-in-out;
}

.title-asesoramiento {
    color: var(--red) !important;
    font-weight: 400;
    font-size: 3rem !important;
    
}

/* Overlay Style */
.background-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

/* Container and Column Styling */
.container {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
}

.title-asesoramiento {
    color: var(--red);
}

.column {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Text and Heading Styles */
.heading h2 {
    font-size: 2rem;
    color: #fff;
    margin-bottom: 10px;
}

.text-content p {
    max-width: 600px;
}

.logo {
    max-width: 500px;
}
/* Button Styles */
.button-wrap {
    margin-top: 20px;
}


/* Animation */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}
</style>
