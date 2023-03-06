@extends('layouts.site')

@section('contenido')

    <section id="inicio">
        <div class="container-fluid position-relative bg-home vh-100 px-0">
            <!-- header -->
            @include('site.includes.header')
            <!-- gradient -->
            <div class="position-absolute bottom-0 start-50 translate-middle-x h-100 w-100 bg-ocy-black"></div>            
            <!-- logo + frase -->
            <div class="position-absolute top-50 start-50 translate-middle w-75 mt-5">
                <div class="text-center text-white">
                    <h1 class="display-4">COLEGIO DE FARMACÉUTICOS<br>DE <span class="fw-black">MERCEDES</span></h1>
                    <div class="mt-4 d-none d-lg-inline-block">
                        <a href="#nosotros" class="btn btn-light fw-bold me-1" role="button">CONOCENOS</a>
                        <a href="#nosotros" class="btn btn-primary fw-bold text-light" role="button"><i class="bi bi-bell-fill me-1"></i> FARMACIAS DE TURNO</a>                        
                    </div>
                    <div class="mt-3">
                        <a href="#nosotros" class="btn btn-light btn-sm fw-bold d-lg-none" role="button">CONOCENOS</a>
                        <a href="#nosotros" class="btn btn-primary btn-sm fw-bold text-light mt-2 d-lg-none" role="button"><i class="bi bi-bell-fill me-1"></i> FARMACIAS DE TURNO</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section id="nosotros" class="ancla">
        <div class="container-fluid py-4 py-lg-5">
            <div class="container py-4 py-lg-5">

            </div>
        </div>
    </section>

    <section id="especialidades" class="ancla">
        <div class="container-fluid bg-section py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <h2 class="h3 fw-black text-center mb-5">NOVEDADES</h2>
            </div>
        </div>
    </section>

    <section id="contacto" class="ancla">
        <div class="container-fluid py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <div class="row justify-content-between align-items-center g-4">
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <img src="{{ asset('img/spa/mapa.jpg') }}" alt="Mapa" class="img-fluid rounded shadow-sm">
                            <div class="position-absolute bottom-0 end-0 m-3">
                                <button type="button" class="btn btn-light btn-sm fw-bold shadow" data-bs-toggle="modal" data-bs-target="#modalMapa"><i class="bi bi-arrows-fullscreen me-1"></i> AMPLIAR MAPA</button>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item py-3"><i class="bi bi-geo-alt-fill fs-5 me-4"></i> Santa María de las Conchas 2928.<br><span class="ms-5">Rincón de Milberg - Tigre - Bs. As.</span></li>
                            <li class="list-group-item py-3"><i class="bi bi-telephone-fill fs-5 me-4"></i> (011) 4949-9006 / 8985 <a href="tel:+541149499006" class="btn btn-primary btn-sm text-light fw-bold ms-3" role="button"><i class="bi bi-telephone-fill"></i></a></li>
                            <li class="list-group-item py-3"><i class="bi bi-whatsapp fs-5 me-4"></i> 1150556081 <a href="https://wa.me/+541150556081" target="_blank" class="btn btn-primary text-light btn-sm fw-bold ms-3" role="button"><i class="bi bi-whatsapp"></i></a></li>
                            <li class="list-group-item py-3"><i class="bi bi-envelope-fill fs-5 me-4"></i> contacto@consultoriosdelta.ar</li>
                            <li class="list-group-item py-3"><i class="bi bi-clock-fill fs-5 me-4"></i> Lunes a Viernes: 8:00 a 20:00 hs.<br><span class="ms-5">Sábados: 9:00 a 13:00 hs.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="turnos" class="ancla">
        <div class="container-fluid bg-grad-turnos py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <div class="text-center">
                    <h4 class="text-light fw-light mb-4"><span class="fw-bold">SISTEMA DE TURNOS ONLINE</span> LAS 24 HS. LOS 365 DÍAS</h4>
                    <a href="https://www.docturno.com/gm/consultorios-delta" target="_blank" class="btn btn-light fw-bold" role="button"><i class="bi bi-calendar3 me-1"></i> SOLICITAR TURNO</a>  
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