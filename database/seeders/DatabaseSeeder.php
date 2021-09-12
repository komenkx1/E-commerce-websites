<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\User::factory()->create([
            'email' => 'user@example.com',
            'province_id'=>null,
            'city_id'=>null,
        ]);

        \App\Models\User::factory(100)->create();

        $this->call([
            RoleSeeder::class,
        ]);
    }
}
