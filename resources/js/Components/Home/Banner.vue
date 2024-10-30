<template>
    <section class="custom-section">
        <div class="overlay"></div> <!-- Overlay añadido -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="custom-heading m-0">Garantizamos Calidad Máxima en Cada Una de Nuestras Propiedades</h2>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-4 d-none d-md-block"></div>
                <div class="col-md-4 d-none d-md-block"></div>
                <div class="col-md-4 d-none d-md-block"></div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.custom-section {
    position: relative; /* Necesario para el overlay */
    background-image: url('../../../images/home/banner.jpg'); /* Verifica que la ruta sea correcta */
    background-size: cover; /* Asegura que la imagen cubra toda la sección */
    background-position: center; /* Centra la imagen */
    background-repeat: no-repeat; /* Evita que la imagen se repita */
    padding-top: 50px;
    padding-bottom: 50px;
}



.custom-heading {
    font-size: 3rem !important;
    font-weight: 300;
    text-align: center;
    margin-bottom: 1.5rem; 
    color: #fff; 
    position: relative; 
    z-index: 2; 
}
</style>
