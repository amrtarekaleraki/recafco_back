@php
    $socials = App\Models\Social::first();
@endphp


<footer>
    <div class="container">
        <!---->
        <div class="footer__top d-flex align-items-center flex-wrap gap-5 row-gap-3">
            <div class="logo">
                <img src="{{asset('assets-front')}}/images/logo/color-recafco-logo.svg" alt="Logo" />
            </div>
            <a href="{{ route('front.projects') }}" class="button button--link hover-add-underline d-flex align-items-center gap-3">
                <span>For sales inquires</span>
                <img src="{{asset('assets-front')}}/images/icon/danger-arrow.svg" alt="icon" />
            </a>
        </div>
        <!---->
        <div class="footer__center d-flex flex-wrap align-items-center row-gap-4">
            <div class="social-media d-flex align-items-center gap-3">
                <a href="{{ $socials->insta }}" target="_blank" class="d-block">
                    <img src="{{asset('assets-front')}}/images/icon/instagram.svg" alt="instagram" />
                </a>
                <a href="{{ $socials->email }}" target="_blank" class="d-block">
                    <img src="{{asset('assets-front')}}/images/icon/mail.svg" alt="e-mail" />
                </a>
                <a href="{{ $socials->linkedin }}" target="_blank" class="d-block">
                    <img src="{{asset('assets-front')}}/images/icon/linked.svg" alt="linked in" />
                </a>
                <a href="{{ $socials->youtube}}" target="_blank" class="d-block">
                    <img class="youtube" src="{{asset('assets-front')}}/images/icon/youtube.svg" alt="youtube" />
                </a>
            </div>
            <!---->
            <div class="nav--footer">
                <ul class="d-flex flex-wrap align-items-center justify-content-center">
                    <li><a href="{{ route('front.contacts') }}" target="_blank">Contact</a></li>
                    <li><a href="{{ route('front.about') }}" target="_blank">about</a></li>
                    <li><a href="{{ route('front.construction') }}" target="_blank">Construction</a></li>
                    <li><a href="{{ route('front.projects') }}" target="_blank">projects</a></li>
                    <li><a href="{{ route('front.production') }}" target="_blank">Precast</a></li>
                    <li><a href="{{ route('front.production') }}" target="_blank">Hollowcore</a></li>
                    <li><a href="{{ route('front.production') }}" target="_blank">GRC</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!---->
    <div class="footer__bottom">
        <div class="container">
            <div class="content d-flex flex-wrap align-items-center  row-gap-3">
                <a href="{{ $socials->career_open }}" class="text button button--link hover-add-underline d-flex align-items-center gap-3">
                    career openings
                </a>
                <p class="copyright">
                    ©2024 Real Estate Construction & Fabrication Co. - K.S.C (Closed) Kuwait. All Rights Reserved.
                    Powered by <a href="#">JARA</a>
                </p>
            </div>
        </div>
    </div>
</footer>
