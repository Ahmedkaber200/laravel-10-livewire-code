<?php

namespace App\Livewire;
use Livewire\Component;

class PostRow extends Component
{
    // null varaible properties
    public $post;
    // public $archive;
    public function mount($post){
        // dd($post);
        $this->post = $post;
    }
    // public function archive(){
    //     $this->post->archive();
    // }
    public function render()
    {
        return view('livewire.post-row');
    }
}
