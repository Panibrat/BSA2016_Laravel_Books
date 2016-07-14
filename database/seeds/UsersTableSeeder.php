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
            ),
            array(
                'firstname' => "Gena",
                'lastname' => "Kruglenko",
                'email' => 'kruglyi@gmail.com'
            ),
            array(
                'firstname' => "Petr",
                'lastname' => "Popov",
                'email' => 'popov@mail.ru'
            ),
            array(
                'firstname' => "Marina",
                'lastname' => "Ivanova",
                'email' => 'mivan@ukr.net'
            ),
            array(
                'firstname' => "Sasha",
                'lastname' => "Antonov",
                'email' => 'a.antonov@gmail.com'
            ),
            array(
                'firstname' => "Sergey",
                'lastname' => "Drozdov",
                'email' => 'drozd@mail.com'
            ),
            array(
                'firstname' => "Igor",
                'lastname' => "Sidorov",
                'email' => 'sidorka@ukr.net'
            ),
            array(
                'firstname' => "Sergey ",
                'lastname' => "Birukov",
                'email' => 'awolf@meta.ua'
            ),
            array(
                'firstname' => "Misha",
                'lastname' => "Morozov",
                'email' => 'morozko@real.com'
            ),
            array(
                'firstname' => "Artur",
                'lastname' => "Pirozhkov",
                'email' => 'academy@test.com'
            ),
            array(
                'firstname' => "Viktor",
                'lastname' => "Shkroba",
                'email' => 'v.shkr@jci.com'
            ),
            array(
                'firstname' => "Sergey",
                'lastname' => "Beznogov",
                'email' => 'dveruki@hotmail.com'
            ),
            array(
                'firstname' => "Ruslan",
                'lastname' => "Sayko",
                'email' => 'r.sayko@jci.com'
            ),
            array(
                'firstname' => "Pavel",
                'lastname' => "Kazlovsky",
                'email' => 'kpa@yandex.ru'
            ),
            array(
                'firstname' => "Andrey",
                'lastname' => "Shmondenko",
                'email' => 'smon@hotmail.com'
            ),
            
            
        );
        DB::table('users')->insert($users); 
    }
}
