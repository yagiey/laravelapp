<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;

class HelloController extends Controller
{
    public function index() {
        return view('hello.index', ['msg' => 'メッセージを入力：']);
    }

    public function post(HelloRequest $request) {
        return view('hello.index', ['msg' => '正しく入力されました！']);
    }
}
