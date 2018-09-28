<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Article::create([
            'title' => '13 tips for making a VR gaming world',
            'category_id' => 1
        ]);

        \App\Article::create([
            'title' => 'How to develop mythical creatures',
            'category_id' => 1
        ]);

        \App\Article::create([
            'title' => 'See Maya 2018’s amazing new 3D tools in action',
            'category_id' => 1
        ]);

        \App\Article::create([
            'title' => 'Experimental VFX videos push limits of 3D animation',
            'category_id' => 1
        ]);

        \App\Article::create([
            'title' => 'How videogame graphics and movie VFX are converging',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => '10 incredible online art schools',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => '13 tips for making a VR gaming world',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => 'Create engaging designs with these UI and UX courses',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => 'The developer tools you need to know right now',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => 'How do you tackle user research and testing?',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => '10 incredible online art schools',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => 'Movie fans will love these illustrated movie maps',
            'category_id' => 1
        ]);

        \App\Article::create([
            'title' => '8 ways to use illustration in your agency projects',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => '20 best iPad art apps for painting and sketching',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => '8 ways to use illustration in your agency projects',
            'category_id' => 3
        ]);

        \App\Article::create([
            'title' => '12 common JavaScript questions answered',
            'category_id' => 3
        ]);

        \App\Article::create([
            'title' => 'How to use Markdown in web development',
            'category_id' => 3
        ]);

        \App\Article::create([
            'title' => 'The ultimate guide to better service design',
            'category_id' => 3
        ]);

        \App\Article::create([
            'title' => '10 essential tools for freelance UX designers',
            'category_id' => 3
        ]);

        \App\Article::create([
            'title' => '10 incredible online art schools',
            'category_id' => 3
        ]);

        \App\Article::create([
            'title' => 'The secrets of custom font development',
            'category_id' => 3
        ]);

        \App\Article::create([
            'title' => '8 great business cards for UX designers',
            'category_id' => 3
        ]);
    }
}
