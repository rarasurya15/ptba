@extends('Layout.EditNavbar')

@section('konten')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Sistem Informasi Pendaftaran Magang PT.Bukit Asam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('styleadminedit.css') }}"/>
  </head>
  <body>
    <div class="containerdalam">
      <h1 class="form-title">Form Pendaftaran</h1>
      <form action='{{url('Admin/'.$daftars->nim) }}' method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    
        <div class="main-user-info">
            <div class="user-input-box">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" value="{{ $daftars->nama }}"/>
            </div>
            <div class="user-input-box">
                <label for="asal_instansi">Asal Instansi</label>
                <input type="text" id="asal_instansi" name="asal_instansi" value="{{ $daftars->asal_instansi }}"/>
            </div>
            <div class="user-input-box">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ $daftars->tempat_lahir}}"/>
            </div>
            <div class="user-input-box">
                <label for="jenjang">Jenjang</label>
                <input type="text" id="jenjang" name="jenjang" value="{{ $daftars->jenjang}}"/>
            </div>
            <div class="user-input-box">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="text" id="tanggal_lahir" name="tanggal_lahir" value="{{ $daftars->tanggal_lahir }}"/>
            </div>
            <div class="user-input-box">
                <label for="jurusan">Jurusan</label>
                <input type="text" id="jurusan" name="jurusan" value="{{ $daftars->jurusan }}"/>
            </div>
            <div class="user-input-box">
                <label for="agama">Agama</label>
                <input type="text" id="agama" name="agama" value=" {{ $daftars->agama }}"/>
            </div>
            <div class="user-input-box">
                <label for="nim">NIS/NIM</label>
                <input type="text" id="nim" name="nim" value="{{ $daftars->nim }}"/>
            </div>
            <div class="user-input-box">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" value="{{ $daftars->email }}"/>
                <br /><br />
            </div>
            <div class="user-input-box">
                <label for="no_hp">No HP</label>
                <input type="text" id="no_hp" name="no_hp" value="{{ $daftars->no_hp }}"/>
                <br /><br />
            </div>
                <div class="user-input-box">
                <label for="surat_pengantar">Surat Pengantar dari Instansi (PDF only)</label>
                <input type="text" id="surat_pengantar" name="surat_pengantar" value="{{ $daftars->surat_pengantar }}"/>
                <br /><br />
            </div>
                <div class="user-input-box">
                <label for="proposal">Proposal (PDF only)</label>
                <input type="text" id="proposal" name="proposal" value="{{ $daftars->proposal }}"/>
                <br /><br />
            </div>
                <div class="user-input-box">
                <label for="curriculum_vitae">Curicullum Vitae (PDF only)</label>
                <input type="text" id="curriculum_vitae" name="curriculum_vitae" value="{{ $daftars->curriculum_vitae }}"/>
                <br /><br />
            </div>
            <div class="user-input-box">
                <label for="status_pendaftaran">Status Pendaftaran</label>
                <input type="text" id="status_pendaftaran" name="status_pendaftaran" value="{{ $daftars->status_pendaftaran }}"/>
                <br /><br />
            </div>
        <button type="submit">Simpan</button>
      </form>
    </div>
  </body>
</html>
@endsection