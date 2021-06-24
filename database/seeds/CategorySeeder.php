<?php

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
        DB::table('categories')->insert([
            'name'=>'smartphone'
        ]);
        DB::table('categories')->insert([
            'name'=>'tablet'
        ]);
        DB::table('categories')->insert([
            'name'=>'laptop'
        ]);
        DB::table('categories')->insert([
            'name'=>'accessories'
        ]);
        DB::table('categories')->insert([
            'name'=>'smart watch'
        ]);
    }
}
