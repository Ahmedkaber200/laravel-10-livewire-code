<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Laravel 10 Livewire User Registration and Login' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<style>
        .footer {
            background-color: #343a40;
            color: white;
            padding: 40px 0;
        }
        .footer a {
            color: #ffc107;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ URL('/dashboard') }}" wire:navigate>Home</a>
            <a class="navbar-brand" href="{{ URL('/') }}" wire:navigate>Todos</a>
            <a class="navbar-brand" href="{{ URL('/counter') }}" wire:navigate>Counter</a>
            <a class="navbar-brand" href="{{ URL('/helloworld') }}" wire:navigate>Hello World</a>
            <a class="navbar-brand" href="{{ URL('/show-posts') }}" wire:navigate>Show Post</a>
            <a class="navbar-brand" href="{{ URL('/create-post') }}" wire:navigate>Create Post</a>
            <a class="navbar-brand" href="{{ URL('/students') }}" wire:navigate>Student Create</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="/login" wire:navigate>Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="/register" wire:navigate>Register</a>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <livewire:logout />
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3 class="mt-3 mb-5 text-center">Laravel 10 Livewire User Registration and Login</h3>
        @if (session()->has('message'))
        <div class="row justify-content-center text-center mt-3">
            <div class="col-md-8">
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            </div>
        </div>
    </div>
        @endif

        {{ $slot }}

       
        <footer class="footer mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>
                        123 Street Name<br>
                        City, State, ZIP<br>
                        Email: info@example.com<br>
                        Phone: (123) 456-7890
                    </p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <p>&copy; 2024 Your Company. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    

    <script data-navigate-once src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>