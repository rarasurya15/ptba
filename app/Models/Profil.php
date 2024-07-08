<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profiles';
    protected $fillable = ['user_id','nama', 'tempat_lahir', 'tanggal_lahir', 'agama', 'email', 'asal_instansi', 'jenjang', 'jurusan', 'nim', 'no_hp','foto'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
