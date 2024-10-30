<template>
    <section class="custom-section padding-y">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img
                        decoding="async"
                        width="900"
                        height="729"
                        src="https://lopezalonsoinmobiliaria.com/wp-content/uploads/2023/02/pic-27.jpg"
                        alt="Descripción de la imagen"
                        class="img-fluid img-vision"
                    />
                </div>
                <div class="col-md-6">
                    <h2 class="custom-subtitle">Comprometidos</h2>
                    <h2 class="custom-title">Nuestra Visión</h2>
                    <p class="custom-paragraph">
                        Va más allá de simplemente ofrecer espacios para vivir.
                        Soñamos con crear ambientes donde cada momento se viva
                        con alegría, donde las paredes se llenen de historias y
                        cada esquina inspire a soñar más grande.
                    </p>
                    <ul class="list-unstyled list-nuestra-vision">
                        <li class="d-flex align-items-start mb-3">
                            <div class="me-3">
                                <i
                                    class="bi bi-house-door"
                                    style="font-size: 2rem"
                                ></i>
                            </div>
                            <div>
                                <h5 class="mb-0">
                                    <span
                                        href="https://example.com"
                                        target="_blank"
                                        rel="nofollow"
                                        >Viviendas para todos</span
                                    >
                                </h5>
                                <p>Donde Cada Sueño Encuentra su Espacio</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-3">
                            <div class="me-3">
                                <i
                                    class="bi bi-cash"
                                    style="font-size: 2rem"
                                ></i>
                            </div>
                            <div>
                                <h5 class="mb-0">
                                    <span
                                        href="https://example.com"
                                        target="_blank"
                                        rel="nofollow"
                                        >Precios competitivos</span
                                    >
                                </h5>
                                <p>
                                    Inmuebles a precios con criterio, ajustado
                                    al mercado
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-3">
                            <div class="me-3">
                                <i
                                    class="bi bi-credit-card"
                                    style="font-size: 2rem"
                                ></i>
                            </div>
                            <div>
                                <h5 class="mb-0">
                                    <span
                                        href="https://example.com"
                                        target="_blank"
                                        rel="nofollow"
                                        >Inversión a largo plazo</span
                                    >
                                </h5>
                                <p>
                                    Invertir hoy, es la prosperidad de mañana
                                </p>
                            </div>
                        </li>
                    </ul>

                    <!-- Button -->
                <div class="button-wrap">
                    <a class="btn button" href="https://nueva.lopezalonsoinmobiliaria.com/inmobiliaria-lopez-alonso/">
                        Sigue leyendo
                    </a>
                </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.custom-subtitle {
    font-size: 18px;
    color: var(--red);
}

.custom-title {
    color: #222222;
    font-family: "Poppins", Sans-serif;
    font-size: 50px;
    font-weight: 400;
}

.custom-paragraph {
    font-size: 15px;
}

.list-nuestra-vision a {
    text-decoration: none;
    color: var(--black);
}

.list-nuestra-vision p {
    font-size: 14px;
}

.list-nuestra-vision i{
    font-size: 1.2rem !important;
    color: var(--red);
    border: 1px solid var(--red);
    width: 30px;
    height: 30px;
    display: block;
    display: flex;
    align-items: center;
    justify-content: center;
}


.button-wrap .button {
    text-decoration: none;
    color: var(--black) ;
    border: 1px solid var(--red) !important;
    padding: 10px 15px;
    border-radius: 5px;
    font-size: 15px;
    transition: .3s ease-in;
}

.button-wrap .button:hover {
    color: var(--white);
    background-color: var(--red);
    border: 1px solid var(--red) !important;
    font-size: 15px;
}

.img-vision {
    max-height: 460px;
}

</style>
