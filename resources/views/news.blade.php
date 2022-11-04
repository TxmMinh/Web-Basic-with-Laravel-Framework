@extends('templates.tpl_default', ['pageId' => 'news'])
{{-- @extends cho biết sẽ kết nối tới file nào
(ở đây là kết nối tới file tpl_default.blade.php trong thư mục templates) --}}

@section('css')
<link rel="stylesheet" href="đường_dẫn_tới_file_news.css" media="all">
@endsection

@section('content')
<div class="news">
    <h3>Tin trong ngày</h3>
    <p>Nội dung siêu ngắn cho tin tức mới đây!!!</p>
</div>
@endsection

@section('js')
<script src="đường_dẫn_tới_file_news.js"></script>
@endsection

{{-- Nội dung bên trong @section sẽ được gắn vào @yield của template tpl_default.blade.php 
với từ khóa nhận dạng là content --}}c