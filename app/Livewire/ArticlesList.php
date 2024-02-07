<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticlesList extends Component
{
    public function destroy($articleId)
    {
        $article = Article::find($articleId);
        $article->delete();
    }

    public function render()
    {
        $articles = Article::all();

        return view('livewire.articles-list', compact('articles'));
    }
}
