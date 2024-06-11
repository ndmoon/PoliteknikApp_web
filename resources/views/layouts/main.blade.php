<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Sistem Informasi Jurusan')</title>
<style>
    /* main > .container {
        padding: 60px 15px 0;
    } */
</style>
<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body class="d-flex flex-column h-100">
    
    @include ('layouts.header')

<main class="flex-shirnk-0">
    <div class="container">
        @yield('content')
    </div>
</main>

    @include ('layouts.footer')

</body>
</html>