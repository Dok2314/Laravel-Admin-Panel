<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function articleView(){
        return view('articles.index'); 
    }
    public function articleCreate(ArticleRequest $request){

        $newArticle = new Article();

        $newArticle->title = $request->input('title');
        $newArticle->email = $request->input('email');
        $newArticle->message = $request->input('message');

        $newArticle->save();
        session(['article' => 'Статья '.$newArticle['title'].' успешно добавлена!']);
        return redirect(route('user.admin'));
    }
    public function getAllArticle(){
        $data = Article::all();
        return view('articles.all',[
            'data' => $data,
        ]);
    }
    
   public function findArticle($id){
       $article = Article::findOrFail($id);
       return view('articles.oneArticle',[
           'article' => $article,
       ]);
   }
   public function update(ArticleRequest $request,$id){
    $article = Article::findOrFail($id);

    $article->title = $request->input('title'); 
    $article->email = $request->input('email'); 
    $article->message = $request->input('message'); 
    $article->update();
    return redirect(route('allArticle'))->with('success','Сатья успешно обновлена!');
   }
   public function delete($id){
       $article = Article::findOrFail($id);
       $article->delete();
       return redirect(route('allArticle'))->with('success','Статья успешно удалена!');
   }
}
