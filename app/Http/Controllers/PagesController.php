<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about() {
        // $data = array('first_name'=>'Shinya','last_name'=>'Hirai');
        $first_name = 'Shinya';
        $last_name = 'Hirai';

        // view('フォルダ名.ファイル名', 配列)
        // 第二引数に指定した配列はviewファイルで使用可能
        // compact関数を使用すると、変数を文字で渡すだけで配列化してviewファイルへ送ってくれる
        return view('pages.about', compact('first_name', 'last_name'));
        // compact($first_name, '$last_name') ← ダメなパターン
    }

    public function contact() {
        return view('pages.contact');
    }
}







