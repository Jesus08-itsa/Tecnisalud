<script setup>

</script>

<template>
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="banner_text">
                    <div class="banner_text_iner">
                    <h5>Estamos aqui para cuidar de tu salud</h5>
                    <h1>El mejor cuidado &amp;
                    El mejor doctor</h1>
                    <p>En tecnisalud nos encargaremos de poder ayudarte
                     con aquello que ha sido para ti un problema, te ayudaremos 
                    a recodar aquella actividad que por años ha sido indispensable
                    para tu salud. </p>
                    <a href="#" class="btn btn-primary">Puedes crear tu horario ahora</a>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-7">
                    <div class="banner_img">
                    <img src="../assets/banner-top.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about_us padding_top">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="about_us_img">
                            <img src="../assets/top-services.jpg" alt="">
                                </div>
                                </div>
                                <div class="col-md-6 col-lg-5">
                                <div class="about_us_text">
                                <h2>Sobre nosotros</h2>
                                <p>Tecnisalud nacio como un proyecto dirigido 
                                    por estudiantes de la Universidad de barranquilla
                                    con el objetivo de ayudar aquellas personas con enfermedades
                                    que por su edad o diferentes motivos no tienen herramientas 
                                    para la toma de medicamentos en su dia a dia.
                                </p>
                                <a class="btn btn-primary" href="#">Si quieres leer mas</a>
                            <div class="banner_item">
                                <div class="single_item">
                                <img src="../assets/emergency.png" alt="">
                                <h5>Emergencias</h5>
                                </div>
                                <div class="single_item">
                                <img src="../assets/recetly.png" alt="">
                                <h5>Formulas</h5>
                                </div>
                                <div class="single_item">
                                <img src="../assets/medica.png" alt="">
                                <h5>Qualfied</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="feature_part">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section_tittle text-center">
                <h2>Nuestros servicios</h2>
                </div>
                    </div>
                        </div>
                        <div class="row justify-content-between align-items-center">
                        <div class="col-lg-3 col-sm-12">
                        <div class="single_feature">
                        <div class="single_feature_part">
                        <br>
                        <h4>Creacion de Horarios</h4>
                        <p>Podras crear los horarios deseados a partir de la receta
                        que se te haya dado, podras fijar la hora que ud desee siguiendo
                        todo "al pie de la letra".</p>
                        </div>
                        </div>
                        <div class="single_feature">
                        <div class="single_feature_part">
                        <br>
                        <h4>Monitoreo</h4>
                        <p>Podras monitorear el horario y las pastillas que se han 
                            asignado, al igual que tu doctor(a)podra asignar los medicamentos.
                        </p>
                        </div>
                        </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                        <div class="single_feature_img">
                        <img src="../assets/services..png" alt="">
                        </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                        <div class="single_feature">
                        <div class="single_feature_part">
                        <br>
                        <h4>Estadisticas</h4>
                        <p>El doctor(a)podra ver la cantidad de pacientes asignados al igual 
                            que las formulaciones que este ha hecho y el cumplimiento de los pacientes.
                        </p>
                        </div>
                        </div>
                        <div class="single_feature">
                        <div class="single_feature_part">
                        <br>
                        <h4>Generacion de formatos</h4>
                        <p>Aqui podras generar la receta que se te haya formulado sin la necesidad
                            de contar con un "trozo de papel", para asi mostrarlo en las farmacias asignadas.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style>
.banner_part {
    height: 650px;
    height: 935px;
    position: relative;
    overflow: hidden;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-position: center;
    padding-top: 50px;
}
.about_us {
    background-image: none;
    position: relative;
    z-index: 99;
    background-position: left bottom;
    background-repeat: no-repeat;
    background-size: 50% 90%;
}
.banner_item {
    display: flex;
    justify-content: space-between;
}

.banner_item .single_item {
    margin-top: 30px;
    text-align: center;
    margin-top: 50px;
    position: relative;
    z-index: 1;
}
.feature_part {
    padding: 90px 0;
}
.justify-content-center {
    -ms-flex-pack: center!important;
    justify-content: center!important;
}
</style>
