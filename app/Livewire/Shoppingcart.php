<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order as Ord;
use App\Models\ShoppingCart as Cart;
use Illuminate\Support\Facades\Auth;

class Shoppingcart extends Component
{
    public $cartitems, $sub_total = 0, $total = 0, $tax = 0;

    public function render()
    {
        $this->cartitems = Cart::with('product')
            ->where('user_id', Auth::id())
            ->get();

        $this->total = 0;
        $this->sub_total = 0;
        $this->tax = 0;

        foreach ($this->cartitems as $item) {
            $this->sub_total += $item->product->price * $item->quantity;
        }

        // Assuming a fixed tax rate for simplicity
        $this->tax = $this->sub_total * 0.1; // 10% tax
        $this->total = $this->sub_total + $this->tax;

        return view('livewire.shoppingcart');
    }

    public function incrementQty($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->quantity += 1;
        $cart->save();
        session()->flash('success', 'Product quantity updated.');
    }

    public function decrementQty($id)
	{
		// dd($id);
		$cart = Cart::whereId($id)->first();
		$cart->quantity -= 1;
		$cart->save();
		session()->flash('success', 'Product quantity update !!!');
	}

    public function removeItem($id){
        $cart = Cart::whereId($id)->first();

        if($cart){
            $cart->delete();
        }
        $this->dispatch('updateCartCount'); 
        session()->flash('success', 'Product remove from cart !!!');
    }

    public function submit()
    {
        $userId = Auth::id();

        foreach ($this->cartitems as $item) {
            Ord::create([
                'user_id' => $userId,
                'product_id' => $item->product_id,
                'product_name' => $item->product->name,
                'order_status' => 'Complated', // default status
                'amount' => $item->product->price * $item->quantity,
            ]);

            // Remove the item from the cart after creating the order
            $item->delete();
        }

        session()->flash('message', 'Order successfully placed.');
        return redirect()->route('home'); // Redirect to an order success page
    }
}
