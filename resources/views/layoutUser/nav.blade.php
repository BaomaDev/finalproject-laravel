<nav class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container"><a class="navbar-brand" href="/"><img src="{{asset('/templateUser/assets/img/logo.svg')}}" height="34" alt="logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
      <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
          <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="/">Service</a></li>
          <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="/">Destination</a></li>
          <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="/managebook">Booking</a></li>
          <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="/">Testimonial</a></li>
          @guest
          <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="{{ route('login') }}">Login</a></li>
          {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
          <li class="nav-item px-3 px-xl-4"><a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" href="{{ route('register') }}">{{ __('Register') }}</a></li>
          {{-- <li class="nav-item px-3 px-xl-4"><a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" href="#!">Sign Up</a></li> --}}
          @endguest
          
          @auth
          
          {{-- <a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" href="{{ route('register') }}">{{ __('Register') }}</a></li> --}}
          <li class="nav-item px-3 px-xl-4">
            <a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>