$(document).ready(function() {
    $('#documentForm').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#miModal').modal('hide');
                var newRow = `
                    <tr>
                        <td>${response.id}</td>
                        <td>${response.nombre}</td>
                        <td><a href="${response.ruta_archivo}" target="_blank">Ver Documento</a></td>
                        <td>${response.fecha}</td>
                        <td>${response.tipo_documento}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                <a href="#" class="btn btn-info btn-sm">Actualizar</a>
                                <form action="#" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro?')">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>`;
                $('#documentosTable tbody').append(newRow);
                $('#documentForm')[0].reset();
            },
            error: function(response) {
                alert('Hubo un error al guardar el documento.');
            }
        });
    });
});
