<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Pereiti prie turinio', 'code') }}
</a>

@include('sections.header')

  <main id="main" class="main">
    @yield('content')
  </main>

@include('sections.footer')
