<!-- eslint-disable vue/multi-word-component-names -->
<template>
<nav class="navbar navbar-expand-sm navbar-light" id="neubar">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="../assets/tecnisalud-icon.jpg" height="60" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <RouterLink
            to="/"
            class="nav-link mx-2 active" aria-current="page" href="#">Inicio
             </RouterLink>
        </li>
          <li class="nav-item">
            <RouterLink
            to="/objetivos"
            class="nav-link mx-2" href="#">Objetivos
            </RouterLink>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tecnisalud
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <RouterLink
                to="/pqrs"
                class="dropdown-item" href="#">PQR
                </RouterLink>
              </li>
              <li>
                <RouterLink
                 to="/about"
                 class="dropdown-item" href="#">Sobre Nosotros
                </RouterLink></li>
              <li>
                <RouterLink
                 to="/contactos"
                 class="dropdown-item" href="#">Contactanos
                </RouterLink>
                </li>
            </ul>
          </li>
          <li class="nav-item">
             <RouterLink
              to="/login" class="btn btn-outline-primary" ><a class="nav-link mx-2" href="#">Iniciar Sesion</a>
            </RouterLink>
            </li>
        </ul>
      </div>
    </div>
  </nav>
  <Router-view />
</template>

<style>
#neubar {
  box-shadow: 4px 6px 12px rgba(0,0,0,0.4);
  font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;

}
.nav-item .active {
  border-radius: 6px;
  
}
#neubar .nav-item {
  margin : auto 4px;
}
#neubar a {
  padding-left:12px;
  padding-right:12px;
}
</style>