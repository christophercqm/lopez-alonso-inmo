
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

.btn-public {}

.max-width {
    max-width: 1250px !important;
    margin-left: auto !important;
    margin-right: auto !important;
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

</style>