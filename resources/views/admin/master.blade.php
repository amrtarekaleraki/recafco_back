<!doctype html>
<html lang="en">

   @include('admin.partials.head')


  <body class="vertical  light {{ session('locale') == 'ar' ? 'rtl' : 'ltr' }} ">

    <div class="wrapper">

       @include('admin.partials.navbar')


       @include('admin.partials.sidebar')


      <main role="main" class="main-content">
           @yield('content')
      </main>



    </div>


    @include('admin.partials.scripts')

    <script>
        function confirmDelete(id) {
            var message = "{{ __('keywords.are_you_sure') }}";
            if (confirm(message)) {
                document.getElementById('deleteForm-' + id).submit();
            }
        }
    </script>


  </body>
</html>
