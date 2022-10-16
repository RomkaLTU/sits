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
                <a href="/#services" class="hover:bg-white hover:text-black transition-colors text-xs sm:text-sm font-bold text-white px-16 py-2 border border-white rounded-full uppercase">
                  {{ __('More', 'code') }}
                </a>
              </div>
              <img src="@asset('images/236311.png')" class="w-full h-[100vw] md:h-[55vw] max-h-[810px] object-cover" alt="" style="clip-path:url(#shape1);">
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
        <a href="/#services" class="w-full h-full flex justify-center items-center text-white block cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 lg:w-6 lg:h-6 fill-current">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25L12 21m0 0l-3.75-3.75M12 21V3" />
          </svg>
        </a>
      </div>
    </div>
  </section>

  <section id="services" class="section section-services my-8 lg:my-16">
    <header class="flex flex-col gap-4 justify-center items-center">
      <span class="bg-custom-1 text-white text-sm uppercase px-3 py-1 rounded">
        {{ __('What we do', 'code') }}
      </span>
      <h2 class="text-3xl lg:text-4xl leading-tight xl:leading-[5rem] font-poppins font-bold text-center">
        {{ __('Our Service Areas', 'code') }}
      </h2>
    </header>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-[860px] mx-auto mt-14">
      <div class="relative group cursor-pointer w-full max-w-[300px] mx-auto">
        <div class="group-hover:-rotate-6 transition-transform w-full h-full rounded-md absolute bg-custom-1 left-0 top-0"></div>
        <div class="relative sm:max-h-[271px] bg-white border border-gray-200 rounded-md p-12 flex flex-col justify-center items-center space-y-8">
          <div>
            <svg class="w-14 h-14" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
              <path d="M23 12c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4a1 1 0 1 1 0 2 1 1 0 0 1 0-2zM32 8h12v2H32zM23 24c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4a1 1 0 1 1 0 2 1 1 0 0 1 0-2zM32 20h12v2H32zM23 30c-1.654 0-3 1.346-3 3s1.346 3 3 3 3-1.346 3-3-1.346-3-3-3zm0 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM32 32h12v2H32zM23 42c-1.654 0-3 1.346-3 3s1.346 3 3 3 3-1.346 3-3-1.346-3-3-3zm0 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM32 44h12v2H32z"/>
              <path d="M61 12H48V3a1 1 0 0 0-1-1H17a1 1 0 0 0-1 1v9H3a1 1 0 0 0-1 1v48a1 1 0 0 0 1 1h27a1 1 0 0 0 1-1v-9h2v9a1 1 0 0 0 1 1h27a1 1 0 0 0 1-1V13a1 1 0 0 0-1-1zM30 50H18V40h28v10H30zm30-14H48v-4h10v-2H48v-4h12v10zm-42 1v-9h28v10H18v-1zm28-12v1H18V16h28v9zm-30 2v9H4V26h12v1zM4 38h12v10H4V38zm44 6h10v-2H48v-4h12v10H48v-4zm12-30v10H48v-4h10v-2H48v-4h12zM18 4h28v10H18V4zM4 14h12v10H4V14zm25 46H4V50h12v1a1 1 0 0 0 1 1h12v8zm31 0H35v-8h12a1 1 0 0 0 1-1v-1h12v10z"/>
              <path d="M9 16c-1.654 0-3 1.346-3 3s1.346 3 3 3 3-1.346 3-3-1.346-3-3-3zm0 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM9 34c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4a1 1 0 1 1 0 2 1 1 0 0 1 0-2zM9 40c-1.654 0-3 1.346-3 3s1.346 3 3 3 3-1.346 3-3-1.346-3-3-3zm0 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM9 52c-1.654 0-3 1.346-3 3s1.346 3 3 3 3-1.346 3-3-1.346-3-3-3zm0 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM15 54h12v2H15zM37 55c0 1.654 1.346 3 3 3s3-1.346 3-3-1.346-3-3-3-3 1.346-3 3zm3-1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zM46 54h12v2H46z"/>
            </svg>
          </div>
          <div class="sm:min-h-[87px] flex flex-col justify-end">
            <h3 class="font-poppins font-medium text-xl text-center">Servers maintenance</h3>
            <div class="flex justify-center mt-6">
              <svg width="25" height="5" viewBox="0 0 25 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2.5" fill="#141515"/>
                <circle cx="12.5" cy="2.5" r="2.5" fill="#141515"/>
                <circle cx="22.5" cy="2.5" r="2.5" fill="#141515"/>
              </svg>
            </div>
          </div>
        </div>
      </div>

      <div class="relative group cursor-pointer w-full max-w-[300px] mx-auto">
        <div class="group-hover:-rotate-6 transition-transform w-full h-full rounded-md absolute bg-custom-1 left-0 top-0"></div>
        <div class="relative sm:max-h-[271px] bg-white border border-gray-200 rounded-md p-12 flex flex-col justify-center items-center space-y-8">
          <div>
            <svg class="w-14 h-14" data-name="Layer 1" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg">
              <path d="M122.96 68.023a2.082 2.082 0 0 0-1.98-1.988c-1.422 0-1.985 1.275-1.98 2.5C119 99.118 94.327 124 64 124S9 99.118 9 68.535a55.128 55.128 0 0 1 49.21-55.153 2 2 0 0 0 1.79-1.99v-5.47l19.595 14.224L60 34.37v-5.706a2 2 0 0 0-2.3-1.978C37.348 29.774 22 47.766 22 68.537a42.001 42.001 0 1 0 84 0 2 2 0 0 0-4 0 38.001 38.001 0 1 1-76 0 38.493 38.493 0 0 1 30-37.47v7.227a2 2 0 0 0 3.175 1.618l25-18.146a2 2 0 0 0 0-3.237l-25-18.146A2 2 0 0 0 56 2v7.62A59.132 59.132 0 0 0 5 68.535C5 101.325 31.467 128 64 128s59-26.676 59-59.465a3.402 3.402 0 0 0-.04-.512ZM109.922 38.002a2.02 2.02 0 0 0 2.77.574 2 2 0 0 0 .575-2.77c-.18-.27-.36-.542-.543-.81a2 2 0 1 0-3.306 2.251q.255.374.504.755ZM104.951 31.51a2.02 2.02 0 0 0 2.823.166 2 2 0 0 0 .165-2.823 57.843 57.843 0 0 0-.65-.721 2 2 0 1 0-2.95 2.701q.309.338.612.678ZM113.498 44.324q.197.41.389.824a2.024 2.024 0 0 0 2.654.977 2 2 0 0 0 .977-2.654q-.205-.443-.416-.881a2 2 0 1 0-3.604 1.734ZM116.493 51.93q.134.435.263.873a2.023 2.023 0 0 0 2.481 1.356 2 2 0 0 0 1.358-2.481 61.775 61.775 0 0 0-.282-.934 2 2 0 0 0-3.82 1.186ZM120.009 57.61a2 2 0 0 0-1.672 2.282q.069.45.132.902a2.028 2.028 0 0 0 2.254 1.709 2 2 0 0 0 1.709-2.254q-.067-.485-.142-.967a2.001 2.001 0 0 0-2.281-1.672ZM99.083 25.82a2 2 0 1 0 2.572-3.063l-.404-.336a2 2 0 1 0-2.533 3.096Z"/>
              <path d="M101.475 62.145a2.03 2.03 0 0 0 2.301 1.644 2 2 0 0 0 1.644-2.302q-.085-.515-.184-1.028a2 2 0 0 0-3.928.752q.089.466.167.934ZM99.148 53.941a2.021 2.021 0 0 0 2.61 1.092 2 2 0 0 0 1.092-2.61q-.199-.483-.408-.962a2 2 0 0 0-3.665 1.604q.191.434.371.876ZM97.722 43.3a2 2 0 0 0-3.217 2.378q.282.38.554.77a2 2 0 1 0 3.277-2.294q-.303-.432-.614-.853ZM89.414 40.042a2 2 0 1 0 2.693-2.957q-.39-.355-.789-.7a2 2 0 0 0-2.613 3.03c.24.206.475.414.709.627ZM81.567 63.89l-.117-.282.137-.137a5.239 5.239 0 0 0-.016-7.423l-2.628-2.632a5.25 5.25 0 0 0-7.423-.001l-.134.134c-.09-.04-.182-.076-.274-.114v-.189A5.253 5.253 0 0 0 65.865 48H62.13a5.253 5.253 0 0 0-5.247 5.246v.19l-.274.113-.132-.132a5.247 5.247 0 0 0-7.41-.013l-2.655 2.656a5.245 5.245 0 0 0 0 7.414l.135.136c-.04.093-.078.186-.116.28h-.186A5.25 5.25 0 0 0 41 69.133v3.734a5.25 5.25 0 0 0 5.245 5.243h.187c.037.094.076.187.115.28l-.137.137a5.245 5.245 0 0 0 .004 7.415l2.643 2.643a5.246 5.246 0 0 0 7.412.006l.14-.14q.137.058.274.113v.193A5.251 5.251 0 0 0 62.13 94h3.735a5.251 5.251 0 0 0 5.247-5.243v-.193c.092-.037.183-.074.274-.113l.133.134a5.25 5.25 0 0 0 7.42.003l2.645-2.649a5.24 5.24 0 0 0-.01-7.422l-.125-.126.116-.28h.19A5.25 5.25 0 0 0 87 72.866v-3.734a5.25 5.25 0 0 0-5.246-5.243ZM83 69.133v3.734a1.242 1.242 0 0 1-1.246 1.243h-1.866a1.76 1.76 0 0 0-1.582 1.232 14.854 14.854 0 0 1-1.12 2.702 1.76 1.76 0 0 0 .25 1.986l1.318 1.323a1.239 1.239 0 0 1 0 1.76l-2.641 2.644a1.264 1.264 0 0 1-1.764 0l-1.321-1.322a1.745 1.745 0 0 0-1.984-.249 15.113 15.113 0 0 1-2.702 1.123 1.76 1.76 0 0 0-1.23 1.583v1.865A1.246 1.246 0 0 1 65.865 90H62.13a1.246 1.246 0 0 1-1.247-1.243v-1.865a1.756 1.756 0 0 0-1.227-1.583 15.16 15.16 0 0 1-2.703-1.122 1.75 1.75 0 0 0-1.987.248l-1.32 1.322a1.262 1.262 0 0 1-1.76 0l-2.645-2.645a1.245 1.245 0 0 1 0-1.759l1.321-1.323a1.76 1.76 0 0 0 .249-1.986 14.92 14.92 0 0 1-1.122-2.705 1.76 1.76 0 0 0-1.58-1.229h-1.864A1.241 1.241 0 0 1 45 72.867v-3.734a1.241 1.241 0 0 1 1.245-1.243h1.863a1.76 1.76 0 0 0 1.582-1.229 14.92 14.92 0 0 1 1.121-2.705 1.76 1.76 0 0 0-.249-1.986l-1.321-1.323a1.245 1.245 0 0 1 0-1.76l2.644-2.644a1.26 1.26 0 0 1 1.761 0l1.32 1.321a1.747 1.747 0 0 0 1.984.25 15.289 15.289 0 0 1 2.705-1.123 1.76 1.76 0 0 0 1.228-1.583v-1.862A1.248 1.248 0 0 1 62.13 52h3.735a1.248 1.248 0 0 1 1.247 1.246v1.862a1.76 1.76 0 0 0 1.228 1.583 15.082 15.082 0 0 1 2.704 1.122 1.763 1.763 0 0 0 1.984-.249l1.32-1.32a1.26 1.26 0 0 1 1.765 0l2.641 2.644a1.239 1.239 0 0 1 0 1.758l-1.319 1.324a1.76 1.76 0 0 0-.25 1.986 14.644 14.644 0 0 1 1.123 2.705 1.756 1.756 0 0 0 1.58 1.229h1.866A1.243 1.243 0 0 1 83 69.133Z"/>
              <path d="M64.004 62A9 9 0 1 0 73 71.002 9.013 9.013 0 0 0 64.004 62Zm0 14A5 5 0 1 1 69 71.002 5.007 5.007 0 0 1 64.004 76Z"/>
              <circle cx="49.955" cy="21.672" r="2"/>
              <circle cx="40.692" cy="25.388" r="2"/>
              <circle cx="32.381" cy="30.912" r="2"/>
              <circle cx="25.351" cy="37.999" r="2"/>
              <circle cx="19.882" cy="46.343" r="2"/>
              <circle cx="16.205" cy="55.637" r="2"/>
              <circle cx="14.475" cy="65.462" r="2"/>
              <circle cx="14.716" cy="75.441" r="2"/>
              <circle cx="16.945" cy="85.168" r="2"/>
              <circle cx="21.085" cy="94.248" r="2"/>
              <circle cx="26.966" cy="102.311" r="2"/>
              <circle cx="34.343" cy="109.038" r="2"/>
              <circle cx="42.927" cy="114.257" r="2"/>
              <circle cx="52.368" cy="117.163" r="2"/>
              <circle cx="62.27" cy="118.351" r="2"/>
              <circle cx="72.216" cy="117.538" r="2"/>
              <circle cx="81.79" cy="114.819" r="2"/>
              <circle cx="90.585" cy="110.132" r="2"/>
              <circle cx="98.116" cy="103.726" r="2"/>
              <circle cx="104.47" cy="96.06" r="2"/>
              <circle cx="108.995" cy="87.167" r="2"/>
              <circle cx="111.64" cy="77.541" r="2"/>
              <circle cx="112.31" cy="67.589" r="2"/>
              <circle cx="110.995" cy="57.587" r="2"/>
              <circle cx="107.723" cy="48.261" r="2"/>
              <circle cx="102.62" cy="39.68" r="2"/>
              <circle cx="95.9" cy="32.298" r="2"/>
            </svg>
          </div>
          <div class="sm:min-h-[87px] flex flex-col justify-end">
            <h3 class="font-poppins font-medium text-xl text-center">Software<br> updates</h3>
            <div class="flex justify-center mt-6">
              <svg width="25" height="5" viewBox="0 0 25 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2.5" fill="#141515"/>
                <circle cx="12.5" cy="2.5" r="2.5" fill="#141515"/>
                <circle cx="22.5" cy="2.5" r="2.5" fill="#141515"/>
              </svg>
            </div>
          </div>
        </div>
      </div>

      <div class="relative group cursor-pointer w-full max-w-[300px] mx-auto">
        <div class="group-hover:-rotate-6 transition-transform w-full h-full rounded-md absolute bg-custom-1 left-0 top-0"></div>
        <div class="relative sm:max-h-[271px] bg-white border border-gray-200 rounded-md p-12 flex flex-col justify-center items-center space-y-8">
          <div>
            <svg class="w-16 h-16" id="Layer_1" version="1.1" viewBox="0 0 400 400" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
              <path class="st0" d="M58 197.1c5.5 0 10-4.5 10-10 0-72.8 59.2-132 132-132 19.4 0 37.8 4.2 54.4 11.7l12.7-16.1C246.8 40.7 224 35 199.9 35c-83.8 0-152 68.2-152 152 .1 5.6 4.6 10.1 10.1 10.1zM299.6 72.3l-10.8 17.1c26.6 24.2 43.3 59 43.3 97.6 0 5.5 4.5 10 10 10s10-4.5 10-10c-.1-45.7-20.4-86.8-52.5-114.7zM181.8 174.8c-.4.5-.7 1-1.1 1.5-5.1 8.1-2.7 18.9 5.4 24.1 2.9 1.8 6.1 2.7 9.3 2.7 5.8 0 11.4-2.9 14.8-8.1L281 83l10.7-17 2.3-3.6c2.4-3.9 1.6-9.2-2.1-12.1-1.7-1.3-3.7-2-5.7-2-2.7 0-5.4 1.2-7.2 3.5l-3 3.8-12.6 15.9-81.6 103.3z"/>
              <path class="st0" d="M211.8 107.4V78.1c0-5.5-4.5-10-10-10s-10 4.5-10 10v29.3c0 5.5 4.5 10 10 10 5.6 0 10-4.5 10-10zM289.5 125l-25.4 14.7c-4.8 2.8-6.4 8.9-3.7 13.7 1.9 3.2 5.2 5 8.7 5 1.7 0 3.4-.4 5-1.3l25.4-14.7c4.8-2.8 6.4-8.9 3.7-13.7-2.8-4.8-8.9-6.4-13.7-3.7zM268.8 188c0 5.5 4.5 10 10 10h29.3c5.5 0 10-4.5 10-10s-4.5-10-10-10h-29.3c-5.5 0-10 4.5-10 10zM91.9 174.3c-5.5 0-10 4.5-10 10s4.5 10 10 10h29.3c5.5 0 10-4.5 10-10s-4.5-10-10-10H91.9zM141.3 150.2c2.8-4.8 1.1-10.9-3.7-13.7l-25.4-14.7c-4.8-2.8-10.9-1.1-13.7 3.7-2.8 4.8-1.1 10.9 3.7 13.7l25.4 14.7c1.6.9 3.3 1.3 5 1.3 3.5 0 6.9-1.8 8.7-5zM162.2 127c1.7 0 3.4-.4 5-1.3 4.8-2.8 6.4-8.9 3.7-13.7l-14.7-25.4c-2.8-4.8-8.9-6.4-13.7-3.7-4.8 2.8-6.4 8.9-3.7 13.7l14.7 25.4c1.9 3.2 5.2 5 8.7 5zM270.9 215.2c0 .9.1 1.8.1 2.7 0 40.8-33.1 73.9-73.9 73.9s-73.9-33.1-73.9-73.9c0-.9 0-1.8.1-2.7H50.1v12.4c0 3 2.3 5.5 5.3 5.7 7.5.5 14.9 1.1 22.4 1.6 2.6.2 4.7 2.1 5.2 4.6 1.1 5.7 2.6 11.2 4.4 16.5.9 2.4-.1 5.2-2.2 6.6l-18.6 12.6c-2.5 1.7-3.3 5-1.7 7.6 3.6 6.2 6.2 10.7 9.7 16.9 1.5 2.6 4.8 3.6 7.5 2.3 6.7-3.3 13.5-6.5 20.2-9.8 2.3-1.1 5.1-.6 6.8 1.4 3.7 4.3 7.8 8.4 12.1 12.1 2 1.7 2.5 4.5 1.4 6.8-3.3 6.7-6.6 13.5-9.8 20.2-1.3 2.7-.3 6 2.3 7.5 6.2 3.6 10.7 6.2 16.9 9.7 2.6 1.5 5.9.7 7.6-1.7l12.6-18.6c1.5-2.1 4.2-3.1 6.6-2.2 5.3 1.9 10.9 3.3 16.5 4.4 2.5.5 4.4 2.6 4.6 5.2.5 7.5 1.1 14.9 1.6 22.4.2 3 2.7 5.3 5.7 5.3h19.5c3 0 5.5-2.3 5.7-5.3.5-7.5 1.1-14.9 1.6-22.4.2-2.6 2.1-4.7 4.6-5.2 5.7-1.1 11.2-2.6 16.5-4.4 2.4-.9 5.2.1 6.6 2.2l12.6 18.6c1.7 2.5 5 3.3 7.6 1.7 6.2-3.6 10.7-6.2 16.9-9.7 2.6-1.5 3.6-4.8 2.3-7.5-3.3-6.7-6.5-13.5-9.8-20.2-1.1-2.3-.6-5.1 1.4-6.8 4.3-3.7 8.4-7.8 12.1-12.1 1.7-2 4.5-2.5 6.8-1.4 6.7 3.3 13.5 6.5 20.2 9.8 2.7 1.3 6 .3 7.5-2.3 3.6-6.2 6.2-10.7 9.7-16.9 1.5-2.6.7-5.9-1.7-7.6l-18.6-12.6c-2.1-1.5-3.1-4.2-2.2-6.6 1.9-5.3 3.3-10.9 4.4-16.5.5-2.5 2.6-4.4 5.2-4.6 7.5-.5 14.9-1.1 22.4-1.6 3-.2 5.3-2.7 5.3-5.7v-12.4h-72.9z"/>
            </svg>
          </div>
          <div class="sm:min-h-[87px] flex flex-col justify-end">
            <h3 class="font-poppins font-medium text-xl text-center">Performance monitoring</h3>
            <div class="flex justify-center mt-6">
              <svg width="25" height="5" viewBox="0 0 25 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2.5" fill="#141515"/>
                <circle cx="12.5" cy="2.5" r="2.5" fill="#141515"/>
                <circle cx="22.5" cy="2.5" r="2.5" fill="#141515"/>
              </svg>
            </div>
          </div>
        </div>
      </div>

      <div class="relative group cursor-pointer w-full max-w-[300px] mx-auto">
        <div class="group-hover:-rotate-6 transition-transform w-full h-full rounded-md absolute bg-custom-1 left-0 top-0"></div>
        <div class="relative sm:max-h-[271px] bg-white border border-gray-200 rounded-md p-12 flex flex-col justify-center items-center space-y-8">
          <div>
            <svg class="w-14 h-14" xml:space="preserve" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.267 22.959h-1.533a.5.5 0 0 1-.488-.394l-.242-1.11a5.105 5.105 0 0 1-.95-.394l-.957.612a.5.5 0 0 1-.623-.068L6.39 20.524a.5.5 0 0 1-.067-.624l.613-.957a5.11 5.11 0 0 1-.395-.95l-1.108-.243a.5.5 0 0 1-.394-.488V15.73c0-.235.163-.438.394-.488L6.541 15c.099-.329.23-.646.395-.95l-.613-.958a.5.5 0 0 1 .067-.623l1.083-1.083a.497.497 0 0 1 .623-.067l.957.612c.304-.164.622-.296.95-.396l.242-1.107a.5.5 0 0 1 .488-.394h1.533a.5.5 0 0 1 .488.393l.243 1.107c.328.1.646.231.95.395l.956-.612a.5.5 0 0 1 .623.067l1.083 1.083a.5.5 0 0 1 .067.623l-.613.958c.164.305.297.623.396.951l1.107.243a.5.5 0 0 1 .394.488v1.532a.5.5 0 0 1-.394.488l-1.108.243a4.966 4.966 0 0 1-.395.95l.613.957a.5.5 0 0 1-.067.624l-1.083 1.083a.5.5 0 0 1-.623.067l-.957-.613a5.096 5.096 0 0 1-.949.394l-.243 1.11a.498.498 0 0 1-.487.394zm-1.131-1h.729l.222-1.015a.502.502 0 0 1 .375-.38 4.126 4.126 0 0 0 1.236-.512.496.496 0 0 1 .533.004l.874.56.515-.514-.561-.874a.5.5 0 0 1-.004-.533c.24-.388.413-.804.513-1.237a.499.499 0 0 1 .381-.375l1.013-.222v-.728l-1.012-.222a.502.502 0 0 1-.381-.375 4.104 4.104 0 0 0-.514-1.238.498.498 0 0 1 .004-.533l.561-.875-.515-.515-.874.56a.496.496 0 0 1-.533.004 4.14 4.14 0 0 0-1.237-.515.5.5 0 0 1-.374-.38l-.222-1.011h-.729l-.221 1.011a.5.5 0 0 1-.374.38 4.134 4.134 0 0 0-1.238.515.496.496 0 0 1-.533-.004l-.874-.56-.515.515.561.875a.5.5 0 0 1 .004.533 4.203 4.203 0 0 0-.515 1.239.5.5 0 0 1-.38.374l-1.012.222v.728l1.013.222a.502.502 0 0 1 .381.375c.102.436.273.852.513 1.238.102.164.1.371-.004.533l-.561.874.515.514.874-.56a.499.499 0 0 1 .532-.004c.386.239.803.411 1.238.513a.499.499 0 0 1 .375.38l.221 1.013zm.363-2.407c-1.685 0-3.055-1.37-3.055-3.055s1.37-3.055 3.055-3.055 3.055 1.37 3.055 3.055-1.37 3.055-3.055 3.055zm0-5.109c-1.133 0-2.055.922-2.055 2.055s.922 2.055 2.055 2.055 2.055-.922 2.055-2.055-.922-2.055-2.055-2.055z" fill="#263238"/>
              <path d="M11.5 30a.504.504 0 0 1-.354-.146L7.293 26H2.5c-.827 0-1.5-.673-1.5-1.5v-16C1 7.673 1.673 7 2.5 7h18c.827 0 1.5.673 1.5 1.5v16c0 .827-.673 1.5-1.5 1.5H12v3.5a.5.5 0 0 1-.5.5zm-9-22a.5.5 0 0 0-.5.5v16a.5.5 0 0 0 .5.5h5c.133 0 .26.053.354.146L11 28.293V25.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 0 .5-.5v-16a.5.5 0 0 0-.5-.5h-18zM28.5 23a.5.5 0 0 0-.5.5c0 3.033-2.468 5.5-5.5 5.5h-2.253a2.28 2.28 0 0 1 0 1H22.5c3.584 0 6.5-2.916 6.5-6.5a.5.5 0 0 0-.5-.5z" fill="#263238"/>
              <g fill="#263238">
                <path d="M28 12.5h1v-1C29 5.71 24.29 1 18.5 1h-2c-3.233 0-6.243 1.469-8.258 4.031a.5.5 0 0 0 .787.618C10.853 3.33 13.575 2 16.5 2h2c5.238 0 9.5 4.262 9.5 9.5v1z"/>
                <path d="M28.5 12h-1c-.05 0-.096.012-.145.015a.964.964 0 0 1 .145.485v.5h1c.827 0 1.5.673 1.5 1.5v5c0 .827-.673 1.5-1.5 1.5h-1v.5c0 .18-.061.339-.145.485.049.003.095.015.145.015h1c1.379 0 2.5-1.122 2.5-2.5v-5c0-1.378-1.121-2.5-2.5-2.5z"/>
                <path d="M26.5 23h-1c-.827 0-1.5-.673-1.5-1.5v-9c0-.827.673-1.5 1.5-1.5h1c.827 0 1.5.673 1.5 1.5V14a.5.5 0 0 1-1 0v-1.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 1 0v4c0 .827-.673 1.5-1.5 1.5z"/>
              </g>
              <path d="M19.5 31h-3c-.827 0-1.5-.673-1.5-1.5s.673-1.5 1.5-1.5h3c.827 0 1.5.673 1.5 1.5s-.673 1.5-1.5 1.5zm-3-2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3z" fill="#263238"/>
            </svg>
          </div>
          <div class="sm:min-h-[87px] flex flex-col justify-end">
            <h3 class="font-poppins font-medium text-xl text-center">24/7<br>Support</h3>
            <div class="flex justify-center mt-6">
              <svg width="25" height="5" viewBox="0 0 25 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2.5" fill="#141515"/>
                <circle cx="12.5" cy="2.5" r="2.5" fill="#141515"/>
                <circle cx="22.5" cy="2.5" r="2.5" fill="#141515"/>
              </svg>
            </div>
          </div>
        </div>
      </div>

      <div class="relative group cursor-pointer w-full max-w-[300px] mx-auto">
        <div class="group-hover:-rotate-6 transition-transform w-full h-full rounded-md absolute bg-custom-1 left-0 top-0"></div>
        <div class="relative sm:max-h-[271px] bg-white border border-gray-200 rounded-md p-12 flex flex-col justify-center items-center space-y-8">
          <div>
            <svg class="w-16 h-16" data-name="Layer 1" id="Layer_1" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <style>
                  .cls-1,.cls-2,.cls-3{fill:none;stroke:#353535;stroke-width:2px}.cls-1,.cls-3{stroke-linecap:round}.cls-1,.cls-2{stroke-miterlimit:10}.cls-3{stroke-linejoin:round}
                </style>
              </defs>
              <path class="cls-1" d="M16.743 3.693a13.966 13.966 0 0 0-3.76 18.461s.646 1.002.909 1.344l1.987 2.855c1.646 2.255 2.533 3.632 2.533 6.424h0A3.232 3.232 0 0 0 21.635 36H25M29.116 36a2.495 2.495 0 0 0 2.426-2.542l.044-.68c0-2.793.887-4.17 2.533-6.425l1.983-2.848c.264-.344.917-1.35.917-1.35a13.912 13.912 0 0 0 1.947-8.137A14.005 14.005 0 0 0 19.808 1.994M27.965 36h4.173v2.414A1.586 1.586 0 0 1 30.552 40H19.448a1.586 1.586 0 0 1-1.586-1.586V36H25M25 44h-5.138a2 2 0 0 1-2-2h0a2 2 0 0 1 2-2h7.517"/>
              <path class="cls-2" d="M28.965 40h1.173a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-1.172l-2.38 3h-3.172l-3.173-3.172"/>
              <path class="cls-3" d="M12.272 28a18 18 0 0 1 0-25.456H9M37.728 2.544a18 18 0 0 1 0 25.456H41"/>
              <g>
                <path class="cls-2" transform="rotate(-180 28 18)" d="M25 15h6v6h-6z"/>
                <path class="cls-2" d="M25 15v6h-6v-6M19 15V9h6v6"/>
                <path class="cls-2" transform="rotate(-180 28 12)" d="M25 9h6v6h-6z"/>
              </g>
            </svg>
          </div>
          <div class="sm:min-h-[87px] flex flex-col justify-end">
            <h3 class="font-poppins font-medium text-xl text-center">Consultations</h3>
            <div class="flex justify-center mt-6">
              <svg width="25" height="5" viewBox="0 0 25 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2.5" fill="#141515"/>
                <circle cx="12.5" cy="2.5" r="2.5" fill="#141515"/>
                <circle cx="22.5" cy="2.5" r="2.5" fill="#141515"/>
              </svg>
            </div>
          </div>
        </div>
      </div>

      <div class="relative group cursor-pointer w-full max-w-[300px] mx-auto">
        <div class="group-hover:-rotate-6 transition-transform w-full h-full rounded-md absolute bg-custom-1 left-0 top-0"></div>
        <div class="relative sm:max-h-[271px] bg-white border border-gray-200 rounded-md p-12 flex flex-col justify-center items-center space-y-8">
          <div>
            <svg class="w-16 h-16" viewBox="0 0 68 68" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
              <path d="M59.5 26.1c.6-1.3.9-2.7.9-4.2 0-6.4-5.9-11.1-12.2-9.7C45.2 6 38.8 2 31.8 2c-10 0-18.1 8.1-18.3 18-6.1 2.2-9.4 7.6-9.4 13.3 0 7.7 6.3 14 14 14h.2c.6 3.1 2.2 5.9 4.4 8.1 1.1 1.1 2.6 1.7 4.1 1.7H33v3.2h-2.5c-1.2 0-2.3.8-2.7 1.9H19c-.6 0-1 .5-1 1s.5 1 1 1h8.9c.4 1.1 1.5 1.9 2.7 1.9h7c1.2 0 2.3-.8 2.7-1.9H49c.6 0 1-.5 1-1s-.5-1-1-1h-8.9c-.4-1.1-1.5-1.9-2.7-1.9H35v-3.2h6.2c1.5 0 3-.6 4.1-1.7 2.2-2.2 3.7-5 4.4-8.1H52c6.6 0 11.9-5.3 11.9-11.9 0-3.6-1.6-7-4.4-9.3zM52 45.3h-2c.1-.9.1-1.8 0-2.8-.4-3.9-2.2-7.4-4.9-10v-6.2c0-6.1-4.9-11.1-11.1-11.1-6.1 0-11.1 5-11.1 11.1v6.2c-3 2.9-4.9 7-4.9 11.6 0 .4 0 .8.1 1.2-6.6-.1-11.9-5.4-11.9-12 0-4.8 2.7-9.5 8.5-11.5.1 0 .1 0 .2-.1.5-.1.8-.6.8-1.1v-.4C15.7 11.2 23 4 31.9 4c6.5 0 12.4 3.9 14.9 9.8.2.5.7.7 1.2.6 5.2-1.7 10.4 2.2 10.4 7.5 0 1.4-.4 2.8-1 4-.3.5-.1 1 .3 1.3 2.7 1.8 4.2 4.9 4.2 8.1 0 5.5-4.4 10-9.9 10zM40 29.2c-3.7-1.5-8-1.6-11.9 0v-2.7c0-3.3 2.7-6 6-6s6 2.7 6 6v2.7zm-3.4 18.6c.1.6-.4 1.2-1.1 1.2h-3c-.7 0-1.2-.6-1.1-1.2 0-.1.6-4.1.6-4-1-.6-1.6-1.7-1.6-2.9 0-1.9 1.6-3.5 3.5-3.5s3.5 1.6 3.5 3.5c0 1.2-.6 2.2-1.5 2.8.1.2.6 3.1.7 4.1z"/>
            </svg>
          </div>
          <div class="sm:min-h-[87px] flex flex-col justify-end">
            <h3 class="font-poppins font-medium text-xl text-center">Security<br>audit</h3>
            <div class="flex justify-center mt-6">
              <svg width="25" height="5" viewBox="0 0 25 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2.5" fill="#141515"/>
                <circle cx="12.5" cy="2.5" r="2.5" fill="#141515"/>
                <circle cx="22.5" cy="2.5" r="2.5" fill="#141515"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="cta-1 relative overflow-hidden my-8 lg:my-16 bg-black py-20 sm:py-24 bg-cover rounded-xl" style="background-image:url(@asset('images/carbon-1.png'))">
    <div class="absolute left-0 top-0 w-full h-full bg-black bg-opacity-80"></div>
    <div class="relative flex flex-col space-y-12 items-center justify-center text-white">
      <h2 class="text-2xl sm:text-5xl xl:text-5xl leading-tight xl:leading-[4rem] font-poppins highlight text-center">
        Enough Talk, Let's Build Something<br>
        Fast & Secure
      </h2>
      <a href="/#contacts" class="hover:bg-white hover:text-black transition-colors text-xs sm:text-sm font-bold text-white px-16 py-2 border border-white rounded-full uppercase">
        {{ __('Contact us', 'code') }}
      </a>
    </div>
  </div>

  <section id="clients" class="section section-clients my-8 lg:my-16">
    <div class="bg-white">
      <div class="py-12 xl:px-24">
        <div class="grid grid-cols-4 gap-4 sm:gap-8 md:grid-cols-6">
          <div class="col-span-2 flex justify-center sm:col-span-2 lg:col-span-1">
            <img class="h-12" src="@asset('images/logos/Red_Hat_logo.svg')" alt="">
          </div>
          <div class="col-span-2 flex justify-center lg:col-span-1">
            <img class="h-12" src="@asset('images/logos/ms.png')" alt="">
          </div>
          <div class="col-span-2 flex justify-center lg:col-span-1">
            <img class="h-12" src="@asset('images/logos/mikrotik.png')" alt="">
          </div>
          <div class="col-span-2 flex justify-center lg:col-span-1">
            <img class="h-12" src="@asset('images/logos/gentoo.png')" alt="">
          </div>
          <div class="col-span-2 flex justify-center lg:col-span-1">
            <img class="h-12" src="@asset('images/logos/debian.png')" alt="">
          </div>
          <div class="col-span-2 flex justify-center lg:col-span-1">
            <img class="h-12" src="@asset('images/logos/centos.png')" alt="">
          </div>
        </div>
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
          <?php echo do_shortcode("[wpforms id=" . CONTACT_FORM_ID . " title='false']") ?>
        </div>
      </div>
    </div>
  </section>
@endsection
