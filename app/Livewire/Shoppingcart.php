<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ShoppingCart as Cart;

class Shoppingcart extends Component
{
    public $cartitems;
    public $count = 10;
    // public $count = 1;

    // public function increment($by){
    //     dd('increments');
    //     // dd($by);
    //     $this->count = $this->count + $by;
    // }
    public function render()
    {
        $this->cartitems = Cart::with('product')
            ->where(['user_id' => auth()->user()->id])
            ->get();
        return view('livewire.shoppingcart');
    }


    public function incrementQty($id)
    {
        dd($id);
        // $cart = Cart::whereId($id)->first();
        // $cart->quantity += 1;
        // $cart->save();
        // session()->flash('success', 'Product quantity update !!!');
    }

	public function decrementQty($id)
	{
		dd($id);
		// $cart = Cart::whereId($id)->first();
		// $cart->quantity -= 1;
		// $cart->save();
		// session()->flash('success', 'Product quantity update !!!');
	}

    public function test() {
		dd("test");
	}
}
