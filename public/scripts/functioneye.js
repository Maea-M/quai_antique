/*Sélectionner les éléments*/
const eye = document.querySelector(".fa-eye");
const eyeoff = document.querySelector(".fa-eye-slash");
const passwordField = document.querySelector("#password");

/*faire un addEventListenner, astuce changer le type assword en type text*/
eye.addEventListener("click", () => {
    eye.style.display = "none";
    eyeoff.style.display = "block";
    passwordField.type = "text";
});

eyeoff.addEventListener("click", () => {
    eyeoff.style.display = "none";
    eye.style.display = "block";
    passwordField.type = "password";
});