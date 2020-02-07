@extends('layouts.app2') @section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
        ></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img
                src="{{url('storage/img/img1.jpg')}}"
                style="height:500px"
                class="d-block w-100"
                alt="..."
            />
        </div>
        <div class="carousel-item">
            <img
                src="{{url('storage/img/img2.jpg')}}"
                style="height:500px"
                class="d-block w-100"
                alt="..."
            />
        </div>
        <div class="carousel-item">
            <img
                src="{{url('storage/img/img3.jpg')}}"
                style="height:500px"
                class="d-block w-100"
                alt="..."
            />
        </div>
    </div>
    <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
    >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
    >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container mt-2">
    <div class="row">
        <div class="col text-center">
        <h1>Perfil <small class="text-muted">Profesional</small></h1>
            <div class="card-deck mx-4">
                <div class="col-12 my-4">
                    <div class="card with-12rem">
                        <div class="card-header bg-info text-white">
                            Presentación
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-6">
                                <img src="{{url('storage/img/perfil.png')}}" style="width:23rem;" alt="">
                                    <h5 class="card-title">Mi nombre es</h5>
                                    <p class="card-text">
                                        Cristhian Jack López Suasnabar
                                    </p>
                                </div>
                                <div class="col-6 text-left">
                                    <h5 class="card-title">Esperiencia :</h5><hr>
                                    <p class="card-text">
                                    <i class="far fa-address-book"></i> 5 años como Tutor Vitual (herramientas (Moodle y Chamilo))
                                    </p>
                                    <p class="card-text">
                                    <i class="far fa-address-book"></i> 1 año en soporte y administración de redes 
                                    </p>
                                    <p class="card-text">
                                    <i class="far fa-address-book"></i> 2 años en soporte de equipos informáticos
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col"><h1>Conocimiento <small class="text-muted">En</small></h1></div>
    </div>
    <div class="row text-center">
        <div class="col">
            <div class="card-deck mx-4">
                <div class="col-12 my-4">
                    <div class="card with-12rem">
                        <div class="card-header bg-info text-white">
                            Presentación
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-6">
                                    <img src="{{url('storage/img/laravel.png')}}" style="width:23rem;" alt="">
                                    <h5 class="card-title">Laravel</h5>
                                    <p class="card-text">
                                        Desarrollo de aplicaiones web en Laravel
                                    </p>
                                </div>
                                <div class="col-6">
                                    <img src="{{url('storage/img/angular.png')}}" style="width:10rem;" alt="">
                                    <h5 class="card-title">Angular</h5>
                                    <p class="card-text">
                                        Desarrollo de aplicaiones web en Angular
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container text-white m-4">.............................</div>
@endsection

