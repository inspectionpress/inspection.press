<!DOCTYPE html>
<html>
<head>
    <title>Inspection Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { font-family: sans-serif; margin: 0; padding: 0; }
        nav { background: #333; color: #fff; padding: 1rem; }
        nav a { color: #fff; margin-right: 1rem; text-decoration: none; }
        .container { padding: 2rem; }
    </style>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<nav>
    <a href="/admin">Dashboard</a>
    <a href="/admin/templates">Templates</a>
    <a href="/inspections/create">New Inspection</a>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>