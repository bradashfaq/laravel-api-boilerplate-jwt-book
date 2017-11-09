<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'name' => 'tony_admin',
            'email' => 'tony_admin@laravel.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
