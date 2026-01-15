
@extends('layouts.base')

@section('content')


 <!-- About-area start -->
    <!--title start  -->

    <section class="services bg-white py-80 ">
        <div class="container">
             @if(session('success'))
                <div class="row row-gap-4 justify-content-center">
                    <div class="col-lg-8 justify-items-center align-i">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            {{-- <div class="ride my-80">
                <div class="container">
                    <div class="heads mb-48 d-flex  gap-24 flex-sm-noWrap flex-wrap justify-content-center">
                        <div class="Search-field border">
                            <form action="{{ route('front.booking.result') }}" method="POST">
                                @csrf
                                <input type="text" class="search-bar" placeholder="Codigo da reserva" name="term">
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="container">
            <div class="heads mb-48">
                <div class="file">
                    <h4 class="mb-12">Resultado da Pesquisa</h4>

                </div>
            </div>
        </div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="" style="background-color: #041A71">
                        <tr class="text-white">
                            <th>Cliente</th>
                            <th>Veículo</th>
                            <th>Valor total</th>
                            <th>codigo da reserva</th>
                            <th>Data da reserva</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$booking->customer->name}}</td>
                            <td>{{$booking->vehicle->vehicleModel->brand->name}} {{$booking->vehicle->vehicleModel->name}}</td>
                            <td>{{number_format($booking->total_amount, 0, ',', '.') }} Kz</td>
                            <td>{{$booking->booking_code}}</td>
                            <td>{{ \Carbon\Carbon::parse($booking->created_at)->format('d/m/Y') }} </td>
                            <td>
                                @php
                                    $status = strtolower($booking->status);

                                    $statusClass = match ($status) {
                                        'aprovado'  => 'bg-success',
                                        'pendente'  => 'bg-warning text-dark',
                                        'cancelado' => 'bg-danger',
                                        'expirado'  => 'bg-secondary',
                                        default     => 'bg-light text-dark',
                                    };
                                @endphp

                                <span class="badge {{ $statusClass }}">
                                    {{ ucfirst($status) }}
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <section class="cards py-80">
        <div class="container">
            <div class="row row-gap-4">
                <div class="col-xl-3 col-lg-6  col-md-6 col-sm-6">
                    <div class="banner">
                        <i class="fa-solid fa-phone-volume mb-24"></i>
                        <h5 class="mb-16">{{__('search.session1.contact.h5')}}</h5>
                        <P>{{__('search.session1.contact.p')}}</P>
                    </div>
                </div>
                <div class="col-xl-3  col-lg-6 col-md-6 col-sm-6">
                    <div class="banner">
                        <i class="fa-thin fa-envelope mb-24"></i>
                        <h5 class="mb-16">{{__('search.session1.email.h5')}}</h5>
                        <P>{{__('search.session1.email.p')}}</P>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="banner">
                        <i class="fa-light fa-location-dot mb-24"></i>
                        <h5 class="mb-16">{{__('search.session1.location.h5')}}</h5>
                        <P>{{__('search.session1.location.p')}}</P>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="banner">
                        <i class="fa-regular fa-clock mb-24"></i>
                        <h5 class="mb-16">{{__('search.session1.time.h5')}}</h5>
                        <p>{{__('search.session1.time.p1')}}<p>
                        <p>{{__('search.session1.time.p2')}}<p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- end -->

@endsection
