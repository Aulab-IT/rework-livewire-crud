<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreateForm extends Component
{
    public $title;
    public $subtitle;
    public $content;
    protected $GOOGLE_KEY = 1234567890;

    public function store()
    {
        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'content' => $this->content,
        ]);

        $this->cleanForm();

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
