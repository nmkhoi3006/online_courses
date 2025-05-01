<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.header')

    <section class="bg-light py-5">
        <div class="container">
            <div class="d-flex justify-content-between container main-container">
                <!-- Cột bên trái -->
                <div class="left-column">
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
    
                <!-- Cột bên phải: Login -->
                <div class="right-column bg-light rounded">
                    <div class="card p-4">
                        <h3 class="fw-bold text-center">Login</h3>
                        <p class="text-muted text-center">Welcome back! Please log in to access your account.</p>
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your Email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" placeholder="Enter your Password">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
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
                                Don’t have an account? <a href="./signup.html" class="text-decoration-none">Sign Up</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @include('layouts.footer')
</body>
</html>