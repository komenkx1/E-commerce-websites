<?php

namespace App\Models;

use Bastinald\LaravelAutomaticMigrations\Traits\HasHashes;
use Faker\Generator;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, HasHashes, Notifiable, HasRoles;

    protected $guarded = [];
    protected $hashes = ['password'];
    protected $hidden = ['password', 'remember_token'];
    protected $casts = ['email_verified_at' => 'datetime'];

    public function migration(Blueprint $table)
    {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password');
        $table->rememberToken();
        $table->string('timezone')->nullable();
        $table->timestamp('email_verified_at')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
    }

    public function definition(Generator $faker)
    {
        return [
            'name' => $faker->firstName,
            'email' => $faker->unique()->safeEmail,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'timezone' => $faker->timezone,
            'created_at' => $faker->dateTimeThisMonth,
        ];
    }


     // Tambahkan ini di User Model `App\Models/User`
     public function routeNotificationForMail($notification)
     {
         // Jika di table users ada kolom email untuk notifikasi
         return $this->email;
 
         // Jika di table users ada kolom email dan nama untuk notifikasi
         return [$this->email => $this->name];
     }


     public function store()
     {
         return $this->hasOne(Store::class);
     }

     public function getPhotoProfileAttribute()
     {
         return $this->photo_path ? '/storage/img/'.$this->photo_path : 'https://www.pikpng.com/pngl/m/326-3261783_person-icon-default-user-image-jpg-clipart.png';
     }
}
