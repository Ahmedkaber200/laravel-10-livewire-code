<div>
  <h1> count: {{ $count }}
   <button wire:click.throttle.1000ms="increment(3)">+</button>
   <button wire:click.throttle.1000ms="decrement(1)">-</button></h1>
</div>