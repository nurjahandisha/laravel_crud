<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function home(){
        return view('addpost');
    }

    public function allpost(){
        $posts = Post::latest()->get();
        // dd($posts);
        return view('allpost',compact('posts'));
    }




    public function storepost(Request $request){
    //    return $request->all();
    // validation
    $request->validate(

        [
           'title'=>'required|string|max:30',
           'detail'=>'required'
           
        ]

    );

// insert
$newpost= new Post();
$newpost->title = $request->title;
$newpost->detail = $request->detail;
$newpost->save();

return back()->with('success','post inserted successfully');


    }

    
    public function editpost($id){
        $post = post::find($id);
        // dd($id);
        return view('editpost',compact('post'));
    }

    public function updatepost(Request $request,$id){
        $request->validate(

            [
               'title'=>'required|string|max:30',
               'detail'=>'required'
               
            ]
    
        );
        $post = post::find($id);
        // dd($id);
        $post->title = $request->title;
        $post->detail = $request->detail;
        $post->save();
        return redirect()->route('allpost');
        
        
    }

    public function deletepost($id){
        $post = post::find($id);
        $post->delete();
        return redirect()->route('allpost');
        
        


    }



}
