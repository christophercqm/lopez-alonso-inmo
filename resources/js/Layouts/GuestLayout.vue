
<script setup>
import Header from "@/Components/Header/Header.vue";
import Footer from "@/Components/Footer/Footer.vue";
</script>

<template>
    <div class="container-prinicipal">
        <!-- Header Component -->
        <Header />

        <main class="d-flex flex-column min-vh-100 align-items-center bg-light">
            <!-- Main Content Slot -->
            <div class="w-100 bg-white shadow-sm rounded">
                <slot />
            </div>
        </main>

        <!-- Footer Component -->
         <Footer />
    </div>
</template>


<style setup>
:root {
    --poppins: "Poppins", sans-serif;
    --raleway: "Raleway", sans-serif;

    /* COLORES */
    --red: #D60D0D;
    --black: #222222;
    --white: #fff;
    --whitev2: #EDEDED;
    --black-text: rgb(102, 102, 102);

}

.subtitle-section {
    color: var(--red);
    font-family: "Poppins", Sans-serif;
    font-size: 18px;
    font-weight: 400;
}

.title-section {
    color: #222222;
    font-family: "Poppins", Sans-serif;
    font-size: 3rem;
    font-weight: 400
}

.text-15 {
    font-size: 15px !important;
}


h1,h2,h3,h4,h5,h6 {
    font-family: var(--poppins) !important;
}

body {
    font-family: var(--raleway) !important;
}

p {
    color: var(--black-text);

}

.btn-transparent {
    width: max-content;
    box-sizing: border-box;
    margin: 0 auto;
    border: 1px solid white !important;
    color: white !important;
    padding: .6rem 1.5rem;
    transition: .5s ease;
}

.btn-transparent:hover {
    background-color: var(--red) !important;
    border: 1px solid var(--red) !important;
}

.btn-public {
    width: max-content;
    box-sizing: border-box;
    margin: 0 auto;
    border: 1px solid var(--red) !important;
    color: var(--white) !important;
    padding: .6rem 1.5rem;
    transition: .5s ease;
    font-weight: 500;
    font-size: 1rem !important;
    transition: background-color 0.5s, border 0.5s, color 0.5s, box-shadow 0.5s; /* Transición suave */

}

.btn-public:hover {
    background-color: var(--white) !important;
    border: 1px solid var(--white) !important;
    color: var(--red) !important;
    box-shadow: 0 0 5px rgba(255, 0, 0, 0.3), 0 1px 3px rgba(255, 0, 0, 0.2); /* Sombra ultra ligera alrededor */
}

.max-width {
    max-width: 1250px !important;
    margin-left: auto !important;
    margin-right: auto !important;
}

.red {
    color: var(--red);
    font-weight: 500;
}

.padding-y {
    padding-top: 100px !important;
    padding-bottom: 100px !important;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #D60D0D;
    opacity: .55;
    z-index: 1; 
}

.button-wrap.button{
    text-decoration: none;
    color: var(--black);
    border: 1px solid var(--red) !important;
    padding: 10px 15px;
    border-radius: 5px;
    font-size: 15px;
    transition: .3s ease-in;
}

.button-wrap.button:hover {
    color: var(--white);
    background-color: var(--red);
    border: 1px solid var(--red) !important;
    font-size: 15px;
}

.poppins {
    font-family: var(--poppins);
}

.raleway {
    font-family: var(--raleway);
}

</style>