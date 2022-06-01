<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield("page-title") | Biologica Disinfestazioni</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
  @include('components.the-navbar')
</header>

<div id="app">
  <div>
    <div class="container pt-5">
      <h1>@yield("page-title")</h1>
      @if (trim($__env->yieldContent('page-cover-img')))
        <img class="img-fluid" src="@yield("page-cover-img")">
      @endif
    </div>
  </div>

  <main>
    @yield('content')
  </main>
</div>

<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
