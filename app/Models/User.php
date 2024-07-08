<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id', 'name','password','tempat_lahir', 'tanggal_lahir', 'agama', 'email',
        'asal_instansi', 'jenjang', 'jurusan', 'nim', 'no_hp', 'photo','role',
    ];
    
    public function profiles()
    {
        return $this->hasOne(Profil::class); // Assuming a one-to-one relationship
    }


    public function hasRole($role)
    {
        return $this->roles()->where('name', $role)->exists();
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }


    protected $attributes = [
        'role' => 'user',
    ];
    
    // Set the default role to 'user' when creating a new user
    public static function boot()
    {
        parent::boot();
    
        static::creating(function ($user) {
            $user->role = $user->role ?? 'user';
        });
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
