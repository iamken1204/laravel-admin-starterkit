<!DOCTYPE html>
<html>
<head>
    <title>kidsmovie | Admin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    @yield('head-styles')
    @yield('head-scripts')
</head>
<body>

    @yield('content')

    @yield('endbody-scripts')

</body>
</html>
