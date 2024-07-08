<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylelogin.css"/>
    <title>Sign in Form</title>
  </head>
  <body>
    <div class="container">
      @error('login')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
      @enderror
      <div class="forms-container">
        <div class="signin-signup">
          <form action=""class="sign-in-form" method="POST">
            @csrf
            <img src="logo.png" class="image" alt="" />
            <h2 class="title">SIGN IN</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Email" id="email" name="email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" id="password" name="password" required />
            </div>
            <input type="submit" value="Login" class="btn solid"/>
          </form>
        </div>
      </div>   
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Selamat Datang di Sistem Informasi Pendaftaran Magang PT. Bukit Asam Tbk</h3>
            <p>
              Jika kamu belum memiliki akun, silakan melakukan sign up.
            </p>
            <form action="{{ url('Register') }}">
              <input type="submit" value="SIGN UP" class="btn solid"/>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="login.js"></script>
  </body>
</html>