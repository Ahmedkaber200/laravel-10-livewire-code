<div>
    <form wire:submit="add">
        <!-- current data change -->
        <input type="text" wire:model.change="todo">
        <span>Current todo: {{ $todo }}</span>
        <button type="submit">Add</button>
    </form>
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>