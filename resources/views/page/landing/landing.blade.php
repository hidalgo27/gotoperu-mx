@extends('layouts.page.app')
@section('content')
    @foreach($paquete as $paquetes)
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
                                    <h3 class="display-4 font-archivo fw-bold">RESERVAS HASTA POR 10% 2021/2022</h3>
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
                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                        <label for="txt_name">Nombre</label>
                                        <input type="text" class="form-control" id="txt_name" placeholder="Nombre Completo">
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                        <label for="txt_email">Email</label>
                                        <input type="email" class="form-control" id="txt_email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
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
    <section>
        <div class="container bg-g-dark p-3 mt-5 rounded shadow">
            <div class="row align-items-center">
                <div class="col-3">
                    <h4 class="text-g-yellow fw-bold text-center">VIAJES SEGUROS</h4>
                </div>
                <div class="col-9">
                    <p class="text text-white m-0">
                        Ofrecemos las mejores condiciones de reserva para este 2021 con nuestro servicio <span class="text-uppercase text-g-yellow">APLAZAMIENTO LIBRE</span>.
                        Tienen la libertad de posponer su viaje hasta 15 días antes del 31 de diciembre.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row pb-4 justify-content-center">
                <div class="col-8 text-center">
                    <h2 class="text-uppercase display-6 fw-bold text-g-yellow pb-2">RESERVE CON CONFIANZA</h2>
                    <p>
                        Preparamos nuestros servicios desde el momento que empieza a planificar su viajes hasta finalizar de su experiencia durante su estadía, nuestro maryor compromiso en la seguridad en el viaje.
                    </p>
                </div>
            </div>
            <div class="row mt-4 pb-3">
                <div class="col text-center">
                    <i data-feather="clock" class="d-block mx-auto" width="65" height="65" stroke-width="1"></i>
                    <h3 class="h5 mt-3 fw-bold">APLAZAMIENTO LIBRE</h3>
                    <p class="text">
                        Los viajes con fechas de salida antes del 31 de diciembre de 2021 se pueden pospone hasta 10 días antes sin cargos por cambio.
                    </p>
                </div>
                <div class="col text-center">
                    <i data-feather="users" class="d-block mx-auto" width="65" height="65" stroke-width="1"></i>
                    <h3 class="h5 mt-3 fw-bold">TOURS PRIVADOS</h3>
                    <p class="text">
                        Podemos ayudarlo a planificar un itinerario de viaje privado. Esto significa que todos los tours serían solo usted y su grupo más el guía.
                    </p>
                </div>
                <div class="col text-center">
                    <i data-feather="calendar" class="d-block mx-auto" width="65" height="65" stroke-width="1"></i>
                    <h3 class="h5 mt-3 fw-bold">FECHAS FLEXIBLES</h3>
                    <p class="text">
                        ¿Se pospone, pero aún no puede comprometerse con fechas específicas? ¡No ha problema! Posponga ahora y elija sus fechas más tarde.
                    </p>
                </div>
                <div class="col text-center">
                    <i data-feather="pie-chart" class="d-block mx-auto" width="65" height="65" stroke-width="1"></i>
                    <h3 class="h5 mt-3 fw-bold">SIN INFLACIONES</h3>
                    <p class="text">
                        Cubriremos todos los aumentos de precios entre 2020 y 2021. Para viajes pospuestos hasta 2022 o más tarde, se aplican las tasas de inflación estándar.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div class="row pb-4">
                <div class="">
                    <h2 class="text-uppercase fw-bold text-g-green p3-4">TOUR <span class="text-g-yellow">RECOMENDADO 2021</span></h2>
                </div>
            </div>
        </div>
    </section>


    <section class="box-tab-detail shadow-sm mb-4">

        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-item text-muted nav-link py-3 rounded-0 border-0 active" id="nav-overview-tab" data-bs-toggle="tab" data-bs-target="#nav-overview" type="button" role="tab" aria-controls="nav-overview" aria-selected="true"><i data-feather="book-open" stroke-width="1"></i> Overview</button>
                            <button class="nav-item text-muted nav-link py-3 rounded-0 border-0" id="nav-itinerary-tab" data-bs-toggle="tab" data-bs-target="#nav-itinerary" type="button" role="tab" aria-controls="nav-itinerary" aria-selected="false"><i data-feather="map-pin" stroke-width="1"></i> Itinerary</button>
                            <button class="nav-item text-muted nav-link py-3 rounded-0 border-0 @if($paquetes->is_tours == 1) d-none @endif" id="nav-prices-tab" data-bs-toggle="tab" data-bs-target="#nav-prices" type="button" role="tab" aria-controls="nav-prices" aria-selected="false"><i data-feather="dollar-sign" stroke-width="1"></i> Prices</button>
{{--                            <a class="text-muted nav-link py-3 rounded-0" id="before-tab" data-toggle="tab" href="#before" role="tab" aria-controls="before" aria-selected="false"><i data-feather="book-open" stroke-width="1"></i> Before you Go</a>--}}
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-overview" role="tabpanel" aria-labelledby="nav-overview-tab">

                            <div class="row">
                                <div class="col">
                                    <div class="row mb-4">
                                        <div class="col">
                                            <h3 class="font-weight-semi-bold">Intro</h3>
                                            {!! $paquetes->descripcion !!}
                                        </div>
                                    </div>

                                    {{--                                        <h3 class="font-weight-semi-bold mb-4">Outline</h3>--}}

                                    <div class="timeline-centered">
                                        @php $day = 1; @endphp
                                        @foreach($paquetes->paquete_itinerario as $itinerario)
                                            <article class="timeline-entry">

                                                <div class="timeline-entry-inner">

                                                    @switch($day)
                                                        @case(1)
                                                        @php $bgit = 'bg-success'; $bgtext = 'Begin' @endphp
                                                        @break

                                                        @case($paquetes->duracion)
                                                        @php $bgit = 'bg-danger' ; $bgtext = 'End' @endphp
                                                        @break

                                                        @default
                                                        @php $bgit = 'bg-secondary'; $bgtext = '' @endphp
                                                    @endswitch

                                                    <div class="timeline-time"><span>Day {{$day}}</span> <span>{{$bgtext}}</span></div>
                                                    <a href="#">
                                                        <div class="timeline-icon {{$bgit}}">
                                                            <i data-feather="image" class="text-white stretched-link" stroke-width="2" width="15"></i>
                                                        </div>
                                                    </a>
                                                    <div class="timeline-label">
                                                        <h2 class="mb-0 h6 font-weight-semi-bold text-secondary">{{ucwords(strtolower($itinerario->itinerarios->titulo))}}</h2>
                                                    </div>
                                                </div>

                                            </article>
                                            @php $day++; @endphp
                                        @endforeach


                                        <article class="timeline-entry begin">

                                            <div class="timeline-entry-inner">

                                                <div class="timeline-icon">
                                                    <i class="entypo-flight"></i>
                                                </div>

                                            </div>

                                        </article>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <h6 class="font-weight-semi-bold mb-3">Your Journey</h6>
                                    <img src="{{$paquetes->imagen}}" alt="" class="w-100 shadow-sm">

                                    <hr>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae consequatur impedit in nisi non nostrum omnis similique veritatis. Assumenda consequuntur error in molestias nemo obcaecati officiis repellendus vel voluptatibus!</p>
                                    <hr>
                                    {{--                                        <h6 class="font-weight-semi-bold mb-3">Climate Charts</h6>--}}
                                    {{--                                        <a href="" class="btn btn-link font-weight-bold text-g-yellow"><i data-feather="sun" stroke-width="1" width="15" height="15"></i> view <i data-feather="arrow-right" stroke-width="1" width="15" height="15"></i></a>--}}
                                    {{--                                        <hr>--}}


                                    <p class="text-left m-0"><i data-feather="code" class="text-primary" stroke-width="1" width="15"></i> <span class="font-weight-bold text-dark">Code:</span> <small class="font-weight-bold text-primary">{{$paquetes->codigo}}</small></p>
                                    <p class="text-left m-0"><i data-feather="map-pin" class="text-success" stroke-width="1" width="15"></i> <span class="font-weight-bold text-dark">Destinations:</span></p>

                                    <ul class="m-0">
                                        @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destinos)
                                            <li class="font-weight-semi-bold text-secondary">{{ucwords(strtolower($paquete_destinos->destinos->nombre))}}</li>
                                        @endforeach
                                    </ul>
                                    {{--                                            <p>{!! $dificultades->dificultad->descripcion !!}</p>--}}

                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="nav-itinerary" role="tabpanel" aria-labelledby="nav-itinerary-tab">
                            <div class="row">
                                <div class="col">
                                    <div class="row mb-4">
                                        <div class="col">
                                            {{--                                                <h3 class="font-weight-semi-bold">Intro</h3>--}}
                                            {{--                                                {!! $paquetes->descripcion !!}--}}
                                        </div>
                                    </div>

                                    {{--                                        <h3 class="font-weight-semi-bold mb-4">Outline</h3>--}}

                                    <div class="timeline-centered">
                                        @php $day2 = 1; @endphp
                                        @foreach($paquetes->paquete_itinerario as $itinerario)
                                            <article class="timeline-entry mb-5">

                                                <div class="timeline-entry-inner">

                                                    @switch($day2)
                                                        @case(1)
                                                        @php $bgit = 'bg-success'; $bgtext = 'Begin' @endphp
                                                        @break

                                                        @case($paquetes->duracion)
                                                        @php $bgit = 'bg-danger' ; $bgtext = 'End' @endphp
                                                        @break

                                                        @default
                                                        @php $bgit = 'bg-secondary'; $bgtext = '' @endphp
                                                    @endswitch

                                                    <div class="timeline-time"><span>Day {{$day2}}</span> <span>{{$bgtext}}</span></div>

                                                    <a href="">
                                                        <div class="timeline-icon {{$bgit}}">
                                                            <i data-feather="image" class="text-white stretched-link" stroke-width="2" width="15"></i>
                                                        </div>
                                                    </a>

                                                    <div class="timeline-label text-secondary">
                                                        <h2 class="mb-0 h6 font-weight-bold text-secondary">{{ucwords(strtolower($itinerario->itinerarios->titulo))}}</h2>
                                                        <hr>
                                                        {!! $itinerario->itinerarios->descripcion !!}
                                                    </div>
                                                </div>

                                            </article>
                                            @php $day2++; @endphp
                                        @endforeach


                                        <article class="timeline-entry begin">

                                            <div class="timeline-entry-inner">

                                                <div class="timeline-icon">
                                                    <i class="entypo-flight"></i>
                                                </div>

                                            </div>

                                        </article>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="sticky-top sticky-top-20">
                                        <h6 class="font-weight-semi-bold mb-3">Your Journey</h6>
                                        <img src="{{$paquetes->imagen}}" alt="" class="w-100 shadow-sm">

                                        <hr>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae consequatur impedit in nisi non nostrum omnis similique veritatis. Assumenda consequuntur error in molestias nemo obcaecati officiis repellendus vel voluptatibus!</p>
                                        <hr>
                                        {{--                                        <h6 class="font-weight-semi-bold mb-3">Climate Charts</h6>--}}
                                        {{--                                        <a href="" class="btn btn-link font-weight-bold text-g-yellow"><i data-feather="sun" stroke-width="1" width="15" height="15"></i> view <i data-feather="arrow-right" stroke-width="1" width="15" height="15"></i></a>--}}
                                        {{--                                        <hr>--}}


                                        <p class="text-left m-0"><i data-feather="code" class="text-primary" stroke-width="1" width="15"></i> <span class="font-weight-bold text-dark">Code:</span> <small class="font-weight-bold text-primary">{{$paquetes->codigo}}</small></p>
                                        <p class="text-left m-0"><i data-feather="map-pin" class="text-success" stroke-width="1" width="15"></i> <span class="font-weight-bold text-dark">Destinations:</span></p>

                                        <ul class="m-0">

                                            @foreach($paquete_destinos->where('idpaquetes', $paquetes->id) as $paque)
                                                {{ $paque }}
                                                <li class="font-weight-semi-bold text-secondary">{{ucwords(strtolower($paquete_destinos2->destinos->nombre))}}</li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-prices" role="tabpanel" aria-labelledby="nav-prices-tab">

                            <div class="row">
                                <div class="col">

                                    <h6 class="font-weight-bold text-secondary"><span class="text-g-yellow">Precios:</span></h6>
                                    <p>Los precios estan basados en doble acomodación.</p>
                                    <div class="table-responsive">
                                        <table class="table table-borderless border">
                                            <thead class="thead-dark">
                                            <tr class="text-center">
                                                <th scope="col">Económico</th>
                                                <th scope="col">Normal</th>
                                                <th scope="col">Superior</th>
                                                <th scope="col">Lujo</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{asset('images/hotels/2star.jpg')}}" alt="" class="w-100">
                                                </td>
                                                <td>
                                                    <img src="{{asset('images/hotels/3star.jpg')}}" alt="" class="w-100">
                                                </td>
                                                <td>
                                                    <img src="{{asset('images/hotels/4star.jpg')}}" alt="" class="w-100">
                                                </td>
                                                <td>
                                                    <img src="{{asset('images/hotels/5start.jpg')}}" alt="" class="w-100">
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                @foreach($paquetes->precio_paquetes->sortBy('estrellas') as $precio)
                                                    @php $porcentaje_decuento = ($precio->precio_d * $paquetes->descuento) / 100 @endphp
                                                    @if($precio->precio_d > 0)
                                                        <td><sup><small><del>${{$precio->precio_d}}</del></small></sup> ${{round($precio->precio_d - $porcentaje_decuento)}}<small>USD</small></td>
                                                    @else
                                                        <td class="font-weight-bold text-danger">Inquire</td>
                                                    @endif
                                                @endforeach

                                            </tr>
                                            <tr>
                                                @foreach($paquetes->precio_paquetes->sortBy('estrellas') as $precio)
                                                    <td>
                                                        @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                            @foreach($hoteles_destinos->where('iddestinos', $paquete_destino->destinos->id) as $hoteles_destino)
                                                                @foreach($hoteles->where('id', $hoteles_destino->hotel->id)->where('estrellas', $precio->estrellas) as $hotel)
                                                                    <a href="{{$hoteles_destino->hotel->url}}" target="_blank" data-toggle="tooltip" data-placement="top" title="{{$hotel->servicios}}"><small class="d-block"><i class="fas fa-angle-right"></i> {{ucwords(strtolower($hotel->nombre))}} <i class="text-secondary">({{ucwords(strtolower($paquete_destino->destinos->nombre))}})</i></small></a>
                                                                @endforeach
                                                            @endforeach
                                                        @endforeach
                                                    </td>
                                                @endforeach
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="alert alert-primary">
                                        <p class="m-0">*Si tiene algún hotel en especifico con gusto lo prepararemos una cotización personalizada.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">





                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="before" role="tabpanel" aria-labelledby="before-tab">
                            <div class="row">
                                <div class="col d-flex">
                                    <div class="card alert-g-yellow">
                                        {{--                                            <div class="card-header">--}}
                                        {{--                                                --}}
                                        {{--                                            </div>--}}
                                        <div class="card-body">
                                            <h5 class="card-title">Essential Information</h5>
                                            <p class="card-text small">About your destination(s); including vaccinations; baggage restrictions; a packing list; and tipping guidelines.</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="" class="btn btn-link text-danger">Download PDF</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col d-flex">
                                    <div class="card alert-danger">
                                        <div class="card-body">
                                            <h5 class="card-text">Preparing for Your Journey</h5>
                                            <p class="card-text small">Quick travel tips to ensure you are prepared for your journey.</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="" class="btn btn-link text-danger">Download PDF</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col d-flex">
                                    <div class="card alert-info">
                                        <div class="card-body">
                                            <h5 class="card-title">Passports & Visas</h5>
                                            <p class="card-text small">See passport requirements and GOTOPERU recommendations for obtaining necessary visas.</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="" class="btn btn-link text-danger">Download PDF</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <h5>* Notas sobre la política de aplazamiento:</h5>
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item">La política de aplazamiento se aplica a todas las reservas nuevas a partir del 1 de mayo de 2020.</li>
                    <li class="list-group-item">La tarifa aérea nacional e internacional no se aplica a los términos de aplazamiento. Peru for Less utilizará las políticas de postergación y cancelación de la aerolínea. En la mayoría de los casos, se aplica un cargo por cambio de $ 20 y una diferencia en la tarifa aérea.</li>
                    <li class="list-group-item">Unos pocos hoteles y cruceros muy selectos tienen diferentes plazos de aplazamiento. Su asesor de viajes le informará de estas excepciones en el momento de la reserva. Estos serán revisados ​​caso por caso y negociados con el hotel / crucero.</li>
                    <li class="list-group-item">Tenga en cuenta que para grupos grandes (por ejemplo, 10 o más que viajan juntos) o presupuestos y servicios especiales, pueden aplicarse diferentes plazos de aplazamiento.</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-g-yellow fw-bold display-4 text-center">Quiénes Somos y <span class="text-g-green">por qué Amamos Viajar</span></h1>
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

                <div class="col">
                    <div class="bg-light shadow-sm p-4 border-left border-g-green">
{{--                        <h5 class="font-weight-bold text-secondary">NUESTRO COMPROMISO</h5>--}}
                        <p class="align-middle m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto aspernatur atque cum eligendi eveniet expedita facere ipsam iusto laborum necessitatibus nemo, nobis quae quod, reiciendis repudiandae suscipit. Ea, voluptate.</p>
                        <p class="align-middle m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto aspernatur atque cum eligendi eveniet expedita facere ipsam iusto laborum necessitatibus nemo, nobis quae quod, reiciendis repudiandae suscipit. Ea, voluptate.</p>
                    </div>
                </div>

{{--                <div class="col-6">--}}
{{--                    <div class="bg-light shadow-sm p-4 border-left border-g-yellow">--}}
{{--                        <h5 class="font-weight-bold text-secondary">MISIÓN</h5>--}}
{{--                        <p class="align-middle">Ofrecer a nuestros clientes los mejores recursos peruanos para una aventura inolvidable.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
        
    @endforeach
@endsection
