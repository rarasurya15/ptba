@extends('Layout.Navbar')

@section('konten')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="styleprofil.css"/>
  </head>
  <body>
    
    
    <div class="containerdalam">
        @if(session()->has('message'))
        <div class="message success"> {{ session('message') }} </div>
        @endif
      <h1 class="form-title">Profil</h1>
      <form action="{{ route('profil.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="main-user-info">
            <div class="user-input-box">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" value="{{ old('nama', $user->nama ?? '') }}" required/>
            </div>
            <div class="user-input-box">
                <label for="instansi">Asal Instansi</label>
                <input type="text" id="instansi" name="asal_instansi" placeholder="Masukkan instansi" value="{{ old('asal_instansi', $user->asal_instansi ?? '') }}"  required/>
            </div>
            <div class="user-input-box">
                <label for="tempat">Tempat Lahir</label>
                <input type="text" id="tempat" name="tempat_lahir" placeholder="Masukkan tempat lahir" value="{{ old('tempat_lahir', $user->tempat_lahir ?? '') }}"  required/>
            </div>
            <div class="user-input-box">
                <label for="jenjang">Jenjang</label>
                <input type="text" id="jenjang" name="jenjang" placeholder="Masukkan jenjang" value="{{ old('jenjang', $user->jenjang ?? '') }}"  required/>
            </div>
            <div class="user-input-box">
                <label for="tanggal">Tanggal Lahir</label>
                <input type="date" id="tanggal" name="tanggal_lahir" placeholder="Masukkan tanggal lahir" value="{{ old('tanggal_lahir', $user->tanggal_lahir ?? '') }}" required/>
            </div>
            <div class="user-input-box">
                <label for="jurusan">Jurusan</label>
                <input type="text" id="jurusan" name="jurusan" placeholder="Masukkan jurusan" value="{{ old('jurusan', $user->jurusan ?? '') }}" required/>
            </div>
            <div class="user-input-box">
                <label for="agama">Agama</label>
                <input type="text" id="agama" name="agama" placeholder="Masukkan agama" value="{{ old('agama', $user->agama ?? '') }}" required/>
            </div>
            <div class="user-input-box">
                <label for="nim">NIS/NIM</label>
                <input type="text" id="nim" name="nim" placeholder="Masukkan NIM/NIS" value="{{ old('nim', $user->nim ?? '') }}" required/>
            </div>
            <div class="user-input-box">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email" value="{{ old('email', $user->email ?? '') }}"  required/>
                <br /><br />
            </div>
            <div class="user-input-box">
                <label for="no_hp">No HP</label>
                <input type="tel" id="no_hp" name="no_hp" placeholder="Masukkan nomor HP" value="{{ old('no_hp', $user->no_hp ?? '') }}"  required/>
                <br /><br />
            </div>
            <div class="user-input-box">
                <label for="foto">Foto</label>
                <input type="file" id="foto" name="foto" placeholder="Masukkan foto" value="{{ old('foto', $user->foto ?? '') }}"  required/>
                <br /><br />
            </div>
        <button type="submit">Simpan</button>
      </form>
    </div>
  </body>
</html>
@endsection


