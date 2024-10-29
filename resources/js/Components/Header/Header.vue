<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <header class="navbar navbar-personal navbar-expand-lg shadow-sm">
        <div class="container">

            <!-- Toggle button for mobile view -->
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

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <Link href="/" class="nav-link">Inicio</Link>
                    </li>
                    <li class="nav-item">
                        <Link href="/about" class="nav-link">Sobre Nosotros</Link>
                    </li>
                    <li class="nav-item">
                        <Link href="/agents" class="nav-link">Agentes</Link>
                    </li>
                    <li class="nav-item">
                        <Link href="/properties" class="nav-link">Propiedades</Link>
                    </li>
                    <li class="nav-item">
                        <Link href="/services" class="nav-link">Servicios</Link>
                    </li>
                    <li class="nav-item">
                        <Link href="/blog" class="nav-link">Blog</Link>
                    </li>
                    <li class="nav-item">
                        <Link href="/contact" class="nav-link">Contacto</Link>
                    </li>
                </ul>
            </div>
        </div>
    </header>
</template>


<style scoped>
header {
    z-index: 1;
}
.navbar-nav .nav-item .nav-link {
    color: var(--white) !important;
}

.navbar-personal {
    position: absolute;
    left: 0;
    right: 0;
    background-color: #1A1A1A8F;
}
</style>