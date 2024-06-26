<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Product;

#[Title('Todos')]
class Todos extends Component
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
        }else{
            // return to login page
            return redirect(route('login'));
        }
    }
}