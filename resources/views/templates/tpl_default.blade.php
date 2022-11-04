<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web use template</title>

    <link rel="stylesheet" href="đường_dẫn_tới_file_css" media="all">
    @yield('css')
    {{-- @yield('css') dùng để chứa các liên kết css --}}
</head>
<body id={{$pageId}}>
    @include('includes.header')

    <h2>Tiêu đề từ template</h2>
    @yield('content')
    {{-- @yield có thể coi như lệnh đặt chỗ trước, sẽ lấy những phần ở nơi khác gắn vào đây. --}}

    @include('includes.footer')
    
    <script src="đường_dẫn_tới_file_js"></script>
    @yield('js')
    {{-- @yield('js') dùng để chứa các liên kết js --}}
</body>
</html>