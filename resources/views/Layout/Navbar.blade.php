<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SIPM</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>


    

        <div class="container">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="#">
                            <span class="logo">
                                <img src="logo.png" alt="">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="/Profil">
                            <span class="icon">
                                <ion-icon name="person-outline"></ion-icon>
                            </span>
                            <span class="title">Profil</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Daftar">
                            <span class="icon">
                                <ion-icon name="create-outline"></ion-icon>
                            </span>
                            <span class="title">Daftar</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Status">
                            <span class="icon">
                                <ion-icon name="hourglass-outline"></ion-icon>
                            </span>
                            <span class="title">Status Verifikasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="/logout">
                            <span class="icon">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </span>
                            <span class="title">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="main">
                <div class="topbar">
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="/BerandaIn" style="text-decoration:none" class="title">Beranda</a></li>
                            <li><a href="/Program" style="text-decoration:none" class="title">Program</a></li>
                            <li><a href="/FAQs" style="text-decoration:none" class="title">FAQs</a></li>
                        </ul>
                                            
                    </nav>
                </div>
                @yield('konten')
            </div>
        </div>

        <script src="main.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>