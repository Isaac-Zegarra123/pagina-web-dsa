<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/route.js', 'resources/sass/routes.css'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<body>
    <!--rerrter-->
    <h1>INFORMACION ACADEMICA</h1>
    <div class="container-fluid menu bg-light py-6 my-6">
        <div class="container-academic">
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
                        @include('pages/carreras')
                    </div>
                    <div class="tab-pane fade" id="main-course-tab" role="tabpanel" aria-labelledby="main-course-button">
                        <!-- Contenido de la pestaña "Main Course" -->
                        @include('pages/maincourse')
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>