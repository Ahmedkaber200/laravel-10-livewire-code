<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create Post')]
class CreatePost extends Component
{
    // title validation seprate
    #[Rule('required', message: 'You, add a title')]
    #[Rule('min:4', message: 'yo, too short')]
    public $title = '';
    
    #[Rule('required')]
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

        session()->flash('status', 'Post successfully add.');

        $this->redirect('/show-posts', navigate: true);
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}