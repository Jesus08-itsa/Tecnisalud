<!-- eslint-disable vue/multi-word-component-names -->
<script setup>
</script>
<template>
 <footer class="footer-area">
    <div class="footer section_padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-2 col-md-4 col-sm-6 single-footer-widget">
                    <a href="#" class="footer_logo"> <img src="../assets/footer-logo.png" alt="#">Tecnisalud</a>
                    <p>Esto es un producto desarrollado con derechos de copyright cualquier acto de copia sera denunciado. </p>
                    <div class="social_logo">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"> <i class="ti-twitter"></i> </a>
                    <a href="#"><i class="ti-instagram"></i></a>
                    <a href="#"><i class="ti-skype"></i></a>
                    </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                    <h4>Enlaces rapidos</h4>
                    <ul>
                    <li><a href="#">Sobre nosotros</a></li>
                    <li><a href="#">Objetivos</a></li>
                    <li><a href="#">PQS</a></li>
                    <li><a href="#">Contactos</a></li>
                    </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                    <h4>Explorar</h4>
                    <ul>
                    <li><a href="#">En la comunidad</a></li>
                    <li><a href="#">Fundacion "Estoy al tanto"</a></li>
                    <li><a href="#">Soporte Adulto mayor</a></li>
                    <li><a href="#">Comunidad</a></li>
                    </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-6 single-footer-widget">
                    <h4>Recursos</h4>
                    <ul>
                    <li><a href="#">Fondos</a></li>
                    <li><a href="#">Recaudaciones</a></li>
                    <li><a href="#">Fundaciones</a></li>
                    <li><a href="#">Teleton</a></li>
                    </ul>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-6 single-footer-widget">
                    <h4>Boletin Informativo</h4>
                    <p>Si deseas registrar tu correo para que no te pierdas 
                        ninguna noticia sobre tecnisalud.
                    </p>
                    <div class="form-wrap" id="mc_embed_signup">
                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline" novalidate="true">
                    <input class="form-control" name="EMAIL" placeholder="Tu email " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
                    <button class="click-btn btn btn-default text-uppercase"> <i class="ti-angle-right"></i>
                    </button>
                    <div style="position: absolute; left: -5000px;">
                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                    </div>
                    <div class="info"></div>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="copyright_part">
                    <div class="container">
                    <div class="row align-items-center">
                    <p class="footer-text m-0 col-lg-8 col-md-12">
                    Copyright 2023 All rights reserved | Esta pagina fue desarrollada por Tecnisalud SAS

                    </p>
                    <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"> <i class="ti-twitter"></i> </a>
                    <a href="#"><i class="ti-instagram"></i></a>
                    <a href="#"><i class="ti-skype"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</template>

<style>
.footer-area {
    background-color: #f3f6f7;
}
.footer-area .copyright_part {
    background-color: #0d1820;
    padding: 26px 0px;
    color: #f3f6f7;
}
.section_padding {
    padding: 70px 0px;
}

.justify-content-between {
    -ms-flex-pack: justify!important;
    justify-content: space-between!important;
}
ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
.footer-area .single-footer-widget ul li a {
    color: #7f7f7f;
    -webkit-transition: 0.5s;
    transition: 0.5s;
}
a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
}

</style>
