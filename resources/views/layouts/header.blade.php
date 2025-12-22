<!-- HEADER MENU START -->

<style>
    .language-selector .dropdown-toggle {
    color: inherit;
    text-decoration: none;
}

.language-selector .dropdown-toggle:hover {
    color: var(--bs-primary);
}

.language-selector .dropdown-menu {
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.language-selector .dropdown-item:hover {
    background-color: #f8f9fa;
}

.language-selector .dropdown-item {
    padding: 0.5rem 1rem;
    font-size: 0.9rem;
}

/* Para dispositivos móveis */
@media (max-width: 768px) {
    .language-selector {
        order: -1;
        margin-right: 1rem;
    }
}
/* ASSIDE */
.asside{
  max-width: 100% !important;
  /* width: 100% !important; */
  position: relative;
  /* top: -20px; */
  padding: 8px;
  /* background: linear-gradient(to left, rgb(45, 116, 186, 0.4), rgba(4, 26, 113, 0.7)); */
  background: #041A71;
  z-index: 9999999;
  /* border: solid 1px black; */
}
.inaside{
  /* border: solid 1px blue; */
  width: 70%;
  margin: 0 auto;
  display: flex;
  justify-content:space-between;
}
.contato{
  width: auto;
  position: relative;
  top: 6px;
 /*  border: solid 1px black; */
}
.soccial{
  width: auto;
  justify-content: space-between;
  position: relative;
  top: 4px;
}

@media (max-width: 765px) {
    .inaside{
        flex-direction: column;
        width: 100%;
        text-align: center;
        gap: 10px;
    }
    .contato{
        justify-content: center;
        gap: 20px;
        display: block !important;
    }
    .soccial{
        display: none !important;
    }
    }
</style>
<aside class="container asside">
          <div class="row inaside">
          <div class="d-flex contato">
            <div class="contact mb-1">
                <img src="{{asset('assets/media/footer/uil-outgoing-call.png')}}" alt="call-logo">
                <a class="text-white" href="tel:+244923482877">946320021 / 923482877</a>
            </div>
            <div class="contact ms-2">
                <img src="{{asset('assets/media/footer/uil-envelope.png')}}" alt="logo">
                <a class="text-white" href="mailto:rent@orgchana.com">rent@orgchana.com</a>
            </div>
          </div>

          <div class="d-flex soccial">
            <div class="">
                <div class="d-flex contact">
                    <img class="mb-1" src="{{asset('assets/media/footer/uil-map-marker.png')}}" alt="logo">
                    <p class="text-white mt-1">{{ __('footer.footer.col-3.p') }} Lar do Patriota - Luanda</p>
                </div>
            </div>
          </div>
          </div>
</aside>

  <header class="header">
    <div class="container">
        <nav class="navigation d-flex align-items-center justify-content-between">
            <a href="{{route('front.index')}}" class="d-flex align-items-center">
                <img src="{{asset('assets/media/brands/chanalogo.png')}}" alt="/logo" class="header-logo" style="width: auto; height: 43px;">
            </a>
            <div class="menu-button-right">
                <div class="main-menu__nav">
                    <ul class="main-menu__list">
                        <li>
                            <a href="{{route('front.index')}}">{{ __('navigation.home') }}</a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);">{{ __('navigation.company') }}</a>
                            <ul>
                                <li><a href="{{route('front.sobre')}}">Quem somos</a></li>
                                <li><a href="{{route('front.equipa')}}">{{ __('navigation.team') }}</a></li>
                                <li><a href="{{route('front.historia')}}">{{ __('navigation.history') }}</a></li>
                                {{-- <li><a href="vehicle-details.html">Vehicle details</a></li> --}}
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="{{route('front.frotas')}}">{{ __('navigation.fleet') }}</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('front.faqs')}}">{{ __('navigation.faq') }}</a>
                        </li>
                        <li>
                            <a href="{{route('front.pesquisar-reserva')}}">{{ __('navigation.search_booking') }}</a>
                        </li>
                        <li>
                            <a href="{{route('front.contacto')}}">{{ __('navigation.contact') }}</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="main-menu__right">
                <div class="search-heart-icon d-md-flex d-none align-items-center gap-24">
                    <div class="hidden sm:flex sm:items-center sm:ms-6"></div>
                    <div class="social-icons">
                            <ul class="d-flex unstyled gap-12">
                                <li>
                                    <a href="">
                                        <img src="{{asset('assets/media/icons/Instagram.png')}}" alt="logo" style="width: 16px">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{asset('assets/media/icons/Twitter.png')}}" alt="logo" style="width: 16px">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{asset('assets/media/icons/Dribbble.png')}}" alt="logo" style="width: 16px">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{asset('assets/media/icons/Linkedin.png')}}" alt="logo" style="width: 16px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    {{-- <a class="fs-6 bg-primary text-white px-3 py-2 rounded fw-bold" href="#">Log in</a> --}}
                    {{-- <a class="fs-6 border px-3 py-2 rounded fw-bold" href="#">Register</a> --}}

                    <!-- Language Selector -->
                    <div class="language-selector dropdown">
                        <button class="btn dropdown-toggle d-flex align-items-center gap-2" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="border: none; background: none; padding: 0.5rem;">
                             @if(app()->getLocale() == 'pt')
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 400'%3E%3Crect width='240' height='400' fill='%23046A38'/%3E%3Crect x='240' width='360' height='400' fill='%23DA020E'/%3E%3Ccircle cx='240' cy='200' r='67.5' fill='none' stroke='%23FFD700' stroke-width='7'/%3E%3Ccircle cx='240' cy='200' r='45' fill='none' stroke='%23FFD700' stroke-width='7'/%3E%3Cpath d='m240 110 15 45h45l-37.5 30 15 45-37.5-30-37.5 30 15-45-37.5-30h45z' fill='%23FFD700'/%3E%3Cpath d='m225 200-15 20h30z' fill='%23FFD700'/%3E%3Cpath d='m255 200 15 20h-30z' fill='%23FFD700'/%3E%3Cpath d='m240 220 0 25m-15-12.5h30' stroke='%23FFD700' stroke-width='3'/%3E%3C/svg%3E" alt="Portugal" width="20" height="15" style="border-radius: 2px;">
                            <span class="fs-6">PT</span>
                            @else
                             <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 480'%3E%3Cpath fill='%23012169' d='M0 0h640v480H0z'/%3E%3Cpath fill='%23FFF' d='m75 0 244 181L562 0h78v62L400 241l240 178v61h-80L320 301 81 480H0v-60l239-178L0 64V0h75z'/%3E%3Cpath fill='%23C8102E' d='m424 281 216 159v40L369 281h55zm-184 20 6 35L54 480H0l246-179zM640 0v3L391 191l2-44L590 0h50zM0 0l239 176h-60L0 42V0z'/%3E%3Cpath fill='%23FFF' d='M241 0v480h160V0H241zM0 160v160h640V160H0z'/%3E%3Cpath fill='%23C8102E' d='M0 193v96h640v-96H0zM273 0v480h96V0h-96z'/%3E%3C/svg%3E" alt="United Kingdom" width="20" height="15" style="border-radius: 2px;">
                            <span class="fs-6">EN</span>
                            @endif
                            <i class="fa-light fa-chevron-down" style="font-size: 0.8rem;"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="languageDropdown" style="min-width: 120px;">
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="?lang=pt" onclick="changeLanguage('pt')">
                                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 400'%3E%3Crect width='240' height='400' fill='%23046A38'/%3E%3Crect x='240' width='360' height='400' fill='%23DA020E'/%3E%3Ccircle cx='240' cy='200' r='67.5' fill='none' stroke='%23FFD700' stroke-width='7'/%3E%3Ccircle cx='240' cy='200' r='45' fill='none' stroke='%23FFD700' stroke-width='7'/%3E%3Cpath d='m240 110 15 45h45l-37.5 30 15 45-37.5-30-37.5 30 15-45-37.5-30h45z' fill='%23FFD700'/%3E%3Cpath d='m225 200-15 20h30z' fill='%23FFD700'/%3E%3Cpath d='m255 200 15 20h-30z' fill='%23FFD700'/%3E%3Cpath d='m240 220 0 25m-15-12.5h30' stroke='%23FFD700' stroke-width='3'/%3E%3C/svg%3E" alt="Portugal" width="20" height="15" style="border-radius: 2px;">
                                    {{ __('messages.portuguese') }}
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="?lang=en" onclick="changeLanguage('en')">
                                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 480'%3E%3Cpath fill='%23012169' d='M0 0h640v480H0z'/%3E%3Cpath fill='%23FFF' d='m75 0 244 181L562 0h78v62L400 241l240 178v61h-80L320 301 81 480H0v-60l239-178L0 64V0h75z'/%3E%3Cpath fill='%23C8102E' d='m424 281 216 159v40L369 281h55zm-184 20 6 35L54 480H0l246-179zM640 0v3L391 191l2-44L590 0h50zM0 0l239 176h-60L0 42V0z'/%3E%3Cpath fill='%23FFF' d='M241 0v480h160V0H241zM0 160v160h640V160H0z'/%3E%3Cpath fill='%23C8102E' d='M0 193v96h640v-96H0zM273 0v480h96V0h-96z'/%3E%3C/svg%3E" alt="United Kingdom" width="20" height="15" style="border-radius: 2px;">
                                     {{ __('messages.english') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <a href="#" class="d-xl-none d-flex main-menu__toggler mobile-nav__toggler">
                    <i class="fa-light fa-bars"></i>
                </a>
            </div>
        </nav>
    </div>
</header>
    <!-- HEADER MENU END -->

    <script>
        function changeLanguage(lang) {
    // Aqui você pode implementar a lógica para trocar o idioma
    console.log('Changing language to: ' + lang);

    // Exemplo de como você poderia implementar:
    // window.location.href = window.location.pathname + '?lang=' + lang;

    // Ou se estiver usando Laravel com localização:
    // window.location.href = '/' + lang + window.location.pathname;

    // Por enquanto, apenas atualiza o botão para mostrar o idioma selecionado
    const languageButton = document.querySelector('#languageDropdown');
    const flagImg = languageButton.querySelector('img');
    const langText = languageButton.querySelector('span');

    if (lang === 'en') {
        flagImg.src = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 480'%3E%3Cpath fill='%23012169' d='M0 0h640v480H0z'/%3E%3Cpath fill='%23FFF' d='m75 0 244 181L562 0h78v62L400 241l240 178v61h-80L320 301 81 480H0v-60l239-178L0 64V0h75z'/%3E%3Cpath fill='%23C8102E' d='m424 281 216 159v40L369 281h55zm-184 20 6 35L54 480H0l246-179zM640 0v3L391 191l2-44L590 0h50zM0 0l239 176h-60L0 42V0z'/%3E%3Cpath fill='%23FFF' d='M241 0v480h160V0H241zM0 160v160h640V160H0z'/%3E%3Cpath fill='%23C8102E' d='M0 193v96h640v-96H0zM273 0v480h96V0h-96z'/%3E%3C/svg%3E";
        flagImg.alt = "United Kingdom";
        langText.textContent = "EN";
    } else {
        flagImg.src = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 400'%3E%3Crect width='240' height='400' fill='%23046A38'/%3E%3Crect x='240' width='360' height='400' fill='%23DA020E'/%3E%3Ccircle cx='240' cy='200' r='67.5' fill='none' stroke='%23FFD700' stroke-width='7'/%3E%3Ccircle cx='240' cy='200' r='45' fill='none' stroke='%23FFD700' stroke-width='7'/%3E%3Cpath d='m240 110 15 45h45l-37.5 30 15 45-37.5-30-37.5 30 15-45-37.5-30h45z' fill='%23FFD700'/%3E%3Cpath d='m225 200-15 20h30z' fill='%23FFD700'/%3E%3Cpath d='m255 200 15 20h-30z' fill='%23FFD700'/%3E%3Cpath d='m240 220 0 25m-15-12.5h30' stroke='%23FFD700' stroke-width='3'/%3E%3C/svg%3E";
        flagImg.alt = "Portugal";
        langText.textContent = "PT";
    }
}
    </script>
