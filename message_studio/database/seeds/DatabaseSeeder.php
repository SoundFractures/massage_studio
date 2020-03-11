<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Bolečine',
        ]);
        DB::table('categories')->insert([
            'name' => 'Sproščanje',
        ]);
        DB::table('categories')->insert([
            'name' => 'Energija',
        ]);
        DB::table('categories')->insert([
            'name' => 'Postava',
        ]);

        factory(App\Blog::class,10)->create();
        factory(App\Question::class,10)->create();
        factory(App\Subscription::class,10)->create();


    }
}
