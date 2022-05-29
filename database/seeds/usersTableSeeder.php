<?php

use Illuminate\Database\Seeder;
use \App\User;
class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user=\App\User::create([

'first_name'=>'super',
'last_name'=>'admin',
'email'=>'superadmin@yahoo.com',
'password'=>bcrypt('12345'),

        ]);

       // $user->attachRole('superadmin');
      
    }
}
