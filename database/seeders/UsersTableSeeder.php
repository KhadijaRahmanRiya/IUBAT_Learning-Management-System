<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::Create([
            'name'=>'Riya',
            'email'=>'riya@gmail.com',
            'password'=>bcrypt('12345'),
            'phone'=>'0123456789',
            'Institution'=>'IUBAT',
            'role_id'=>1,
            'address'=> 'Uttara',
            'status'=>1,

        ]);
        Role::Create([
            'name'=>'Admin',
            'description'=>"Admin has all the permission",
            'status'=>1

        ]);
        Role::Create([
            'name'=>'Teacher',
            'description'=>"Admin has limited permission",
            'status'=>1

        ]);
        Role::Create([
            'name'=>'Student',
            'description'=>"Admin has limited permission",
            'status'=>1

        ]);

    }
}
