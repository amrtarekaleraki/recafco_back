<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
      <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
      <!-- nav bar -->
      <div class="w-100 mb-4 d-flex">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('admin.index') }}">
             <img src="{{asset('assets-admin')}}/assets/logo/2.PNG" alt="" style="width: 100%;">
        </a>
      </div>

      {{-- home page --}}
      <ul class="navbar-nav flex-fill w-100 mb-2">

        <li class="nav-item w-100">
            <a class="nav-link" href="{{ route('admin.index') }}">
              <i class="fe fe-home fe-16"></i>
              <span class="ml-3 item-text">{{ __('keywords.home') }}</span>
            </a>
        </li>

      </ul>

      <p class="text-muted nav-heading mt-4 mb-1">
        <span>{{ __('keywords.components') }}</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">

        {{-- services --}}
        {{-- <x-sidebar-tab href="{{ route('admin.services.index') }}" icon="fe-codesandbox" name="{{ __('keywords.services') }}"></x-sidebar-tab> --}}


        {{-- parteners --}}
        <x-sidebar-tab href="{{ route('admin.parteners.index') }}" icon="fe-user" name="{{ __('keywords.parteners') }}"></x-sidebar-tab>


        {{-- certificates --}}
        <x-sidebar-tab href="{{ route('admin.certificates.index') }}" icon="fe-layers" name="{{ __('keywords.certificates') }}"></x-sidebar-tab>


        {{-- accreditations --}}
        <x-sidebar-tab href="{{ route('admin.accreditations.index') }}" icon="fe-folder" name="{{ __('keywords.accreditations') }}"></x-sidebar-tab>


        {{-- counters --}}
        <x-sidebar-tab href="{{ route('admin.counters.index') }}" icon="fe-codesandbox" name="{{ __('keywords.counters') }}"></x-sidebar-tab>

        {{-- socials --}}
        <x-sidebar-tab href="{{ route('admin.socials.index') }}" icon="fe-share-2" name="{{ __('keywords.socials') }}"></x-sidebar-tab>


        {{-- products --}}
        <x-sidebar-tab href="{{ route('admin.products.index') }}" icon="fe-credit-card" name="{{ __('keywords.products') }}"></x-sidebar-tab>


        {{-- contacts --}}
        <x-sidebar-tab href="{{ route('admin.contacts.index') }}" icon="fe-send" name="{{ __('keywords.contacts') }}"></x-sidebar-tab>


        {{-- informations --}}
        <x-sidebar-tab href="{{ route('admin.informations.index') }}" icon="fe-shuffle" name="{{ __('keywords.informations') }}"></x-sidebar-tab>


        {{-- categories --}}
        <x-sidebar-tab href="{{ route('admin.categories.index') }}" icon="fe-trello" name="{{ __('keywords.categories') }}"></x-sidebar-tab>


        {{-- projects --}}
        <x-sidebar-tab href="{{ route('admin.projects.index') }}" icon="fe-package" name="{{ __('keywords.projects') }}"></x-sidebar-tab>


        </ul>


    </nav>
  </aside>
