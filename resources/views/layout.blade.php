<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workopia test page</title>
</head>
<body class="bg-gray-100">
    @include('partials.navbar')
    <h1>@yield('title','Welcome To Workopia | Find Your Job Here')</h1>
    <main class="container mx-auto p-4 mt-4">@yield('content')</main>
</body>
</html>