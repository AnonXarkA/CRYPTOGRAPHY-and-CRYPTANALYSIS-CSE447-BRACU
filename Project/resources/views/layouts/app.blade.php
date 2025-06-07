<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Post App</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        nav {
            background-color: #343a40;
            padding: 10px 0;
        }

        nav a {
            color: #ffffff;
            padding: 8px 15px;
            text-decoration: none;
            font-size: 1.1em;
        }

        nav a:hover {
            background-color: #007bff;
            border-radius: 5px;
        }

        .navbar-brand {
            font-size: 1.5em;
            color: #ffffff;
        }

        .container {
            margin-top: 20px;
        }

        .post-btn {
            margin-top: 20px;
        }

        footer {
            text-align: center;
            padding: 15px;
            background-color: #343a40;
            color: #ffffff;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <!-- Navigation Links -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">CSE 447 Project</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                @auth
                    <li class="nav-item"><a href="{{ route('posts.index') }}" class="nav-link">My Posts</a></li>
                    <li class="nav-item"><a href="{{ route('posts.create') }}" class="nav-link">Create Post</a></li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                @endauth
            </ul>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Laravel CSE 447 Project. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
