<!-- filepath: /Users/bobui/Desktop/online_courses/resources/views/user/courses.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.header')

    <div class="container mt-5">
        <h1>Your Courses</h1>

        @if ($courses && $courses->count() > 0)
            <div class="row g-5">
                <div class="col-md-9">
                    @foreach ($courses as $course)
                        <div class="row mb-4 p-3 border rounded shadow-sm">
                            <!-- Image -->
                            <div class="col-md-3">
                                <img src="https://via.placeholder.com/300x200" class="img-fluid rounded" alt="Course Image">
                            </div>

                            <!-- Course Information -->
                            <div class="col-md-6">
                                <h5 class="fw-bold">
                                    <a href="{{ route('course.show', $course->id) }}" class="text-decoration-none text-dark">
                                        {{ $course->title }}
                                    </a>
                                </h5>
                                <p class="text-muted">By {{ $course->instructor ?? 'Unknown Instructor' }}</p>
                                <p>
                                    <strong>{{ $course->reviews_avg_rating ?? 'N/A' }} Stars</strong>
                                    ({{ $course->reviews_count ?? 0 }} ratings)
                                </p>
                                <p class="text-muted">
                                    {{ $course->duration ?? 'N/A' }} hours • {{ $course->lectures_count ?? 'N/A' }} lectures • {{ $course->level ?? 'N/A' }}
                                </p>
                            </div>

                            <!-- Price -->
                            <div class="col-md-3 text-end">
                                <p class="fw-bold text-danger">{{ $course->price }}₫</p>
                                @if ($course->original_price)
                                    <p class="text-muted text-decoration-line-through">
                                        {{ number_format($course->original_price, 0, ',', '.') }}₫
                                    </p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-3">
                    <p><strong>Total Courses: </strong>{{ $courses->count() }}</p>
                </div>
            </div>
        @else
            <div class="alert alert-info text-center">
                You have not registered for any courses yet. <a href="{{ route('course.index') }}" class="text-decoration-none">Go shopping.</a>
            </div>
        @endif
    </div>

    @include('layouts.footer')
</body>
</html>