<tr>
<!-- <tr @class(["archived" => $post->is_archived])> -->
    <td>{{ ($post->id) }}</td>
    <td>{{ strtoupper($post->title) }}</td>
    <td>{{ strtoupper(str($post->content)->words(10)) }}</td>
    <!-- <td>{{ str($post->content)->words(10) }}</td> -->
    <td>
    <button type="button" onclick="window.location.href='update-post/{{ ($post->id) }}'">Update</button>

    <!-- <form action="update-post/{{ ($post->id) }}"><button>Update</button>
    </form> -->
    <!-- <button wire:click="showUpdateForm({{ $post->id }})">Update</button> -->
    <!-- <button type="button" wire:click="update-post">Update</button> -->
    <!-- <button type="button"  wire:click="update({{ $post->id }})">Update</button> -->

        <button type="button" wire:click="$parent.delete({{ $post->id }})" wire:confirm="Are You Sure you want to delete this post!" ;>Delete</button>
    </td>
</tr>