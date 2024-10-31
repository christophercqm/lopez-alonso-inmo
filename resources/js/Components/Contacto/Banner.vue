<script setup></script>

<template>
    <section
        class="custom-section"
        data-id="a186401"
        data-settings='{"background_background":"classic","shape_divider_bottom":"triangle-asymmetrical"}'
    >
        <div class="background-overlay"></div>
        <div class="shape-bottom">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1000 100"
                preserveAspectRatio="none"
            >
                <path
                    class="shape-fill"
                    style="fill: white; transform-origin: center; transform: rotateY(0deg)"
                    d="M738,99l262-93V0H0v5.6L738,99z"
                ></path>
            </svg>
        </div>
        <div class="container">
            <div class="column">
                <div class="widget-wrap">
                    <div class="widget heading">
                        <div class="widget-container">
                            <h2 class="heading-title text-white text-center">
                                Contacto
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.custom-section {
    background: url("../../../images/contacto/banner-contacto.jpg") 50% 50%
        no-repeat;
    padding: 150px 0px 190px 0px;
    position: relative;
}

.background-overlay {
    background-color: var(--red);
    opacity: 0.55;
    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    position: absolute;
}

.widget-wrap {
    position: relative;
    z-index: 1;
}

.shape-bottom {
    overflow: hidden;
    position: absolute;
    left: 0;
    width: 100%;
    line-height: 0;
    direction: ltr;
    transform: rotate(180deg);
    bottom: -1px;
}

.shape-bottom svg {
    width: calc(150% + 1.3px);
    height: 88px;
    z-index: 1;
}
</style>
