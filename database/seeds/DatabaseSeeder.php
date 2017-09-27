<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // DBを直接操作するクラス

use Faker\Factory as Faker; // ダミーデータ作成用クラス
use Carbon\Carbon; // 日付データ操作系のクラス
use App\Article; // articlesテーブルに対応したモデルクラス

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('ArticlesTableSeeder');

        Model::reguard();
    }
}

class ArticlesTableSeeder extends Seeder {
    public function run() {
        DB::table('articles')->delete();

        $faker = Faker::create('en_US');

        for ($i=0; $i < 10; $i++) {
            $seed_data = array('title'=>$faker->sentence(),
                               'body'=>$faker->paragraph(),
                               'published_at'=>Carbon::today()
                           );
            Article::create($seed_data);
        }
    }
}





















