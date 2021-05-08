<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
use App\Models\News;

use Illuminate\Http\Request;


class NewsController extends Controller
{
    public function index() {
        $news = News::all();
        return view('index', compact('news'));
    }
    // public function show($id) {
    //     $news = News::findOrFail($id);
    //     return $news->toArray() + [
    //         'contents' => $news->content
    //     ];
    // }
    public function show(News $news)
    {
        $new = News::select('id')->get();
        return view('show/result', compact('news'));
    }
    public function store(CreateNewsRequest $request) {
       
        return News::create([
            'title' => $request->title,
            'date' => $request->date,
            'content' =>$request->text
        ]);
        return redirect()->route('NewsTest.index');
       
        }
    
    public function update(
        int $id, CreateNewsRequest $request
      
        ) {
        if ($entity = News::findOrFail($id)) {
            $entity->title = $request->title;
            $entity->content = $request->text;
            $entity->date = $request->date;
            $entity->save();
            return redirect()->route('NewsTest.index');
        }
        
        }
    
    
    // public function destroy($id) {
    //     // News::destroy($id);
        
        
    //     $news = News::findORFail($id);
    //     $news->delete();
    //     echo ("Данные ".$id ." id удалены");
    // }
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('NewsTest.index');
    }
    public function edit(News $news) {
        return view('update', compact('news'));
    }

    public function getid(News $news) {
        return view('update', compact('news'));
    }
}
