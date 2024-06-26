<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Show Post')]

class ShowPosts extends Component
{
    public function delete(Post $postId){
        $postId->delete();
        // dd($postId);
        // Post::find($postId)->delete();
    }
    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Post::all(),
        ]);
    }
}