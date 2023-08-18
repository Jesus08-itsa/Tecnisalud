<template>
  <div>
    <Navbar />
    <div class="login">
      <div class="container_login">
        <div class="row">
          <div class="col-md-6">
            <img src="../assets/login-img.jpeg" alt="Image" class="img-fluid" />
          </div>
          <div class="col-md-6 contents">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="mb-4">
                  <h3>Registrar</h3>
                  <p class="mb-4">Ingresa tus datos básicos para crear un usuario con nosotros.</p>
                </div>
                <form @submit.prevent="handleSubmit">
                  <div class="form-group last mb-4">
                    <label for="name">Nombre Completo</label>
                    <input type="text" class="form-control" v-model="formData.name" required />
                  </div>
                  <div class="form-group last mb-4">
                    <label for="id_user">Número de identificación</label>
                    <input type="text" class="form-control" v-model="formData.id_user" required />
                  </div>
                  <div class="form-group last mb-4">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" v-model="formData.email" required />
                  </div>
                  <div class="form-group last mb-4">
                    <label for="phone">Teléfono</label>
                    <input type="tel" class="form-control" v-model="formData.phone" required />
                  </div>
                  <div class="form-group last mb-4">
                    <label for="birthdate">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" v-model="formData.birthdate" required />
                  </div>
                  <div class="form-group last mb-4">
                    <label for="gender">Género</label>
                    <select class="form-control" v-model="formData.gender" required>
                      <option value="masculino">Masculino</option>
                      <option value="femenino">Femenino</option>
                      <option value="otro">Otro</option>
                    </select>
                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" v-model="formData.password" required />
                  </div>
                  <div class="form-group last mb-4">
                    <label for="confirm_password">Confirma tu contraseña</label>
                    <input type="password" class="form-control" v-model="formData.confirm_password" required />
                  </div>
                  <div class="d-flex mb-5 align-items-center">
                    <div class="control__indicator"></div>
                    <span class="ml-auto"><router-link to="/login" class="forgot-pass">¿Ya tienes una cuenta? Inicia sesión</router-link></span>
                  </div>
                  <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Swal from 'sweetalert2';
import Navbar from '../components/Navbar.vue';
import axios from 'axios';

export default {
  data() {
    return {
      formData: {
        name: '',
        id_user: '',
        email: '',
        phone: '',
        birthdate: '',
        gender: 'masculino',
        password: '',
        confirm_password: '',
      },
    };
  },
  methods: {
    handleSubmit() {
      axios
        .post('http://127.0.0.1:8000/register', this.formData, {
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          },
        })
        .then((data) => {
          if (data.data.status === 'ok') {
            this.$router.push('/login');
            console.log(data);
          } else {
            this.error = true;
            this.error_msg = data.data.result.error_msg;
          }
        })
        .catch((error) => {
          console.error(error);
          // Manejar errores
        });
    },
  },
  components: { Navbar },
};
</script>

<style>
@import '../assets/css/style.css';
</style>
