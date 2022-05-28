<?php

use Illuminate\Database\Seeder;
use App\BlogCategory;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        factory('App\User', 5)->create();
    
    }
}
