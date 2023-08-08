@extends('layouts.auth-master') 
 
@section('content') 
    <form method="post" action="{{ route('register.perform') }}" class="container w-25"> 
        @csrf 
 
        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57"> 
 
        <h1 class="h3 mb-3 fw-normal">Registro</h1> 
 
        <div class="form-group form-floating mb-3"> 
            <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder="Juan Perez" required="required" autofocus> 
            <label for="floatingEmail">Nombre</label> 
            @if ($errors->has('nombre')) 
                <span class="text-danger text-left">{{ $errors->first('nombre') }}</span> 
            @endif 
        </div> 
        <div class="form-group form-floating mb-3"> 
            <input type="email" class="form-control" name="correo" value="{{ old('correo') }}" placeholder="name@example.com" required="required" autofocus> 
            <label for="floatingEmail">Correo electrónico</label> 
            @if ($errors->has('correo')) 
                <span class="text-danger text-left">{{ $errors->first('correo') }}</span> 
            @endif 
        </div> 
 
        <div class="form-group form-floating mb-3"> 
            <input type="text" class="form-control" name="usuario" value="{{ old('usuario') }}" placeholder="Usuario" required="required" autofocus> 
            <label for="floatingName">Usuario</label> 
            @if ($errors->has('usuario')) 
                <span class="text-danger text-left">{{ $errors->first('usuario') }}</span> 
            @endif 
        </div> 
 
        <div class="form-group form-floating mb-3"> 
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Contraseña" required="required"> 
            <label for="floatingPassword">Contraseña</label> 
            @if ($errors->has('password')) 
                <span class="text-danger text-left">{{ $errors->first('password') }}</span> 
            @endif 
        </div> 
 
        <div class="form-group form-floating mb-3"> 
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirmar contraseña" required="required"> 
            <label for="floatingConfirmPassword">Confirmar contraseña</label> 
            @if ($errors->has('password_confirmation')) 
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span> 
            @endif 
        </div> 
 
        <div class="form-group form-floating mb-3"> 
            <input type="text" class="form-control" name="cedula" value="{{ old('cedula') }}" placeholder="Cédula" required="required" autofocus> 
            <label for="floatingCedula">Cédula</label> 
            @if ($errors->has('cedula')) 
                <span class="text-danger text-left">{{ $errors->first('cedula') }}</span> 
            @endif 
        </div> 
 
        <div class="form-group form-floating mb-3"> 
            <input type="date" class="form-control" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required="required"> 
            <label for="floatingFechaNacimiento">Fecha de nacimiento</label> 
            @if ($errors->has('fecha_nacimiento')) 
                <span class="text-danger text-left">{{ $errors->first('fecha_nacimiento') }}</span> 
            @endif 
        </div> 
 
        <div class="form-group form-floating mb-3"> 
            <input type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" placeholder="Teléfono" required="required" autofocus> 
            <label for="floatingTelefono">Teléfono</label> 
            @if ($errors->has('telefono')) 
                <span class="text-danger text-left">{{ $errors->first('telefono') }}</span> 
            @endif 
        </div> 
 
        <div class="form-group form-floating mb-3"> 
            <input type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" placeholder="Dirección" required="required" autofocus> 
            <label for="floatingDireccion">Dirección</label> 
            @if ($errors->has('direccion')) 
                <span class="text-danger text-left">{{ $errors->first('direccion') }}</span> 
            @endif 
        </div> 
 
        <div class="form-group"> 
            <label for="perfil">Seleccione su perfil:</label> 
            <select name="perfil" class="form-control"> 
                <option value="1">Medico</option> 
                <option value="2">Paciente</option> 
            </select> 
        </div> 
 
        <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button> 
 
        @include('auth.partials.copy') 
    </form> 
@endsection