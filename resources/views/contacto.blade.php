
@extends('layouts.base')

@section('content')
    <!-- About-area start -->
    <section class="container-fluid bg-breadcrumb-5">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-6 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contacto</h4>
            <div class="txt-block text-center white">
                <a href="{{route('front.index')}}">Home </a>
                <i class="fa-solid fs-6 fa-greater-than"></i>
                <a href="{{route('front.contacto')}}"> Contacto</a>
            </div>
        </div>
    </section>
    <!-- About-area start  end -->

    <!--title start  -->


    <section class="files my-80">
        <div class="container">
            <div class="row  row-gap-4 align-items-end">
                <div class="col-lg-6  col-md-6 col-sm-6   my-40">
                    <form action="{{ route('front.contact.send') }}" method="POST">
                        @csrf
                        <div class="topic">
                           @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <h6 class="mb-12">Seleciona o Assunto</h6>
                            <div class="d-flex gap-24 align-items-center flex-wrap">
                                <div class="flex-shrink-0">
                                    <input type="radio" id="Signing" name="topic" value="Entrando" class="d-none" checked>
                                    <label for="Signing">Entrando</label>
                                </div>
                                <div class="flex-shrink-0">
                                    <input type="radio" id="booking" name="topic" value="Problema com a reserva" class="d-none">
                                    <label for="booking">Problema com a reserva</label>
                                </div>
                                <div class="flex-shrink-0">
                                    <input type="radio" id="report" name="topic" value="Relatar uma correção" class="d-none">
                                    <label for="report">Relatar uma correção</label>
                                </div>
                                <div class="flex-shrink-0">
                                    <input type="radio" id="work" name="topic" value="Trabalhe conosco" class="d-none">
                                    <label for="work">Trabalhe conosco</label>
                                </div>
                                <div class="flex-shrink-0">
                                    <input type="radio" id="us" name="topic" value="Precisa de algo mais" class="d-none">
                                    <label for="us">Precisa de algo mais</label>
                                </div>
                            </div>

                            <h6 class="mt-24 mb-24">Fale conosco</h6>
                            <input class="" type="text" name="nome" placeholder="Nome *" required>
                            <input class="mt-2" type="email" name="email" placeholder="Email *" required>
                            <input class="mt-2" type="text" name="contacto" placeholder="Contacto *" required>
                            <textarea class="mt-2" name="mensagem" rows="4" placeholder="Escreva sua mensagem..." required></textarea>

                            <button type="submit" class="cus-btn mt-24">
                                <span class="btn-text">Enviar</span>
                                <span>Enviar</span>
                            </button>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img src="assets/media/corporate/img7.webp" alt="car">
                </div>

            </div>
        </div>
    </section>
    <!-- title end -->

    <!-- vichles-section -->
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
                        <P>Estrada principal do Lar do Patriota e Aeroporto Internacional 4 de Fevereiro</P>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="banner">
                        <i class="fa-regular fa-clock mb-24"></i>
                        <h5 class="mb-16">Horário de Funcionamento</h5>
                        <p>Seg - Sex (08H:00 - 17H:00)<p>
                        <p>Sab (08H:00 - 12H:00)<p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- vicheles-end -->
@endsection
