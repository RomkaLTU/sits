@extends('layouts.app')

@section('content')
  <section>
    <div class="relative">
      <svg width="0" height="0" viewBox="0 0 1720 810" fill="none" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <clipPath id="shape1" transform="scale(0.0005813953488, 0.001234567901)" clipPathUnits="objectBoundingBox">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1720 30C1720 13.4315 1706.57 0 1690 0H30C13.4315 0 0 13.4315 0 30V730C0 746.569 13.4315 760 30 760H784C800.569 760 813.373 774.757 823.438 787.918C831.844 798.91 845.094 806 860 806C874.906 806 888.156 798.91 896.562 787.918C906.627 774.757 919.431 760 936 760H1690C1706.57 760 1720 746.569 1720 730V30Z" fill="#141515"/>
          </clipPath>
        </defs>
      </svg>
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="">
              <div class="absolute flex flex-col space-y-12 items-center justify-center left-0 right-0 mx-auto h-full w-full max-w-[1000px] z-20 text-white">
                <h2 class="text-3xl sm:text-5xl xl:text-hero-1 leading-tight xl:leading-[6rem] font-poppins highlight text-center">
                  Smart IT Solutions.<br>
                  IT Support.
                </h2>
                <a href="/#services" class="text-xs sm:text-sm font-bold text-white px-16 py-2 border border-white rounded-full uppercase">
                  {{ __('More', 'code') }}
                </a>
              </div>
              <img src="@asset('images/nasa-Q1p7bh3SHj8-unsplash.jpg')" class="w-full h-[100vw] md:h-[55vw] max-h-[810px] object-cover" alt="" style="clip-path:url(#shape1);">
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-prev">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
        </svg>
      </div>
      <div class="swiper-button-next">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
        </svg>
      </div>
      <div class="bg-custom-1 text-white absolute bottom-0 left-0 right-0 mx-auto z-10 mb-0 lg:mb-6 bg-white text-black rounded-full w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center">
        <a href="/#services" class="text-white">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 lg:w-6 lg:h-6 fill-current">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25L12 21m0 0l-3.75-3.75M12 21V3" />
          </svg>
        </a>
      </div>
    </div>
  </section>
@endsection
