
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

            <div class="ride my-80">
                <div class="container">
                    <div class="heads mb-48 d-flex  gap-24 flex-sm-noWrap flex-wrap justify-content-center">
                        <div class="Search-field border">
                            <form action="{{ route('front.frotas.search') }}" method="GET">
                                <input type="text" class="search-bar" placeholder="Codigo da reserva" name="term">
                            </form>
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
