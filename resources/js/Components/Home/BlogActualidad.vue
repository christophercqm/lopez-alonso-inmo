<script setup>
import blog_1 from "@images/blog/blog-1.webp";
import blog_2 from "@images/blog/blog-2.webp";
import blog_3 from "@images/blog/blog-3.webp";
</script>

<template>
    <section class="seccion-noticias padding-y">
        <div class="container">
            <h2 class="titulo-noticias">Noticias y actualidad</h2>
            <p class="descripcion-noticias mb-5">
                En nuestra sección de Noticias y Actualidad, descubrirás un
                mundo de información relevante y actual. Desde las últimas
                tendencias en diseño de interiores y arquitectura, hasta
                consejos prácticos para propietarios e inversores.
            </p>
            <!-- Filtros -->
            <ul class="nav justify-content-center mb-4 filtros-noticias">
                <li class="nav-item" v-for="filtro in filtros" :key="filtro">
                    <a
                        href="#"
                        class="nav-link"
                        :class="{ active: filtroActual === filtro }"
                        @click.prevent="filtroActual = filtro"
                    >
                        {{ filtro }}
                    </a>
                </li>
            </ul>
            <!-- Grid de Noticias -->
            <div class="row">
                <div
                    v-for="noticia in noticiasFiltradas"
                    :key="noticia.titulo"
                    class="col-12 col-md-6 col-lg-4 mb-4"
                >
                    <div class="card noticia">
                        <img
                            :src="noticia.imagen"
                            :alt="noticia.titulo"
                            class="card-img-top"
                        />
                        <div class="card-body">
                            <h5 class="card-title">{{ noticia.titulo }}</h5>
                            <p class="card-text">{{ noticia.descripcion }}</p>
                            <a
                                :href="noticia.url"
                                target="_blank"
                                class="red btn-blog poppins"
                                style="font-weight: 400; font-size: 14px"
                                >Leer más</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            filtroActual: "Todas",
            filtros: [
                "Todas",
                "Alquiler",
                "Compra",
                "Construcción",
                "Herencias",
                "Terrenos",
            ],
            noticias: [
                {
                    titulo: "Consejos para la primera compra de una vivienda",
                    descripcion:
                        "La compra de una vivienda, especialmente si se trata de tu primera casa, es un hito significativo, lleno de emoción…",
                    imagen: blog_3,
                    url: "https://lopezalonsoinmobiliaria.com/2024/04/11/consejos-para-la-primera-compra-de-una-vivienda-3/",
                    categorias: ["Alquiler", "Compra"],
                },
                {
                    titulo: "Consejos para la venta de una propiedad",
                    descripcion:
                        "Vender una casa es un proceso complejo, no siempre inmediato, que implica mucho más que simplemente poner un cartel de…",
                    imagen: blog_1,
                    url: "https://lopezalonsoinmobiliaria.com/2024/04/11/consejos-para-la-venta-de-una-propiedad/",
                    categorias: ["Compra", "Herencias"],
                },
                {
                    titulo: "La importancia de la inspección de viviendas en el proceso de compra",
                    descripcion:
                        "La compra de una casa es una inversión significativa y de vital importancia. No se trata de una transacción menor…",
                    imagen: blog_2,
                    url: "https://lopezalonsoinmobiliaria.com/2024/04/11/la-importancia-de-la-inspeccion-de-viviendas-en-el-proceso-de-compra/",
                    categorias: ["Compra", "Construcción"],
                },
            ],
        };
    },
    computed: {
        noticiasFiltradas() {
            if (this.filtroActual === "Todas") {
                return this.noticias;
            }
            return this.noticias.filter((noticia) =>
                noticia.categorias.includes(this.filtroActual)
            );
        },
    },
};
</script>

<style scoped>
.titulo-noticias {
    font-size: 3rem;
    text-align: center;
    margin-top: 20px;
    color: var(--red);
    font-weight: 400;
}
.descripcion-noticias {
    text-align: center;
    margin: 10px 0 30px;
    max-width: 800px;
    margin: 0 auto;
}
.filtros-noticias .nav-link {
    color: #333;
    cursor: pointer;
}
.filtros-noticias .nav-link.active {
    color: red;
    font-weight: 600;
}
.noticia {
    box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
}
.card-title {
    font-size: 1.2rem;
}
.card-text {
    color: #555;
    font-size: 0.9rem;
}

.nav-item .nav-link {
    font-size: 14px;
    font-weight: 600;
    color: gray;
}
</style>
