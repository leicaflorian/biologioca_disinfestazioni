<!doctype html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>@yield("page-title") | Biologica Disinfestazioni</title>
  <meta name="description" content="@yield("page-description")">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
  @include('components.the-navbar')
</header>

<main id="app">
  @yield('content')
</main>

@include('components.the-footer')

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
