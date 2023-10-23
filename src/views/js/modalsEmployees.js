document.addEventListener('DOMContentLoaded', function () {

    document.getElementById('agregarEmpleado').addEventListener('click', function () {
        var agregarEmpleadoModal = new bootstrap.Modal(document.getElementById('agregarEmpleadoModal'));
        agregarEmpleadoModal.show();
    });


    var eliminarBotones = document.querySelectorAll('.eliminar-empleado');


    eliminarBotones.forEach(function(boton) {
        boton.addEventListener('click', function () {
            var empleadoId = this.getAttribute('data-empleado-id'); 
            var eliminarEmpleadoModal = new bootstrap.Modal(document.getElementById('eliminarEmpleadoModal'));
            eliminarEmpleadoModal.show();
        });
    });
});
