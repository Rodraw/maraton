<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
      */
    public function run()
    {
        User::create([
        		'name' =>'Rodrigo',
        		'email' => 'tuemail@gmail.com',
        		'password' => bcrypt('123456'),
                'admin' => true
        	]);
    }
}
