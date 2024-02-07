<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class ArticleCreateForm extends Component
{
    #[Validate('required|min:3')]
    public $title;

    #[Validate('required|min:10')]
    public $subtitle;

    #[Validate('required|min:20')]
    public $content;

    protected $GOOGLE_KEY = 1234567890;

    public function store()
    {
        $this->validate();

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'content' => $this->content,
        ]);

        $this->cleanForm();
        // $this->reset();

        session()->flash('message', 'Articolo creato con successo.');
    }

    protected function cleanForm()
    {
        $this->title = '';
        $this->subtitle = '';
        $this->content = '';
    }

    public function render()
    {
        return view('livewire.article-create-form');
    }
}
