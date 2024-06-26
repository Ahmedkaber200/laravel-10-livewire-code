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

    @import url("https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap");

    :root {
        --bodyFonts: "Josefin Sans", sans-serif;
        --pinkColor: #5557f3;
        --titleColor: #000000;
        --bodyColor: #666666;
        --lightblueColor: #8d99ff;
        --whiteColor: #ffffff;
        --fontSize: 16px;
        --transition: 0.5s;
    }

    body {
        padding: 0;
        margin: 0;
        font-family: "Noto Sans", sans-serif !important;
    }

    a,
    a:hover {
        text-decoration: none !important;
    }

    img {
        max-width: 100%;
    }

    hr {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }

    .pt-100 {
        padding-top: 100px;
    }

    .pt-45 {
        padding-top: 45px;
    }

    #not_found {
        text-align: center;
        color: red;
    }

    .grand-total {
        margin-top: 1rem;
        text-align: center;
        font-weight: 600;
    }

    .table {
        margin-bottom: 0 !important;
    }

    .default-btn {
        padding: 12px 25px 10px;
        text-align: center;
        color: var(--whiteColor) !important;
        font-size: var(--fontSize);
        transition: var(--transition);
        display: inline-block;
        align-items: center;
        justify-content: center;
        position: relative;
        border-radius: 8px;
        z-index: 0;
        background: var(--pinkColor);
        overflow: hidden;
        white-space: nowrap;
        border: 0;
    }

    .default-btn:before {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        width: 550px;
        height: 550px;
        margin: auto;
        background: var(--lightblueColor);
        border-radius: 8px;
        z-index: -1;
        transform-origin: top center;
        transform: translateX(-50%) translateY(-5%) scale(0.4);
        transition: transform 0.9s;
    }

    .default-btn:hover {
        color: var(--whiteColor) !important;
    }

    .default-btn:hover:before {
        transition: transform 1s;
        transform: translateX(-45%) translateY(0) scale(1);
        transform-origin: bottom center;
    }

    .btn-success {
        background-color: #f96b6a !important;
        border-color: #f96b6a !important;
    }

    .featured-area {
        background-color: #edeff9;
    }

    .featured-tab-area .tabs {
        margin: 0;
        padding: 0;
        list-style: none;
        float: right;
    }

    .featured-tab-area .tabs li {
        display: inline-block;
        line-height: initial;
        margin-right: 20px;
    }

    .featured-tab-area .tabs li a {
        display: inline-block;
        position: relative;
        color: var(--titleColor);
        padding: 13px 26px 10px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .featured-tab-area .tabs li.active a {
        background-color: var(--pinkColor);
        color: var(--whiteColor);
    }

    .featured-tab-area .tabs li.current a {
        background-color: var(--pinkColor);
        color: var(--whiteColor);
    }

    .featured-tab-area-ml .tabs {
        margin-top: 0 !important;
        float: left;
    }

    .tab .tabs_item {
        display: none;
    }

    .tab .tabs_item:first-child {
        display: block;
    }

    .featured-item {
        margin-bottom: 30px;
        background-color: var(--whiteColor);
        border-radius: 5px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .featured-item .featured-item-img {
        position: relative;
        z-index: 1;
        transition: 0.3s linear;
        overflow: hidden;
    }

    .featured-item .featured-item-img a {
        display: block;
    }

    .featured-item .featured-item-img a img {
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border: 4px solid var(--whiteColor);
        transition: 0.3s linear;
    }

    .featured-item .featured-item-img a img:hover {
        scale: 1.08;
    }

    .featured-item .content {
        padding: 20px 15px;
    }

    .featured-item .content h3 {
        margin-bottom: 10px;
    }

    .featured-item .content h3 a {
        color: var(--titleColor);
        -webkit-transition: var(--transition);
        transition: var(--transition);
        font-weight: bold;
    }

    .featured-item .content .content-in {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 12px 12px 10px;
        border-radius: 3px;
    }

    .featured-item .content .content-in i {
        color: #ffcc00;
    }

    .featured-item .content .content-in span {
        font-size: 15px;
        color: var(--titleColor);
        font-weight: 500;
    }

    .featured-item .content .content-in h4 {
        font-size: 15px;
        color: var(--titleColor);
        font-weight: 500;
        margin-bottom: 0;
    }

    .featured-item .content .featured-content-list {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 15px 0 0;
    }

    .featured-tab-area .tabs li {
        margin-right: 5px;
    }

    #staticBackdropLabel {
        font-weight: bold;
    }

    /* responsive css */
    @media only screen and (max-width: 767px) {
        .featured-tab-area .tabs {
            margin: 20px 0 0;
            float: none;
            text-align: left;
        }

        .featured-tab-area .tabs li:last-child {
            margin-right: 5px;
        }

        .featured-tab-area .tabs li a {
            font-size: 14px;
            padding: 12px 16px 9px;
        }

        .featured-item .content {
            padding: 20px 10px;
        }

        .featured-item .content h3 {
            font-size: 19px;
        }

        .featured-item .content .content-in span {
            font-size: 14px;
        }

        .featured-item .content .content-in h4 {
            font-size: 14px;
        }

        .featured-item .content .featured-content-list {
            padding: 12px 0 0;
        }
    }

    @media only screen and (min-width: 576px) and (max-width: 767px) {
        .featured-item .content {
            padding: 20px 15px;
        }
    }

    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .featured-tab-area .tabs li a {
            font-size: 14px;
            padding: 12px 16px 9px;
        }

        .featured-item .featured-item-img .featured-user {
            top: 20px;
        }

        .featured-item .featured-item-img .featured-user .featured-user-option img {
            margin-right: 7px;
            width: 25px !important;
            height: 25px !important;
        }

        .featured-item .featured-item-img .featured-user .featured-user-option span {
            font-size: 13px;
            padding-top: 2px;
        }

        .featured-item .featured-item-img .featured-item-clock {
            font-size: 18px;
        }

        .featured-item .content {
            padding: 20px 10px;
        }

        .featured-item .content h3 {
            font-size: 19px;
        }

        .featured-item .content .content-in span {
            font-size: 14px;
        }

        .featured-item .content .content-in h4 {
            font-size: 14px;
        }

        .featured-item .content .featured-content-list {
            padding: 12px 0 0;
        }

        .featured-item .content .featured-content-list p {
            font-size: 14px;
        }

        .featured-item .content .featured-content-list p i {
            font-size: 16px;
        }
    }

    @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .featured-tab-area .tabs li {
            margin-right: 5px;
        }

        .featured-tab-area .tabs li a {
            font-size: 14px;
            padding: 12px 16px 9px;
        }

        .featured-item .content h3 {
            font-size: 16px;
        }
    }

    @media only screen and (min-width: 1200px) and (max-width: 1299px) {
        .featured-tab-area .tabs li a {
            font-size: 14px;
            padding: 12px 16px 9px;
        }

        .featured-item .content {
            padding: 20px 20px;
        }

        .featured-item .content .content-in {
            padding: 10px 5px 8px;
        }

        .featured-item .content h3 {
            font-size: 18px;
        }
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ URL('/') }}" wire:navigate>Home</a>
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

                    <x-nav-link :href="route('shoppingcart')" :active="request()->routeIs('shoppingcart')">
                        {{ __('Cart') }}
                    </x-nav-link>

                   
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