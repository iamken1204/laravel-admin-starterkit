<!DOCTYPE html>
<html>
<head>
    <title>kidsmovie | Admin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/admin/dist/AdminLTE.min.css">
    <link rel="stylesheet" href="/assets/admin/dist/skin-purple.min.css">
    <script src="https://cdn.jsdelivr.net/g/vue@2.0.0-alpha.8,vue.resource@0.9.3"></script>
    @yield('head-styles')
    @yield('head-scripts')
</head>
<body>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/g/jquery@2.2.0,bootstrap@3.3.6"></script>
    <script src="/assets/admin/dist/app.min.js"></script>
    @yield('endbody-scripts')

</body>
</html>
