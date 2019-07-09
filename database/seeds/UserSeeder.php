<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' =>'Super Admin',
        	'email' =>'nurazizah17b@gmail.com',
        	'email_verified_at'=> Carbon:: now(),
        	'pasword'=> Hash::make('12345'),

        ]);



    }
}
