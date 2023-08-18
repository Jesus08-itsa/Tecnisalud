<!-- eslint-disable vue/multi-word-component-names -->
<script setup>
import NavbarUs from '../components/NavbarUs.vue';
</script>

<template>
<NavbarUs />
<div class="container">
        <div class="site-section bg-light">
                    <div class="container">
                        <div class="repertorio mb-5 text-center">
                        <h2 class="section-heading"><strong class="text-black">Servicios</strong></h2>
                        <p class="mb-5">Repasa nuestro repertorio de servicios</p>
                        </div>
                    <div class="row">
                        <div class="col-lg-4 mb-5">
                            <div class="practicing">
                            <div class="practicing-inner">
                            <div class="wrap-icon">
                            <span class="flaticon-museum"></span>
                            </div>
                            <h3>Crear Alarma</h3>
                            <p>Crea tu alarma desde 0 con el horario que prefieras</p>
                            <a href="/user/alarma" class="btn btn-primary">Adelante</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="practicing">
                            <div class="practicing-inner">
                            <div class="wrap-icon">
                            <span class="flaticon-shield"></span>
                            </div>
                            <h3>Consultar Horarios</h3>
                            <p>Aqui podras consultar los horarios que alguna vez estableciste</p>
                            <a href="/user/consultarH" class="btn btn-primary">Adelante</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="practicing">
                                <div class="practicing-inner">
                                <div class="wrap-icon">
                                <span class="flaticon-help"></span>
                                </div>
                                <h3>Escribe a un Profesional</h3>
                                <p>Escribele por medio de nuestro chat a cualquier especialista de alta calidad.</p>
                                <a href="#" class="btn btn-primary">Adelante</a>    
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="practicing">
                                <div class="practicing-inner">
                                <div class="wrap-icon">
                                <span class="flaticon-revolver"></span>
                                </div>
                                <h3>Aparta tu cita</h3>
                                <p>Aparta una cita para que puedas <b>conversar con cualquier personal especializado.</b></p>
                                <a href="/user/appointment" class="btn btn-primary">Adelante</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="practicing">
                                <div class="practicing-inner">
                                <div class="wrap-icon">
                                <span class="flaticon-house"></span>
                                </div>
                                <h3>Descargar tus recetas</h3>
                                <p>Descarga en PDF el historial de recetas y tenlas al alcance de tu mano</p>
                                <a href="/user/descargar" class="btn btn-primary">Adelante</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                        </div>
                    </div>
                    </div>
            </div>
        </div>
</template>


<style>
@import '../assets/css/welcomeusr.css';
</style>
