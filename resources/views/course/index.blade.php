
@include('layouts.head')
<body>
    @include('layouts.header')


    <div class="container my-5">
        <!-- Filter and Sort Section -->
        @include('course.filter')

        <!-- Sidebar and Course List -->
        <div class="row">
            <!-- Sidebar -->
            @include('layouts.sidebar')

            <!-- Course List -->
            <div class="col-md-9 course-list">
                @foreach ($courses as $course)
                    @include('course.course_item', ['course' => $course])
                @endforeach
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>
