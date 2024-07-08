<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Pendaftaran Magang PT.Bukit Asam</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="main">
            <div class="topbar">
                <img src= "logo.png">
				<a href="#" style="text-decoration:none" class="nav-link">Beranda</a>
				<a href="#" style="text-decoration:none" class="nav-link">Program</a>
				<a href="#" style="text-decoration:none" class="nav-link">Bantuan</a>
            </div>
        </div>
        @yield('konten')
    </div>

    <!-- =========== Scripts =========  -->
    <script src="main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>