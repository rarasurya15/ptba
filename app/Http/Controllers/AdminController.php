<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        $daftars = Admin::all();
        return view('Admin.Admin', ['daftars' => $daftars]);
    }

    public function add(){
        return view('Admin.Admin');
    }
    
    public function edit(Request $request, $id)
    {
      
        $daftars = Admin::where('nim',$id)->first();
        return view('Admin.AdminEdit')->with('daftars',$daftars);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'email' => 'required',
            'asal_instansi' => 'required',
            'jenjang' => 'required',
            'jurusan' => 'required',
            'nim' => 'required|unique:admins,nim',
            'no_hp' => 'required',
            'surat_pengantar' => 'required|file|mimes:pdf',
            'proposal' => 'required|file|mimes:pdf',
            'curriculum_vitae' => 'required|file|mimes:pdf',
            'status_pendaftaran' => 'required',
        ]);

        $suratPengantarPath = $request->file('surat_pengantar')->store('surat_pengantar');
        $proposalPath = $request->file('proposal')->store('proposal');
        $curriculumVitaePath = $request->file('curriculum_vitae')->store('curriculum_vitae');

        $daftars = new Admin();
        $daftars->nama = $request->nama;
        $daftars->tempat_lahir = $request->tempat_lahir;
        $daftars->tanggal_lahir = $request->tanggal_lahir;
        $daftars->agama = $request->agama;
        $daftars->email = $request->email;
        $daftars->asal_instansi = $request->asal_instansi;
        $daftars->jenjang = $request->jenjang;
        $daftars->jurusan = $request->jurusan;
        $daftars->nim = $request->nim;
        $daftars->no_hp = $request->no_hp;
        $daftars->surat_pengantar = $suratPengantarPath;
        $daftars->proposal = $proposalPath;
        $daftars->curriculum_vitae = $curriculumVitaePath;
        $daftars->status_pendaftaran = $request->status_pendaftaran;

        $daftars->save();

        return redirect()->route('Admin')->with('success', 'Data berhasil disimpan');
    }

    public function update(Request $request, string $id)
    {
        $daftars = Admin::where('nim', $id)->firstOrFail();

        $daftars->update($request->all());

        return redirect()->to('Admin')->with('message','Berhasil melakukan update data');
    }

    public function destroy(string $id)
    {
        Admin::where('nim',$id)->delete();
        return redirect()->to('Admin')->with('success','Berhasil melakukan delete data');
    }
}
