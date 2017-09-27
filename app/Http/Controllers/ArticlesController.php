<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// Controller内にモデルクラスを呼び出す
use App\Article;

class ArticlesController extends Controller
{
    // articlesテーブルデータの一覧表示アクションメソッド
    public function index() {
        // モデルクラスを使用してarticlesテーブルデータ全件取得
        // SELECT * FROM `articles` WHERE 1
        // $articles = Article::all();

        // dump and dieの略
        // dd($articles[0]->title);
        // echo '<pre>';
        // var_dump($articles);
        // echo '</pre>';
        // return $articles;

        // モデルクラスから取得したデータはobject型
        // $変数名->カラム名で値を呼び出す

        // object型→array型に変換
        // toArray()メソッドを使用
        $articles = Article::all()->toArray();
        $hoge = 'ほげ';
        // dd($articles);

        // compact関数がCとVの間に立って値の受け渡しをする
        return view('articles.index', compact('articles', 'hoge'));
    }
}


















