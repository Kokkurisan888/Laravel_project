<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>
    <body class="bg-dark text-white">
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 bg-dark border-bottom">
            <a href="/" class="d-flex align-items-center text-white text-decoration-none">
                <span class="fs-4">IT-Adel</span>
            </a>
            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-white text-decoration-none" href="/">Главная</a>
                <a class="me-3 py-2 text-white text-decoration-none" href="/about">Про нас</a>
            </nav>
            <a class="btn btn-warning" href="/review">Отзывы</a>
        </div>

        <div class="container">
            @yield('main_content')
        </div>
    </body>
</html>