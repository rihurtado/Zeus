<?php

use App\Models\User;
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
            'name' => 'Admin', 
            'email' => 'admin@zeus.com', 
            'password' => '123456', 
            'is_admin' => true,
        ]);
        
        User::create([
            'name' => 'Coordinador', 
            'email' => 'coordinador@zeus.com', 
            'password' => '123456',
        ]);
    }
}
