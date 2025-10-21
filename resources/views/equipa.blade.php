
@extends('layouts.base')

@section('content')

<style>
    /*########## NOSSA EQUIPE CSS ###########*/

    .staff {
  overflow: hidden;
  border-radius: 4px;
  margin-bottom: 30px;
  -webkit-box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.05);
  box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.05);
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
  /*width: 200px;*/
    }

  .staff .img-wrap {
    height: 180px;

  }
  .staff .img {
    width: 100%;
    display: block;
    background-position: top center;
    background-repeat: no-repeat;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease; }
  .staff .text {
    position: relative;
    background: #fff;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease; }
    .staff .text h3 {
      font-size: 18px;
      font-weight: 400;
      margin-bottom: 0;
      -moz-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      -webkit-transition: all 0.3s ease;
      -ms-transition: all 0.3s ease;
      transition: all 0.3s ease;
      color: #000000;
      margin-bottom: 5px;

    }

    .staff .text .position {
      color: #2d74ba;
      display: block;
      font-weight: 500;
      display: inline-block;
      margin-bottom: 10px;
      font-size: 11px;
      text-transform: uppercase;
      letter-spacing: 2px; }
    .staff .text .faded {
      opacity: 1; }

  .staff .ftco-social {
    position: absolute;
    top: 55px;
    left: 0;
    right: 0;
    padding: 15px 10px;
    background: transparent;
    opacity: 1;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease; }

    .staff .ftco-social li {
      width: 30px;
      height: 30px;
      position: relative; }

      .staff .ftco-social li a {
        color: #333;
        width: 25px;
        height: 25px;
        background: transparent;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%; }

  .staff:hover, .staff:focus {
    -webkit-box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.11);
    -moz-box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.11);
    box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.11); }
    .staff:hover .ftco-social, .staff:focus .ftco-social {
      opacity: 1;
      top: 49px; }
    .staff:hover .img, .staff:focus .img {
      margin-top: -10px; }
    .staff:hover .text h3, .staff:focus .text h3 {
      color: #2d74ba; }

.ftco-social {
  padding: 0; }
  .ftco-social li {
    list-style: none;
    margin-right: 10px;
    display: inline-block; }

    @media (width: 1024px) {
     .staff .ftco-social {
         display:none;
  }
}

    @media (min-width: 375px) and (max-width: 1020px) {
    .staff .ftco-social {
         top: 90px;
    }
}

/*########## FIM NOSSA EQUIPE CSS ###########*/
</style>
    <!-- About-area start -->
    <section class="container-fluid bg-breadcrumb-4">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-6 mb-4 wow fadeInDown" data-wow-delay="0.1s">Nossa Equipa</h4>
            <div class="txt-block text-center white">
                <a href="{{route('front.index')}}">Home </a>
                <i class="fa-solid fs-6 fa-greater-than"></i>
                <a href="{{route('front.equipa')}}"> Nossa equipa</a>
            </div>
        </div>
    </section>
    <!-- About-area start  end -->


    <!-- vichles-section -->
    <!-- vicheles-end -->

    <section class="section pt-5 pb-0">
                <div class="container">
                     <div class="descript mb-5">
                        <h4 class="mb-12 text-center">Nossa Equipa</h4>
                        <p class="mb-12 text-center">Contamos com uma equipa dedicada e experiente, sempre pronta para oferecer o melhor atendimento.</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-2 ftco-animate">
						    <div class="staff">
							    <div class="img-wrap d-flex align-items-stretch">
								     <div class="img align-self-stretch" style="background-image: url('assets/media/user/client-profile.jpg');"></div>
							    </div>
							    <div class="text pt-3 px-3 pb-4 text-center">
								    <h3>João Miguel </h3>
								    <span class="position mb-2">Director Geral</span>
								    <div class="faded">
									    <p></p>
									    <ul class="ftco-social text-center">
                    		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center text-primary"><span class="bi bi-facebook fs-7"></span></a></li>
                    		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center text-primary"><span class="bi bi-linkedin fs-7"></span></a></li>
                    		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center text-primary"><span class="bi bi-instagram fs-7"></span></a></li>
                    		              </ul>
	                                </div>
							     </div>
						    </div>
					    </div>



                    </div>
                </div>
    </section>

     <section class="section mt-0 pt-0">
                <div class="container">

                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-2 ftco-animate">
						    <div class="staff">
							    <div class="img-wrap d-flex align-items-stretch">
								     <div class="img align-self-stretch" style="background-image: url('assets/media/user/client-profile.jpg');"></div>
							    </div>
							    <div class="text pt-3 px-3 pb-4 text-center">
								    <h3>Manuel Pacheco</h3>
								    <span class="position mb-2">Gestor Comercial</span>
								    <div class="faded">
									    <p></p>
									    <ul class="ftco-social text-center">
                    		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center text-primary"><span class="bi bi-facebook fs-7"></span></a></li>
                    		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center text-primary"><span class="bi bi-linkedin fs-7"></span></a></li>
                    		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center text-primary"><span class="bi bi-instagram fs-7"></span></a></li>
                    		              </ul>
	                                </div>
							     </div>
						    </div>
					    </div>

					    <div class="col-md-6 col-lg-2 ftco-animate">
						    <div class="staff">
							    <div class="img-wrap d-flex align-items-stretch">
								     <div class="img align-self-stretch" style="background-image: url('assets/media/user/client-profile.jpg');"></div>
							    </div>
							    <div class="text pt-3 px-3 pb-4 text-center">
								    <h3>Regina Ernestro</h3>
								    <span class="position mb-2">Gestora Adm/Finanças</span>
								    <div class="faded">
									    <p></p>
									    <ul class="ftco-social text-center">

                    		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center text-primary"><span class="bi bi-facebook fs-7"></span></a></li>
                    		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center text-primary"><span class="bi bi-linkedin fs-7"></span></a></li>
                    		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center text-primary"><span class="bi bi-instagram fs-7"></span></a></li>
                    		              </ul>
	                                </div>
							     </div>
						    </div>
					    </div>

					    <div class="col-md-6 col-lg-2 ftco-animate">
						    <div class="staff">
							    <div class="img-wrap d-flex align-items-stretch">
								     <div class="img align-self-stretch" style="background-image: url('assets/media/user/client-profile.jpg');"></div>
							    </div>
							    <div class="text pt-3 px-3 pb-4 text-center">
								    <h3>Josemar Francisco</h3>
								    <span class="position mb-2">Gestor Operacional</span>
								    <div class="faded">
									    <p></p>
									    <ul class="ftco-social text-center">

                    		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center text-primary"><span class="bi bi-facebook fs-7"></span></a></li>
                    		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center text-primary"><span class="bi bi-linkedin fs-7"></span></a></li>
                    		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center text-primary"><span class="bi bi-instagram fs-7"></span></a></li>
                    		              </ul>
	                                </div>
							     </div>
						    </div>
					    </div>

                    </div>
                </div>
    </section>

     <section class="section mt-0 pt-0">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-2 ftco-animate">
						    <div class="staff">
							    <div class="img-wrap d-flex align-items-stretch">
								     <div class="img align-self-stretch" style="background-image: url('assets/media/user/client-profile.jpg');"></div>
							    </div>
							    <div class="text pt-3 px-3 pb-4 text-center">
								    <h3>Elisandra Mercedes</h3>
								    <span class="position mb-2">Gestora de C.Corporativos</span>
								    <div class="faded">
									    <p></p>
									    <ul class="ftco-social text-center">
                    		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center text-primary"><span class="bi bi-facebook fs-7"></span></a></li>
                    		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center text-primary"><span class="bi bi-linkedin fs-7"></span></a></li>
                    		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center text-primary"><span class="bi bi-instagram fs-7"></span></a></li>
                    		              </ul>
	                                </div>
							     </div>
						    </div>
					    </div>

					    <div class="col-md-6 col-lg-2 ftco-animate">
						    <div class="staff">
							    <div class="img-wrap d-flex align-items-stretch">
								     <div class="img align-self-stretch" style="background-image: url('assets/media/user/client-profile.jpg');"></div>
							    </div>
							    <div class="text pt-3 px-3 pb-4 text-center">
								    <h3>Eduarda Alves
                                    </h3>
								    <span class="position mb-2">Gestora de Sinistros</span>
								    <div class="faded">
									    <p></p>
									    <ul class="ftco-social text-center">

                    		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center text-primary"><span class="bi bi-facebook fs-7"></span></a></li>
                    		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center text-primary"><span class="bi bi-linkedin fs-7"></span></a></li>
                    		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center text-primary"><span class="bi bi-instagram fs-7"></span></a></li>
                    		              </ul>
	                                </div>
							     </div>
						    </div>
					    </div>



                    </div>
                </div>
    </section>
@endsection
