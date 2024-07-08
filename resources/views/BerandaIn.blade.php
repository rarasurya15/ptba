@extends('Layout.BerandaInNavbar')

@section('konten')
<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Pendaftaran Magang PT.Bukit Asam</title>
    <link rel="stylesheet" href="styleberandain.css">
</head>
<body>	
    <div class="slider">
		<div class="myslide fade">
			<div class="txt">
				<h1>SIAP MAGANG ?</h1>
				<p>Untuk memberikan pengalaman kerja nyata kepada mahasiswa</p>
			</div>
			<img src="banner7.jpg" style="width: 100%; height: 100%;">
		</div>
		<div class="myslide fade">
			<div class="txt">
				<h1>DI PTBA AJA YUK!</h1>
				<p>di PTBA menyediakan fasilitas untuk magang</p>
			</div>
			<img src="ptba.jpg" style="width: 100%; height: 100%;">
		</div>
		<div class="myslide fade">
			<div class="txt">
				<h1>DI MANA SI LOKASI PTBA?</h1>
				<p>Di Tanjung Enim, Sumatera Selatan</p>
			</div>
			<img src="ptba2.jpg" style="width: 100%; height: 100%;">
		</div>
		<div class="myslide fade">
			<div class="txt">
				<h1>PTBA BERGERAK DI BIDANG?</h1>
				<p>PTBA Bergerak dibidang perusahaan pertambangan batubara</p>
			</div>
			<img src="banner10.jpeg" style="width: 100%; height: 100%;">
		</div>
		<div class="myslide fade">
			<div class="txt">
				<h1>AMBIL KENDALI MASA DEPANMU</h1>
				<p>Ayo Magang di PT.Bukit Asam<br> Beyond Coal</p>
			</div>
			<img src="ptba4.jpg" style="width: 100%; height: 100%;">
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		
		<div class="dotsbox" style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span>
			<span class="dot" onclick="currentSlide(5)"></span>
		</div>
	</div>
	
	<div class="judul">
		<h1>Satuan Kerja PT Bukit Asam</h1>
	</div>
	<div class="wrapper">
		<div class="container">
			<input type="radio" name="slide" id="c1" checked>
			<label for="c1" class="card">
				<div class="image">
					<div class="overlay-text1">Satuan Kerja <br> Pengelolaan Hutan dan Rehabilitasi DAS</div>
				</div>
				<img src="hutan.png" alt="Gambar 1">
			</label>
			<input type="radio" name="slide" id="c2" >
			<label for="c2" class="card">
				<div class="image">
					<div class="overlay-text2">Satuan Kerja Perawatan Listrik</div>
				</div>
				<img src="listrik.jpg" alt="Gambar 2">
			</label>
			<input type="radio" name="slide" id="c3" >
			<label for="c3" class="card">
				<div class="image">
					<div class="overlay-text3">Satuan Kerja Perawatan Listrik</div>
				</div>
				<img src="hukum.jpg" alt="Gambar 3">
			</label>
			<input type="radio" name="slide" id="c4" >
			<label for="c4" class="card">
				<div class="image">
					<div class="overlay-text4">Satuan Kerja <br> TI - Pengembangan dan Layanan Aplikasi/EIS</div>
				</div>
				<img src="TI.jpg" alt="Gambar 4">
			</label>
		</div>
	</div>

	<section id="home">
		<div class="content1">
			<div class="content">
				<h1>Syarat dan ketentuan Magang</h1>
				<p> Syarat dan ketentuan : <br>
					1. Siswa/Mahasiswa dari seluruh Indonesia tanpa memandang ras, warna kulit, jenis kelamin, bahasa, agama serta situasi ekonomi dan sosial lainnya.<br>
					2. Siswa/Mahasiswa aktif pada jenjang SMA/D2/D3/D4/S1.<br>
					3. Mendapatkan rekomendasi untuk mengikuti program magang, kerja praktik atau praktik kerja lapangan.<br>
					4. Mendapatkan persetujuan Kaprodi dan Verifikasi Pimpinan Institusi untuk melaksanakan program magang, kerja praktik atau praktik kerja lapangan.<br>
					5. Berkomitmen untuk melaksanakan dan menyelesaikan program magang, kerja praktik atau praktik kerja lapangan.<br>
				</p>
			</div>	
		</div>
	</section>

	<script src="script.js"></script>

	<footer>
		<div class="row">
			<div class="col">
				<img src="logo.png" class="logo">
				<p>Sejalan dengan visi menjadi perusahaan energi kelas dunia yang peduli terhadap lingkungan,Bukit Asam terus melakukan inovasi dalam bisnis energi berbasis batubara,energi terbarukan, dan proyek hilirisasi batubara.</p><br>
				<h2>Address:<br></h2>Kantor Pusat Jl. Parigi No. 1, Tanjung Enim Sumatera Selatan, Indonesia 31716</p>
				<p>Kantor Perwakilan Jakarta Menara Kadin Indonesia Lt. 15<br>Jl. HR. Rasuna Said Blok X-5, Kav 2-3 Jakarta 12950</p>
			</div>
			<div class="col">
				<h2> <a href="/BerandaIn">Beranda </a> </h2>
				<h2> <a href="/Program">Program</a> </h2>
				<h2> <a href="/Profil">Profil</a> </h2>
				<h2> <a href="/Daftar">Daftar</a> </h2>
				<h2> <a href="/Status">Status</a> </h2>
				<h2> <a href="/FAQs">FAQs</a> </h2>
			</div>
			<div class="col">
				<h2>SOCIAL MEDIA </h2>
				<p><a href="https://www.facebook.com/BukitAsamOfficial/">Facebook</a></p>
				<p><a href="https://www.instagram.com/bukitasamptba"> Instagram </a></p>
				<p><a href="https://x.com/BukitAsamPTBA">X</a></p>	 
				<p><a href="https://www.linkedin.com/company/pt-bukit-asam-tbk/">Linkedin</a></p>
				<p><a href="https://www.youtube.com/channel/UC0dK2FdtrEeenwBlrATkBlQ/videos">Youtube</a></p>
				<p><a href="https://www.tiktok.com/@bukitasam_official">Tiktok</a></p>
			</div>
			<div class="col">
				<h2>PHONE</h2>
				<p>+(62) 734 451 096</p>
				<p>(021) 525 4014</p>
			</div>
		</div>
	</footer>
</body>
</html>
@endsection


