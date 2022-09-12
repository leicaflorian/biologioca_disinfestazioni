<!doctype html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <title>@yield("page-title")</title>
  <meta name="description" content="@yield("page-description")">

  @if(env("APP_INCLUDE_GTAGS") === true)
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
        w[l] = w[l] || []
        w[l].push({
          'gtm.start':
            new Date().getTime(), event: 'gtm.js'
        })
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''
        j.async = true
        j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl
        f.parentNode.insertBefore(j, f)
      })(window, document, 'script', 'dataLayer', 'GTM-KLVCK69')</script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Ads: 10950377080 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10950377080"></script>
    <script>
      window.dataLayer = window.dataLayer || []

      function gtag () {dataLayer.push(arguments)}

      gtag('js', new Date())
      gtag('config', 'AW-10950377080')
      // <!-- Event snippet for Website traffic conversion page -->
      gtag('event', 'conversion', { 'send_to': 'AW-10950377080/vOVxCKaorM4DEPj8xeUo' })
    </script>

    <!-- End Global site tag (gtag.js) -->
  @endif

  @include("components.social-media-tags")

  @include("components.ldJson")

  @yield("header_scripts")

  <link rel="stylesheet" href="{{ mix('/css/vendors-1.css') }}">
  <link rel="stylesheet" href="{{ mix('/css/vendors-2.css') }}">
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,regular,500,700%7CRoboto+Slab:regular,500,700&display=swap"
      rel="stylesheet">

  @if(isset($recaptchaKey))
    <script src="https://www.google.com/recaptcha/api.js?render={{$recaptchaKey}}" defer async></script>
  @endif

  <script src="{{ mix('js/manifest.js') }}"></script>
  <script src="{{ mix('js/vendors-1.js') }}" defer></script>
  <script src="{{ mix('js/vendors-2.js') }}" defer></script>
  <script src="{{ mix('js/vendors-3.js') }}" defer></script>
  <script src="{{ mix('js/app.js') }}" defer></script>

</head>
<body>
@if(env("APP_INCLUDE_GTAGS") === true)
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KLVCK69"
            height="0" width="0" style="display:none;visibility:hidden" loading="lazy"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
@endif

<header>
  @include('components.the-navbar')
</header>

<main id="app">
  @yield('content')
</main>

@include('components.the-footer')

<a href="#" class="btn btn-primary go-up-btn go-up-btn-hidden">
  <i class="fas fa-chevron-up fa-xl"></i>
</a>


@yield("scripts")
</body>
</html>
