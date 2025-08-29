
@extends('layouts.base')

@section('content')

<style>
    .img-bg-01{
	background: url() no-repeat center;
	background-size: cover;
}
.img-bg-02{
	background: url() no-repeat center;
	background-size: cover;
}
.img-bg-03{
	background: url() no-repeat center;
	background-size: cover;
}
.img-bg-04{
	background: url() no-repeat center;
	background-size: cover;
}
</style>
    <!-- About-area start -->
     <section class="container-fluid bg-breadcrumb-4">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-6 mb-4 wow fadeInDown" data-wow-delay="0.1s">Nossa História</h4>
            <div class="txt-block text-center white">
                <a href="{{route('front.index')}}">Home </a>
                <i class="fa-solid fs-6 fa-greater-than"></i>
                <a href="{{route('front.historia')}}"> Nossa história</a>
            </div>
        </div>
    </section>
    <!-- About-area start  end -->


    <!-- vichles-section -->
    <section class="cards py-80">
        <div class="container">
            <div class="descript">
                    <h4 class="mb-12">Nossa História</h4>
                    <p>Nossa história é feita de movimento, conquistas e paixão pelo que fazemos.</p>
            </div>
        </div>

    </section>
    <!-- vicheles-end -->

    <section class="banner dark-background" style="background: linear-gradient(rgba(4,26,113,0.7), rgba(4,26,113,0.6)), url('assets/media/banners/banner9.jpg') center/cover fixed no-repeat; padding:70px 0;">
        <div class="banner-design-1"></div>
        <div class="banner-design-2"></div>

         <div class="container">

                   <div class="timeline">
				<div class="timeline__wrap">
					<div class="timeline__items">
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2024</h2>
								<p class="">Fundada em 2013 por um grupo de visionários apaixonados por tecnologia e inovação,
                                    a EGATE CLOUD nasceu com a missão de transformar a forma como as empresas
                                    gerenciam e utilizam seus dados.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2020</h2>
								<p>Fundada em 2013 por um grupo de visionários apaixonados por tecnologia e inovação,
                                    a EGATE CLOUD nasceu com a missão de transformar a forma como as empresas
                                    gerenciam e utilizam seus dados.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>2019</h2>
								<p>Fundada em 2013 por um grupo de visionários apaixonados por tecnologia e inovação,
                                    a EGATE CLOUD nasceu com a missão de transformar a forma como as empresas
                                    gerenciam e utilizam seus dados.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>2017</h2>
							<p>Fundada em 2013 por um grupo de visionários apaixonados por tecnologia e inovação,
                                    a EGATE CLOUD nasceu com a missão de transformar a forma como as empresas
                                    gerenciam e utilizam seus dados.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2013</h2>
								<p>Fundada em 2013 por um grupo de visionários apaixonados por tecnologia e inovação,
                                    a EGATE CLOUD nasceu com a missão de transformar a forma como as empresas
                                    gerenciam e utilizam seus dados.</p>
							</div>
						</div>

					</div>
				</div>
			</div>
                </div>
    </section>

     <section class="trust-section py-5 my-5">
        <div class="trust-content">
            <div class="trust-info d-flex">
                <div class="fs-6 shield-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"/>
                    </svg>
                </div>
                <div class="info ms-3">
                    <h6 class="fs-4 trust-title">Confiança para explorar Angola à sua maneira</h6>
                <p class="trust-subtitle">Milhares de pessoas confiam na CHANA RENT-A-CAR para viajar por Angola.</p>
                </div>
            </div>
            <div class="rating-container">
                <div class="fs-4 rating-score">4.5</div>
                <div class="stars-container">
                    <div class="fs-4 star"></div>
                    <div class="fs-4 star"></div>
                    <div class="fs-4 star"></div>
                    <div class="fs-4 star"></div>
                    <div class="fs-4 star"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
