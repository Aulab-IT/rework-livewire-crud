<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleEditForm extends Component
{
    public $title;
    public $subtitle;
    public $content;
    public $article;

    public function update()
    {
        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'content' => $this->content
        ]);

        session()->flash('message', 'Articolo aggiornato con successo');
    }

    public function mount($articleId)
    {
        $this->article = Article::find($articleId);
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->content = $this->article->content;
    }

    public function render()
    {
        return view('livewire.article-edit-form');
    }
}
