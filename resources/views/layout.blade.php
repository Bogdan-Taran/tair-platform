<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-dark">
<h1 class="text-white">DSFshdbfjsdfdf</h1>
<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32" aria-hidden="true">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">Sidebar</span> </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/" class="nav-link active" aria-current="page">
            <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
                <use xlink:href="#home"></use>
            </svg>
            Главная
        </a></li>
        <li><a href="/about" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
                <use xlink:href="#speedometer2"></use>
            </svg>
            О нас
        </a></li>
        <li><a href="/documents" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
                <use xlink:href="#table"></use>
            </svg>
            Документы
        </a></li>
        <li><a href="/review" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
                <use xlink:href="#grid"></use>
            </svg>
            Отзывы
        </a></li>
    </ul>
    <hr>

    </div>
</div>

@yield('main-content')

</body>
</html>
