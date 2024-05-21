<div>
    <h2>New Post Add</h2>

    Current Title: <span x-text="$wire.title.toUpperCase() + $wire.content"></span>
    <br>
    Current Content: <span x-text="$wire.content.toUpperCase()"></span>
    <br>
    <br>
    <!-- <div x-data=" { count: 0} ">
        <span x-text="count"></span>

        <button x-on:click="count++">+</button>
    </div> -->

    <form wire:submit="save">
        <label>
            <span>Title</span>
            <input type="text" wire:model.live="title">
            @error('title') <em>{{ $message }}</em>@enderror
        </label>
        <br>
        <br>
        <label>
            <span>Content</span>
            <textarea type="text" wire:model.live="content"></textarea>
            @error('content') <em>{{ $message }}</em>@enderror
            <br>
            <small>
                Characters Calculate:
                <span x-text="$wire.content.length"></span>
            </small>
            <br>
            <small>
                Words Calculate:
                <span x-text="$wire.content.split(' ').length - 1"></span>
            </small>
        </label>
        <br>
        <button type="submit">Save</button>
    </form>
</div>