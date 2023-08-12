<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test User',
            'email' => 'smx1.1011.03@gmail.com',
            'password' => bcrypt('159753'),
        ]);

        User::factory(99) -> create();
    }
}
