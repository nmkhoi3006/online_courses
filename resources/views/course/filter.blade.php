<div class="d-flex justify-content-between align-items-center mb-4 filter-sort-section">
    <!-- Filter Button -->
    <div class="filter-button">
        <button class="btn btn-outline-secondary">Filter</button>
    </div>

    <!-- Search and Sort -->
    <div class="d-flex align-items-center gap-2">
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
            <button type="submit" class="btn btn-outline-secondary">Search</button>
            <a href="{{ route('course.index') }}" class="btn btn-outline-secondary ms-2">Clear</a>
        </form>

        <!-- Sort Dropdown -->
        <div class="sort-dropdown">
            <select class="form-select" style="width: 200px; height: 38px;">
                <option selected>Sort by</option>
                <option value="1">Highest Rated</option>
                <option value="2">Lowest Price</option>
                <option value="3">Newest</option>
            </select>
        </div>
    </div>
</div>