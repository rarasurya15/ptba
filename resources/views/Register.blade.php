<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styleregister.css"/>
    <title>Sign up Form</title>
  </head>
  <body>
    <div class="container">
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

      <div class="forms-container">
        <div class="signin-signup">
          <form action="" class="sign-in-form" method="POST">
          @csrf
            <img src="logo.png" class="image" alt=""/>
            <h2 class="title">SIGN UP</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nama Lengkap" name="name" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required/>
            </div>
            <input type="submit" class="btn" value="Sign up"/>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Selamat Datang di Sistem Informasi Pendaftaran Magang PT. Bukit Asam Tbk</h3>
            <p>
                Untuk kamu yang sudah terdaftar, silakan melakukan login.
            </p>
            <form action="{{ url('Login') }}">
              <input type="submit" value="LOGIN"/>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="login.js"></script>
  </body>
</html>