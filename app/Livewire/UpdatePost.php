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
        $post = Post::findOrFail($this->id);
        // dd($post);
        $post->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        session()->flash('status', 'Post successfully update.');

        $this->redirect('/show-posts', navigate: true);
    }
    public function render()
    {
        return view('livewire.update-post');
    }
}
