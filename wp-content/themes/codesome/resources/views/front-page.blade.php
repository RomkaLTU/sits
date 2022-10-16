@extends('layouts.app')

@section('content')
  <section class="section section-hero">
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
  <section id="contacts" class="section section-contacts my-8 lg:my-16">
    <div class="grid grid-cols-4 sm:grid-cols-8 lg:grid-cols-12 gap-14 sm:gap-4 lg:gap-14 bg-black text-white bg-opacity-90 py-12 xl:py-20 rounded-xl px-4 sm:px-14 xl:px-48">
      <div class="col-span-4 lg:col-span-5">
        <div class="highlight uppercase font-bold text-sm sm:text-base tracking-wide">#{{ __('Contact info', 'code') }}</div>
        <div class="text-3xl sm:text-4xl font-bold font-poppins tracking-wide my-4">{{ __('Any Question?', 'code') }}</div>
        <p class="text-gray-1 text-sm sm:text-base">
          Methods and techniques to taking raw data -
          mining for insights and years of experience will.
        </p>
        <div class="flex flex-col space-y-6 sm:space-y-10 mt-14">
          <div class="flex space-x-4 items-center">
            <div>
              <svg width="20" height="27" viewBox="0 0 20 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.73438 25.7422C9.19141 26.4531 10.2578 26.4531 10.7148 25.7422C18.1289 15.0781 19.5 13.9609 19.5 10C19.5 4.61719 15.1328 0.25 9.75 0.25C4.31641 0.25 0 4.61719 0 10C0 13.9609 1.32031 15.0781 8.73438 25.7422ZM9.75 14.0625C7.46484 14.0625 5.6875 12.2852 5.6875 10C5.6875 7.76562 7.46484 5.9375 9.75 5.9375C11.9844 5.9375 13.8125 7.76562 13.8125 10C13.8125 12.2852 11.9844 14.0625 9.75 14.0625Z" fill="#A2ACBD"/>
              </svg>
            </div>
            <div class="text-sm sm:text-base font-medium leading-normal">
              Nemėžio k. Vilniaus r. sav. LT-13263,<br>
              Topolių g. 6B
            </div>
          </div>
          <div class="flex space-x-4 items-center">
            <div>
              <svg width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.4922 6.94922C24.3242 7.86328 22.8516 8.98047 17.6719 12.7383C16.6562 13.5 14.7773 15.1758 13 15.1758C11.1719 15.1758 9.34375 13.5 8.27734 12.7383C3.09766 8.98047 1.625 7.86328 0.457031 6.94922C0.253906 6.79688 0 6.94922 0 7.20312V17.5625C0 18.9336 1.06641 20 2.4375 20H23.5625C24.8828 20 26 18.9336 26 17.5625V7.20312C26 6.94922 25.6953 6.79688 25.4922 6.94922ZM13 13.5C14.168 13.5508 15.8438 12.0273 16.707 11.418C23.4609 6.54297 23.9688 6.08594 25.4922 4.86719C25.7969 4.66406 26 4.30859 26 3.90234V2.9375C26 1.61719 24.8828 0.5 23.5625 0.5H2.4375C1.06641 0.5 0 1.61719 0 2.9375V3.90234C0 4.30859 0.152344 4.66406 0.457031 4.86719C1.98047 6.08594 2.48828 6.54297 9.24219 11.418C10.1055 12.0273 11.7812 13.5508 13 13.5Z" fill="#A2ACBD"/>
              </svg>
            </div>
            <div class="text-sm sm:text-base font-medium leading-normal">
              {{ __('Contact by email', 'code') }},<br>
              <a href="mailto:info@sits.lt">info@sits.lt</a>
            </div>
          </div>
          <div class="flex space-x-4 items-center">
            <div>
              <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.0352 1.51953L20.7539 0.300781C20.1953 0.148438 19.5859 0.453125 19.332 1.01172L16.8945 6.69922C16.6914 7.20703 16.8438 7.76562 17.25 8.12109L20.3477 10.6602C18.5195 14.5195 15.3203 17.7695 11.3594 19.6484L8.82031 16.5508C8.46484 16.1445 7.90625 15.9922 7.39844 16.1953L1.71094 18.6328C1.15234 18.8867 0.898438 19.4961 1 20.0547L2.21875 25.3359C2.37109 25.8945 2.82812 26.25 3.4375 26.25C16.4375 26.25 27 15.7383 27 2.6875C27 2.12891 26.5938 1.67188 26.0352 1.51953Z" fill="#A2ACBD"/>
              </svg>
            </div>
            <div class="text-sm sm:text-base font-medium leading-normal">
              {{ __('Contact by phone', 'code') }},<br>
              <a href="tel:+37061430807">+370 614 30807</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-4 lg:col-start-7 lg:col-span-6">
        <div class="highlight uppercase font-bold tracking-wide text-sm sm:text-base">#{{ __('Get in touch', 'code') }}</div>
        <div class="text-3xl sm:text-4xl font-bold font-poppins tracking-wide my-4">{{ __('Let’s Say Hi', 'code') }}</div>
        <div>
          {!! do_shortcode('[wpforms id="9" title="false"]') !!}
        </div>
      </div>
    </div>
  </section>
@endsection
