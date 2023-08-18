<!-- eslint-disable vue/multi-word-component-names -->

<style>
@import '../assets/css/actualizar.css';
</style>

<script>
import Swal from 'sweetalert2';
import NavbarUs from '../components/NavbarUs.vue';

export default {
    components: { NavbarUs},
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
                title: 'Deseas guardar los datos registrados?',
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
<form><br>
    <input type="button" value="Volver a pagina principal" class="btn btn-outline-primary" name="volver atrás2" onclick="history.back()" /> 
</form>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Configuracion de Perfil</h4>
                </div>
                <form  method="UPDATE" @submit="handleSubmit">
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nombre</label><input type="text" class="form-control" placeholder="Nombre" value=""></div>
                    <div class="col-md-6"><label class="labels">Apellido</label><input type="text" class="form-control" value="" placeholder="Apellido"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Telefono</label><input type="text" class="form-control" placeholder="312-205-XXXX" value=""></div>
                    <div class="col-md-12"><label class="labels">Direccion</label><input type="text" class="form-control" placeholder="Cra 42 # 45 - 54" value=""></div>
                    <div class="col-md-12"><label class="labels">Fecha de Nacimiento</label><input type="date" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Correo</label><input type="email" class="form-control" placeholder="jesus@gmail.com" value=""></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary btn-lg btn-block" type="submit">Guardar Cambios</button></div>
                </form> 
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Editar usuario</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Eliminar Usuario</span></div><br>
                <div class="col-md-12"><label class="labels">Usuario Antiguo</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Usuario Nuevo</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div>
</template>