<div>
    <h1>Posts</h1>
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->title }}</li>
            <li>{{ $post->content }}</li>
        @endforeach
        <button wire:navigate href='/show-posts'>Back</button>
    </ul>
</div>