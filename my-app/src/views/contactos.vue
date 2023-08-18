<!-- eslint-disable vue/multi-word-component-names -->
<script setup>
import fotter from '../components/fotter.vue';
import Navbar from '../components/Navbar.vue';

</script>

<template>
<Navbar/>
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
            <h2 class="h3">Informacion de Contacto</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
            <p><span>Direccion:</span> 4b g1 - 53, Cra. 5 Sur, Nte. Centro Historico, Malambo, Barranquilla, Atlántico</p>
            </div>
            <div class="col-md-3">
            <p><span>Telefono:</span> <a href="tel://1234567920">+57 304 2124531 </a></p>
            </div>
            <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@tecnisalud.com</a></p>
            </div>
            <div class="col-md-3">
            <p><span>Website</span> <a href="#">www.tecnisalud.com</a></p>
            </div>
            </div>
            <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="#" class="bg-light p-5 contact-form">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Tu nombre">
                </div>
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Tu Email">
                </div>
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Asunto">
                </div>
                <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Mensaje"></textarea>
                </div>
                <div class="form-group">
                <input type="submit" value="Enviar Mensaje" class="btn btn-primary py-3 px-5">
                </div>
                </form>
            </div>
            <div class="col-md-6 d-flex">
            <div id="map" class="bg-white" style="position: relative;">
                <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.691087756324!2d-74.79027352620261!3d10.986673255283009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef5cff2b82b8815%3A0x4e7910ae3b78e831!2sUnibarranquilla!5e0!3m2!1ses!2sco!4v1690945350581!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<fotter />
</template>

<style>
.bg-light {
    background: #f8f9fa !important;
}
.col-md-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
}
.form-control {
    height: 52px !important;
    background: #fff !important;
    color: #000000 !important;
    font-size: 18px;
    border-radius: 5px;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    
}
.form-group {
    margin-bottom: 1rem;
}
.contact-section .contact-form {
    width: 100%;
    bottom: 60px;
}
</style>