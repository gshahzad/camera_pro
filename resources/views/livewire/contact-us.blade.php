@extends('layouts.app')
@section('content')
<section class="contactUs">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6 mb-3">
          <form action="">
          <h1 class="contactUsHeading">Contact Us</h1>
          <div class="d-flex flex-column">
            <div class="name">
           <img  class="img"   src="{{ asset('img/user.png')}}" alt="">
          <input type="text" name="" id="name" placeholder="Name">
          </div>
          <div class="email">
          <img class="email-img img" src="{{ asset('img//email.png')}}" alt="">
          <input type="text" name="" id="name" placeholder="Name">
        </div>
        <div class="phone">
          <img class="img" src="{{ asset('img/phone.png')}}" alt="">
          <input type="text" name="" id="name" placeholder="Name">
        </div>
          <textarea name="" id=""  ></textarea>
          </div>
          <button><img class="pe-2" src="{{ asset('img/mail.png')}}" alt=""> Send Message</button>
        </form>
        </div>
        <div class="col-12 col-lg-6 contact-Details">
          <div class="mail-section border-bottom">
            <p>Work With Us</p>
            <h2 class="email-heading">hello@watcher.org.uk</h2>
          </div>
          <div class="phone-section border-bottom">
            <p>Central Office</p>
            <h2 class="phone-heading">+44 1257 477060</h2>
          </div>
          <div class="Hr-email-section">
            <p>Join The Team</p>
            <h2 class="email-heading">hr@watcher.org.uk</h2>
          </div>

        </div>
      </div>
      </div>
    </section>
@endsection