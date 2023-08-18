<script setup>
import fotter from '../components/fotter.vue';
import Navbar from '../components/Navbar.vue';
</script>

<template>
    <Navbar />
  <div class="about">
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
        <div class="row no-gutters">
        <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(../assets/tower.png);">
        </div>
        <div class="col-md-7 wrap-about py-md-5 ftco-animate fadeInUp ftco-animated">
        <div class="heading-section mb-5 pt-5 pl-md-5">
        <div class="pr-md-5 mr-md-5">
        <h2 class="mb-4">¿Qué es todo acerca de nosotros?</h2>
        </div>
        <p>
        La inspiración para este proyecto surge de la motivación de mejorar la calidad de vida de pacientes con enfermedades crónicas. La combinación de tecnología y salud impulsa a buscar soluciones innovadoras y efectivas en el cuidado médico. Experiencias personales cercanas con pacientes y empatía hacia sus desafíos de salud también influyen en el enfoque del proyecto. El objetivo es desarrollar un aplicativo web que permita un monitoreo constante, detección temprana de complicaciones, fomento de la adherencia al tratamiento y una comunicación efectiva entre pacientes y profesionales de la salud. La implementación 
        busca impactar positivamente la sociedad, contribuyendo al bienestar general y a una atención médica más avanzada.</p>
        <p><a href="#" class="btn btn-primary">Unete</a></p>
        </div>
        </div>
        </div>
        </div>
    </section>
    <div class="site-section" id="team-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="block-heading-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
                    <h2>Nuestro Equipo</h2>
                    <p>Nuestro equipo esta conformado por estudiantes del programa de tecnologia de sistemas informaticos asesorados por Yoice Guardela y Bryan Fernandez.</p>
                    </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-6 col-md-6 mb-6 aos-init aos-animate" data-aos="fade-up">
                    <div class="block-team-member-1 text-center rounded">
                    <figure>
                    <img src="../assets/profile-trocha.png" alt="Image" class="img-fluid rounded-circle">
                    </figure>
                    <h3 class="font-size-20 text-black">Jesus David Trocha</h3>
                    <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Desarrollador Backend</span>
                    </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="block-team-member-1 text-center rounded">
                    <figure>
                    <img src="../assets/profile-jesus.jpg" alt="Image" class="img-fluid rounded-circle">
                    </figure>
                    <h3 class="font-size-20 text-black">Jesus David Fragoso</h3>
                    <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Desarrollador Frontend</span>
                    </div>
                    </div>
            </div>
        </div>
    </div>
  </div>

    <section class="ftco-section-parallax ftco-section ftco-no-pt">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10 col-lg-7 text-center heading-section ftco-animate fadeInUp ftco-animated">
                        <h2>Suscribete a las noticias del dia a dia.</h2>
                        <p>No te pierdas ninguna actualizacion, ni noticia acerca de tecnisalud </p>
                        <div class="row d-flex justify-content-center mt-4 mb-4">
                        <div class="col-md-8">
                        <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="ingresa tu correo electronico">
                        <input type="submit" value="Subscribe" class="submit px-3">
                        </div>
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<fotter />
</template>

<style>

p {
    margin-top: 0;
    margin-bottom: 1rem;
}
.col-md-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
}
form {
    display: block;
    margin-top: 0em;
}
.ftco-section-parallax{
    margin-top: 60px;
    margin-bottom: 60px;
}

.subscribe-form .form-group .submit {
    background: #044cd5 !important;
    border-radius: 0px 5px 5px 0px;
    font-size: 16px;
}
</style>
