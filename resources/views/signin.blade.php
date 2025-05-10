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
    
                <!-- Cột bên phải: Login -->

                
                    @include('layouts.sign_in')
                
            </div>
        </div>
    </section>
    
    @include('layouts.footer')
</body>
</html>