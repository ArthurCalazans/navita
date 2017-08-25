<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//PT"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
    @include('common.header')
    <body class="stretched device-lg">
            @include('common.menu')
        <div id="wrapper" class="clearfix">
            @yield('content')
        </div>
        @include('common.bottom')
    </body>
</html>