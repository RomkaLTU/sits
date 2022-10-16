<header x-data="{ menuShow: false }" class="">
  <div class="container py-6">
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
        <button class="bg-custom-1 text-white w-10 h-10 sm:w-14 sm:h-14 rounded-full flex items-center justify-center">
          <svg class="w-4 h-4 fill-white" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
            <path d="M99.2 57.6V41l-12.3-1.7c-1-3.1-2.3-6-4-8.6l7.2-10.2L78.4 8.8l-10.6 8c-2.4-1.2-4.9-2.2-7.5-2.9L58 .8H41.5l-1.8 13.3c-2.7.8-5.4 1.9-7.8 3.2L20.8 9.5 9.1 21.2l8 10.6c-1.4 2.5-2.6 5.1-3.5 7.9L.8 41.9v16.5L13 60.1c.8 3.2 1.9 6.2 3.4 9l-7 10L21 90.7l9.2-7c3.1 1.9 6.5 3.4 10.2 4.4l1.9 11.1h16.5L60.3 88c3.5-1 6.8-2.4 9.8-4.2l9 6.4 11.7-11.7-6.8-9.1c1.7-3 2.9-6.4 3.7-9.8l11.5-2zm-48.9 18c-13.6 0-24.6-11-24.6-24.6 0-13.6 11-24.6 24.6-24.6s24.6 11 24.6 24.6c-.1 13.6-11.1 24.6-24.6 24.6z"/>
                      <circle cx="50.3" cy="51" r="14.2"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
</header>
