
@extends('layouts.base')

@section('content')


 <!-- About-area start -->
    <!--title start  -->

    <section class="services py-80 ">
        <div class="container">
             @if(session('success'))
                <div class="row row-gap-4 justify-content-center">
                    <div class="col-lg-8">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                </div>
            @endif
            <div class="row row-gap-4">
                <div class="col-lg-7">
                    {{-- <div class="banner mb-24">
                        <h6>Extra Services</h6>
                        <hr class="mt-24">
                        <p class="mt-24">Snow Chains - $ 150</p>
                    </div> --}}
                    <div class="banner-2">
                        <h6 class="fs-6">Detalhes do Pedido</h6>
                        <hr class="my-24">
                        <div class="d-flex  gap-24 flex-sm-noWrap flex-wrap justify-content-between">
                            <div class=" d-flex flex-column gap-24 ">
                                <div class="flex-shrink-0 d-flex gap-12">
                                    <i class="bi bi-hash text-info"></i>
                                    <P class="fw-bolder">Código da reserva:</P>
                                </div>
                                <div class="flex-shrink-0 d-flex gap-12">
                                    <i class="bi bi-car-front-fill text-info"></i>
                                    <p class="fw-bolder">Veículo da reserva:</p>
                                </div>
                                <div class="flex-shrink-0 d-flex gap-12">
                                    <i class="bi bi-hourglass-split text-info"></i>
                                    <P class="fw-bolder">Status da reserva:</P>
                                </div>
                            </div>

                            <div class=" d-flex flex-column gap-24 ">
                                <div class="flex-shrink-0 d-flex gap-12">
                                    <p>{{ $booking->booking_code }} </p>
                                </div>
                                <div class="flex-shrink-0 d-flex gap-12">
                                    <p>{{ $booking->vehicle->vehicleModel->brand->name }} {{ $booking->vehicle->vehicleModel->name }} / {{ $booking->vehicle->vehicleModel->category->name }}</p>
                                </div>
                                <div class="flex-shrink-0 d-flex gap-12">
                                    <p class="p-2 rounded text-white" style="background: #ec9e0b">{{$booking->status}} </p>
                                </div>
                            </div>
                        </div>

                         <hr class="my-24">
                         <div class="d-flex  gap-24 flex-sm-noWrap flex-wrap justify-content-between ">
                            <div class=" d-flex flex-column gap-24 ">
                                <div class="flex-shrink-0 d-flex gap-12">
                                    <P class="fw-bolder">Total a pagar </P>
                                </div>
                            </div>

                            <div class=" d-flex flex-column gap-24 ">
                                <div class="flex-shrink-0 d-flex gap-12">
                                    <p class="p-2 rounded text-white" style="background: #228bbb"> {{ number_format($booking->total_amount, 2, ',', '.') }} KZ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="cards py-80">
        <div class="container">
            <div class="row row-gap-4">
                <div class="col-xl-3 col-lg-6  col-md-6 col-sm-6">
                    <div class="banner">
                        <i class="fa-solid fa-phone-volume mb-24"></i>
                        <h5 class="mb-16">Contactos</h5>
                        <P>923482877 / 946320021</P>
                    </div>
                </div>
                <div class="col-xl-3  col-lg-6 col-md-6 col-sm-6">
                    <div class="banner">
                        <i class="fa-thin fa-envelope mb-24"></i>
                        <h5 class="mb-16">Email</h5>
                        <P>rent@orgchana.com</P>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="banner">
                        <i class="fa-light fa-location-dot mb-24"></i>
                        <h5 class="mb-16">Location</h5>
                        <P>Estrada principal do Lar do Patriota - Luanda</P>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="banner">
                        <i class="fa-regular fa-clock mb-24"></i>
                        <h5 class="mb-16">Horário de funcionamento</h5>
                        <p>Mon-Sat (08H:30 - 16H:30)<p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- end -->

@endsection
