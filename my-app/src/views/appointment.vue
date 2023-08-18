<!-- eslint-disable vue/multi-word-component-names -->
<style>
    @import '../assets/css/appointment.css';
</style>
<script>
import NavbarUs from '../components/NavbarUs.vue';

export default{
    components: { NavbarUs }
}
</script>
<template>
<NavbarUs /><br>
<form>
    <input type="button" value="Volver a pagina principal" class="btn btn-outline-primary" name="volver atrás2" onclick="history.back()" /> 
</form><br>

<div class="row">
<div class="col-md-6">
    <img src="../assets/login-img.jpeg" alt="Image" class="img-fluid">
</div>
<div class="col-md-5 contents">
        <div class="well">
            <div class="well-header">CITA ONLINE</div>
            <hr>
        <p class="header_p">Siempre que pueda aparta una cita con un especialista de la salud
            y asi poder consultar cualquier duda o inquitud que le surga en la receta de sus medicamentos.
        </p>
            <hr>
            
            <!-- Contact by Input -->    
            <div class="form-group1">
            <label for="Select">¿Como quieres que te contactemos?:</label>
            <select id="Select" class="form-control"><option>Correo</option>
                <option>Celular</option></select>
            </div>
            
            <!-- fullname Input -->    
            <div class="form-group1">
                <label for="Nombre completo"></label>
                <input type="fullname" class="form-control" id="inputFullname" placeholder="Nombre completo">
            </div>
            
            <!-- email address Input -->
            <div class="form-group1">
                <label for="Correo"></label>
                <input type="email" class="form-control" id="inputemail" placeholder="Correo">
            </div>
            
        <!-- Phone Input --> 
            <div class="form-group1">
                <label for="Celular"></label>
                <input type="phone" class="form-control" id="inputphone" placeholder="Celular">
            </div>
            <hr>
        <!-- Appointment date -->  
            <p>fecha de cita:</p>
        <!-- 1st Choice Input --> 
        <div class="form-group">
            <label for="datepicer">1era Opcion:</label>
            <div class="input-group date" id="datetimepicker8">
            <input type="date" class="form-control">
            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
        </div>
        </div>   
        <!-- 2nd Choice Input -->           
        <div class="form-group">
            <label for="datepicer">2da Opcion:</label>
            <div class="input-group date" id="datetimepicker8">
            <input type="date" class="form-control"><span class="input-group-addon"><span class="fa fa-calendar"></span></span>
            </div>
        </div>
        <!-- Service Input -->
        <div class="form-group">
            <label for="Select">Tipo de especialista:</label>
            <select id="Select" class="form-control">
            <option>Medicina Interna.</option>
            <option>Endocrinología.</option>
            <option>Urología.</option>
            <option>Reumatología.</option>
            <option>Neurología.</option>
            <option>Hematología.</option>
            <option>Hepatología.</option>
            <option>Pediatría</option>
            <option>Cardiologia</option>
            </select>
        </div><br>
            <div class="form-group">
                <textarea class="form-control" type="textarea" id="message" placeholder="Descripcion" maxlength="140" rows="7"></textarea>                 
            </div>
            <!-- Button Area-->
            <div class="checkbox">
                <label><input type="checkbox">Terminos y &amp; condiciones</label>
            </div><br>
                <button type="submit" class="btn btn-block btn-success">Enviar</button> <button type="submit" class="btn btn-block btn-danger">Cancelar</button><hr>
            <span class="help-block">toda cita tiene es totalmente gratis, aprovechalo.</span>
        <!-- form end -->
        </div><!-- well end -->
    </div>
</div>
</template>
