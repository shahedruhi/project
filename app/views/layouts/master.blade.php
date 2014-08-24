<!DOCTYPE html>
<html lang='en'>
<head>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>@yield('title') | User Admin</title>

    <!-- CSS are placed here
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/bootstrap-theme.css') }}
    {{ HTML::style('css/font-awesome.css') }}
    -->

    <link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <style>
        body {
            margin-top: 5%;
        }
    </style>
</head>
<body>
<div class='container-fluid'>
    <div class='row'>
        @yield('content')
    </div>
</div>
<!-- Scripts are placed here -->
{{ HTML::script('js/jquery-1.11.1.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>