<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog; // モデルのネームスペースを正しく指定

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {
        Blog::factory(15)->create(); // モデル名を正しく指定
    }
}
