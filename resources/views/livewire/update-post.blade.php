<div>
<form wire:submit.prevent="update">
<!-- <form wire:submit="update"> -->
    <h1>Edit Data</h1>
    <!-- <input type="text" wire:model="id">  -->
    <input type="text" wire:model="title">
    <input type="text" wire:model="content">
    <button type="submit">Update</button>
</form>
</div>