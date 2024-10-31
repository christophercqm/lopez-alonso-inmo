<script setup>
import foto_perfil from "@images/contacto/foto_perfil.webp";
</script>

<template>
    <div class="container contact-container max-width">
        <div class="row d-flex justify-content-between">
            <div class="contact-info col col-md-6">
                <h1 class="subtitle-section">Nosotros te ayudamos</h1>
                <h2 class="title-section">Contacta con nuestros Expertos</h2>
                <p class="text-15">
                    Gracias por visitarnos. Para más información o asistencia
                    personalizada, no dudes en contactarnos. ¡Estamos aquí para
                    ayudarte!
                </p>
                <div class="container-image-detail d-flex align-items-center">
                    <div class="foto">
                        <img
                            :src="foto_perfil"
                            class="img-fluid rounded-circle"
                            alt="Foto Perfil"
                        />
                    </div>
                    <div class="data d-flex flex-column">
                        <span><b>Avenida Menendez Pelayo nº 6 local</b></span>
                        <span class="text-muted" style="font-size: 15px"
                            >CP: 39005 - Santander - Cantabria</span
                        >
                    </div>
                </div>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5791.581852564111!2d-3.80373390904214!3d43.46496189010827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd494bb14efad06b%3A0x57287fdf163fa0c!2sL%C3%B3pez-Alonso%20Inmobiliaria!5e0!3m2!1ses!2ses!4v1730387274258!5m2!1ses!2ses"
                        width="600"
                        height="450"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>

            <div class="contact-form col col-md-6">
                <form @submit.prevent="handleSubmit">
                    <input
                        type="text"
                        id="name"
                        v-model="form.name"
                        placeholder="Nombre"
                        class="form-control mb-3"
                        required
                    />

                    <input
                        type="email"
                        id="email"
                        v-model="form.email"
                        placeholder="Correo Electrónico"
                        class="form-control mb-3"
                        required
                    />

                    <input
                        type="text"
                        id="subject"
                        v-model="form.subject"
                        placeholder="Asunto"
                        class="form-control mb-3"
                        required
                    />

                    <textarea
                        id="message"
                        v-model="form.message"
                        placeholder="¿En qué podemos ayudarte hoy?"
                        rows="4"
                        class="form-control mb-3"
                    ></textarea>

                    <button type="submit" class="btn-public w-100">
                        Enviar
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Contacto",
    data() {
        return {
            form: {
                name: "",
                email: "",
                subject: "",
                message: "",
            },
        };
    },
    methods: {
        handleSubmit() {
            // Aquí puedes manejar el envío del formulario
            console.log(this.form);
            // Resetear el formulario después del envío
            this.form = {
                name: "",
                email: "",
                subject: "",
                message: "",
            };
        },
    },
};
</script>

<style scoped>



input,
textarea {
    width: 100%;
    padding: 10px;
}



.foto {
    width: 90px;
    height: 90px;
}

.contact-form input {
    font-family: 15px;
    font-family: var(--raleway);
}

input::placeholder,
textarea {
    font-size: 15px;
    color: rgba(0, 0, 0, 0.6);
}
</style>
