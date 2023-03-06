@extends('layouts.site')

@section('contenido')

    <section>
        <div class="container-fluid px-0">
            @include('site.includes.header')
            <div class="bg-primary mt-header py-4 py-lg-5">
                <h1 class="h2 text-white text-center fw-black">FARMACIAS DE TURNO</h1>
                <h2 class="h5 text-white text-center fw-light mb-0"><span class="fw-bold">VIERNES 03 DE MARZO</span> DE 2023</h2>
            </div>
        </div>
    </section>

    <section id="nosotros" class="ancla">
        <div class="container-fluid py-4">
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <h3 class="h5 fw-bold text-center mb-3"><i class="bi bi-geo-alt-fill text-primary"></i> Mercedes</h3>
                        
                        <div class="d-lg-none mb-5">

                            @for($i = 0; $i < 3; $i++)
                                <div class="card shadow-sm my-2">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <div class="fw-bold">GONZALES</div>
                                                <div class="small">Calle 24 N° 256 entre 5 y 7</div>
                                                <div class="small">42-5689</div>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-primary btn-sm text-light"><i class="bi bi-geo-alt-fill"></i></button>
                                                <button type="button" class="btn btn-primary btn-sm text-light"><i class="bi bi-telephone-fill"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor

                        </div>


                        <div class="card shadow-sm mb-5 d-none d-lg-block">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-striped align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">Farmacia</th>
                                                <th scope="col">Dirección</th>
                                                <th scope="col">Teléfono</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Gonzales</td>
                                                <td>24 N° 650 esq. 7</td>
                                                <td>434056</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-geo-alt-fill"></i></button>
                                                    <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-telephone-fill"></i></button>
                                                    <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-whatsapp"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tejedor</td>
                                                <td>16 N° 254 entre 3 y 5</td>
                                                <td>422569</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-geo-alt-fill"></i></button>
                                                    <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-telephone-fill"></i></button>
                                                    <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-whatsapp"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                        <h3 class="h5 fw-bold text-center mb-3"><i class="bi bi-geo-alt-fill text-primary"></i> Gowland</h3>
                        
                        <div class="card shadow-sm d-none d-lg-block">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-striped align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">Farmacia</th>
                                                <th scope="col">Dirección</th>
                                                <th scope="col">Teléfono</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Huarte</td>
                                                <td>24 N° 650 esq. 7</td>
                                                <td>434056</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm text-light"><i class="bi bi-geo-alt-fill"></i></button>
                                                    <button type="button" class="btn btn-primary btn-sm text-light"><i class="bi bi-telephone-fill"></i></button>
                                                    <button type="button" class="btn btn-primary btn-sm text-light"><i class="bi bi-whatsapp"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container-fluid bg-dark py-4 py-lg-5">
            <div class="container">
                <div class="row align-items-center g-3">
                    <div class="col-lg-8 order-last order-lg-first">
                        <p class="text-white text-center text-lg-start mb-0"><span class="fw-bold">Colegio de Farmacéuticos de Mercedes</span> © Todos los derechos reservados</p>
                    </div>
                    <div class="col-lg-4 order-first order-lg-last">
                        <ul class="nav justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.instagram.com/consultoriosdelta" target="_blank" class="nav-link link-light"><i class="bi bi-instagram fs-5"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.facebook.com/consultoriosdelta" target="_blank" class="nav-link link-light"><i class="bi bi-facebook fs-5"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- includes -->

    @include('site.includes.canvas-menu')

    @include('site.includes.btn-wp')

    @include('site.includes.modal-mapa')

@endsection