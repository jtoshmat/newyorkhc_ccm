<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset=utf-8>
    <meta content="IE=edge" http-equiv=X-UA-Compatible>
    <meta content="width=device-width,initial-scale=1" name=viewport>
    <meta content="Bootstrap, a sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development."
          name=description>
    <meta content="Mark Otto, Jacob Thornton, and Bootstrap contributors" name=author>
    <title>App Name - @yield('title')</title>
    <link href=https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css rel=stylesheet>
    <link href="data:text/css;charset=utf-8," rel=stylesheet data-href=https://getbootstrap.com/docs/3.3/dist/css/bootstrap-theme.min.css
          id=bs-theme-stylesheet>
    <link href=https://getbootstrap.com/docs/3.3/assets/css/docs.min.css rel=stylesheet>
    <!--[if lt IE 9]>
    <script src=https://getbootstrap.com/docs/3.3/assets/js/ie8-responsive-file-warning.js></script><![endif]-->
    <script src=https://getbootstrap.com/docs/3.3/assets/js/ie-emulation-modes-warning.js></script>
    <!--[if lt IE 9]>
    <script src=https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js></script>
    <script src=https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script> <![endif]-->
    <link href=https://getbootstrap.com/apple-touch-icon.png rel=apple-touch-icon>
    <link href=https://getbootstrap.com/favicon.ico rel=icon>
</head>
<body>
@section('sidebar')
@show

<div class="container">
    @yield('content')
</div>
<script src=https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src=https://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js></script>
<script src=https://getbootstrap.com/docs/3.3/assets/js/docs.min.js></script>
<script src=https://getbootstrap.com/docs/3.3/assets/js/ie10-viewport-bug-workaround.js></script>
<script>var _gauges = _gauges || [];
    !function () {
        var e = document.createElement("script");
        e.async = !0, e.id = "gauges-tracker", e.setAttribute("data-site-id", "4f0dc9fef5a1f55508000013"), e.src = "//secure.gaug.es/track.js";
        var t = document.getElementsByTagName("script")[0];
        t.parentNode.insertBefore(e, t)
    }()</script>

</body>
</html>