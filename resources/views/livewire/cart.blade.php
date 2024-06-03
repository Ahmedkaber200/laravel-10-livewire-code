@foreach ($items as $item)
    <div wire:key="cart-item-{{ $item->id }}">
        <img src="...">
        <span><h1>ajsjsjsjsj</h1></span>
        <x-button wire:click="remove"/>
    </div>
@endforeach
<div wire:click="remove">remove</div>
