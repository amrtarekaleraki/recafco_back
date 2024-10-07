@php
    $socials = App\Models\Social::first();
@endphp


<header data-lenis-prevent>
    <nav class="navbar navbar-expand-lg menu-sticky">
        <div class="container-fluid">
            <a class="navbar-brand desktop-only" href="{{ route('front.index') }}">
                <img src="{{asset('assets-front')}}/images/logo/color-recafco-logo.svg" alt="Logo" />
            </a>
            <button class="navbar-toggle" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <img src="{{asset('assets-front')}}/images/icon/menubtton.svg" alt="icon" />
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!----------------------------------------------------------------->
                <div class="header-nav-mobile-only">
                    <img src="{{asset('assets-front')}}/images/logo/color-recafco-logo.svg" alt="Logo" />
                    <a href="{{ route('front.switch', ['lang' => session('locale') == 'en' ? 'ar' : 'en']) }}" class="language-btn">{{ session('locale') == 'en' ? 'العربية' : 'En' }}</a>
                </div>
                <!----------------------------------------------------------------->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @yield('about-active')" aria-current="page" href="{{ route('front.about') }}">{{ __('front.about_header') }}</a>
                        <img class="icon-mobile" src="{{asset('assets-front')}}/images/icon/arrow-nav.svg" alt="icon" />
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('production-active')" href="{{ route('front.production') }}">{{ __('front.production_header') }}</a>
                        <img class="icon-mobile" src="{{asset('assets-front')}}/images/icon/arrow-nav.svg" alt="icon" />
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('construction-active')" href="{{ route('front.construction') }}">{{ __('front.construction_header') }}</a>
                        <img class="icon-mobile" src="{{asset('assets-front')}}/images/icon/arrow-nav.svg" alt="icon" />
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('projects-active')" href="{{ route('front.projects') }}">{{ __('front.projects_header') }}</a>
                        <img class="icon-mobile" src="{{asset('assets-front')}}/images/icon/arrow-nav.svg" alt="icon" />
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('contacts-active')" href="{{ route('front.contacts') }}">{{ __('front.contacts_header') }}</a>
                        <img class="icon-mobile" src="{{asset('assets-front')}}/images/icon/arrow-nav.svg" alt="icon" />
                    </li>

                    <li class="icon-mobile">

                        <form class="input-group d-flex align-items-center justify-content-between" id="mobileFormId" action="{{ route('front.search') }}" method="GET">
                            <input type="text" name="search" class="form-control" placeholder="{{ __('front.search_icon') }}"
                            value="{{ old('search') }}" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="#" id="submit-mobile" class="btn" type="button">
                                    <img src="{{asset('assets-front')}}/images/icon/search.svg" alt="icon" />
                                </a>
                            </div>
                        </form>


                        <script>
                            document.getElementById('submit-mobile').addEventListener('click', function(e) {
                                e.preventDefault(); // Prevent the default anchor behavior
                                document.getElementById('mobileFormId').submit(); // Replace 'yourFormId' with the actual ID of your form
                            });
                        </script>




                    </li>

                </ul>
                <div class="navbar-other-option d-flex align-items-center gap-3">
                    <a href="{{ route('front.switch', ['lang' => session('locale') == 'en' ? 'ar' : 'en']) }}" class="language-btn">{{ session('locale') == 'en' ? 'العربية' : 'En' }}</a>
                    <a href="{{ $socials->insta }}">
                        <img src="{{asset('assets-front')}}/images/icon/nav-instagram.svg" alt="icon" />
                    </a>
                    <a href="{{ $socials->linkedin }}">
                        <img src="{{asset('assets-front')}}/images/icon/nav-linkedin.svg" alt="icon" />
                    </a>
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <img class="search" src="{{asset('assets-front')}}/images/icon/search.svg" alt="icon" />
                        <img class="close" src="{{asset('assets-front')}}/images/icon/close.svg" alt="icon" />
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid p-0">
        <div class="accordion-item desktop-only">
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">

                <form class="input-group" id="yourFormId" action="{{ route('front.search') }}" method="GET">
                    <input type="text" name="search" class="form-control" placeholder="{{ __('front.search_icon') }}"
                    value="{{ old('search') }}" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <a href="#" id="submit-form" type="button">
                            <img src="{{asset('assets-front')}}/images/icon/search.svg" alt="search">
                        </a>
                    </div>
                </form>

                <script>
                    document.getElementById('submit-form').addEventListener('click', function(e) {
                        e.preventDefault(); // Prevent the default anchor behavior
                        document.getElementById('yourFormId').submit(); // Replace 'yourFormId' with the actual ID of your form
                    });
                </script>


            </div>
        </div>
    </div>
</header>
<div class="logo-mobile">
    <img src="{{asset('assets-front')}}/images/logo/color-recafco-logo.svg" alt="image" />
</div>
