<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <link rel="stylesheet" type="text/css" href="app/themes/jspn-theme/resources/assets/styles/front.css" />
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    <div id="ip-container" class="ip-container">
      @include('partials.header')
      <div class="wrap container" role="document">
        <div class="content">
          <main id="ip-container" class="ip-container main">
            @yield('content')
          </main>
          @if (App\display_sidebar())
            <aside class="sidebar">
              @include('partials.sidebar')
            </aside>
          @endif
        </div>
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
    <script src="app/themes/jspn-theme/resources/assets/scripts/swiper.min.js" async></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">
{{--  <script src="app/themes/jspn-theme/resources/assets/scripts/dynamics.min.js"></script>
  <script src="app/themes/jspn-theme/resources/assets/scripts/portfolio.js"></script>--}}
  </body>
</html>
