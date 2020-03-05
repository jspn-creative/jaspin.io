{{--
  Template Name: Front
--}}

{{--
  jQuery in /routes/home.js
--}}
@extends('layouts.app')

@section('content')
	<!-- main content -->
<main class="text-white mt-0 py-0 ip-main">
    @include('partials.home.hero')
    @include('partials.home.grid')
    @include('partials.home.portfolio')
    @include('partials.home.checks')
    @include('partials.home.integrations')
    @include('partials.home.cta')
    @include('partials.home.footer')
    @include('partials.home.stripe')
</main>

<style>
.stripe-sprite {
  position: absolute;
  width: 130px;
  height: 45px;
  background: url("@asset('images/logo-sprite.png')") 0 0px;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.acam-sprite {
  position: absolute;
  width: 130px;
  height: 45px;
  background: url("@asset('images/logo-sprite.png')") 0 -45px;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.cammo-sprite {
  position: absolute;
  width: 130px;
  height: 45px;
  background: url("@asset('images/logo-sprite.png')") 0 -90px;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.google-sprite {
  position: absolute;
  width: 130px;
  height: 45px;
  background: url("@asset('images/logo-sprite.png')") 0 -135px;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.hotjar-sprite {
  position: absolute;
  width: 130px;
  height: 45px;
  background: url("@asset('images/logo-sprite.png')") 0 -180px;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.maichi-sprite {
  position: absolute;
  width: 130px;
  height: 45px;
  background: url("@asset('images/logo-sprite.png')") 0 -225px;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}
</style>
@endsection
