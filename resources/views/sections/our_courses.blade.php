<section class="our-courses" style="margin-top: 100px;">
    <div class="container-fluid" style="margin-bottom: 60px;">
        <div class="row mx-4">
            <div class="text-container col-10">
                <p class="heading mb-0 fw-semibold">Our Courses</p>
                <p class="paragraph mb-0 mt-auto">Lorem ipsum dolor sit amet consectetur. Tempus tincidunt etiam
                    eget elit id imperdiet et.
                    Cras eu sit dignissim lorem nibh et. Ac cum eget habitasse in velit fringilla feugiat senectus
                    in.</p>
            </div>

            <div class="col mt-auto text-end">
                <a href="" class="btn-custom">View All</a>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="margin-top: 50px;">
        @yield('course_list')

        {{-- <div class="row mx-4" style="margin: 10px 0px;">
            @include('course.course_card')

            @include('course.course_card')
        {{-- <div class="row mx-4" style="margin: 10px 0px;">
            @include('course.course_card')

            @include('course.course_card')
        </div>

        <div class="row mx-4" style="margin: 10px 0px;">
            @include('course.course_card')

            @include('course.course_card')
        </div>

        <div class="row mx-4" style="margin: 10px 0px;">
            @include('course.course_card')

            @include('course.course_card')
        </div> --}}
    </div>
</section>