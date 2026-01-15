
@extends('layouts.base')

@section('content')
    <!-- About-area start -->
    <section class="container-fluid bg-breadcrumb-5">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-6 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{__('contact.session1.h4')}}</h4>
            <div class="txt-block text-center white">
                <a href="{{route('front.index')}}">{{__('contact.session1.a1')}}</a>
                <i class="fa-solid fs-6 fa-greater-than"></i>
                <a href="{{route('front.contacto')}}">{{__('contact.session1.a2')}}</a>
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
                            <h6 class="mb-12">{{__('contact.session2.h61')}}</h6>
                            <div class="d-flex gap-24 align-items-center flex-wrap">
                                <div class="flex-shrink-0">
                                    <input type="radio" id="Signing" name="topic" value="Entrando" class="d-none" checked>
                                    <label for="Signing">{{__('contact.session2.label1')}}</label>
                                </div>
                                <div class="flex-shrink-0">
                                    <input type="radio" id="booking" name="topic" value="Problema com a reserva" class="d-none">
                                    <label for="booking">{{__('contact.session2.label2')}}</label>
                                </div>
                                <div class="flex-shrink-0">
                                    <input type="radio" id="report" name="topic" value="Relatar uma correção" class="d-none">
                                    <label for="report">{{__('contact.session2.label3')}}</label>
                                </div>
                                <div class="flex-shrink-0">
                                    <input type="radio" id="work" name="topic" value="Trabalhe conosco" class="d-none">
                                    <label for="work">{{__('contact.session2.label4')}}</label>
                                </div>
                                <div class="flex-shrink-0">
                                    <input type="radio" id="us" name="topic" value="Precisa de algo mais" class="d-none">
                                    <label for="us">{{__('contact.session2.label5')}}</label>
                                </div>
                            </div>

                            <h6 class="mt-24 mb-24">{{__('contact.session2.h62')}}</h6>
                            <input class="" type="text" name="nome" placeholder="{{__('contact.session2.name')}}" required>
                            <input class="mt-2" type="email" name="email" placeholder="{{__('contact.session2.email')}}" required>
                            <input class="mt-2" type="text" name="contacto" placeholder="{{__('contact.session2.contact')}}" required>
                            <textarea class="mt-2" name="mensagem" rows="4" placeholder="{{__('contact.session2.message')}}" required></textarea>

                            <button type="submit" class="cus-btn mt-24">
                                <span class="btn-text">{{__('contact.session2.btn')}}</span>
                                <span>{{__('contact.session2.btn')}}</span>
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

@endsection
