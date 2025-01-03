<?php

namespace App\Http\Controllers;
use App\Models\NewsEvent;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    public function index(Request $request){
        $search = $request->search;
        if($search != ""){
            $news = NewsEvent::where('news_name','like',"%$search%")->get();
        }else{
            $news = NewsEvent::all();
        }

        return view('admin/news',['news' => $news]);
    }

    public function insertNews(){
        return view('admin.control.insertNews');
    }

    public function insertNewsPost(Request $request){
        $validate = $request->validate([
            'name' => 'required|unique:news_event,news_name',
            'title' => 'required',
            'date' => 'required|date',
            'content1' => 'required',
            'content2' => 'required',
            'img1' => 'nullable|image|mimes:jpg,png,jpeg',
            'img2' => 'nullable|image|mimes:jpg,png,jpeg',
            'img3' => 'nullable|image|mimes:jpg,png,jpeg'
         ],[
            'required' => ':attribute is required'
         ]);

         if($request->hasFile('img1')){
                $file=$request->file('img1');
                $imageName1 = $file->getClientOriginalName();
                $file->move("images",$imageName1);
            }else{
                $imageName1 = null;
            }

        
        if($request->hasFile('img2')){
            $file=$request->file('img2');
            $imageName2 = $file->getClientOriginalName();
            $file->move("images",$imageName2);
                }else{
                    $imageName2 = null;
                }
                
        if($request->hasFile('img3')){
            $file=$request->file('img3');
            $imageName3 = $file->getClientOriginalName();
            $file->move("images",$imageName3);
                    }else{
                        $imageName3 = null;
                    }    


                    
         $news = new NewsEvent();
         $news->news_name = $request->name;
         $news->news_content = $request->content1;
         $news->content2 = $request->content2;
         $news->newstitle = $request->title;
         $news->news_date = $request->date;
         $news->img1 = $imageName1;
         $news->img2 = $imageName2;
         $news->img3 = $imageName3;
         $news->save();

         return redirect()->route('admin.news')->with('msg','Insert Successfully !!!');

    }

    public function updateNews(Request $request){
        $news = NewsEvent::where('news_id',$request->id)->get();
        return view('admin.control.updateNews')->with('news',$news);
    }

    public function updateNewsPost(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'date' => 'required|date',
            'content1' => 'required',
            'content2' => 'required',
            'img1' => 'nullable|image|mimes:jpg,png,jpeg',
            'img2' => 'nullable|image|mimes:jpg,png,jpeg',
            'img3' => 'nullable|image|mimes:jpg,png,jpeg'
         ],[
            'required' => ':attribute is required'
         ]);

         if($request->hasFile('img1')){
            $file=$request->file('img1');
            $imageName1 = $file->getClientOriginalName();
            $file->move("images",$imageName1);
        }else{
            $imageName1 = null;
        }

    
    if($request->hasFile('img2')){
        $file=$request->file('img2');
        $imageName2 = $file->getClientOriginalName();
        $file->move("images",$imageName2);
            }else{
                $imageName2 = null;
            }
            
    if($request->hasFile('img3')){
        $file=$request->file('img3');
        $imageName3 = $file->getClientOriginalName();
        $file->move("images",$imageName3);
                }else{
                    $imageName3 = null;
                }    


                
     $news = NewsEvent::find($request->id);
     $news->news_name = $request->name;
     $news->news_content = $request->content1;
     $news->content2 = $request->content2;
     $news->newstitle = $request->title;
     $news->news_date = $request->date;
     $news->img1 = $imageName1;
     $news->img2 = $imageName2;
     $news->img3 = $imageName3;
     $news->save();

     return redirect()->route('admin.news')->with('msg','Update Successfully !!!');
    }

    public function deleteNews(Request $request){

        $news = NewsEvent::find($request->id);
        $news->delete();
        return redirect()->route('admin.news')->with('msg','Delete succsessfully');

    }
}
