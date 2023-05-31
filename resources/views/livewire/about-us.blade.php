@extends('layouts.app')
@section('content')
<section class="container">
<div class="row featurette mt-5 mb-3">
<div class="pe-md-5 col-md-7 d-flex flex-column justify-content-center">
  <h2 class="featurette-heading">About Us</h2>
  <p class="lead">
    Most people have likely used Google Maps* or Microsoft Bing Maps**. 
    Google Maps has ‘Street View’, a captured view of streets and
    locations, limited only by where the driver of their camera vehicles
    has driven.
  </p>
  <p class="lead">
    This is a useful tool for surveys, house purchases, recce’s and
    numerous other reasons, but it has a limitation – it was captured
    maybe months or years earlier.
  </p>
  <p class="lead">
    Google offers an overlay for “Maps”, so thinking laterally what if
    we could create a “Live View”…
  </p>
</div>
<div class="col-md-5">
  <img
    class="d-flex watcher-img card-img"
    src="{{ asset('img/watcher-img.png')}}"
    alt="watcher"
  />
</div>
</div>
<div class="row featurette mt-5 mb-5">
<div class="col-md-5 d-none d-lg-block">
  <img
    class="d-flex watcher-img card-img"
    width="600"
    src="{{ asset('img/map-img.png')}}"
    alt="watcher"
  />
</div>
<div class="ps-md-5 col-md-7 d-flex flex-column justify-content-center">
  <h2 class="featurette-heading">Our Vision</h2>
  <p class="lead">
    Throughout the world CCTV use has grown exponentially.  The UK
    currently has in excess of 5.2 million private and public cameras.
  </p>
  <p class="lead">
    Now, through our innovative technology, the public and businesses
    can add their own camera system, or live stream via mobile app, to
    the Watcher network, and earn revenue from people who pay to view
    their cameras.
  </p>
</div>
<div class="col-md-5 d-block d-lg-none">
  <img
    class="d-flex watcher-img card-img"
    width="600"
    src="{{ asset('img/map-img.png')}}"
    alt="watcher"
  />
</div>
</div>
</section>
<section>
<div class="innovation-bg">
<div class="container">
  <div class="position-relative">
    <div class="inner__innovation py-4">
      <div class="row align-items-center">
        <div class="col-lg-3">
          <div class="text-center">
            <h2>24</h2>
            <span>Server Locations</span>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="text-center">
            <h2>Generate</h2>
            <span>Earnings</span>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="text-center">
            <h2>18k</h2>
            <span>Active Members</span>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="text-center">
            <h2>30 Years</h2>
            <span>Industry Experience</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<section class="primary_bg p-5">
<div class="container">
<div class="text-center w-100">
  <h1>Join us and start earning!</h1>
  <button class="primary_btn mx-auto mt-5"><a href="{{url('contact')}}" style="text-decoration: none; color:#ffffff">Find Out More</a></button>
</div>
</div>
</section>
@endsection