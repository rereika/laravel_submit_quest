<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Conduit')</title>
    <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    <link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link
        href="//fonts.googleapis.com/css?family=Titillium+Web:700|Source+Serif+Pro:400,700|Merriweather+Sans:400,700|Source+Sans+Pro:400,300,600,700,300italic,400italic,600italic,700italic"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//demo.productionready.io/main.css" />
</head>
<body>
    @include('conduit.header')
    <div class="container">
        @yield('content')
    </div>
    @include('conduit.footer')
</body>
</html>
