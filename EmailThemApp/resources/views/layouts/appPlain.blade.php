

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

        <link rel="stylesheet" href="css/app.css">
    </head>

<body>

    <div id="app">
        <main>
            <div id="pageContent" class>@yield('content')</div>
        </main>
    </div>









    <script src="js/app.js"></script>
</body>

</html>