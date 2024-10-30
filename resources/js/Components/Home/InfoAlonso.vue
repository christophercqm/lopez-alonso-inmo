<script setup>
    import img_1 from "@images/home/img-1.jpg";
</script>


<template>
<section class="section-boxed">
    <div class="container gap-extended d-flex max-width padding-y">
        <div class="row">
                    <!-- Column 1: Text Content -->
        <div class="col-50 col col-md-6 animated slide-left">
            <div class="content-wrap">
                <!-- Anchor -->
                <div id="primer_elemento" class="menu-anchor"></div>
                
                <!-- Headings -->
                <h2 class="heading-subtitle">López-Alonso Inmobiliaria</h2>
                <h2 class="heading-title">Conseguimos Espacios Únicos Pensando en ti</h2>

                <!-- Description -->
                <p class="description">
                    Con más de 25 años de experiencia, hemos dedicado cada momento a perfeccionar el arte de crear espacios
                    que no solo cumplen expectativas, sino que las superan. Nuestra pasión por el detalle y el compromiso
                    con la calidad nos han convertido en un referente de confianza y excelencia.
                </p>

                <!-- Button -->
                <div class="button-wrap">
                    <a class="btn button" href="https://nueva.lopezalonsoinmobiliaria.com/inmobiliaria-lopez-alonso/">
                        Sigue leyendo
                    </a>
                </div>
            </div>
        </div>

        <!-- Column 2: Image Content -->
        <div class="col-50 col col-md-6 animated slide-right">
            <div class="content-wrap">
                <img 
                    :src=img_1 
                    alt="Inmobiliaria López Alonso"
                    width="960" 
                    height="737"
                    class="img-fluid" 
                />
            </div>
        </div>
        </div>
    </div>
</section>    
           
    
</template>

<style scoped>
.section-boxed {
    display: flex;
    justify-content: space-between;
    padding: 20px;
}
.gap-extended {
    column-gap: 2rem;
}
.col-50 {
    width: 48%;
}
.animated {
    animation-duration: 1s;
}
.slide-left {
    animation-name: slideInLeft;
}
.slide-right {
    animation-name: slideInRight;
}
.menu-anchor {
    height: 0;
    visibility: hidden;
}
.heading-title {
    font-size: 3rem;
    margin: 10px 0;
    max-width: 450px;
    font-weight: 400;
}

.heading-subtitle {
    color: var(--red);
    font-size: 1.1rem;
}



.description {
    font-size: 15px;
    margin-bottom: 20px;
}
.button-wrap .button {
    text-decoration: none;
    color: var(--black) ;
    border: 1px solid var(--red) !important;
    padding: 10px 15px;
    border-radius: 5px;
    font-size: 15px;
}

</style>
