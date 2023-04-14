<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
   
    public function run(): void
    {
        $admin = User::create([
            'first_name'=>"Admin",
            'last_name'=>"last_name",
            'email'=>'admin@gmail.com',
            'phone'=>'+998991234567',
            'password'=>Hash::make("Admin123"),
        ]);

        $admin->roles()->attach(1);

        User::factory()->count(10)->hasAttached(Role::find(2))->create();
    }
}
