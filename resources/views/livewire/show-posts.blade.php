<div>
    <h2>Posts:</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr wire:key="{{ $post->id }}">
                    <td>{{ strtoupper($post->title) }}</td>
                    <td>{{ strtoupper(str($post->content)->words(10)) }}</td>
                    <!-- <td>{{ str($post->content)->words(10) }}</td> -->
                    <td>
                        <button type="button" wire:click="delete({{ $post->id }})"
                        wire:confirm="Are You Sure you want to delete this post!";
                        >Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
