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
           'category' => 'Наука'
        ]);

        \App\Category::create([
            'category' => 'Техника'
        ]);

        \App\Category::create([
            'category' => 'Развлечения'
        ]);

        \App\Category::create([
            'category' => 'Здоровье'
        ]);
    }
}
