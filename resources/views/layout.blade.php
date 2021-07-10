<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    
    <script src="bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <header class="p-3 bg-success text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="/" class="nav-link px-2 text-dark">Главная</a></li>
              <li><a href="/user/" class="nav-link px-2 text-white">Личная страница</a></li>
            </ul>
    
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>
    
            <div class="text-end">
                <a href="/login"><button type="button" class="btn btn-outline-light me-2" >Войти</button></a>
                <a href="/register"><button type="button" class="btn btn-warning">Регистрация</button></a>
            </div>
          </div>
        </div>
      </header>
      <div class="container px-4 py-5 " id="featured-3">
        @yield('main-content')
      </div>
      <script> 
        var csrf_token = '<?php echo csrf_token(); ?>'; 
    </script>
    
</body>
</html>