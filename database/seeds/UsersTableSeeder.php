<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete(); 
        $users = array(
            array(
                'firstname' => "Sasha",
                'lastname' => "Panibratenko",
                'email' => 'a.panibratenko@gmail.com'
            )
            
        );
        DB::table('users')->insert($users); 
    }
}
