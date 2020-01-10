<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Andres';
        $user->last_name = 'Romero Vergara';
        $user->email = 'amclres@gmail.com';
        $user->password = Hash::make('secret234');
        $user->save();
    }
}
