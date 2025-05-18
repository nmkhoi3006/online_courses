<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.head')
</head>
<body>

  @include('layouts.header')

  <!-- Main Content -->
  <section class="bg-light py-5">
    <div class="container">
        <div class="d-flex justify-content-between container main-container">
            <!-- Cột bên trái -->
            <div class="left-column me-3">
                <div class="sub_container py-4">
                    <h3 class="fw-bold">Students Testimonials</h3>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur. Tempus tincidunt etiam eget elit id imperdiet et. 
                        Cras eu sit dignissim lorem nibh et. Ac cum eget habitasse in velit fringilla feugiat senectus in.
                    </p>
                    <div class="card rounded p-4  ">
                        <p class="mt-5">The web design course provided a solid foundation for me. The instructors were knowledgeable 
                            and supportive, and the interactive learning environment was engaging. I highly recommend it!
                        </p>
                        <!-- <hr class="my-3"> -->
                        <div class="card-footer " style="background-color: #FCFCFD;"> 
                            <div class="d-flex">
                                <div class="d-flex align-items-center">
                                    <img src="fc27e5b342678e8904c0f9f3ffdb8566.jpeg" alt="Sarah L" class=" me-3" width="50">
                                    <p class="mb-0 fw-semibold">Sarah L</p>
                                </div>
                                <a href="#" class="btn btn-outline-primary btn-sm ms-auto">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <button class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left"><-</i>
                        </button>
                        <button class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-right">-></i>
                        </button>
                    </div>
                </div>
            </div>

      <!-- Sign Up Form -->
      <div class="right-column bg-light rounded" style="max-width: 500px; margin: 0 auto;padding : 10px;">
        <div class="card p-4">
          <h3 class="fw-bold text-center">Sign Up</h3>
          <p class="text-muted text-center">Create an account to unlock exclusive features.</p>
          <form action="{{ route('auth.signup') }}" method="post/get">
            @csrf
              <div class="mb-3">
                <label>Full Name</label>
                <input 
                type="text" 
                class="form-control" 
                placeholder="Enter your name"
                name="name"
                value="{{ old('name') }}">
              </div>
              @if ($errors->has('name'))
                  <span class="text-danger">{{ $errors->first('name') }}</span>
              @endif
              <div class="mb-3">
                <label>Email</label>
                <input type="text" 
                class="form-control"
                placeholder="Enter your email" 
                name="email" 
                value="{{ old('email') }}">
              </div>
              @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
              <div class="mb-3">
                <label>Password</label>
                <input 
                type="password" 
                class="form-control" 
                placeholder="Enter your password"
                name="password"
                value="{{ old('password') }}">
              </div>
              @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
              @endif
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="terms">
                <label class="form-check-label" for="terms">
                  I agree with <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                </label>
              </div>
              <button type="submit" class="btn btn-warning w-100">Sign Up</button>
              <div class="text-center my-3">OR</div>
              <button type="button" class="btn btn-light w-100 border">Sign Up with Google</button>
              <p class="mt-3 text-center">Already have an account? <a href="#">Login</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
  </section>

  <!-- Footer -->
  @include('layouts.footer')
</body>
</html>
