<div>
  <h1> count: {{ $count }}
    <button wire:click.throttle.1000ms="increment(3)">+</button>
    <button wire:click.throttle.1000ms="decrement(1)">-</button>
  </h1>
  <button wire:click="test">Test</button>
  <button wire:click="myMethod">Click Me</button>
  <span class="p-2"></span>
  <button class="" wire:click="incrementQty()">
    <span class="m-auto text-2xl font-thin">+</span>
  </button>
</div>