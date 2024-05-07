<div>
    <h2>Posts:</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <livewire:post-row :$post :key="$post->id">
            @endforeach
        </tbody>
    </table>
</div>