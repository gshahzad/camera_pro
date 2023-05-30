@extends('layouts.app')
@section('content')
<section class="container">
      <div class="row featurette mt-5 mb-5">
        <div class="col-md-5 d-none d-lg-block">
          <img class="d-flex watcher-img card-img" width="600" src="{{asset('img/camera.png')}}" alt="watcher">
        </div>
        <div class="ps-md-5 col-md-7 mt-5 flex-column justify-content-center">
          <h2 class="featurette-heading">{{$camera->name}}</h2>
          <p class="lead">
            {{$camera->description}}
          </p>
          <p> <a style="font-weight: 500;
    font-size: 16px;
    line-height: 27px;
    display: flex;
    align-items: center;
    justify-content: center;
    letter-spacing: 0.8px;
    text-transform: uppercase;
    width: 155px;
    height: 42px;
    background: var(--primary-color);
    border-radius: 5.4px;
    border: none;
    color: #fff;
    text-decoration: none;
    margin-right: 0;" href="{{url('checkout/'.$camera->id.'/'.Str::slug($camera->name).'')}}">Buy Now</a>
          </p>
        </div>
        
      </div>
    </section>
    @endsection
    