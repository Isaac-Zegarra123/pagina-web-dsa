function cargarModal() {
    $.ajax({
        url: "{{ route('formulario') }}",
        success: function(data) {
            $('#miModal.modal-body').html(data);
            $('#miModal').modal('show');
        }
    });
}