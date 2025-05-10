
<div class="container-fluid mt-3">
    <div class="top-banner text-center text-white rounded-1">
        <p class="py-2">Free Courses 🌟 Sale Ends Soon, Get It Now</p>
    </div>

    <nav class="navbar navbar-expand">
        <div class="container-fluid mx-4">
            <a href="" class="navbar-brand">
                <img src="{{asset('assets/img/logo.svg')}}" alt="">
            </a>

            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a href="" class="nav-link active" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <div class="btn-container d-grid gap-2 d-md-block ms-auto">
                <a class="btn btn-warning btn-sm rounded-pill px-4 py-2" href="{{ route('cart.show') }}">Cart 🛒</a>
            </div>
            @if (Auth::check())
                @php
                    $user = DB::table('users')->where('id', Auth::user()->id)->first();
                    echo $user->name;
                @endphp
                <div class="btn-container d-grid gap-2 d-md-block">
                    <a class="sign-up-btn" href="{{ route('auth.signup.show') }}">Sign Up</a>
                     <a class="btn-custom" type="button" href="{{ route('auth.signin.show') }}">Login</a>
              </div>
            @else
                <div class="btn-container d-grid gap-2 d-md-block">
                      <a class="sign-up-btn" href="{{ route('auth.signup.show') }}">Sign Up</a>
                       <a class="btn-custom" type="button" href="{{ route('auth.signin.show') }}">Login</a>
                </div>
            @endif

       
        </div>
    </nav>
</div>