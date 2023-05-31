<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-">
      <div class="container">
        <a class="navbar-brand fw-bold" href="{{url('/')}}"
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
              <a class="nav-link {{ Request::segment(1) === 'about' ? 'active' : null }}" href="{{url('about')}}">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::segment(1) === 'view-cameras' ? 'active' : null }}" href="{{url('view-cameras')}}">View cameras</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::segment(1) === 'enroll-create-revenue' ? 'active' : null }}" href="{{url('enroll-create-revenue')}}">Enroll & CREATE REVENUE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::segment(1) === 'contact' ? 'active' : null }}" href="{{url('contact')}}">CONTACT</a>
            </li>
            
             
            
            <li class="nav-item">
              <button> <a href="{{url('enroll-camera')}}"> Enroll Now</a></button>
            </li>
            
            
            
          </ul>
        </div>
      </div>
    </nav>
</header>