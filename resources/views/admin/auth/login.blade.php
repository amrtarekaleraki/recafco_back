@extends('admin.auth.master')

@section('title',__('keywords.sign_in'))

@section('content')

   <div class="row align-items-center h-100">
    <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="POST" action="{{ route('admin.login') }}">
        @csrf


      <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
         <img src="{{asset('assets-admin')}}/assets/logo/2.png" alt="" style="width: 100%;">
      </a>
      <br>
      <h1 class="h1 mb-3">{{ __('keywords.sign_in') }}</h1>

      <x-auth-session-status class="mb-4" :status="session('status')" />


      <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" class="form-control form-control-lg" placeholder="{{ __('keywords.email') }}" :value="old('email')">
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>

      <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control form-control-lg" placeholder="{{ __('keywords.password') }}" >
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('keywords.login') }}</button>

    </form>
  </div>

@endsection
