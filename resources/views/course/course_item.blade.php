<a href="{{ route('course.show', $course) }}" class="row mb-4 course-item">
    <div class="col-md-4 course-image">
        <img
            src="https://via.placeholder.com/300x200"
            class="img-fluid"
            alt="Course Image"
        />
    </div>
    <div class="col-md-8 course-details">
        <h5 class="course-title">
            {{ $course->title }}
        </h5>
        <p class="course-description">
            {{ $course->description }}
        </p>
        <p class="course-rating">
            <strong>
                {{ $course->reviews_avg_rating }} Stars
            </strong>
            <p>
                {{ $course->reviews_count }} Reviews
            </p>
        </p>
        <p class="course-meta">
            {{ $course->duration }} hours | {{ $course->level }}
        </p>
        <p class="course-price">
            <strong>{{ $course->price }}</strong> 
        </p>
    </div>
</a>