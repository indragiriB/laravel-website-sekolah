<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 15px 20px;
            background-color: #007bff;
            color: white;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/students">Students</a>
        </div>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
