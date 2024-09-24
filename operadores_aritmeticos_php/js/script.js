// script.js

document.getElementById('searchInput').addEventListener('keyup', function() {
    var input = this.value.toLowerCase();
    var table = document.getElementById('dataTable');
    var rows = table.getElementsByTagName('tr');
    for (var i = 1; i < rows.length; i++) { // Comenzamos desde 1 para saltar la fila del encabezado
        var cells = rows[i].getElementsByTagName('td');
        var rowContainsSearchTerm = false;
        for (var j = 0; j < cells.length; j++) {
            if (cells[j].innerText.toLowerCase().includes(input)) {
                rowContainsSearchTerm = true;
                break;
            }
        }
        if (rowContainsSearchTerm || input === "") {
            rows[i].style.display = ""; // Muestra la fila si coincide o si el input está vacío
        } else {
            rows[i].style.display = "none"; // Oculta la fila si no coincide
        }
    }
});

//ENUMERO LAS TABLAS DE UN  REGISTRO.
document.addEventListener('DOMContentLoaded', function () {
    // Seleccionar la tabla y el cuerpo de la tabla
    const tabla = document.getElementById('dataTable');
    const cuerpoTabla = tabla.querySelector('tbody');

    // Seleccionar todas las filas del cuerpo de la tabla
    const filas = cuerpoTabla.getElementsByTagName('tr');

    // Iterar sobre las filas para enumerarlas
    for (let i = 0; i < filas.length; i++) {
        // Crear una nueva celda para el número de registro
        const celdaNumero = filas[i].getElementsByTagName('td')[0];
        celdaNumero.textContent = i + 1;
    }

    // Mostrar el número total de registros
    const totalRegistros = filas.length;
    document.getElementById('total-registros').textContent = `Total de registros: ${totalRegistros}`;
});
