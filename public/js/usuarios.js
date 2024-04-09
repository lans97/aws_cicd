var contrasena = document.getElementById("txt_contrasena")
, confirmContra = document.getElementById("txt_confirmContra");

function validaContra(){
    if(contrasena.value != confirmContra.value) {
        confirmContra.setCustomValidity("Las contraseñas son diferentes");
    } else {
        confirmContra.setCustomValidity('');
    }
}

contrasena.onchange = validaContra;
confirmContra.onkeyup = validaContra;

