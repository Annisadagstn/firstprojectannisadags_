<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="asset/css/style.css" />    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
    
    <!-- todo -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/main.css')}}"> 


    <!-- Bootstrap icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- membenarkan agar dengan boostrap di dalam blok di atas login  --> 
</head>
<body>

<!-- diganti seperti button yang ada di login -->
<!-- if ini berfungsi untuk nav_log&reg tidak ada dalam halaman login&register tsb--> 
    @if (Auth::check()) 
        <div class="navbar">
            <a href="/logout">Logout</a> 
        </div>
    @endif 

    @yield('content')

</body>
</html>
    

 
   