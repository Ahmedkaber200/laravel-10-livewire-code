<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\ShoppingCart;

class Productlist extends Component
{
    public $products;
    public function render()
    {
       $this->products = Product::get();
        return view('livewire.productlist',['products'=>$this->products]);
    }

    public function addToCart($id){
        if(auth()->user()){
            // add to cart
            $data = [
                'user_id' => auth()->user()->id,
                'product_id' => $id,
            ];
            ShoppingCart::updateOrCreate($data);

            $this->dispatch('updateCartCount'); 

            session()->flash('success', 'Product Added to the cart successfully');
        }else{
            // return to login page
            return redirect(route('login'));
        }
    }
}