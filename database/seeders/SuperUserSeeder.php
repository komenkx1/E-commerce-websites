<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class SuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'mangwahyu',
            'email' => 'komangpermana7@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('komang@2001'),
            'sex' => 'male',
            'timezone' => 'Asia/Makassar',
        ]);
        $user->assignRole('super');
    }
}
