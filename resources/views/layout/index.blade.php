<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smartfit</title>

    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="min-h-[1000px]">
    <x-layout.header />
    <div id="app" class="h-full w-[1200px] my-14 m-auto flex flex-col gap-8">
        @yield('content')
    </div>
    <x-layout.footer />
</body>
</html>
