
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.header')

    @if ($cart && $cart->items->count() > 0)
        @foreach ($cart->items as $item)
            <a href="{{ route('course.show', $item->course->id) }}" class="row mb-4 course-item">
                <div class="col-md-4 course-image">
                    <img
                        src="https://via.placeholder.com/300x200"
                        class="img-fluid"
                        alt="Course Image"
                    />
                </div>
                <div class="col-md-8 course-details">
                    <h5 class="course-title">
                        {{ $item->course->title }}
                    </h5>
                    <p class="course-description">
                        {{ $item->course->description }}
                    </p>
                    <p class="course-rating">
                        <strong>
                            {{ $item->course->reviews_avg_rating }} Stars
                        </strong>
                        <p>
                            {{ $item->course->reviews_count }} Reviews
                        </p>
                    </p>
                    <p class="course-meta">
                        {{ $item->course->duration }} hours | {{ $item->course->level }}
                    </p>
                    <p class="course-price">
                        <strong>{{ $item->course->price }}</strong> 
                    </p>
                </div>
            </a>
        @endforeach
    @else
        <p>Your cart is empty.</p>
    @endif
    
    @include('layouts.footer')
</body>
</html>