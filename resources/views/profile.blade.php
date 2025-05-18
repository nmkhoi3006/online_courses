<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.header')
    <div class="container mt-5">
        <h1 class="text-center">Your Profile</h1>
        <table class="table table-bordered mt-4" style="width: 50%; margin: 0 auto; text-align: left;">
            <tr>
                <th style="width: 30%; padding: 8px;">Name</th>
                <td style="width: 70%; padding: 8px;">{{ $user->name }}</td>
            </tr>No	Course name	Lecturer	Price	Action
            1	Khóa học Laravel	Nguyễn Văn A	500.000 VND	
            2	Khóa học ReactJS	Trần Thị B	700.000 VND
            <tr>
                <th style="width: 30%; padding: 8px;">Email</th>
                <td style="width: 70%; padding: 8px;">{{ $user->email }}</td>
            </tr>
        </table>
    </div>
    @include('layouts.footer')
</body>
</html>
