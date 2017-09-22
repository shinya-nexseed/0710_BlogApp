<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    // メソッド - アクション名と同じ名前のメソッド
    // アクションメソッド
    function index() {
        return view('welcome');
    }

    function contact() {
        return view('contact');
    }
}




















