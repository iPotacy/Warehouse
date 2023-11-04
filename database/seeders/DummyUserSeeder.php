<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = 
        [
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'role' => 'user',
                'password' => bcrypt('user123')
            ],
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'role' => 'admin',
                'password' => bcrypt('admin123'),
            ]
        ];

        foreach($user as $key => $value)
        {
            User::create($value);
        }
    }
}
