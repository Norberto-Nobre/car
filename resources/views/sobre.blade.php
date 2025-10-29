
@extends('layouts.base')

@section('content')

<style>
    .feature-icon {
      width: 60px;
      height: 60px;
      background-color: #f1f3f5;
      border-radius: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
      color: #0d6efd;
      margin-bottom: 1rem;
    }

    .video-container {
      position: relative;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 4px 25px rgba(0,0,0,0.1);
      max-width: 900px; /* 🔹 limita a largura */
      margin: 0 auto;   /* centraliza na tela */
    }

    .video-container img,
    .video-container video {
      width: 100%;
      height: auto;
      display: block;
    }

    .video-overlay {
      position: absolute;
      inset: 0;
      background: rgba(29, 34, 71, 0.3);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background 0.3s ease;
      cursor: pointer;
    }

    .video-overlay:hover {
      background: rgba(0,0,0,0.5);
    }

    .play-btn {
      font-size: 3.5rem;
      color: white;
      transition: transform 0.2s ease;
    }

    .play-btn:hover {
      transform: scale(1.1);
    }
  </style>

   <!-- About-area start -->

    <section class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-6 mb-4 wow fadeInDown" data-wow-delay="0.1s">Sobre nós</h4>
            <div class="txt-block text-center white">
                <a href="{{route('front.index')}}">Home </a>
                <i class="fa-solid fs-6 fa-greater-than"></i>
                <a href="{{route('front.sobre')}}"> Sobre nós</a>
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

     <!-- vichles-section -->
    <section class="vehicles-2 py-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center video-container">
                    <img id="previewImage" src="assets/media/hero/img.jpg" class="img-fluid rounded-4" alt="Office">
                        <div class="video-overlay" id="videoOverlay">
                            <i class="bi bi-play-circle-fill play-btn" id="playButton"></i>
                        </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="txt">
                        <h4 class="mb-24">Chana RENT-A-CAR</h2>
                        <p class="mb-24">Somos uma empresa do grupo Organizações Chana que, desde 2014 prestamos serviço de aluguer de viaturas multimarcas, a longo e curto prazo.</p>
                        <p class="mb-24">Ao longo destes anos, procuramos apresentar ao mercado os melhores preços e serviço de qualidade, ajustando-se às reais necessidades dos nossos clientes.</p>
                        <p class="mb-24">Os nossos alugueres feitos para particulares, empresariais, provinciais e para eventos são atendidas pelas 172 viaturas que temos em frota.</p>
                        <p class="mb-24">Contamos consigo como parceiro, porque acreditamos em si e na qualidade do  serviço que queremos lhe oferecer.</p>
                        <p class="mb-24">Qualidade aos melhores preços. Temos para si uma frota Multimarca, com Assistência técnica e Qualidade na Entrega</p>
                    </div>
                    {{-- <a href="rental.html" class="cus-btn">
                        <span class="btn-text">
                            Ver nossos carros
                            <i class="bi bi-car-front-fill"></i>
                        </span>
                        <span>
                            Ver nossos carros
                            <i class="bi bi-car-front-fill"></i>
                        </span>
                    </a> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- vicheles-end -->

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
                        <h4 class="text-center black-2 mb-48 text-white">Confiança - Segurança <br><span> consigo, sempre</span></h4>
                        <h6 class="mb-24 text-white">O que oferecemos</h6>
                        <ul class="offers">
                            <li>
                                <img src="assets/media/icons/uil-check-circle.png" alt="circle">
                                <p class="text-white">Viagens confortáveis</p>
                            </li>
                            <li>
                                <img src="assets/media/icons/uil-check-circle.png" alt="circle">
                                <p class="text-white">Carros de primeira linha</p>
                            </li>
                            <li>
                                <img src="assets/media/icons/uil-check-circle.png" alt="circle">
                                <p class="text-white">Opções de pagamento seguras</p>
                            </li>
                            <li>
                                <img src="assets/media/icons/uil-check-circle.png" alt="circle">
                                <p class="text-white">Variedade de opções para escolher</p>
                            </li>
                            <li>
                                <img src="assets/media/icons/uil-check-circle.png" alt="circle">
                                <p class="text-white">Variedade de opções para escolher</p>
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
                            <h4 class="mb-12">Seu Portal para Aventuras Perfeitas<br class="d-xl-block  d-none"></h4>
                            <p class="mb-32">Explore novos destinos com segurança, conforto e estilo. Nossa frota está pronta para transformar cada viagem em uma experiência inesquecível.</p>
                            <p class="mb-32">
                                Seja para uma viagem a trabalho, férias em família ou uma escapada de fim de semana, oferecemos opções que se adaptam a cada tipo de necessidade. Com atendimento de excelência e preços acessíveis, garantimos que sua aventura comece do jeito certo.</p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="pic">
                                        <img src="assets/media/icons/vector.png" alt="plane">
                                        <div class="text">
                                            <h6>Recepção em Aeroportos</h6>
                                            <p class="mb-24">Comece sua viagem com comodidade. Te buscamos no aeroporto com pontualidade e conforto.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="icon">
                                        <img src="assets/media/icons/vector2.png" alt="earth">
                                        <div class="text">
                                            <h6>Presença em Diversas Regiões</h6>
                                            <p class="mb-24">Conte com uma rede de atendimento preparada para te servir onde você estiver.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-32">
                                    <div class="pic">
                                        <img src="assets/media/icons/Vector3.png" alt="people">
                                        <div class="text">
                                            <h6>Pagamento Seguro</h6>
                                            <p>Transações protegidas com tecnologia de ponta. Sua segurança é prioridade.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="icon">
                                        <img src="assets/media/icons/Vector4.png" alt="car">
                                        <div class="text">
                                            <h6> Carros Higienizados e Prontos</h6>
                                            <p class="mb-8">Veículos limpos e desinfetados com rigor para garantir sua saúde e bem-estar.</p>
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
    <div class="brand-section my-40 py-48">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="brand-slider">
                        <div class="brand-block">
                            <img src="assets/media/brands/brand-1.png" alt="brand-1">
                        </div>
                        <div class="brand-block">
                            <img src="assets/media/brands/brand-2.png" alt="brand-2">
                        </div>
                        <div class="brand-block">
                            <img src="assets/media/brands/brand-3.png" alt="brand-3">
                        </div>
                        <div class="brand-block">
                            <img src="assets/media/brands/brand-4.png" alt="brand-4">
                        </div>
                        <div class="brand-block">
                            <img src="assets/media/brands/brand-5.png" alt="brand-4">
                        </div>
                        {{-- <div class="brand-block">
                            <img src="assets/media/brands/brand-6.png" alt="brand-5">
                        </div> --}}
                        <div class="brand-block">
                            <img src="assets/media/brands/brand-1.png" alt="brand-1">
                        </div>
                        <div class="brand-block">
                            <img src="assets/media/brands/brand-2.png" alt="brand-2">
                        </div>
                        <div class="brand-block">
                            <img src="assets/media/brands/brand-3.png" alt="brand-3">
                        </div>
                        <div class="brand-block">
                            <img src="assets/media/brands/brand-4.png" alt="brand-4">
                        </div>
                        <div class="brand-block">
                            <img src="assets/media/brands/brand-5.png" alt="brand-5">
                        </div>
                        <div class="brand-block">
                            <img src="assets/media/brands/brand-6.png" alt="brand-6">
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
    document.getElementById('playButton').addEventListener('click', function() {
      const container = document.querySelector('.video-container');
      const overlay = document.getElementById('videoOverlay');
      const image = document.getElementById('previewImage');

      // Remove a imagem e o botão
      image.remove();
      overlay.remove();

      // Cria o elemento <video>
      const video = document.createElement('video');
      video.src = "assets/media/video/video1.mp4"; // 🔹 Substitui pelo caminho do teu vídeo local
      video.controls = true;
      video.autoplay = true;
      video.muted = false;
      video.playsInline = true;
      video.classList.add("rounded-4");
      video.style.width = "100%";
      video.style.height = "auto";

      container.appendChild(video);
    });
  </script>

@endsection
