<style>
    .dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0; /* Đảm bảo dropdown không bị lệch */
}
.btn-circle {
    width: 40px; /* Chiều rộng của nút */
    height: 40px; /* Chiều cao của nút */
    border-radius: 50%; /* Làm cho nút thành hình tròn */
    padding: 0; /* Loại bỏ padding mặc định */
    border: none; /* Loại bỏ viền nút */
    background: none; /* Loại bỏ nền nút */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden; /* Đảm bảo hình ảnh không bị tràn */
    cursor: pointer; /* Thêm con trỏ chuột khi hover */
}

.btn-circle img {
    width: 100%; /* Hình ảnh chiếm toàn bộ nút */
    height: 100%; /* Hình ảnh chiếm toàn bộ nút */
    object-fit: cover; /* Đảm bảo hình ảnh không bị méo */
    border-radius: 50%; /* Làm cho hình ảnh tròn */
}
.cart-dropdown-container {
    margin-left: 20px; /* Điều chỉnh khoảng cách sang trái */
}

.cart-dropdown-container .dropdown {
    margin-left: 10px; /* Khoảng cách giữa nút "Cart" và dropdown */
}
</style>

{{-- Header --}}
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
            @if (Auth::check())
                @php
                    $user = DB::table('users')->where('id', Auth::user()->id)->first();
                @endphp
                <div class="d-flex align-items-center ">
                <a class="btn btn-warning btn-sm rounded-pill px-4 py-2 ms-4" style="margin-left: 0;" href="{{ route('cart.show') }}">Cart 🛒</a>

                <div class="dropdown ms-3">
                    <button class="btn btn-circle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('assets/img/user-icon.jpg') }}" alt="User">
                    </button>
                    
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="{{ route('auth.profile.show') }}">Profile</a></li>
                        <li>
                            <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
                            {{-- <form action="{{ route('logout') }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-link">Logout</button>
                            </form> --}}
                        </li>
                    </ul>
                </div>
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