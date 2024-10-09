<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Task Manager')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
<header class="bg-blue-600 text-white p-4">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold">Task Manager</h1>
    </div>
</header>

<main class="container mx-auto mt-8 px-4 flex-grow">
    @if(session()->has('success'))
        <p>{{session('success')}}</p>
    @endif
    @yield('content')
</main>

<footer class="bg-gray-200 text-center p-4 mt-8">
    <p>&copy; 2024 Task Manager. All rights reserved.</p>
</footer>
</body>
</html>
