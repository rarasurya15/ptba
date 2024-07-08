<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    protected $table = 'daftars';
    protected $fillable = [
        'user_id',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'email',
        'asal_instansi',
        'jenjang',
        'jurusan',
        'nim',
        'no_hp',
        'surat_pengantar',
        'proposal',
        'curriculum_vitae',
        'status',
        'nomor_registrasi',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
