
@extends('layouts.base')




@section('content')

<style>


    /* ~~~~ */
/* Play button */
   :root {
      --icon-bg: #f1f3f5;
      --icon-color: #0d6efd;
      --title-color: #111827;
      --text-color: #6b7280;
      --play-bg: rgba(255, 255, 255, 0.92);
      --play-color: #111827;
    }

    body {
      background: #ffffff;
      color: var(--text-color);
    }

    .feature {
      max-width: 34rem;
    }

    .feature-icon {
      height: 56px;
      width: 56px;
      border-radius: 14px;
      background: var(--icon-bg);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: var(--icon-color);
      font-size: 1.25rem;
    }

    .feature h5 {
      color: var(--title-color);
      font-weight: 700;
    }

    /* Media wrapper */
    .hero-media {
      position: relative;
      overflow: hidden;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(16, 24, 40, 0.12);
    }

    .hero-media img,
    .hero-media video {
      display: block;
      width: 100%;
      height: auto;
    }

    /* Play button */
    .play-btn {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      height: 74px;
      width: 74px;
      border-radius: 50%;
      background: var(--play-bg);
      color: var(--play-color);
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      border: 0;
      outline: none;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
      transition: transform 180ms ease, box-shadow 180ms ease;
      z-index: 2;
    }

    .play-btn i {
      font-size: 1.8rem;
      margin-left: 2px; /* optical balance */
    }

    .play-btn:hover {
      transform: translate(-50%, -50%) scale(1.06);
      box-shadow: 0 10px 26px rgba(0, 0, 0, 0.25);
    }

    /* Pulsing ripple effect */
    .play-btn::before,
    .play-btn::after {
      content: "";
      position: absolute;
      inset: 0;
      border-radius: 50%;
      background: radial-gradient(rgba(255,255,255,0.9), rgba(255,255,255,0));
      animation: pulse 2.1s ease-out infinite;
      z-index: -1;
    }

    .play-btn::after {
      animation-delay: 1.05s;
    }

    @keyframes pulse {
      0% { transform: scale(1); opacity: 0.7; }
      70% { transform: scale(1.9); opacity: 0; }
      100% { transform: scale(1.9); opacity: 0; }
    }

    /* Constrain content width like the screenshot */
    .page-wrap {
      max-width: 1080px;
    }

    @media (max-width: 575.98px) {
      .feature { max-width: 100%; }
      .play-btn { height: 64px; width: 64px; }
    }
  </style>

   <!-- About-area start -->

    <section class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-6 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ __('about.session1.h4') }}</h4>
            <div class="txt-block text-center white">
                <a href="{{route('front.index')}}">{{ __('about.session1.a1') }}</a>
                <i class="fa-solid fs-6 fa-greater-than"></i>
                <a href="{{route('front.sobre')}}">{{ __('about.session1.a2') }}</a>
            </div>
        </div>
    </section>
    {{-- <section class="title-banner">
        <div class="txt">
            <h2 class="white text-center">Sobre Nós</h2>
            <div class="txt-block text-center white">
                <a href="index.html">Home</a>
                <i class="fa-solid fa-greater-than"></i>
                <a href="about.html">Sobre nós</a>
            </div>
        </div>
    </section> --}}
    <!-- About-area start  end -->

     <!-- About-area start -->
    <section class="about my-80">
        <div class="container ps-0">
            <div class="design mt-48">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="assets/media/corporate/img20.webp" alt="car" style="height: 500px">
                    </div>
                    <div class="col-lg-7">
                        <div class="txt-block">
                            <h4 class="mb-24">{{ __('about.session2.h4') }}</h4>
                            <p class="mb-24">{{ __('about.session2.p1') }}</p>
                            <p class="mb-24">{{ __('about.session2.p2') }}</p>
                            <p class="mb-24">{{ __('about.session2.p3') }}</p>
                            <p class="mb-24">{{ __('about.session2.p4') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-area start  end -->

    <!-- About-area start -->
    <section class="about my-80">
        <div class="container ps-0">
            <div class="design mt-48">
                <div class="row">

                    <div class="col-xl-7">
                        <div class="txt-block">
                            <h4 class="mb-24">{{ __('about.session3.h4') }}</h4>
                            <p class="mb-24">{{ __('about.session3.p1') }}</p>
                            <p class="mb-24">{{ __('about.session3.p2') }}</p>
                        </div>
                        <div class="row gy-4 gx-0">
                            <div class="col-lg-5 col-md-5 col-sm-12 wow fadeInUp border pt-4 pb-3 rounded shadow me-4" data-wow-delay="0.1s" data-aos="fade-up" style="background: linear-gradient(135deg, #345af5, #041A71);">
                                <div class="feature-item d-block align-items-center justify-content-center text-center">
                                    <div class="feature-icon">
                                        <span class="fs-4"><i class="bi bi-1-square custom"></i></span>
                                    </div>
                                    <div class="ms-4 mt-2">
                                        <h5 class="mb-3 fs-6 text-white">{{ __('about.session3.step1') }}</h5>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-5 col-sm-12 wow fadeInUp border pt-4 pb-3 rounded shadow " data-wow-delay="0.1s" data-aos="fade-up" style="background: linear-gradient(135deg, #345af5, #041A71);">
                                <div class="feature-item d-block align-items-center justify-content-center text-center">
                                    <div class="feature-icon">
                                        <span class="fs-4"><i class="bi bi-2-square custom"></i></span>
                                    </div>
                                    <div class="ms-4 mt-2">
                                        <h5 class="mb-3 fs-6 text-white">{{ __('about.session3.step2') }}</h5>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 wow fadeInUp border pt-4 pb-3 rounded shadow me-4" data-wow-delay="0.1s" data-aos="fade-up" style="background: linear-gradient(135deg, #345af5, #041A71);">
                                <div class="feature-item d-block align-items-center justify-content-center text-center">
                                    <div class="feature-icon">
                                        <span class="fs-4"><i class="bi bi-3-square custom"></i></span>
                                    </div>
                                    <div class="ms-4 mt-2">
                                        <h5 class="mb-3 fs-6 text-white">{{ __('about.session3.step3') }}</h5>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-5 col-sm-12 wow fadeInUp border pt-4 pb-3 rounded shadow" data-wow-delay="0.1s" data-aos="fade-up" style="background: linear-gradient(135deg, #345af5, #041A71);">
                                <div class="feature-item d-block align-items-center justify-content-center text-center">
                                    <div class="feature-icon">
                                        <span class="fs-4"><i class="bi bi-4-square custom"></i></span>
                                    </div>
                                    <div class="ms-4 mt-2">
                                        <h5 class="mb-3 fs-6 text-white">{{ __('about.session3.step4') }}</h5>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="assets/media/corporate/img17.jpeg" alt="car"style="height: 550px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-area start  end -->



    <main class="container page-wrap py-5 py-md-2">

    <!-- Big hero image with play button overlay -->
    <div class="hero-media mb-3">
      <img src="assets/media/hero/bg-chana.jpg" alt="Escritório moderno" />
      <button class="play-btn" type="button" data-bs-toggle="modal" data-bs-target="#videoModal" aria-label="Reproduzir vídeo">
        <i class="bi bi-play-fill"></i>
      </button>
    </div>
  </main>

  <!-- Video Modal -->
  <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-black">
        <div class="ratio ratio-16x9">
          <!-- Player HTML5 elimina restrições de autoplay de iframes -->
          <video id="modalVideo" preload="metadata" muted playsinline controls poster="https://images.unsplash.com/photo-1524758631624-e2822e304c36?q=80&w=1280&auto=format&fit=crop">
            <source src="assets/media/video/video1.mp4" type="video/mp4" />
            Seu navegador não suporta o elemento de vídeo.
          </video>
        </div>
      </div>
    </div>
  </div>

     <section class="vehicles-2 py-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center">
                    <img src="assets/media/hero/missao.jpg" alt="car">
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <img src="assets/media/hero/visao.jpg" alt="car">
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <img src="assets/media/hero/valor.jpg" alt="car">
                </div>
                {{-- <div class="col-lg-6 col-md-6">
                    <div class="txt">
                        <h4 class="mb-24">Chana RENT-A-CAR</h2>

                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <!--title start  -->
    <section class="about my-80 py-5" style="background: #041A71">
        <div class="container">
            <div class="txt">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <h4 class="text-center black-2 mb-48 text-white">{{ __('about.session4.h4') }} <br><span>{{ __('about.session4.span') }}</span></h4>
                        <h6 class="mb-24 text-white">{{ __('about.session4.h6') }}</h6>
                        <ul class="offers">
                            <li>
                                <img src="assets/media/icons/uil-check-circle.png" alt="circle">
                                <p class="text-white">{{ __('about.session4.p1') }}</p>
                            </li>
                            <li>
                                <img src="assets/media/icons/uil-check-circle.png" alt="circle">
                                <p class="text-white">{{ __('about.session4.p2') }}</p>
                            </li>
                            <li>
                                <img src="assets/media/icons/uil-check-circle.png" alt="circle">
                                <p class="text-white">{{ __('about.session4.p3') }}</p>
                            </li>
                            <li>
                                <img src="assets/media/icons/uil-check-circle.png" alt="circle">
                                <p class="text-white">{{ __('about.session4.p4') }}</p>
                            </li>
                            <li>
                                <img src="assets/media/icons/uil-check-circle.png" alt="circle">
                                <p class="text-white">{{ __('about.session4.p5') }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- title end -->

    <!-- About-area start -->
    <section class="about my-80">
        <div class="container ps-0">
            <div class="design mt-48">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="assets/media/cars/corporate.jpeg" alt="car">
                    </div>
                    <div class="col-lg-6">
                        <div class="txt-block">
                            <h4 class="mb-12">{{ __('about.session5.h4') }}<br class="d-xl-block  d-none"></h4>
                            <p class="mb-32">{{ __('about.session5.p1') }}</p>
                            <p class="mb-32">
                                {{ __('about.session5.p2') }}</p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="pic">
                                        <img src="assets/media/icons/vector.png" alt="plane">
                                        <div class="text">
                                            <h6>{{ __('about.session5.item1.h6') }}</h6>
                                            <p class="mb-24">{{ __('about.session5.item1.p') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="icon">
                                        <img src="assets/media/icons/vector2.png" alt="earth">
                                        <div class="text">
                                            <h6>{{ __('about.session5.item2.h6') }}</h6>
                                            <p class="mb-24">{{ __('about.session5.item2.p') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-32">
                                    <div class="pic">
                                        <img src="assets/media/icons/Vector3.png" alt="people">
                                        <div class="text">
                                            <h6>{{ __('about.session5.item3.h6') }}</h6>
                                            <p>{{ __('about.session5.item3.p') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="icon">
                                        <img src="assets/media/icons/Vector4.png" alt="car">
                                        <div class="text">
                                            <h6>{{ __('about.session5.item4.h6') }}</h6>
                                            <p class="mb-8">{{ __('about.session5.item4.p') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--
                             --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-area start  end -->

    <!-- brands-start -->
    <div class="brand-section py-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="brand-slider">
                        <div class="brand-block">
                            <img src="assets/media/brands/editadas/bmw.png" alt="brand-1">
                        </div>
                        <div class="brand-block">
                            <img src="assets/media/brands/editadas/baic.png" alt="brand-2">
                        </div>
                        <div class="brand-block">
                            <img src="assets/media/brands/editadas/changan.png" alt="brand-3">
                        </div>
                        <div class="brand-block">
                            <img src="assets/media/brands/editadas/foday.png" alt="brand-4">
                        </div>
                        <div class="brand-block">
                            <img src="assets/media/brands/editadas/geely.png" alt="brand-5">
                        </div>
                        <div class="brand-block">
                            <img src="assets/media/brands/editadas/hyundai.png" alt="brand-6">
                        </div>
                        <div class="brand-block">
                            <img src="assets/media/brands/editadas/jetour.png" alt="brand-1">
                        </div>
                        <div class="brand-block">
                            <img src="assets/media/brands/editadas/mazda.png" alt="brand-2">
                        </div>
                        <div class="brand-block">
                            <img src="assets/media/brands/editadas/nissan.png" alt="brand-3">
                        </div>
                        <div class="brand-block">
                            <img src="assets/media/brands/editadas/suzuki.png" alt="brand-4">
                        </div>
                        <div class="brand-block">
                            <img src="assets/media/brands/editadas/toyota.png" alt="brand-5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brands-end -->

    <!-- choose us -->
    {{-- <section class="choose my-80">
        <div class="container">
            <div class="heading">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <h4 class="text-center black-2 mb-12">Por que você deve <br>  <span>nos escolher?</span></h4>
                        <p class="text-center mb-48">Porque oferecemos mais do que carros — entregamos confiança, praticidade e um <br> atendimento que coloca você em primeiro lugar.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex row-gap-3">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="d-flex gap-8">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M15.22 8.79L10.93 13.09L9.28 11.44C9.19036 11.3353 9.08004 11.2503 8.95597 11.1903C8.83191 11.1303 8.69678 11.0965 8.55906 11.0912C8.42134 11.0859 8.28401 11.1091 8.15568 11.1594C8.02736 11.2096 7.91081 11.2859 7.81335 11.3833C7.7159 11.4808 7.63964 11.5974 7.58937 11.7257C7.53909 11.854 7.51589 11.9913 7.52121 12.1291C7.52653 12.2668 7.56026 12.4019 7.62028 12.526C7.6803 12.65 7.76532 12.7604 7.87 12.85L10.22 15.21C10.3134 15.3027 10.4243 15.376 10.5461 15.4258C10.6679 15.4755 10.7984 15.5008 10.93 15.5C11.1923 15.4989 11.4437 15.3947 11.63 15.21L16.63 10.21C16.7237 10.117 16.7981 10.0064 16.8489 9.88458C16.8997 9.76272 16.9258 9.63201 16.9258 9.5C16.9258 9.36799 16.8997 9.23728 16.8489 9.11542C16.7981 8.99356 16.7237 8.88296 16.63 8.79C16.4426 8.60375 16.1892 8.49921 15.925 8.49921C15.6608 8.49921 15.4074 8.60375 15.22 8.79ZM12.5 2C10.5222 2 8.58879 2.58649 6.9443 3.6853C5.29981 4.78412 4.01809 6.3459 3.26121 8.17317C2.50433 10.0004 2.3063 12.0111 2.69215 13.9509C3.078 15.8907 4.03041 17.6725 5.42894 19.0711C6.82746 20.4696 8.60929 21.422 10.5491 21.8079C12.4889 22.1937 14.4996 21.9957 16.3268 21.2388C18.1541 20.4819 19.7159 19.2002 20.8147 17.5557C21.9135 15.9112 22.5 13.9778 22.5 12C22.5 10.6868 22.2413 9.38642 21.7388 8.17317C21.2363 6.95991 20.4997 5.85752 19.5711 4.92893C18.6425 4.00035 17.5401 3.26375 16.3268 2.7612C15.1136 2.25866 13.8132 2 12.5 2ZM12.5 20C10.9178 20 9.37104 19.5308 8.05544 18.6518C6.73985 17.7727 5.71447 16.5233 5.10897 15.0615C4.50347 13.5997 4.34504 11.9911 4.65372 10.4393C4.9624 8.88743 5.72433 7.46197 6.84315 6.34315C7.96197 5.22433 9.38743 4.4624 10.9393 4.15372C12.4911 3.84504 14.0997 4.00346 15.5615 4.60896C17.0233 5.21447 18.2727 6.23984 19.1518 7.55544C20.0308 8.87103 20.5 10.4177 20.5 12C20.5 14.1217 19.6572 16.1566 18.1569 17.6569C16.6566 19.1571 14.6217 20 12.5 20Z" fill="#2D74BA"/>
                              </svg>
                        </div>
                        <div class="block">
                            <h5 class="mb-8"> Segurança</h5>
                            <p>Dirija com confiança em nossos veículos cuidadosamente mantidos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="d-flex gap-8">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M15.22 8.79L10.93 13.09L9.28 11.44C9.19036 11.3353 9.08004 11.2503 8.95597 11.1903C8.83191 11.1303 8.69678 11.0965 8.55906 11.0912C8.42134 11.0859 8.28401 11.1091 8.15568 11.1594C8.02736 11.2096 7.91081 11.2859 7.81335 11.3833C7.7159 11.4808 7.63964 11.5974 7.58937 11.7257C7.53909 11.854 7.51589 11.9913 7.52121 12.1291C7.52653 12.2668 7.56026 12.4019 7.62028 12.526C7.6803 12.65 7.76532 12.7604 7.87 12.85L10.22 15.21C10.3134 15.3027 10.4243 15.376 10.5461 15.4258C10.6679 15.4755 10.7984 15.5008 10.93 15.5C11.1923 15.4989 11.4437 15.3947 11.63 15.21L16.63 10.21C16.7237 10.117 16.7981 10.0064 16.8489 9.88458C16.8997 9.76272 16.9258 9.63201 16.9258 9.5C16.9258 9.36799 16.8997 9.23728 16.8489 9.11542C16.7981 8.99356 16.7237 8.88296 16.63 8.79C16.4426 8.60375 16.1892 8.49921 15.925 8.49921C15.6608 8.49921 15.4074 8.60375 15.22 8.79ZM12.5 2C10.5222 2 8.58879 2.58649 6.9443 3.6853C5.29981 4.78412 4.01809 6.3459 3.26121 8.17317C2.50433 10.0004 2.3063 12.0111 2.69215 13.9509C3.078 15.8907 4.03041 17.6725 5.42894 19.0711C6.82746 20.4696 8.60929 21.422 10.5491 21.8079C12.4889 22.1937 14.4996 21.9957 16.3268 21.2388C18.1541 20.4819 19.7159 19.2002 20.8147 17.5557C21.9135 15.9112 22.5 13.9778 22.5 12C22.5 10.6868 22.2413 9.38642 21.7388 8.17317C21.2363 6.95991 20.4997 5.85752 19.5711 4.92893C18.6425 4.00035 17.5401 3.26375 16.3268 2.7612C15.1136 2.25866 13.8132 2 12.5 2ZM12.5 20C10.9178 20 9.37104 19.5308 8.05544 18.6518C6.73985 17.7727 5.71447 16.5233 5.10897 15.0615C4.50347 13.5997 4.34504 11.9911 4.65372 10.4393C4.9624 8.88743 5.72433 7.46197 6.84315 6.34315C7.96197 5.22433 9.38743 4.4624 10.9393 4.15372C12.4911 3.84504 14.0997 4.00346 15.5615 4.60896C17.0233 5.21447 18.2727 6.23984 19.1518 7.55544C20.0308 8.87103 20.5 10.4177 20.5 12C20.5 14.1217 19.6572 16.1566 18.1569 17.6569C16.6566 19.1571 14.6217 20 12.5 20Z" fill="#2D74BA"/>
                              </svg>
                        </div>
                        <div class="block">
                            <h5 class="mb-8">Confiabilidade</h5>
                            <p>Conte conosco para uma experiência de Aluguer tranquila em todas as ocasiões.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6">
                    <div class="d-flex gap-8">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M15.22 8.79L10.93 13.09L9.28 11.44C9.19036 11.3353 9.08004 11.2503 8.95597 11.1903C8.83191 11.1303 8.69678 11.0965 8.55906 11.0912C8.42134 11.0859 8.28401 11.1091 8.15568 11.1594C8.02736 11.2096 7.91081 11.2859 7.81335 11.3833C7.7159 11.4808 7.63964 11.5974 7.58937 11.7257C7.53909 11.854 7.51589 11.9913 7.52121 12.1291C7.52653 12.2668 7.56026 12.4019 7.62028 12.526C7.6803 12.65 7.76532 12.7604 7.87 12.85L10.22 15.21C10.3134 15.3027 10.4243 15.376 10.5461 15.4258C10.6679 15.4755 10.7984 15.5008 10.93 15.5C11.1923 15.4989 11.4437 15.3947 11.63 15.21L16.63 10.21C16.7237 10.117 16.7981 10.0064 16.8489 9.88458C16.8997 9.76272 16.9258 9.63201 16.9258 9.5C16.9258 9.36799 16.8997 9.23728 16.8489 9.11542C16.7981 8.99356 16.7237 8.88296 16.63 8.79C16.4426 8.60375 16.1892 8.49921 15.925 8.49921C15.6608 8.49921 15.4074 8.60375 15.22 8.79ZM12.5 2C10.5222 2 8.58879 2.58649 6.9443 3.6853C5.29981 4.78412 4.01809 6.3459 3.26121 8.17317C2.50433 10.0004 2.3063 12.0111 2.69215 13.9509C3.078 15.8907 4.03041 17.6725 5.42894 19.0711C6.82746 20.4696 8.60929 21.422 10.5491 21.8079C12.4889 22.1937 14.4996 21.9957 16.3268 21.2388C18.1541 20.4819 19.7159 19.2002 20.8147 17.5557C21.9135 15.9112 22.5 13.9778 22.5 12C22.5 10.6868 22.2413 9.38642 21.7388 8.17317C21.2363 6.95991 20.4997 5.85752 19.5711 4.92893C18.6425 4.00035 17.5401 3.26375 16.3268 2.7612C15.1136 2.25866 13.8132 2 12.5 2ZM12.5 20C10.9178 20 9.37104 19.5308 8.05544 18.6518C6.73985 17.7727 5.71447 16.5233 5.10897 15.0615C4.50347 13.5997 4.34504 11.9911 4.65372 10.4393C4.9624 8.88743 5.72433 7.46197 6.84315 6.34315C7.96197 5.22433 9.38743 4.4624 10.9393 4.15372C12.4911 3.84504 14.0997 4.00346 15.5615 4.60896C17.0233 5.21447 18.2727 6.23984 19.1518 7.55544C20.0308 8.87103 20.5 10.4177 20.5 12C20.5 14.1217 19.6572 16.1566 18.1569 17.6569C16.6566 19.1571 14.6217 20 12.5 20Z" fill="#2D74BA"/>
                              </svg>
                        </div>
                        <div class="block">
                            <h5 class="mb-8"> Mais Opções</h5>
                            <p>Com nossa ampla frota de carros, você sempre encontra o que precisa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="d-flex gap-8">
                        <div class="align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M15.22 8.79L10.93 13.09L9.28 11.44C9.19036 11.3353 9.08004 11.2503 8.95597 11.1903C8.83191 11.1303 8.69678 11.0965 8.55906 11.0912C8.42134 11.0859 8.28401 11.1091 8.15568 11.1594C8.02736 11.2096 7.91081 11.2859 7.81335 11.3833C7.7159 11.4808 7.63964 11.5974 7.58937 11.7257C7.53909 11.854 7.51589 11.9913 7.52121 12.1291C7.52653 12.2668 7.56026 12.4019 7.62028 12.526C7.6803 12.65 7.76532 12.7604 7.87 12.85L10.22 15.21C10.3134 15.3027 10.4243 15.376 10.5461 15.4258C10.6679 15.4755 10.7984 15.5008 10.93 15.5C11.1923 15.4989 11.4437 15.3947 11.63 15.21L16.63 10.21C16.7237 10.117 16.7981 10.0064 16.8489 9.88458C16.8997 9.76272 16.9258 9.63201 16.9258 9.5C16.9258 9.36799 16.8997 9.23728 16.8489 9.11542C16.7981 8.99356 16.7237 8.88296 16.63 8.79C16.4426 8.60375 16.1892 8.49921 15.925 8.49921C15.6608 8.49921 15.4074 8.60375 15.22 8.79ZM12.5 2C10.5222 2 8.58879 2.58649 6.9443 3.6853C5.29981 4.78412 4.01809 6.3459 3.26121 8.17317C2.50433 10.0004 2.3063 12.0111 2.69215 13.9509C3.078 15.8907 4.03041 17.6725 5.42894 19.0711C6.82746 20.4696 8.60929 21.422 10.5491 21.8079C12.4889 22.1937 14.4996 21.9957 16.3268 21.2388C18.1541 20.4819 19.7159 19.2002 20.8147 17.5557C21.9135 15.9112 22.5 13.9778 22.5 12C22.5 10.6868 22.2413 9.38642 21.7388 8.17317C21.2363 6.95991 20.4997 5.85752 19.5711 4.92893C18.6425 4.00035 17.5401 3.26375 16.3268 2.7612C15.1136 2.25866 13.8132 2 12.5 2ZM12.5 20C10.9178 20 9.37104 19.5308 8.05544 18.6518C6.73985 17.7727 5.71447 16.5233 5.10897 15.0615C4.50347 13.5997 4.34504 11.9911 4.65372 10.4393C4.9624 8.88743 5.72433 7.46197 6.84315 6.34315C7.96197 5.22433 9.38743 4.4624 10.9393 4.15372C12.4911 3.84504 14.0997 4.00346 15.5615 4.60896C17.0233 5.21447 18.2727 6.23984 19.1518 7.55544C20.0308 8.87103 20.5 10.4177 20.5 12C20.5 14.1217 19.6572 16.1566 18.1569 17.6569C16.6566 19.1571 14.6217 20 12.5 20Z" fill="#2D74BA"/>
                              </svg>
                        </div>
                        <div class="block">
                            <h5 class="mb-8">Seguro Incluso</h5>
                            <p>Proteção durante toda a sua viagem, garantindo tranquilidade e segurança.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


 <script>
    // Configure video autoplay on open and stop on close
    (function () {
      const modalEl = document.getElementById('videoModal');
      const video = document.getElementById('modalVideo');

      // Garantir play ao abrir (com clique do usuário funciona mesmo sem som; mantemos muted para consistência)
      modalEl.addEventListener('shown.bs.modal', function () {
        try {
          video.currentTime = 0;
          const playPromise = video.play();
          if (playPromise && typeof playPromise.then === 'function') {
            playPromise.catch(function () {
              // tentativa secundária caso o navegador recuse a primeira
              setTimeout(function(){ video.play(); }, 50);
            });
          }
        } catch (_) {}
      });

      // Pausar e resetar ao fechar
      modalEl.addEventListener('hide.bs.modal', function () {
        try { video.pause(); video.currentTime = 0; } catch (_) {}
      });
    })();
  </script>

@endsection
