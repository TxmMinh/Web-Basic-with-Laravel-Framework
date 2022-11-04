<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManyVarWithControl extends Controller
{
    public function index()
    {
        $title = "Đây là tiêu đề";
        $description = "Đây là dòng mô tả";
        $copyright = "Học Web Chuẩn";
        return view('manyvarwithcontrol')->with([
            'title' => $title, 'description' => $description,
            'copyright' => $copyright
        ]);
    }
}
