<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function search(){
        $search_text = $_GET['query'];
        $posts = Post::where('title', 'LIKE','%'.$search_text.'%')->get();
        return view('/showPosts',['posts'=>$posts]);
    }
    public function delete(Post $post){
        $post->delete();
        return redirect('/showPosts');

    }
    public function showEditScreen(Post $post){
        
        return view('edit-post', ['post' => $post]);
    }
    public function Edit(Post $post, Request $request){
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();
        $post->update($incomingFields);
        return view('/posts');
    }
    public function createPost(Request $request){
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'images/offres';
        $request->image->move($path, $file_name);

        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => '',
        ]);
        $incomingFields['image'] = $file_name;
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();
        Post::create($incomingFields);
        return redirect('/posts');
    }
    
}
