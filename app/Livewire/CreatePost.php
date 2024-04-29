<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{
    // title validation seprate
    #[Rule('required', message: 'You, add a title')]
    #[Rule('min:4', message: 'yo, too short')]
    // public $title = '';

    // // content validation seprate
    // #[Rule('required')]
    
    // properties message
    public $content = '';

    // method message
    public function save(){
        $this->validate(
            // [
            // 'title' => 'required',
            // 'content' => 'required',
            // ]
        );
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->redirect('/show-posts');
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
