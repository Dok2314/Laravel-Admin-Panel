<?php

namespace App\Http\Controllers;

use App\Models\Good;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\GoodRequest;

class GoodController extends Controller
{
    
    public function createView(){
        $data['category'] = Category::all();
        return view('goods.create',$data);
    }
    public function create(GoodRequest $request){
        $good = new Good();
        $good->title = $request->input('title');
        $good->price = $request->input('price');
        $good->category_id = $request->input('category_id');
        $good->description = $request->input('description');
        $good->img = $request->file('img')->getClientOriginalName();
        $good->save();
        return redirect(route('allGood'))->with('success','Товар успешно добавлен!'); 
    }
    public function all(){
        $data['goods'] = Good::all();
        return view('goods.allGood',$data);
    }
    public function edit($id){
        $data['good'] = Good::findOrFail($id);
        return view('goods.edit',$data);
    }
    public function update(GoodRequest $request,$id){
        $good = Good::findOrFail($id);
        $good->title = $request->input('title');
        $good->price = $request->input('price');
        $good->category_id = $request->input('category_id');
        $good->description = $request->input('description');
        $good->img = $request->file('img')->getClientOriginalName();
        $good->update();
        return redirect(route('allGood'))->with('success','Товар успешно обновлен!'); 
    }
    public function delete($id){
        $good = Good::find($id);
        $good->delete();
        return redirect(route('allGood'))->with('success','Товар успешно удален!');
    }
}
