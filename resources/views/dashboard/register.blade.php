<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    
          <div class="login">

          <div class="avatar">
          <i class="fa-brands fa-apple"></i>
          </div>

          <h2>Register Form</h2>
          <form action="{{route('register.post')}}" method="POST">
            @csrf
          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="email" name="email" placeholder="Email">
          </div>

          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" name="name" placeholder="Nama Lengkap">
          </div>

          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" name="username" placeholder="Username">
          </div>

          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="password" name="password" placeholder="Password">
          </div>

          <button type="submit" name="login" class="btn-login">Sign Up</button>
          <div class="bottom">
            <a href="/">Login</a>
          </div>
          </form>
      </div>
  </head>
  </html>