
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.header')

    <div class="container mt-5">
        <h1 class="text-center">Your Cart</h1>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Course name</th>
                    <th class="text-center">Lecturer</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- Vòng lặp hiển thị các khóa học trong giỏ hàng --}}
                @foreach($cartItems as $index => $item)
            <tr>
                <td class="text-center">{{ $index + 1 }}</td>
                <td class="text-center">{{ $item->course_name }}</td>
                <td class="text-center">{{ $item->instructor }}</td>
                <td class="text-center">{{ number_format($item->price, 0, ',', '.') }} VND</td>
                <td class="text-center">
                    <button class="btn btn-secondary btn-sm">Delete</button>
                </td>
            </tr>
    @endforeach
            </tbody>
        </table>
    </div>
    
    @include('layouts.footer')
</body>
</html>