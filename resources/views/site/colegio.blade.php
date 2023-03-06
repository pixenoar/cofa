@extends('layouts.site')

@section('contenido')

    <section>
        <div class="container-fluid px-0">
            @include('site.includes.header')
            <div class="bg-primary mt-header py-4 py-lg-5">
                <h1 class="h2 text-white text-center fw-black mb-0">EL COLEGIO</h1>
            </div>
        </div>
    </section>

    <section id="nosotros" class="ancla">
        <div class="container-fluid py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos iste exercitationem cumque molestias ipsa unde esse beatae quibusdam eum quaerat fuga nisi, fugiat molestiae voluptatibus temporibus laborum veniam architecto? Doloribus!</p>
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