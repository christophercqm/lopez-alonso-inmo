<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <!-- Contenedor Principal -->
    <div class="header-wrapper">
        <!-- Header con Navegación -->
        <header class="navbar navbar-personal navbar-expand-lg shadow-sm d-flex flex-column p-0">
            <!-- Row encima del header -->
            <div class="top-row w-100">
                <div class="container d-flex justify-content-between">
                    <div class="left-icons d-flex gap-5 py-2">
                        <span class="contact-info d-flex gap-2"
                            ><i class="bi bi-telephone-fill"></i>942 108
                            197</span
                        >
                        <span class="email d-flex gap-2"
                            ><i class="bi bi-envelope-fill"></i
                            >contacta@lopezalonsoinmobiliaria.com</span
                        >
                    </div>
                    <span class="social-links d-flex align-items-center">
                        <a href="#" class="social-icon bi bi-facebook"></a>
                        <a href="#" class="social-icon bi bi-twitter"></a>
                        <a href="#" class="social-icon bi bi-instagram"></a>
                    </span>
                </div>
            </div>

            <hr class="w-100 m-0">

            <div class="container">
                <!-- Botón de toggle para dispositivos móviles -->
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Enlaces de Navegación -->
                <div class="collapse navbar-collapse py-3" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <Link href="/" class="nav-link">Inicio</Link>
                        </li>
                        <li class="nav-item">
                            <Link href="/about" class="nav-link"
                                >Sobre Nosotros</Link
                            >
                        </li>
                        <li class="nav-item">
                            <Link href="/agents" class="nav-link">Agentes</Link>
                        </li>
                        <li class="nav-item">
                            <Link href="/properties" class="nav-link"
                                >Propiedades</Link
                            >
                        </li>
                        <li class="nav-item">
                            <Link href="/services" class="nav-link"
                                >Servicios</Link
                            >
                        </li>
                        <li class="nav-item">
                            <Link href="/blog" class="nav-link">Blog</Link>
                        </li>
                        <li class="nav-item">
                            <Link href="/contacto" class="nav-link"
                                >Contacto</Link
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </header>
    </div>
</template>

<style scoped>
/* Contenedor general */
.header-wrapper {
    position: relative;
    width: 100%;
}

/* Row superior */
.top-row {
    color: white;
    font-size: 14px;
    padding: 5px 0;
}

.contact-info {
    font-family: "Poppins", sans-serif;
}

.social-links .social-icon {
    color: white;
    margin-left: 10px;
    font-size: 18px;
}

/* Estilos del Header */
header {
    z-index: 1;
}

.navbar-nav .nav-item .nav-link {
    color: var(--white) !important;
    font-family: "Poppins", sans-serif;
    font-size: 15px;
}

.navbar-personal {
    position: absolute;
    left: 0;
    right: 0;
    background-color: #1a1a1a8f;
}
</style>
