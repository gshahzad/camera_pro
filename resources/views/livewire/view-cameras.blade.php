@extends('layouts.app')
@section('content')
    <section class="WorkExamples my-5">
      <div class="container">
        <h1>Live Cameras</h1>
        <p class="descPara" style="display:none;">Feeds Coming Soon!</p>

        <div class="row">
         @if(count($this->camera)>0)
         	@foreach($this->camera as $item)
    	      <div class="col-sm-4 mb-4 mt-3 mb-sm-0">
            <div class="card">
             
              <div class="card-body" style="background-image:url({{asset('img/camera.png')}})">
                <a href="#" style="color:rgba(0,0,0,1); "> {{$item->name}}</a>
              </div>
            </div>
          </div>
          	@endforeach
         @endif  
           
        </div>
      </div>
    </section>
    <!-- -----cards section------ -->
    <section class="container viewCameras__card">
      <div class="row featurette mt-5">
        <div class="col-md-6 d-none d-lg-block">
          <img
            class="d-flex mx- card-img"
            src="{{ asset('img/map-img.png')}}"
            alt="watcher"
          />
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
          <h2 class="featurette-heading  ">
            01.<br />Search Camera Map
          </h2>
        </div>
        <div class="col-md-6 d-block d-lg-none">
          <img
            class="d-flex mx- card-img"
            src="{{ asset('img/map-img.png')}}"
            alt="watcher"
          />
        </div>
      </div>
      <div class="row featurette mt-5">
        <div class="col-md-6 d-flex flex-column justify-content-center">
          <h2 class="featurette-heading  ">02.<br />Select Duration</h2>
        </div>
        <div class="col-md-6 ">
          <img
            class="d-flex mx--md-auto card-img"
            src="{{ asset('img/street-img1.png')}}"
            alt="watcher"
          />
        </div>
      </div>
      <div class="row featurette mt-5">
        <div class="col-md-6 d-none d-lg-block">
          <img
            class="d-flex mx-a card-img"
            src="{{ asset('img/street-img1.png')}}"
            alt="watcher"
          />
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
          <h2 class="featurette-heading  ">
            03.<br />Select Resolution
          </h2>
        </div>
        <div class="col-md-6 d-block d-lg-none">
          <img
            class="d-flex mx-a card-img"
            src="{{ asset('img/street-img1.png')}}"
            alt="watcher"
          />
        </div>
      </div>
      <div class="row featurette mt-5">
        <div class="col-md-6 d-flex flex-column justify-content-center">
          <h2 class="featurette-heading   ">04.<br />Pay & View</h2>
        </div>
        <div class="col-md-6">
          <img
            class="d-flex mx-md-auto card-img"
            src="{{ asset('img/street-img2.png')}}"
            alt="watcher"
          />
        </div>
      </div>
    </section>
    <section class="primary_bg p-5">
      <div class="container">
        <div class="text-center w-100">
          <h1>Join us and start earning!</h1>
          <button class="primary_btn mx-auto mt-5">Find Out More</button>
        </div>
      </div>
    </section>

@endsection