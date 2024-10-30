<script setup>
    import logo_lopez from "@images/home/logo_alonso.webp";
</script>

<template>
    <footer class="custom-footer d-flex padding-y position-relative">
        <div class="overlay"></div>
        <div class="container-footer max-width w-100 d-flex">
            <div class="footer-section d-flex flex-column">
                <div class="footer-logo">
                    <img 
                        :src="logo_lopez"
                        alt="Logo López-Alonso Inmobiliaria"
                        class="logo-img" />
                    <a class="logo-url" rel="home" href="https://lopezalonsoinmobiliaria.com/"></a>
                </div>
                <div class="footer-text">
                    <small class="text-white copy">
                        © 2024 López-Alonso Inmobiliaria y hecho con ilusión por 
                        <span><a href="https://www.elayudante.es/" class="text-white">ElAyudante</a></span>
                    </small>
                </div>
            </div>

            <div class="container-nav-links-footer d-flex justify-content-around w-100">
                <div class="footer-column">
                    <h2 class="title-footer">Navegación</h2>
                    <ul class="d-flex flex-column gap-2">
                        <li><a href="https://lopezalonsoinmobiliaria.com/">Inmobiliaria</a></li>
                        <li><a href="https://lopezalonsoinmobiliaria.com/servicios">Servicios</a></li>
                        <li><a href="https://lopezalonsoinmobiliaria.com/propiedades">Inmuebles</a></li>
                        <li><a href="https://lopezalonsoinmobiliaria.com/contacto">Contacto</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h2 class="title-footer">Enlaces</h2>
                    <ul class="d-flex flex-column gap-2">
                        <li><a href="#">Política Privacidad</a></li>
                        <li><a href="https://lopezalonsoinmobiliaria.com/blog">Blog y actualidad</a></li>
                        <li><a href="https://construccionesabaloa.com/" target="_blank">Abaloa</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h2 class="title-footer">Nuestra oficina</h2>
                    <ul class="contact-info d-flex flex-column gap-2">
                        <li>
                            <span class="icon">
                                <i class="bi bi-geo-alt-fill"></i>                            </span>
                            <a href="https://www.google.com/maps/search/?api=1&amp;query=P.º+Menéndez+Pelayo,+6,+39006+Santander,+Cantabria" target="_blank">
                                Avenida Menéndez Pelayo nº6 bajo
                            </a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="bi bi-telephone-fill"></i>                            </span>
                            <a href="tel:942108197">Telf: 942 108 197</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="bi bi-clock-fill"></i>                            </span>
                            <span class="text-white">Lunes - viernes 10AM-14PM y 16PM-19PM</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</template>

<style scoped>
.container-footer {
    z-index: 1;
}

.custom-footer {
    background: url("../../../images/home/bg-footer.jpg") 50% 50% no-repeat;
    background-size: cover;
}

.logo-img {
    max-width: 150px; /* Ajusta este valor según sea necesario */
    height: auto;
}

.contact-info .icon {
    font-size: 20px; /* Ajusta el tamaño del icono */
    margin-right: 8px; /* Espacio entre el icono y el texto */
    display: inline-block;
}

.contact-info .icon i {
    fill: white !important;
    color: white;
}

.title-footer {
    font-size: 20px;
    color: var(--white);
    margin-bottom: 1rem;
}

ul {
    list-style: none;
    padding-left: 0;
}

a {
    text-decoration: none;
    color: var(--white);
}

.copy {
    width: 228px;
}
</style>
