<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.head')
</head>
<body>

  @include('layouts.header')

  <!-- Main Content -->
  <div class="container my-5">
    <div class="row g-4">
      <!-- Testimonials -->
      <div class="col-md-6">
        <h3>Students Testimonials</h3>
        <p>Lorem ipsum dolor sit amet consectetur. Tempus tincidunt etiam eget elit id imperdiet.</p>
        <div class="bg-light p-3 rounded">
          <p>The web design course provided a solid foundation for me. The instructors were knowledgeable and supportive...</p>
          <div class="d-flex align-items-center">
            <img src="https://via.placeholder.com/40" class="rounded-circle me-2" alt="avatar" />
            <strong>Sarah L</strong>
          </div>
          <div class="mt-2 text-end">
            <button class="btn btn-outline-secondary btn-sm">Read Full Story</button>
          </div>
        </div>
      </div>

      <!-- Sign Up Form -->
      <div class="col-md-6">
        <div class="form-section">
          <h3>Sign Up</h3>
          <p>Create an account to unlock exclusive features.</p>
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

  <!-- Footer -->
  @include('layouts.footer')
</body>
</html>
