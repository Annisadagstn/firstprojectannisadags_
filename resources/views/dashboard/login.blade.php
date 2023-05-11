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

          <h2>Login Form</h2>
        <form action="{{route('login.auth')}}" method="POST">
          @csrf
          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" name="username" placeholder="Username">
          </div>

          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input name="password" type="text" placeholder="Password">
          </div>

          <button type="submit" name="login" class="btn-login">Login</button>
          <div class="bottom">
            <a href="register">Register</a>
          </div>
          </form>
      </div>
  </head>
  </html>