function cargarModal() {
    $.ajax({
        url: "{{ route('formulario') }}",
        success: function(data) {
            $('#miModal.modal-body').html(data);
            $('#miModal').modal('show');
        }
    });
}

document.getElementById('uploadForm').addEventListener('submit', function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch('{{ route("documentos.upload") }}', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(response => response.json())
    .then(data => {
        let galleryItems = document.getElementById('gallery-items');
        let newItem = `
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="${data.imagePath}" class="img-fluid" alt="${data.nombre}" type="application/pdf">
                        <div class="hover-style"></div>
                        <div class="search-icon">
                            <a target="_blank" href="${data.pdfPath}" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-plus btn-primary btn-primary-outline-0 p-3"></i></a>
                        </div>
                    </div>
                    <div class="gallery-overlay bg-light border-secondary border-top-0 p-4" style="border-style: double;">
                        <h6>${data.nombre}</h6>
                        <p class="text-dark mb-0">${data.fecha}</p>
                    </div>
                </div>
            </div>
        `;

        galleryItems.insertAdjacentHTML('beforeend', newItem);
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
