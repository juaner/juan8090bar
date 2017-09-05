<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="个人 博客 PHP Linux"/>
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="screen"/>
    <title>laravel</title>
</head>
<body>

<div id="site-wrapper">
    @include("layouts.header")
    <div class="main" id="main-two-columns">
        @yield("content")
    </div>
    @include("layouts.footer")
</div>
</body>
</html>