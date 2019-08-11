

<!doctype html>
<html lang="en">

    <head>
        <title>Email Them</title>
        {{-- CSRF token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Required meta tags -->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/app.css">
        <script src="https://cdn.tiny.cloud/1/6mxpwrbwgrau4oos2n4mk23o571o5hm05zypiz1ijiz7zzqp/tinymce/5/tinymce.min.js"></script>
    </head>

    <body>

    @yield('body')

        <script src="/js/app.js"></script>
    </body>

</html>
