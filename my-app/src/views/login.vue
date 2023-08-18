<!-- eslint-disable vue/multi-word-component-names -->
<script>
import Navbar from '../components/Navbar.vue';
import axios from 'axios';

export default {
    data: function () {
        return {
            usuario: "",
            password: "",
            error: false,
            error_msg: "",
        };
    },
    methods: {
        login() {
            //coloca el usuario en un JSON
            let json = {
                "usuario": this.usuario,
                "password": this.password
            };
            axios.post('http://127.0.0.1:8000/login', json) //TROCHA COLOCAS AQUI ADENTRO EL ROUTE DE LA API
                .then(data => {
                //si el usuario esta registrado envia el OK y guarda el token de autenticacion
                if (data.data.status == "ok") {
                    localStorage.token = data.data.result.token;
                    // Aquí asumimos que el token contiene información sobre el rol del usuario
                    //const userRole = data.data.result.role;
                    //if (userRole === "1") {
                    this.$router.push('/user'); // Redirige al usuario a la página de inicio de sesión
                    //} else if (userRole === "2") {
                    //this.$router.push('/dashboard'); // Redirige al administrador al dashboard
                    //} else {
                    // Manejo para otros roles si es necesario
                    //}
                    //this.$store.commit('setAuthentication', true);
                }
                else {
                    this.error = true;
                    this.error_msg = data.data.result.error_msg;
                }
            });
        }
    },
    components: { Navbar }
}

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
                    <h3>Inicio de Sesion</h3>
                    <p class="mb-4">Aqui podras sincronizar tus horarios y alarmas con tu usuario.</p>
                    </div>
                        <form action="#" method="POST" v-on:submit.prevent="login">
                        <div class="form-group first">
                        <label for="username">Usuario</label>
                        <input type="text" class="form-control" id="username" v-model="usuario">
                        </div>
                        <div class="form-group last mb-4">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" v-model="password">
                        </div>
                        <div class="d-flex align-items-center">
                        <div class="control__indicator "></div>
                        <span class="ml-auto"><a href="#" class="forgot-pass">Olvide la contraseña</a></span>
                        </div>
                        <span class="ml-auto"><a href="/register" class="forgot-pass">¿Aun no tienes usuario?, Registrate</a></span><br>
                        <input type="submit" value="Login" class="btn btn-block btn-primary mb-4">
                        </form><br>

                        <!--No te preocupes, no corre en el diseño hasta que salga error.-->
                            <div class="alert alert-danger" role="alert" v-if="error">
                                {{error_msg}}
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>


<style>
    @import '../assets/css/login.css';
</style>