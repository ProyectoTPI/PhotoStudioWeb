document.addEventListener('DOMContentLoaded', function () {
    // Agregar empleado
    document.getElementById('agregarEmpleado').addEventListener('click', function () {
        var agregarEmpleadoModal = new bootstrap.Modal(document.getElementById('agregarEmpleadoModal'));
        agregarEmpleadoModal.show();
    });

    // Eliminar empleado
    var eliminarBotones = document.querySelectorAll('.eliminar-empleado');

    eliminarBotones.forEach(function(boton) {
        boton.addEventListener('click', function () {
            var empleadoId = this.getAttribute('data-empleado-id'); 
            var eliminarEmpleadoModal = new bootstrap.Modal(document.getElementById('eliminarEmpleadoModal'));
            eliminarEmpleadoModal.show();

            var cancelarBoton = document.querySelector('#eliminarEmpleadoModal .btn-secondary');
            cancelarBoton.addEventListener('click', function () {
                eliminarEmpleadoModal.hide(); 
            });
        });
    });

    // Editar empleado
var editarBotones = document.querySelectorAll('.editar-empleado');

editarBotones.forEach(function (boton) {
    boton.addEventListener('click', function () {
        var empleadoId = this.getAttribute('data-empleado-id');

        fetch('/src/controllers/getEmployee.php?employee_id=' + empleadoId)
            .then(response => response.json())
            .then(data => {
                document.getElementById('nameEdit').value = data.nombre;
                document.getElementById('lastnameEdit').value = data.apellido;
                document.getElementById('usernameEdit').value = data.usuario;
                document.getElementById('duiEdit').value = data.dui;
                document.getElementById('telefonoEdit').value = data.telefono;
                document.getElementById('emailEdit').value = data.email;
                document.getElementById('passwordEdit').value = data.contrasenia;
                var editarEmpleadoModal = new bootstrap.Modal(document.getElementById('editarEmpleadoModal'));
                editarEmpleadoModal.show();
            })
            .catch(error => {
                console.error('Error al obtener los datos del empleado', error);
            });
    });
});

});