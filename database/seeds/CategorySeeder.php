<?php

use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        $categories = [
            ['name'=>'Gold', 'point'=>'1000'],
            ['name'=>'Platinum', 'point'=>'2000'],
            ['name'=>'Black', 'point'=>'4000'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
