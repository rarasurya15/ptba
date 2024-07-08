<?php
// app/Http/Controllers/DaftarController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Profil; 
use App\Models\Daftar;
use App\Models\User;

class DaftarController extends Controller
{
    public function index() {
        $user = auth()->user();
        if ($user) {
            $userWithProfile = User::with('profiles')->find($user->id);
            $profile = $userWithProfile->profiles; // Accessing the user's profile
            return view('Daftar', compact('profile'));
        } else {
            return view('Daftar');
        }
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'max:50',
            'tempat_lahir' => 'max:50',
            'tanggal_lahir' => 'max:50',
            'agama' => 'max:50',
            'email' => 'max:50',
            'asal_instansi' => 'max:50',
            'jenjang' => 'max:50',
            'jurusan' => 'max:50',
            'nim' => 'max:50',
            'no_hp' => 'max:50',
            'surat_pengantar' => 'file|mimes:pdf|required|max:2048',
            'proposal' => 'file|mimes:pdf|required|max:2048',
            'curriculum_vitae' => 'file|mimes:pdf|required|max:2048',
            'status' => 'max:50',
            'nomor_registrasi' => 'max:10',
        ]);

        // Menyimpan file ke direktori public/files
        $filePaths = [];
        $storagePath = 'files';

        if (!Storage::disk('public')->exists($storagePath)) {
            Storage::disk('public')->makeDirectory($storagePath);
        }

        if ($request->hasFile('surat_pengantar')) {
            $filePaths['surat_pengantar'] = $request->file('surat_pengantar')->store($storagePath, 'public');
        }

        if ($request->hasFile('proposal')) {
            $filePaths['proposal'] = $request->file('proposal')->store($storagePath, 'public');
        }

        if ($request->hasFile('curriculum_vitae')) {
            $filePaths['curriculum_vitae'] = $request->file('curriculum_vitae')->store($storagePath, 'public');
        }

        // Membuat nomor registrasi unik
        $nomor_registrasi = 'REG-' . mt_rand(100000, 999999);
        while (Daftar::where('nomor_registrasi', $nomor_registrasi)->exists()) {
            $nomor_registrasi = 'REG-' . mt_rand(100000, 999999);
        }

        // Menyimpan data ke database
        $daftars = Daftar::create([
            'user_id' => auth()->id(), // Set user_id dari user yang sedang login
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'email' => $request->email,
            'asal_instansi' => $request->asal_instansi,
            'jenjang' => $request->jenjang,
            'jurusan' => $request->jurusan,
            'nim' => $request->nim,
            'no_hp' => $request->no_hp,
            'surat_pengantar' => $filePaths['surat_pengantar'] ?? null,
            'proposal' => $filePaths['proposal'] ?? null,
            'curriculum_vitae' => $filePaths['curriculum_vitae'] ?? null,
            'status' => $request->status,
            'nomor_registrasi' => $nomor_registrasi,
        ]);

        // Lanjutkan dengan respons atau redirect setelah pendaftaran selesai
        return view('konfirmasi', ['daftars' => $daftars]);
    }
}
