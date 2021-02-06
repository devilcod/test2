<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostCreate extends Component
{
    use WithFileUploads;

    public $title;
    public $body;
    public $thumbnail;

    public function render()
    {
        return view('livewire.post.post-create');
    }

    public function createPost(){

        $this->validate([
            'title' => 'required|max:30',
            'body' => 'required|max:200',
            'thumbnail' => 'image', // 1MB Max
        ]);
        $this->thumbnail->storeAs('wedvfsdn','photos');

        Post::create([
            'user_id' => Auth::id(),
            'title' => $this->title,
            'body' => $this->body,
            'thumbnail' => $this->thumbnail,
        ]);

        $this->title = "";
        $this->body = "";
        $this->thumbnail = "";
    }
}
