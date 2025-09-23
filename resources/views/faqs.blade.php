
@extends('layouts.base')

@section('content')

<style>
    .faq-section {
            background-color: #fff;
            padding: 80px 0;
            color: white;
            font-family: Arial, sans-serif;
        }

        .faq-title {
            font-size: 3.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 60px;
            color: white;
        }

        .faq-item {
            background-color: transparent;
            border: none;
            border-bottom: 1px solid #ccc;
            margin-bottom: 0;
        }

        .faq-button {
            background: transparent;
            border: none;
            color: #777;
            font-size: 1.2rem;
            font-weight: 500;
            padding: 25px 20px;
            text-align: left;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
        }

        .faq-button:hover {
            color: #041A71;
        }

        .faq-button:focus {
            box-shadow: none;
            color: #041A71;
        }

        .faq-icon {
            background-color: #041A71;
            color: white;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            flex-shrink: 0;
        }

        .faq-button[aria-expanded="true"] .faq-icon {
            transform: rotate(45deg);
        }

        .faq-collapse {
            border: none;
            background: transparent;
        }

        .faq-body {
            padding: 0 20px 25px 20px;
            color: #777;
            font-size: 1rem;
            line-height: 1.6;
        }

        .accordion-button::after {
            display: none;
        }

        .accordion-button:not(.collapsed) {
            background-color: transparent;
            color: #041A71;
        }

        @media (max-width: 768px) {
            .faq-title {
                font-size: 2.5rem;
            }

            .faq-button {
                font-size: 1rem;
                padding: 20px 15px;
            }

            .faq-body {
                padding: 0 15px 20px 15px;
            }
        }
</style>
    <!-- About-area start -->
    <section class="container-fluid bg-breadcrumb-2">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-6 mb-4 wow fadeInDown" data-wow-delay="0.1s">FAQ</h4>
            <div class="txt-block text-center white">
                <a href="{{route('front.index')}}">Home </a>
                <i class="fa-solid fs-6 fa-greater-than"></i>
                <a href="{{route('front.faqs')}}"> Faq</a>
            </div>
        </div>
    </section>
    <!-- About-area start  end -->

    <section class="faq-section">
        <div class="container">
             <div class="descript">
                    <h4 class="mb-12">Perguntas Frequantes</h4>
                    <p class="" style="color:#777">Reunimos aqui as principais dúvidas dos nossos clientes para tornar <br>sua experiência de Aluguer ainda mais simples e transparente. </p>
                </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="accordion" id="faqAccordion">

                        <!-- FAQ Item 1 -->
                        <div class="accordion-item faq-item">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span>Como começar a alugar um carro?</span>
                                    <div class="faq-icon">
                                        <i class="bi bi-plus"></i>
                                    </div>
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse show collapse faq-collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body faq-body">
                                    Para começar com o Aluguer de carros, você precisa ter pelo menos 21 anos, uma carteira de motorista válida e um cartão de crédito. Visite nosso site, escolha suas datas e local, selecione o veículo desejado e complete a reserva online. É simples e rápido!
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="accordion-item faq-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>O que é um depósito de segurança para Aluguer de carros?</span>
                                    <div class="faq-icon">
                                        <i class="bi bi-plus"></i>
                                    </div>
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse faq-collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body faq-body">
                                    O depósito de segurança é um valor temporariamente bloqueado no seu cartão de crédito como garantia. Este valor cobre possíveis danos, combustível ou taxas adicionais. O depósito é liberado após a devolução do veículo em boas condições, geralmente em 3-7 dias úteis.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="accordion-item faq-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span>Posso alugar um carro com cartão de débito?</span>
                                    <div class="faq-icon">
                                        <i class="bi bi-plus"></i>
                                    </div>
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse faq-collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body faq-body">
                                    Embora seja possível alugar um carro com cartão de débito em algumas locadoras, geralmente é necessário cartão de crédito para o depósito de segurança. Com cartão de débito, podem ser exigidos documentos adicionais e comprovação de renda. Recomendamos verificar as políticas específicas antes da reserva.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="accordion-item faq-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span>Posso cancelar ou alterar minha reserva?</span>
                                    <div class="faq-icon">
                                        <i class="bi bi-plus"></i>
                                    </div>
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse faq-collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body faq-body">
                                    Sim, você pode cancelar ou modificar sua reserva. Cancelamentos gratuitos são geralmente permitidos até 24-48 horas antes da retirada. Para modificações, acesse sua reserva online ou entre em contato conosco. Algumas tarifas promocionais podem ter restrições específicas.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="accordion-item faq-item">
                            <h3 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <span>Que tipo de Aluguer de carro eu preciso?</span>
                                    <div class="faq-icon">
                                        <i class="bi bi-plus"></i>
                                    </div>
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse faq-collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body faq-body">
                                    A escolha do tipo de carro depende de suas necessidades: carros econômicos para cidade e economia de combustível, SUVs para famílias ou terrenos difíceis, carros de luxo para ocasiões especiais, ou utilitários para mudanças. Considere o número de passageiros, bagagem e tipo de viagem.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="accordion-item faq-item">
                            <h3 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <span>É possível estender meu período de Aluguer?</span>
                                    <div class="faq-icon">
                                        <i class="bi bi-plus"></i>
                                    </div>
                                </button>
                            </h3>
                            <div id="collapseSix" class="accordion-collapse collapse faq-collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                                <div class="accordion-body faq-body">
                                    Sim, é possível estender seu período de Aluguer, sujeito à disponibilidade do veículo. Recomendamos entrar em contato conosco com pelo menos 24 horas de antecedência. A extensão será cobrada conforme as tarifas vigentes e você precisará autorizar os custos adicionais no mesmo cartão de crédito.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
