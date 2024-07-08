<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $profil = Profil::where('user_id', $userId)->first(); 
        return view('Profil', compact('profil'));
    }

    public function store(Request $request)
    {
            // Get authenticated user's ID
         

            // Validate request inputs
            $request->validate([
                'nama' => 'max:50',
                'tempat_lahir' => 'max:50',
                'tanggal_lahir' => 'date',
                'agama' => 'max:50',
                'email' => 'email|max:50',
                'asal_instansi' => 'max:50',
                'jenjang' => 'max:50',
                'jurusan' => 'max:50',
                'nim' => 'max:50',
                'no_hp' => 'max:50',
                'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            
            $destinationPath = public_path('foto');
            if (!Profil::exists($destinationPath)) {
                
                $directoryPath = 'public/foto';

                // Membuat direktori jika belum ada
                Storage::makeDirectory($directoryPath);
            }
    
            
            $filePaths = [];
           

    
            // Fungsi untuk menyimpan file ke public directory
            $saveFileToPublic = function ($file, $fileType) use ($destinationPath) {
                $fileName = $fileType . '_' . time() . '.' . $file->getClientOriginalExtension();
                $file->move($destinationPath, $fileName);
                return 'files/' . $fileName;
            };
    
            if ($request->hasFile('foto')) {
                $filePaths['foto'] = $saveFileToPublic($request->file('foto'), 'foto');
            }
            $userId = auth()->user()->id;
            $profil = Profil::where('user_id', $userId)->first();
            if (!$profil) {
                $profil = new Profil();
                $profil->user_id = $userId; // Set the authenticated user ID
            }
            $profil->nama = $request->input('nama');
            $profil->tempat_lahir = $request->input('tempat_lahir');
            $profil->tanggal_lahir = $request->input('tanggal_lahir');
            $profil->agama = $request->input('agama');
            $profil->email = $request->input('email');
            $profil->asal_instansi = $request->input('asal_instansi');
            $profil->jenjang = $request->input('jenjang');
            $profil->jurusan = $request->input('jurusan');
            $profil->nim = $request->input('nim');
            $profil->no_hp = $request->input('no_hp');
            if (isset($filePaths['foto'])) {
                $profil->foto = $filePaths['foto'];
            }

            // Save the profile to the database
            $profil->save();

            return redirect('Profil')->with('message', 'Berhasil menambahkan data')->withInput();

    }
}
