@extends('layouts.page.app')
@section('content')

    <header class="header-detail">
        <div class="overlay"></div>
        {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
        {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
        {{--            </video>--}}
        <div class="homepage-video">
            <img src="{{asset('images/machu-picchu.jpg')}}" alt="">

        </div>
        <div class="container h-100 mt-5 pt-5">
            <div class="row d-flex h-100 align-items-center justify-content-between">
                <div class="col-7">
                    <div class="row">
                        <div class="col">
                            <div class="">
                                <h2 class="h3 fw-bold text-g-yellow">Paquetes Turísticos Perú 2021</h2>
                                <div class="text-white">
                                    <h3 class="display-3 font-archivo fw-bold">RESERVAS HASTA POR 10% 2021/2022</h3>
                                    <p class="lead fw-normal">Diseñamos tu próximo viaje a medida con todos lo protocolos de seguridad</p>
                                    <a class="btn btn-g-green text-white fw-bold" href="#">INFORMACIÓN</a>
                                    <a class="btn btn-g-yellow text-white fw-bold" href="#">ACTIVIDADES</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bg-white rounded shadow">
                        <form class="p-4">
                            <h3 class="fw-bold mb-3 border-bottom pb-3">Información gratis</h3>
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="txt_name">Nombre</label>
                                        <input type="text" class="form-control" id="txt_name" placeholder="Nombre Completo">
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="txt_email">Nombre</label>
                                        <input type="email" class="form-control" id="txt_email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="txt_tel">Teléfono / Celular (whatsapp)</label>
                                        <input type="text" class="form-control" id="txt_tel" placeholder="Numero de celular">
                                    </div>
                                </div>
{{--                                <div class="col-12 mb-2">--}}
{{--                                    <input type="text" class="form-control border-1 border-g-dark" placeholder="Country">--}}
{{--                                </div>--}}
                                <div class="col-12">
                                    <a class="btn btn-g-yellow text-white fw-bold d-block" href="#">ACTIVIDADES</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute-bottom p-2">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <a href="#title_section" class="mx-2">
                        <i data-feather="chevrons-down" class="text-white" stroke-width="1" height="50" width="50"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <section class="bg-g-dark py-3">
        <div class="row">
            <div class="col-3 align-self-center">
                <h4 class="text-g-yellow text-center">VIAJES SEGUROS</h4>
            </div>
            <div class="col-9">
                <p class="text text-white">
                    Ofrecemos las mejores condiciones de reserva para este 2021 con nuestro servicio <span class="text-uppercase text-g-yellow">APLAZAMIENTO LIBRE</span>.
                    Tienen la libertad de posponer su viaje hasta 15 días antes del 31 de diciembre.
                </p>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container">
            <div class="row pb-4 justify-content-center">
                <div class="col-8 text-center">
                    <h2 class="text-uppercase text-g-yellow pb-4">RESERVE CON CONFIANZA</h2>
                    <p class="text">
                        Preparamos nuestros servicios desde el momento que empieza a planificar su viajes hasta finalizar de su experiencia durante su estadía, nuestro maryor compromiso en la seguridad en el viaje.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h3 class="h5">APLAZAMIENTO LIBRE</h3>
                    <p class="text">
                        Los viajes con fechas de salida antes del 31 de diciembre de 2021 se pueden pospone hasta 10 días antes sin cargos por cambio.
                    </p>
                </div>
                <div class="col text-center">
                    <h3 class="h5">TOURS PRIVADOS</h3>
                    <p class="text">
                        Podemos ayudarlo a planificar un itinerario de viaje privado. Esto significa que todos los tours serían solo usted y su grupo más el guía.
                    </p>
                </div>
                <div class="col text-center">
                    <h3 class="h5">FECHAS FLEXIBLES</h3>
                    <p class="text">
                        ¿Se pospone, pero aún no puede comprometerse con fechas específicas? ¡No ha problema! Posponga ahora y elija sus fechas más tarde.
                    </p>
                </div>
                <div class="col text-center">
                    <h3 class="h5">SIN INFLACIONES</h3>
                    <p class="text">
                        Cubriremos todos los aumentos de precios entre 2020 y 2021. Para viajes pospuestos hasta 2022 o más tarde, se aplican las tasas de inflación estándar.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-g-yellow font-weight-bold display-4 text-center">Quiénes Somos y <span class="text-g-green">por qué Amamos Viajar</span></h1>
                    {{--<p class="h2 text-secondary pt-3">USTED TENDRÁ UNA EXPERIENCIA INIMAGINABLE</p>--}}
                    {{--<p class="h4"></p>--}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="mb-0 lead text-secondary text-center"><b>En GOTOPERU creemos en la excelencia, seguridad, atención personalizada y calidad de los servicios, es nuestro compromiso con nuestros pasajeros. Por eso, nos esforzamos en satisfacer las necesidades de nuestros clientes al máximo.</b></p>
                </div>

            </div>

            <div class="row mt-5 align-items-center">

                <div class="col-6">
                    <div class="bg-light shadow-sm p-4 border-left border-g-green">
                        <h5 class="font-weight-bold text-secondary">NUESTRO COMPROMISO</h5>
                        <p class="align-middle">No dejar escapar la oportunidad de que nuestros turistas descubran los encantos de Perú y vivir una aventura inolvidable.</p>
                    </div>
                </div>

                <div class="col-6">
                    <div class="bg-light shadow-sm p-4 border-left border-g-yellow">
                        <h5 class="font-weight-bold text-secondary">MISIÓN</h5>
                        <p class="align-middle">Ofrecer a nuestros clientes los mejores recursos peruanos para una aventura inolvidable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop
