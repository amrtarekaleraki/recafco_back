@php
    $locale = session('locale') == 'ar' ? 'en' : 'ar';
@endphp
<a class="nav-link text-muted my-2" href="{{ route('front.switch', ['lang' => session('locale') == 'en' ? 'ar' : 'en']) }}" id="langSwitcher">
    {{ session('locale') == 'en' ? 'العربية' : 'En' }}
</a>


