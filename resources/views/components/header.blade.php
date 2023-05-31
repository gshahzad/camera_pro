<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#"
          ><img id="logo" src="{{asset('img/watcher-logo.svg')}}" alt="logo"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a  class="nav-link {{ Request::segment(1) === '' ? 'active' : null }}" aria-current="page" href="{{url('/')}}">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::segment(1) === 'aboutus' ? 'active' : null }}" href="{{url('aboutus')}}">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::segment(1) === 'view_cameras' ? 'active' : null }}" href="{{url('view_cameras')}}">View cameras</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::segment(1) === 'enroll_camera' ? 'active' : null }}" href="{{url('enroll_camera')}}">Enroll & CREATE REVENUE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::segment(1) === 'contact_us' ? 'active' : null }}" href="{{url('contact_us')}}">CONTACT</a>
            </li>
            
             
            
            <li class="nav-item">
              <button> <a href="{{url('enroll_camera')}}"> Enroll Now</a></button>
            </li>
            
            
            
          </ul>
        </div>
      </div>
    </nav>
</header>