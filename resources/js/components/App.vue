<template>
<main>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://www.europeanjobdays.eu/sites/default/files/styles/exhibitor_logo/public/logo_5.jpg?itok=RTaNINyy" alt="" style="border-radius: 15px;" width="120" height="64">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <router-link exact-active-class="active" to="/" class="nav-link" aria-current="page">Inicio</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link exact-active-class="active" to="/dogs" class="nav-link">Dogs</router-link>
                    </li>   
                     <li class="nav-item">
                        <router-link exact-active-class="active" to="/contacto" class="nav-link">Contacto</router-link>
                    </li>            
                </ul>
                </div>
            </div>
        </nav>
<div>
    <router-view></router-view>
</div>
</main>
</template>