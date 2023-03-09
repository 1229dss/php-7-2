<!DOCTYPE html>
<html lang="ja" class="create_bg">
<meta charset="utf-8">
<title>@yield('title')</title>
<link rel="stylesheet" type="text/css" href="/css/base.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
<script src="https://kit.fontawesome.com/d1eaeac51b.js" crossorigin="anonymous"></script>
<body>
    <header>
        @include('include.header_login')
    </header>
    
    @yield('content')

    <footer>
        @include('include.footer_login')
    </footer>
</body>
</html>