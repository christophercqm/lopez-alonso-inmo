
<script setup>
import Header from "@/Components/Header/Header.vue";
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

}





h1,h2,h3,h4,h5,h6 {
    font-family: var(--poppins) !important;
}

body {
    font-family: var(--raleway) !important;
}

</style>