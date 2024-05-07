<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Redirect;


class UpdatePost extends Component
{
    public $id;
    public $title;
    public $content;

    public function mount(Post $post)
    {
        // dd($post);
        $this->id = $post->id;
        $this->title = $post->title;
        $this->content = $post->content;
    }
 
    public function update(Post $post)
    {
        // dd($post);
        $post = Post::findOrFail($this->id);
 
        $post->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);
        return Redirect::to('/show-posts');
    }
    public function render()
    {
        return view('livewire.update-post');
    }
}
