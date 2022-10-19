<header x-data="{ menuShow: false }" class="">
  <div class="container py-6 !max-w-[1400px]">
    <div @click.outside="menuShow = false" class="flex items-center justify-between">
      <div class="flex md:space-x-20 items-center">
        <a class="block max-w-[140px] sm:max-w-[175px]" href="{{ home_url('/') }}">
          <img src="@asset('images/sits-logo.png')" alt="{{ get_bloginfo('description') }}">
        </a>
        <div>
          @if (has_nav_menu('primary_navigation'))
            <nav x-show="menuShow" class="nav-primary nav-primary-m" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
            </nav>
            <nav class="nav-primary nav-primary-d" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
            </nav>
          @endif
        </div>
      </div>
      <div class="flex space-x-2">
        <button @click="menuShow = !menuShow" class="md:hidden bg-custom-1 text-white w-10 h-10 sm:w-14 sm:h-14 rounded-full flex items-center justify-center">
          <svg x-show="!menuShow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg x-show="menuShow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</header>
