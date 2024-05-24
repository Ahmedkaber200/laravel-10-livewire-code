<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/app.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>

    <nav>
    <!-- <a href="/" class="{{ request()->is('/') ? 'current' : '' }}">Todos</a> -->
        <a wire:navigate href="/" class="current">Todos</a>
        <!-- <a href="/" @class(['current' => request()->is('/')])>Todos</a> -->
        <a wire:navigate href="/counter">Counter</a>
        <a wire:navigate href="helloworld">Hello World</a>
        <a wire:navigate href="show-posts">Show Post</a>
        <a wire:navigate href="create-post">Create Post</a>
        <a wire:navigate href="students">Student Create</a>
    </nav>
        {{ $slot }}
    </body>
</html>