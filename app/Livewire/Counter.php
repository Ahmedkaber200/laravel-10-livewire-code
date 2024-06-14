<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\ShoppingCart as Cart;

#[Title('Counter')]
class Counter extends Component
{
    public $count = 10;

    public function increment($by){
        // dd('increments');
        // dd($by);
        $this->count = $this->count + $by;
    }
    public function decrement($by){
        // dd('decrement');
        $this->count = $this->count - $by;
    }
    public function test() {
        dd("test");
      }
      public function myMethod()
    {
        dd('myMethod');
    }
      public function incrementQty($id)
      {
          dd('incrementQty');
          $cart = Cart::whereId($id)->first();
          $cart->quantity += 1;
          $cart->save();
          session()->flash('success', 'Product quantity update !!!');
      }
    public function render()
    {
        return view('livewire.counter');
    }
}