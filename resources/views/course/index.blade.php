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

            @if ($courses->count())
            <div class="col-md-12 text-center mt-4">
                <nav>
                    <ul class="pagination justify-content-center">
                        {{-- Previous Page Link --}}
                        @if ($courses->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link">&lt;</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $courses->previousPageUrl() }}" rel="prev">&lt;</a>
                            </li>
                        @endif

                        {{-- Pagination Elements --}}
                        @php
                            $currentPage = $courses->currentPage();
                            $lastPage = $courses->lastPage();
                            $start = max(1, $currentPage - 2); // Hiển thị 2 trang trước
                            $end = min($lastPage, $currentPage + 2); // Hiển thị 2 trang sau
                        @endphp

                        {{-- Hiển thị trang đầu tiên nếu cần --}}
                        @if ($start > 1)
                            <li class="page-item">
                                <a class="page-link" href="{{ $courses->url(1) }}">1</a>
                            </li>
                            @if ($start > 2)
                                <li class="page-item disabled">
                                    <span class="page-link">...</span>
                                </li>
                            @endif
                        @endif

                        {{-- Hiển thị các trang trong khoảng --}}
                        @for ($page = $start; $page <= $end; $page++)
                            @if ($page == $currentPage)
                                <li class="page-item active">
                                    <span class="page-link">{{ $page }}</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $courses->url($page) }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endfor

                        {{-- Hiển thị trang cuối cùng nếu cần --}}
                        @if ($end < $lastPage)
                            @if ($end < $lastPage - 1)
                                <li class="page-item disabled">
                                    <span class="page-link">...</span>
                                </li>
                            @endif
                            <li class="page-item">
                                <a class="page-link" href="{{ $courses->url($lastPage) }}">{{ $lastPage }}</a>
                            </li>
                        @endif

                        {{-- Next Page Link --}}
                        @if ($courses->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $courses->nextPageUrl() }}" rel="next">&gt;</a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link">&gt;</span>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
            @endif
        </div>
    </div>

    @include('layouts.footer')
</body>
