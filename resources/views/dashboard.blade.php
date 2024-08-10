<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Add your CSS links here -->
</head>
<body>
    <nav>
        <!-- Other navigation links -->
        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </nav>

    <h1>Welcome to the Dashboard</h1>
    <!-- Dashboard content here -->
</body>
</html>
