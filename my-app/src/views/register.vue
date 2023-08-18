<!-- eslint-disable vue/multi-word-component-names -->
<style>
  @import '../assets/css/style.css';
</style>

<script>
import Swal from 'sweetalert2';
import Navbar from '../components/Navbar.vue';
import axios from "axios"

export default {
    
    data: function () {
        return {
            name: "",
            cedula: "",
            email: "",
            address: "",
            date: "",
            id_user: "",
            username: "",
            password: "",
            confirm_password:"",
            phone:"",
            rol:"",
            error: false,
            error_msg: "",
        };
    },
    methods: {
        handleSubmit(event) {
            event.preventDefault(); // Detener el comportamiento predeterminado del formulario
            
            // Mostrar la alerta
            Swal.fire({
                title: '¡Registro Existoso!',
                text: 'Tu usuario a sido registrado existosamente.',
                icon: 'success',
                confirmButtonText: 'Aceptar',
            });
            let json = {
                "nombre": this.name,
                "cedula": this.id_user,
                "correo": this.email,
                "direccion": this.address,
                "telefono": this.phone,
                "fecha_nacimiento": this.date,
                "perfil": this.rol,
                "usuario": this.username,
                "password": this.password,
                "password_confirmation":this.confirm_password
            };
            axios.post('http://127.0.0.1:8000/register', json) //TROCHA COLOCAS AQUI ADENTRO EL ROUTE DE LA API
                .then(data => {
                //si el usuario esta registrado envia el OK y guarda el token de autenticacion
                if (data.data.status == "ok") {
                    this.$router.push('/login');
                    //this.$store.commit('setAuthentication', true);
                    console.log(data)
                }
                else {
                    this.error = true;
                    this.error_msg = data.data.result.error_msg;
                }
            });
        },
    },
    components: { Navbar }

};
</script>

<template>
  <Navbar />
<div class="login">
    <div class="container_login">
        <div class="row">
            <div class="col-md-6">
                <img src="../assets/login-img.jpeg" alt="Image" class="img-fluid">
                </div>
                    <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                    <div class="col-md-8">
                    <div class="mb-4">
                    <h3>Registrar</h3>
                    <p class="mb-4">Ingresa tus datos basicos para asi crear un usuario con nosotros.</p>
                    </div>
                        <form action="#" method="POST" @submit="handleSubmit">

                        <div class="form-group last mb-4">
                        <label for="Nombre">Nombre Completo</label>
                        <input type="text" class="form-control" id="name" v-model="name" required>
                        </div>
                        <div class="form-group last mb-4">
                        <label for="Identificacion">Numero de identificacion</label>
                        <input type="text" class="form-control" id="id_user" v-model="id_user" required>
                        </div>
                        <div class="form-group last mb-4">
                        <label for="Correo Electronico">Email</label>
                        <input type="email" class="form-control" id="email" v-model="email" required>
                        </div>
                        <div class="form-group last mb-4">
                        <label for="Correo Electronico">Direccion</label>
                        <input type="text" class="form-control" id="address" v-model="address" required>
                        </div>
                        <div class="form-group last mb-4">
                        <label for="Correo Electronico">Telefono</label>
                        <input type="text" class="form-control" id="phone" v-model="phone" required>
                        </div>
                        <div class="form-group last mb-4">
                        <label for="Fecha de nacimiento">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="birthdate" v-model="date" required>
                        </div>
                        <div class="form-group last mb-4">
                        <label for="floatingPasswordConfirm">¿Que tipo de usuario va a ser?</label><br>
                        <select id="Select" class="form-control" v-model="rol">
                        <option value="1">Doctor</option>
                        <option value="1">Paciente</option>
                        </select>
                        </div>
                        <hr>
                        <div class="form-group first">
                        <label for="username">Usuario</label>
                        <input type="text" class="form-control" id="username" v-model="username">
                        </div>
                        <div class="form-group last mb-4">c
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" v-model="password">
                        </div>
                        <div class="form-group last mb-4">
                        <label for="password2">Confirma tu contraseña</label>
                        <input type="password" class="form-control" id="password2" required v-model="confirm_password">
                        </div>
                        <div class="d-flex mb-5 align-items-center">
                        <div class="control__indicator"></div>
                        <span class="ml-auto"><a href="/login" class="forgot-pass">¿Ya cuentas con un usuario?, Inicia sesion</a></span>
                        </div>
                        <input type="submit" id="submit" value="Registrar" class="btn btn-block btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>


