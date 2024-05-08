<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
class ViewPost extends Component
{
    public $posts;

    public function mount(Post $post)
    {
        // Fetch posts data from the database
        $this->posts = Post::find($post);
        // dd($this->posts);
    }

    public function render()
    {
        return view('livewire.view-post');
    }
}
