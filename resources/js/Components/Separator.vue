<template>
    <div class="elementor-shape-bottom">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1000 100"
            preserveAspectRatio="none"
        >
            <path
                d="M738,99l262-93V0H0v5.6L738,99z"
                class="elementor-shape-fill"
            ></path>
        </svg>
    </div>
</template>

<style scoped>
.elementor-shape-bottom {
    transform: rotate(180deg);
    position: absolute;
    bottom: -1px;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.elementor-shape-bottom svg {
    width: calc(121% + 1.3px);
    height: 71px;
    display: block;
    position: relative;
    left: 50%;
    transform: translateX(-50%);
}

.elementor-shape-bottom path {
    fill: #ffffff !important; /* Asegura que el color del `path` sea blanco */
}
</style>
