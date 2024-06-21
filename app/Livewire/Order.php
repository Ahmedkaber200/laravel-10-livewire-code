<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order as Ord;
use Illuminate\Support\Facades\Auth;

class Order extends Component
{
    public $user_id;
    public $product_id;
    public $product_name;
    public $amount;
    public function render()
    {
        return view('livewire.order');
    }

    public function submit()
    {
        dd('submit');
        $this->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        foreach ($this->cartitems as $item) {
            Ord::create([
                'user_id' => Auth::id(),
                'product_id' => $item->product_id,
                'product_name' => $item->product->name,
                'order_status' => 0, // default status
                'amount' => $item->product->price * $item->quantity,
            ]);

            // Optionally, remove the item from the cart after creating the order
            $item->delete();
        }

        session()->flash('message', 'Order successfully placed.');
        return redirect()->route('order.success'); // Redirect to an order success page
    }
}
