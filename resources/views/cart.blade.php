<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.header')

    <div class="container mt-5">
        <h1 class="mb-4">{{ $cart && $cart->items->count() > 0 ? $cart->items->count() . ' Course(s) in Cart' : 'Your Cart is Empty' }}</h1>

        @if ($cart && $cart->items->count() > 0)
        <div class="row g-5">
            <div class="col-md-9">
            @foreach ($cart->items as $item)
                <div class="row mb-4 p-3 border rounded shadow-sm">
                    <!-- image -->
                    <div class="col-md-3">
                        <img src="https://via.placeholder.com/300x200" class="img-fluid rounded" alt="Course Image">
                    </div>

                    <!-- thong tin khoá -->
                    <div class="col-md-6">
                        <h5 class="fw-bold">
                            <a href="{{ route('course.show', $item->course->id) }}" class="text-decoration-none text-dark">
                                {{ $item->course->title }}
                            </a>
                        </h5>
                        <p class="text-muted">By {{ $item->course->instructor ?? 'Unknown Instructor' }}</p>
                        <p>
                            <strong>{{ $item->course->reviews_avg_rating }} Stars</strong>
                            ({{ $item->course->reviews_count }} ratings)
                        </p>
                        <p class="text-muted">
                            {{ $item->course->duration }} hours • {{ $item->course->lectures_count ?? 'N/A' }} lectures • {{ $item->course->level }}
                        </p>
                    </div>
                    {{-- giá và xoá  --}}
                    <div class="col-md-3 text-end">
                        <p class="fw-bold text-danger">{{ $item->course->price }}₫</p>
                        @if ($item->course->original_price)

                            <p class="text-muted text-decoration-line-through">
                                {{ number_format($item->course->original_price, 0, ',', '.') }}₫
                            </p>
                        @endif

                        <form action="{{ route('cart.remove', $item->course->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link text-danger p-0">Remove</button>
                        </form>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="col-md-3">
                <p><strong>Total Courses: </strong>{{ $cart->items->count() }}</p>
                <p>
                    <strong>Total Price:</strong>
                    <span class="text-danger fw-bold">{{ $cart->items->sum('course.price') }}₫</span>
                </p>
                <form action="{{ route('cart.checkout') }}" method="GET">
                    
                    <button type="submit" class="btn btn-warning btn-lg px-5 py-2">
                        Proceed to checkout
                    </button>
                </form>
            </div>
        </div>
        @else

            <div class="alert alert-info text-center">
                Your cart is empty. <a href="{{ route('course.index') }}" class="text-decoration-none">Go shopping.</a>
            </div>
        @endif
    </div>

    @include('layouts.footer')
</body>
</html>