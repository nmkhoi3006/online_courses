<div class="d-flex justify-content-between align-items-center mb-4 filter-sort-section">
    <!-- Search and Sort -->
    @php
        $sorts = [
            '' => 'Sort by',
            'popular' => 'Most Popular',
            'highest_rated' => 'Highest Rated',
            'lowest_price' => 'Lowest Price',
            'newest' => 'Newest',
        ]
    @endphp

    <div class="d-flex align-items-center ms-auto gap-2">
        <!-- Search Form -->
        <form method="GET" action="{{ route('course.index') }}" class="d-flex align-items-center me-5">
            <input
                type="text"
                name="title"
                placeholder="Search by title"
                value="{{ request('title') }}"
                class="form-control me-2"
                style="height: 38px;"
            />
            <input type="hidden" name="sort" value="{{ request('sort') }}" />
            <button type="submit" class="btn btn-outline-secondary">Search</button>
            <a href="{{ route('course.index') }}" class="btn btn-outline-secondary ms-2">Clear</a>
        </form>

        <!-- Sort Dropdown -->
        <form method="GET" action="{{ route('course.index') }}" class="d-flex align-items-center">
            <input type="hidden" name="title" value="{{ request('title') }}" />
            <select name="sort" class="form-select me-2" style="width: 200px; height: 38px;">
                @foreach ($sorts as $key => $label)
                    <option value="{{ $key }}" {{ request('sort') == $key ? 'selected' : '' }}>
                        {{ $label }}
                    </option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-outline-secondary">Apply</button>
        </form>
    </div>
</div>