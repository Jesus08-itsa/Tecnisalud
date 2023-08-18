<!-- eslint-disable vue/multi-word-component-names -->
<script>
import NavbarUs from '../components/NavbarUs.vue';
import clock from '../components/clock.vue'
import Swal from 'sweetalert2';

export default {
    components: { NavbarUs, clock},
    data: function () {
        return {
            name: "",
            error: false,
            error_msg: "",
        };
    },
    methods: {
        handleSubmit(event) {
            event.preventDefault(); // Detener el comportamiento predeterminado del formulario
            
            // Mostrar la alerta
            Swal.fire({
                title: 'Deseas guardar la alarma programada?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Guardar',
                denyButtonText: `No Guardar`,
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire('Guardado!', '', 'success')
                } else if (result.isDenied) {
                    Swal.fire('Cambios no guardados', '', 'info')
                }
                })
            }
        }
}

</script>

<template>
<NavbarUs />
    <div class="container">
        <div class="row">
            <form><br>
                <input type="button" value="Volver a pagina principal" class="btn btn-outline-primary" name="volver atrás2" onclick="history.back()" /> 
            </form>
            <div class="col">
                <clock />
            </div>
            <div class="col">
                <form class="needs-validation" novalidate="" @submit="handleSubmit">
                    <h4><b>Programar Alarma</b></h4>
                    <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Hora Inicial</label>
                        <input type="time" class="form-control" id="horainicial" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                        Hora Inicial requerida
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Hora final</label>
                        <input type="time" class="form-control" id="horafinal" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                        Hora final requerida
                        </div>
                    </div>
                    </div>

                    <div class="mb-3">
                    <label for="username">Coloca el nombre tu medicamento</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="email" placeholder="">
                        <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                        </div>
                    </div>
                    </div>

                    <div class="mb-3">
                    <label for="email">Selecciona los miligramos<span class="text-muted">(Optional)</span></label><br>
                    <select id="dosisSelect" placeholder="Dosis">
                        <option value="">Seleccione una dosis</option>
                            <option value="50">50mg</option>
                            <option value="100">100mg</option>
                            <option value="250">250mg</option>
                            <option value="500">500mg</option>
                            <option value="1000">100mg</option>
                        </select> 
                    </div>

                    <div class="mb-3">
                    <label for="address">Descripcion</label>
                    <input type="text" class="form-control" id="address" placeholder="Ej: tomar en ayuno" required="">
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Crear Alarma</button>
                </form>
            </div>
        </div>
    </div>
</template>

<style>
form {
    display: block;
    margin-top: 0em;
    margin-right: 15%;
}
.select{
    display: block;
    margin-top: 0em;
}

</style>