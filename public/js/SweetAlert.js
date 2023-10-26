
const boton_submit = document.getElementById("login");
const user = document.getElementById('username');
const password = document.getElementById('password');
boton_submit.addEventListener("click", function (e) {
    e.preventDefault();

    if (!(user.value != "" && password.value != "")) {
        Swal.fire({
            title: 'Error!',
            text: 'Usuario y contraseña no deben estar vacios',
            icon: 'error',
            confirmButtonText: 'Intente de nuevo',
            confirmButtonColor: "#f44336",
            timer:"7000",
            timerProgressBar: true                   

        });
        return;
        }
        document.getElementById('form-login').submit();
});