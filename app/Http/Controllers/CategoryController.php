<?php

namespace App\Http\Controllers;

use App\Models\Good;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function categoryView(){   
        return view('categories.create');
    }
    public function create(CategoryRequest $request){
        $newCategory = new Category();

        $newCategory->title = $request->input('title');
        $newCategory->save();

        session(['category' => 'Категория '.$newCategory['title'].' успешно добавлена!']);
        return redirect(route('user.admin'));    
    }
    public function allCategory(){
        $data['categories'] = Category::all();

        return view('categories.allCategory',$data);
    }
    public function editCategory($id){
        $category = Category::findOrFail($id);
        return view('categories.editCategory',[
            'category' => $category,
        ]);
    }
    public function edit(CategoryRequest $request,$id){
    $category = Category::findOrFail($id);

    $category->title = $request->input('title'); 
    $category->update();
    return redirect(route('all'))->with('success','Категория успешно изменена!');
    }
    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect(route('all'))->with('success','Категория успешно удалена!');
    }
}
