<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ShoppingCart;
class Cartcounter extends Component
{
    public $total = 0;

    protected $listeners = ['updateCartCount' => 'getCartItemCount'];
    public function render()
    {
        $this->getCartItemCount();
        return view('livewire.cartcounter');
    }

    public function getCartItemCount(){
        $this->total = Shoppingcart::whereUserId(auth()->user()->id)->count();
    }
}