<?php

use Illuminate\Database\Seeder;

class blogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\blogs::class, 30)->create();
    }
}
