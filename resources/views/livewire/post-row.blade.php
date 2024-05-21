<tr>
<!-- <tr @class(["archived" => $post->is_archived])> -->
    <td>{{ ($post->id) }}</td>
    <td>{{ strtoupper($post->title) }}</td>
    <td>{{ strtoupper(str($post->content)->words(10)) }}</td>
    <!-- <td>{{ str($post->content)->words(10) }}</td> -->
    <td>
    <button wire:navigate href='view-post/{{ ($post->id) }}'>View</button>
    <button wire:navigate href='update-post/{{ ($post->id) }}'>Update</button>
        <button type="button" wire:click="$parent.delete({{ $post->id }})" wire:confirm="Are You Sure you want to delete this post!" ;>Delete</button>
    </td>
</tr>