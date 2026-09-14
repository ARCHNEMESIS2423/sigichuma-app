<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Sigchuma') }} Admin</title>
</head>
<body>
    <h1 class="text-2xl font-bold">{{ config('app.name', 'Sigchuma') }} Admin</h1>
    <div class="mt-4">
        <a href="{{ route('admin.dashboard') }}" class="text-blue-500 hover:underline">Dashboard</a>
        <a href="{{ route('admin.products.index') }}" class="ml-4 text-blue-500 hover:underline">Products</a>
        <a href="{{ route('admin.orders.index') }}" class="ml-4 text-blue-500 hover:underline">Orders</a>
        <a href="{{ route('admin.users.index') }}" class="ml-4 text-blue-500 hover:underline">Users</a>
        <a href="{{ route('admin.settings') }}" class="ml-4 text-blue-500 hover:underline">Settings</a>
    </div>
    <div class="mt-8">
        @yield('content')  
    </div>     
</body>
</html>