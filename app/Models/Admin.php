<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'daftars'; 
    protected $fillable = ['nama', 'tempat_lahir', 'tanggal_lahir', 'agama', 'email', 'asal_instansi', 'jenjang', 'jurusan', 'nim', 'no_hp', 'surat_pengantar', 'proposal', 'curriculum_vitae','foto','status','nomor_registrasi'];
    protected $primaryKey = 'nim'; 
    public $incrementing = false; 
    protected $keyType = 'string';
}
