<!-- eslint-disable vue/multi-word-component-names -->

<template>
    <NavbarUs />
    <div class="container"><br>
    <form>
        <input type="button" value="Volver a pagina principal" class="btn btn-outline-primary" name="volver atrás2" onclick="history.back()" /> 
    </form><br>
    <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Fecha de Creacion</th>
                        <th scope="col">Medicamento</th>
                        <th scope="col">Dosis</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="paciente in Listapacientes" :key="paciente.PacienteId">
                        <th scope="row">{{ paciente.PacienteId}}</th>
                        <td>{{ paciente.Nombre }}</td>
                        <td>{{ paciente.DNI }}</td>
                        <td>
                            <button type="button" class="btn btn-outline-danger">Eliminar</button><br>
                            <button type="button" class="btn btn-outline-success">Editar</button>
                        </td>
                    </tr>
            
                </tbody>
    </table>
    </div>
</template>

<script>
import axios from 'axios';
import NavbarUs from '../components/NavbarUs.vue';

export default {
    data(){
        return {
            Listapacientes:null,
            pagina:1
        }
    },
    mounted: function () {
        let direccion = "https://api.solodata.es/pacientes?page=" + this.pagina;
        axios.get(direccion).then(data => {
            this.Listapacientes = data.data;
            console.log(data);
        });
    },
    components: { NavbarUs }
}
</script>

<style>
.table{
    padding-left: 60px;
}
</style>