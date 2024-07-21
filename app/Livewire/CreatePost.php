<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component {
    public function render() {
        return view('livewire.create-post');
    }

    #[Rule('required', as: 'title', message: 'Please enter a title')]
    #[Rule('min:4', as: 'title', message: 'Title must be at least 4 characters')]
    public string $title = '';
    #[Rule('required', as: 'content', message: 'Please enter a content')]
    public string $content = '';

    public function save() {
        $this->validate();
        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);
        $this->redirect('posts', navigate: true);
    }
}
