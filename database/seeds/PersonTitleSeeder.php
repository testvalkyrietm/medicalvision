<?php

use Illuminate\Database\Seeder;

class PersonTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PersonTitle::class, 5)->create();
    }
}
