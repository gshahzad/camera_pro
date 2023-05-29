@extends('layouts.app')
@section('content')

    <section id="heroSection">
      <div class="container">
        <div
          class="heroText d-flex flex-row justify-content-between align-items-center flex-wrap"
        >
          <div>
            <h1 class="mb-0">Generate Revenue</h1>
            <p class="d-inline">from your existing security systems</p>
            <div class="btns d-flex flex-wrap mt-4">
              <button class="btn1 mt-2 mt-sm-0">
                <img src="{{ asset('img/info.png')}}" alt="info" /> Learn More
              </button>
              <button class="btn2 mt-2 mt-sm-0" >
                <img src="{{ asset('img/msgicon.png')}}" alt="info" /> Contact us
              </button>
            </div>
          </div>
          <div class=" d-none d-lg-block">
          <div class="card mx-auto mx-md-0 " style="width: 21rem">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title">PPV Live Stream</h5>
                <a href=""><img src="{{ asset('img/Close-Icon.svg') }}" alt=""></a>
              </div>
             <!-- <img class="card-img" src="{{ asset('img/live-stream-image.jpg')}}" alt="" />-->
              
              <video id="vid" muted="" playsinline="" loop="" autoplay="" width="300" height="200"> <source src="https://watcher.org.uk/wp-content/uploads/2022/10/watcher-clip.mp4" type="video/mp4"> Your browser does not support the video tag. </video>
              
            </div>

          </div>
          <img class="mt-4" src="{{ asset('img/zoom-red-icon.png')}}" alt="">
        </div>
        </div>
      </div>
    </section>

    <!-- -------------------cards section------------- -->
    <section id="cardSection " class="cardSection mt-5 d-flex mx-auto justify-content-evenly">
      <div class="container d-flex  ">
        <div class="cards d-flex justify-content-center flex-wrap">
        <div class="card border-0 mx-auto mx-md-0" >
          <div class="card-body">
            <span class="cardLine d-flex" style="width: 98px;
            height: 3px; background-color: #1A6BA1; margin-bottom: 15px;"></span>
            <h1 class="bold-heading">What Can
                We Offer
                Security</h1>

          </div>
        </div>
        <div class="card rounded-0">
            <div class="card-body">
                <img class="card-img mb-2" onmouseover="Whiteimg(this)" onmouseout="normalImg(this)" src="{{ asset('img/Icons/1-Icon-Blue.svg')}}" alt="" style="width:
                50px;"/>
                <h5 class="card-title mt-4">Access Thousands of Live Streams</h5>
                <p style="visibility:hidden">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis sequi sint nulla eum alias optio at magni dolor exercitationem error.</p>

            </div>
          </div>

        <div class="card rounded-0">
            <div class="card-body">
                <img class="card-img mb-2" src="{{ asset('img/Icons/2-Icon-Blue.svg')}}" alt="" style="width:
                50px;"/>
                <h5 class="card-title mt-4">Check Live Traffic & Parking</h5>
                <p style="visibility:hidden">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis sequi sint nulla eum alias optio at magni dolor exercitationem error.</p>

            </div>
          </div>
        <div class="card rounded-0">
            <div class="card-body">
                <img class="card-img mb-2" src="{{ asset('img/Icons/3-Icon-Blue.svg')}}" alt="" style="width:
                50px;"/>
                <h5 class="card-title mt-4">Check Local Weather</h5>
                <p style="visibility:hidden">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis sequi sint nulla eum alias optio at magni dolor exercitationem error.</p>

            </div>
          </div>
        <div class="card rounded-0">
            <div class="card-body">
                <img class="card-img mb-2" src="{{ asset('img/Icons/4-Icon-Blue.svg')}}" alt="" style="width:
                50px;"/>
                <h5 class="card-title mt-4">Commercial & Public Services</h5>
                <p style="visibility:hidden">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis sequi sint nulla eum alias optio at magni dolor exercitationem error.</p>

            </div>
          </div>
        <div class="card rounded-0">
            <div class="card-body">
                <img class="card-img mb-2" src="{{ asset('img/Icons/5-Icon-Blue.svg')}}" alt="" style="width:
                50px;"/>
                <h5 class="card-title mt-4">Add your Cameras & Earn Revenue</h5>
                <p style="visibility:hidden">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis sequi sint nulla eum alias optio at magni dolor exercitationem error.</p>

            </div>
          </div>
       
    </div>
    </section>

    <!-- ----- how does it work section----- -->
    <section id="workSection" class="mt-5">
        <div class="container">
<h2 class="text-center">How Does It Work?</h2>
<div class="btns d-flex justify-content-center">
    <button class="btn1">
      <img src="{{ asset('img/view.png')}}" alt="info" /> View
    </button>
    <button class="btn2">
      <img src="{{ asset('img/database.png')}}" alt="info" /> join
    </button>
  </div>
  <div class="img d-flex justify-content-center">
    <img  class="card-img" src="{{ asset('img/worksection.png')}}" alt="">
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
    <section class="join-us primary_bg p-5">
      <div class="container">
        <div class="text-center w-100">
          <h1>Join us and start earning!</h1>
          <button class="primary_btn mx-auto">Find Out More</button>
        </div>
        

      </div>
    </section>


@endsection