@group('footer')
<section>
  <div class="text-xs sm:text-sm text-center bg-white my-8 lg:my-16 flex justify-center space-x-1">
    <span>© {{ date('Y') }}</span> @sub('text')
  </div>
</section>
@endgroup
