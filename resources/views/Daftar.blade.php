@extends('Layout.Navbar')

@section('konten')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="styledaftar.css"/>
  </head>
  <body>
    <div class="containerdalam">
        @if(session()->has('message'))
             <div class="message success"> {{ session('message') }} </div>
        @endif
      <h1 class="form-title">Form Pendaftaran</h1>
      <form action='/Daftar' method="POST" enctype="multipart/form-data">
        @csrf
        <div class="main-user-info">
            <div class="user-input-box">
                <label for="nama">Nama Lengkap</label>
                {{ Auth::user()->nama }}
            </div>
            <div class="user-input-box">
                <label for="instansi">Asal Instansi</label>
                <input type="text" id="instansi" name="asal_instansi" placeholder="Masukkan instansi" required/>
            </div>
            <div class="user-input-box">
                <label for="tempat">Tempat Lahir</label>
                <input type="text" id="tempat" name="tempat_lahir" placeholder="Masukkan tempat lahir" required/>
            </div>
            <div class="user-input-box">
                <label for="jenjang">Jenjang</label>
                <input type="text" id="jenjang" name="jenjang" placeholder="Masukkan jenjang" required/>
            </div>
            <div class="user-input-box">
                <label for="tanggal">Tanggal Lahir</label>
                <input type="date" id="tanggal" name="tanggal_lahir" placeholder="Masukkan tanggal lahir" required/>
            </div>
            <div class="user-input-box">
                <label for="jurusan">Jurusan</label>
                <input type="text" id="jurusan" name="jurusan" placeholder="Masukkan jurusan" required/>
            </div>
            <div class="user-input-box">
                <label for="agama">Agama</label>
                <input type="agama" id="agama" name="agama" placeholder="Masukkan agama" required/>
            </div>
            <div class="user-input-box">
                <label for="nim">NIS/NIM</label>
                <input type="text" id="nim" name="nim" placeholder="Masukkan NIM/NIS" required/>
            </div>
            <div class="user-input-box">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email" required/>
                <br /><br />
            </div>
            <div class="user-input-box">
                <label for="no_hp">No HP</label>
                <input type="tel" id="no_hp" name="no_hp" placeholder="Masukkan nomor HP" required/>
                <br /><br />
            </div>
                <div class="user-input-box">
                <label for="surat_pengantar">Surat Pengantar dari Instansi (PDF only)</label>
                <input type="file" id="surat_pengantar" name="surat_pengantar" accept=".pdf" required/>
                <br /><br />
            </div>
                <div class="user-input-box">
                <label for="proposal">Proposal (PDF only)</label>
                <input type="file" id="proposal" name="proposal" accept=".pdf" required/>
                <br /><br />
            </div>
                <div class="user-input-box">
                <label for="curriculum_vitae">Curicullum Vitae (PDF only)</label>
                <input type="file" id="curriculum_vitae" name="curriculum_vitae" accept=".pdf" required/>
                <br /><br />
            </div>
           
        <div class="tombol">
            <button type="submit">Simpan</button>
        </div>
      </form>
    </div>
  </body>
</html>
@endsection