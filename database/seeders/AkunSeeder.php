<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('admin123'),
                'level' => 'admin'
            ],
            [
                'name' => 'guru',
                'email' => 'guru@example.com',
                'password' => bcrypt('guru123456'),
                'level' => 'guru'
            ]
            ];
            foreach ($user as $key => $value){
                User::create($value);
            }
    }
}
