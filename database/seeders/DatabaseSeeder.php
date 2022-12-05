<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Tao 1 admin
        User::factory()->create(
            [
                'name' => 'Admin1',
                'email'=> 'admin1@gmail.com',
                'isAdmin'=> true,
                'level' => 0,
                'phone' => '012345678',
                'password' => Hash::make('admin123')
            ]
        );
        // Tao 1 nguoi dung
        User::factory()->create(
            [
                'name' => 'User1',
                'email'=> 'user1@gmail.com',
                'isAdmin'=> false,
                'level' => 0,
                'phone' => '012345679',
                'password' => Hash::make('user1234')
            ]
        );
    }
}
