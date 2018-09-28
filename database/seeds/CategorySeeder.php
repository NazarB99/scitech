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
        \App\Category::create([
           'category' => '3D Design'
        ]);

        \App\Category::create([
            'category' => 'Illustrations'
        ]);

        \App\Category::create([
            'category' => 'UI/UX Design'
        ]);
    }
}
