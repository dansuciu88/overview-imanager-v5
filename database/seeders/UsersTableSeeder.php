<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //admin
            [
                'name'=>'Admin',
                'username'=>'admin',
                'email'=>'admin@admin.com',
                'password'=>Hash::make('admin'),
                'role'=>'admin',
                'status'=>'active',
            ],
            //agent
            [
                'name'=>'Agent',
                'username'=>'agent',
                'email'=>'agent@agent.com',
                'password'=>Hash::make('agent'),
                'role'=>'agent',
                'status'=>'active',
            ],
            //client
            [
                'name'=>'Client',
                'username'=>'client',
                'email'=>'client@client.com',
                'password'=>Hash::make('client'),
                'role'=>'client',
                'status'=>'active',
            ],
        ]);
    }
}
