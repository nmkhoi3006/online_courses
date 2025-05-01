<div class="right-column bg-light rounded">
    <form action="{{route('auth.signin')}}" method="post/get">
        @csrf
        <div class="card p-4">
            <h3 class="fw-bold text-center">Login</h3>
            <p class="text-muted text-center">Welcome back! Please log in to access your account.</p>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input 
                    type="text" 
                    class="form-control" 
                    id="email" 
                    placeholder="Enter your Email"
                    name="email">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input 
                        type="password" 
                        class="form-control" 
                        id="password" 
                        placeholder="Enter your Password"
                        name="password">
                    </div>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <input type="checkbox" id="rememberMe">
                        <label for="rememberMe" class="form-check-label">Remember Me</label>
                    </div>
                    <a href="#" class="text-decoration-none">Forgot Password?</a>
                </div>
                <button type="submit" class="btn btn-warning w-100">Login</button>
                <div class="text-center my-3">OR</div>
                <button type="button" class="btn btn-outline-secondary w-100">
                    <i class="bi bi-google"></i> Login with Google
                </button>
                <p class="text-center mt-3">
                    Don’t have an account? <a href="#" class="text-decoration-none">Sign Up</a>
                </p>
            </form>
        </div>
    </form>
</div>