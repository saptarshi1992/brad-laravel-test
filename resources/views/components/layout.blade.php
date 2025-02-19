<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workopia test page</title>
</head>
<body class="bg-gray-100">
  <x-header/>
    <h1>{{$title ?? "Workopia | Find your Job here"}}</h1>
    <main class="container mx-auto p-4 mt-4">{{$slot}}</main>
</body>
</html>