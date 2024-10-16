@php
    $socials = App\Models\Social::first();
    $products = App\Models\Product::get();
@endphp


<footer class="white-bg">
    <div class="container">
        <!---->
        <div class="footer__top d-flex align-items-center flex-wrap gap-5 row-gap-3">
            <div class="logo">
                {{-- <img src="{{asset('assets-front')}}/images/logo/color-recafco-logo.svg" alt="Logo" /> --}}
                <img src="{{asset('assets-front')}}/images/logo/recafco-logo.png" alt="Logo" />
            </div>
            <a href="{{ route('front.contacts') }}" class="button button--link hover-add-underline d-flex align-items-center gap-3">
                <span>{{ __('front.for_sales_inquiries') }}</span>
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
                    <li><a href="{{ route('front.contacts') }}" target="_blank">{{ __('front.contact') }}</a></li>
                    <li><a href="{{ route('front.about') }}" target="_blank">{{ __('front.about') }}</a></li>
                    <li><a href="{{ route('front.construction') }}" target="_blank">{{ __('front.construction') }}</a></li>
                    <li><a href="{{ route('front.projects') }}" target="_blank">{{ __('front.projects') }}</a></li>
                    @foreach($products as $product)
                        @if ($product->id == 1)
                        <li>
                            <a href="{{ route('front.hollowcore',$product) }}" target="_blank">
                                {{ $product->title }}
                            </a>
                        </li>

                        @elseif ($product->id == 4)
                        <li>
                            <a href="{{ route('front.precast',$product) }}" target="_blank">
                                {{ $product->title }}
                            </a>
                        </li>

                        @elseif ($product->id == 5)
                        <li>
                            <a href="{{ route('front.gfrc',$product) }}" target="_blank">
                                {{ $product->title }}
                            </a>
                        </li>
                        @elseif ($product->id == 6)
                        <li>
                            <a href="{{ route('front.patching_plant',$product) }}" target="_blank">
                                {{ $product->title }}
                            </a>
                        </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!---->
    <div class="footer__bottom">
        <div class="container">
            <div class="content d-flex flex-wrap align-items-center  row-gap-3">
                <a href="{{ $socials->career_open }}" class="text button button--link hover-add-underline d-flex align-items-center gap-3">
                    {{ __('front.career_openings') }}
                </a>
                <p class="copyright">
                    {{ __('front.copyright') }}
                     <a href="#">JARA</a>
                </p>
            </div>
        </div>
    </div>
</footer>
