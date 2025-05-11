
<div class="col-6">
    <div class="card border-0" style="background-color: #FFFFFF; padding: 40px;">
        <img src="./assets/img/courses/web-design.png" class="card-img-top" alt="">
        <div class="container-fluid">
            <div class="row align-items-center" style="padding-top: 24px;">
                <div class="col">
                    <p class="d-inline-block px-3 py-2">{{ $course->duration }} Hours</p>
                    <p class="d-inline-block px-3 py-2">{{ $course->level }}</p>
                </div>
                <div class="col text-end fw-semibold">By {{$course->author}}</div>
            </div>
            <div class="row" style="padding-top: 24px;">
                <div class="fw-semibold" style="font-size: 20px; margin-bottom: 10px;">
                    {{ $course->title }}
                </div>
                @php
                    $sentences = preg_split('/(?<=[.!?])\s+/', $course->description, -1, PREG_SPLIT_NO_EMPTY);
                    $limitedDescription = implode(' ', array_slice($sentences, 0, 3));
                @endphp

                <div class="text-muted">{{ $limitedDescription }}</div>
            </div>
            <a href="./ui-ux.html" class="btn text-bg-light d-block flex-grow-1 me-2" style="margin-top: 24px;">Get it Now</a>
            <a class="btn-add-to-cart" href="#">Add</a>
        </div>
    </div>
</div>