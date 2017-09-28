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

    // 引数$idはroutes.phpのshowリクエストに付けられた{id}
    public function show($id) {
        // モデル使ってarticlesテーブルからidを条件にデータを一件取得
        // SELECT * FROM `articles` WHERE `id`=?
        // ?には$idを代入する

        // モデル操作：Eloquent
        $article = Article::find($id)->toArray();
        // dd($article);


        // $this->eloquent_test();

        return view('articles.show', compact('article'));
    }

    function eloquent_test() {
        // Eloquentのメソッド紹介

        // findOrFailはもしデータが存在しなければエラーを返す
        // $article = Article::findOrFail(20)->toArray();

        // データのカウント
        $count = Article::count();
        // dd($count);

        // id以外での条件指定
        // where('カラム名', '演算子', '値')
        // whereメソッドを使用した場合はすかさずget()メソッドも必要
        $articles = Article::where('id', '>', 5)->get()->toArray();
        // dd($articles);

        // メソッドを連結する（チェインメソッド）
        $count = Article::where('id', '>', 7)->count();
        dd($count);

        // データの作成
          // インスタンス化
          // 値セット
          // save()メソッド
        // データの更新
          // レコード取得find()メソッド
          // 値セット
          // save()メソッド
        // データの削除
          // レコード取得find()メソッド
          // delete()メソッド
    }
}




















