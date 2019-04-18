<?php

use App\User;
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
        
        User::create([
            'CNP'=>'1910527384590',
            'first_name'=>'Alexandru', 
            'last-name'=>'Crisan', 
            'username'=>'crtyalex12',
            'email'=>'uiiuiuhuhui@yahoo.com', 
            'password'=>'crisal123',
            'telephone'=> '0755544312',
            'submit_check'=>'1'
        ]);

        User::create([
            'CNP'=>'1951214519263', 
            'first_name'=>'Ion',
            'last-name'=>'Petrescu', 
            'username'=>'ion123',
            'email'=>'Ion.Petrescu@yahoo.com', 
            'password'=>'ion123',
            'telephone'=>'0711223344',
            'submit_check'=>'1'
        ]);

        User::create([
            'CNP'=>'2940521430997',
            'first_name'=>'Clara', 
            'last-name'=>'Caramitru', 
            'username'=>'clara12',
            'email'=>'Caramitru.Clara@yahoo.com', 
            'password'=>'claral123',
            'telephone'=>'0733367589',
            'submit_check'=>'1'
        ]);

        User::create([
            'CNP'=>'2960227357879',
            'first_name'=>'Cristina', 
            'last-name'=>'Stanescu', 
            'username'=>'crtinas123',
            'email'=>'Stanescu.Cristina@yahoo.com', 
            'password'=>'cristinal123',
            'telephone'=>'0787654321',
            'submit_check'=>'1'
        ]);
    }
}