<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js','resources/js/pdf.js' , 'resources/sass/routes.scss'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<script>
    document.getElementById('starter-button').addEventListener('click', function(event) {
        event.preventDefault();
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                document.getElementById('carreras-content').innerHTML = xhr.responseText;
            }
        };
        xhr.open('GET', '{{ route('carreras') }}', true);
        xhr.send();
    });
</script>

<body>
    <!--rerrter-->
    <div>
        <h1>INFORMACION ACADEMICA</h1>
    </div>
    <div class="container-fluid menu bg-light py-6 my-6">
        <div class="container">
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                    <li class="nav-item p-2">
                        <a id="carreras-button" class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" data-bs-target="#carreras-tab" href="#carreras-tab" aria-controls="carreras-tab" aria-selected="false">
                            <span class="text-dark" style="width: 150px;">Carreras</span>
                        </a>
                    </li>
                    
                    <li class="nav-item p-2">
                        <a id="main-course-button" class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" data-bs-target="#main-course-tab" href="#main-course-tab" aria-controls="main-course-tab" aria-selected="false">
                            <span class="text-dark" style="width: 150px;">Main Course</span>
                        </a>
                    </li>
                    <li class="nav-item p-2">
                        <a id="drinks-button" class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" data-bs-target="#drinks-tab" href="#drinks-tab" aria-controls="drinks-tab" aria-selected="false">
                            <span class="text-dark" style="width: 150px;">Drinks</span>
                        </a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-9">
                            <span class="text-dark" style="width: 150px;">Offers</span>
                        </a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-10">
                            <span class="text-dark" style="width: 150px;">Our Spesial</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade" id="carreras-tab" role="tabpanel" aria-labelledby="carreras-button">
                        <!-- Contenido de la pestaña "Carreras" -->
                        @include('gallerypdf/carreras')
                    </div>
                    <div class="tab-pane fade" id="main-course-tab" role="tabpanel" aria-labelledby="main-course-button">
                        <!-- Contenido de la pestaña "Main Course" -->
                        @include('gallerypdf/maincourse')
                    </div>
                </div>


                <div class="tab-content">
                    
                    <div id="tab-6" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                <div class="menu-item d-flex align-items-center">
                                    <img src="{{ asset('images/logo321.png') }}" alt="Logo UATF" class="logo">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Paneer</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.2s">
                                <div class="menu-item d-flex align-items-center">
                                    <img src="{{ asset('images/logo321.png') }}" alt="Logo UATF" class="logo">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-02.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Sweet Potato</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.3s">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-03.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Sabudana Tikki</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.4s">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-04.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Pizza</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.5s">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-05.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Bacon</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.6s">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-06.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Chicken</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.7s">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-07.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Blooming</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.8s">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-08.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Sweet</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-7" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-01.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Argentinian</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-03.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Crispy</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-05.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Sabudana Tikki</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-07.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Blooming</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-08.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Argentinian</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-03.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Lemon</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-02.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Water Drink</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-01.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Salty lemon</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-8" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-01.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Crispy water</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-02.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Juice</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-03.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Orange</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-04.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Apple Juice</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-05.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Banana</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-06.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Sweet Water</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-07.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Hot Coffee</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-08.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Sweet Potato</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-9" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-06.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Sabudana Tikki</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-07.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Crispy</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-09.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Pizza</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-02.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Bacon</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-03.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Chicken</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-05.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Blooming</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-07.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Sweet</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-09.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Argentinian</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-10" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-06.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Sabudana Tikki</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-07.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Crispy</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-09.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Pizza</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-02.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Bacon</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-03.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Chicken</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-05.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Blooming</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-07.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Sweet</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-09.jpg" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>Argentinian</h4>
                                            <h4 class="text-primary">$90</h4>
                                        </div>
                                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>