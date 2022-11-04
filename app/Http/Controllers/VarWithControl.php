<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VarWithControl extends Controller
{
    public function index()
    {
        $text = 'Đây là tiêu đề';
        return view('VarWithControl')->with('test', $text);
    }
}
