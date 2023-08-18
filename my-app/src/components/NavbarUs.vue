<style>
@import '../assets/css/styleNav.css';
</style>

<template>
<nav class="navbar navbar-expand-sm navbar-light" id="neubar">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="../assets/tecnisalud-icon.jpg" height="60" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item dropdown">
            <a class="nav-link mx-2 dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Bienvenido, Jesus
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <RouterLink
                to="/user/actualizar"
                class="dropdown-item">Actualizar Perfil
                </RouterLink>
              </li>
              <hr>
              <li>
                <RouterLink
                 to="/about"
                 class="dropdown-item">Cerrar Sesion
                </RouterLink></li>
            </ul>
          </li>
          <li class="nav-item">
            </li>
        </ul>
      </div>
    </div>
  </nav>
  <Router-view />
  </template > 
