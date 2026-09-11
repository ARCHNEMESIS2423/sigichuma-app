<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <title>Welcome - {{ config('app.name') }}</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
    <body>{{ asset('favicon.ico') }}
        <header>
            <h1 class="heading1">KARIBU SIGICHUMA</h1>
        </header>
    </body>
</html>

git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/ARCHNEMESIS2423/sigichuma-app.git
git push -u origin main