// doc symfony :https://symfony.com/doc/current/frontend/encore/server-data.html
//Sélectionner les éléments
document.addEventListener('DOMContentLoaded', function() {
    const eye = document.querySelector('.fa-eye');
    const eyeOff = document.querySelector('.fa-eye-slash');
    const passwordField = document.querySelector('#password');

    //Ecouter les évènements
    eye.addEventListener('click', () => {
        eye.style.display = "none";
        eyeOff.style.display = "block";
        passwordField.type = "text";
    });
    
    eyeOff.addEventListener('click', () => {
        eyeOff.style.display = "none";
        eye.style.display = "block";
        passwordField.type = "password";
    });
});