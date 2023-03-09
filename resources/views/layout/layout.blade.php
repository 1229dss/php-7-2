<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<title>@yield('title')</title>
<link rel="stylesheet" type="text/css" href="/css/base.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<script src="https://kit.fontawesome.com/d1eaeac51b.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
<script src="/js/main.js" type="text/javascript"></script>
<body>
    <header>
        @include('include.header')
    </header>
    
    @yield('content')

    <footer>
        @include('include.footer')
    </footer>
</body>
</html>