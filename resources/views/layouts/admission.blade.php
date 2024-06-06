
<div class="container-gallery gallery position-relative py-5" id="weddingGallery">
    <div class="sub-container">
        <div class="sub">
            <!--conovocatoria-->
            <h1 class="title" id="convocatoria">Convocatorias</h1>
        </div>
    </div>
    <div class="position-absolute" style="top: -95px; right: 0;">
        <img src="img/tamp-bg-1.png" class="img-fluid" alt="">
    </div>
    <div class="position-absolute" style="top: -80px; left: 0; transform: rotate(150deg);">
    
        <img src="img/tamp-bg-1.png" class="img-fluid" alt="">
    </div>
    <div class="container-gallery position-relative py-5">
        <div class="row g-4">

        @foreach ($documentos as $documento)
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <div class="pdf-container">
                            <img src="{{ asset('storage/pdf-images/' . pathinfo($documento->ruta_archivo, PATHINFO_FILENAME) . '.jpg') }}" class="img-fluid" alt="Documento {{ $documento->nombre }}">
                        </div>
                        <div class="hover-style"></div>
                        <div class="search-icon">
                            <a target="_blank" href="{{ asset('storage/' . $documento->ruta_archivo) }}" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-plus btn-primary btn-primary-outline-0 p-3"></i></a>
                        </div>
                    </div>
                    <!--<p>Tipo: {{ ucfirst($documento->tipo_documento) }}</p>-->
                    <div class="gallery-overlay bg-light border-secondary border-top-0 p-4" style="border-style: double;">
                        <h6>{{ $documento->nombre }}</h6>
                        <p class="text-dark mb-0">{{ $documento->fecha }}</p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    <div class="sub">
        <!--conovocatoria-->
        <h1 class="title" id="convocatoria">Reglamentos</h1>
    </div>
    <div class="container-gallery position-relative py-5">
        <div class="row g-4">
    
            @foreach ($documentos as $documento)
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <div class="pdf-container">
                                <img src="{{ asset('storage/pdf-images/' . pathinfo($documento->ruta_archivo, PATHINFO_FILENAME) . '.jpg') }}" class="img-fluid" alt="Documento {{ $documento->nombre }}">
                            </div>
                            <div class="hover-style"></div>
                            <div class="search-icon">
                                <a target="_blank" href="{{ asset('storage/' . $documento->ruta_archivo) }}" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-plus btn-primary btn-primary-outline-0 p-3"></i></a>
                            </div>
                        </div>
                        <!--<p>Tipo: {{ ucfirst($documento->tipo_documento) }}</p>-->
                        <div class="gallery-overlay bg-light border-secondary border-top-0 p-4" style="border-style: double;">
                            <h6>{{ $documento->nombre }}</h6>
                            <p class="text-dark mb-0">{{ $documento->fecha }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

</div>

