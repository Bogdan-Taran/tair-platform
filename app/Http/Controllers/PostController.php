<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('dashboard', compact('posts'));
    }

    public function create(){
        return view('add-new-post');
    }
    public function store(Request $request){
        $request->validate([
            'child_firstname' => 'required|min:2|max:255|string',
            'child_lastname' => 'required|string|min:2|max:255',
            'child_patronymic' => 'required|string|min:2|max:255',
            'child_birthday' => 'required',
            'child_branch' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->back()->with('status', 'Post added');
    }

    public function edit($id){
        $post = Post::findOrFail($id);
        return view('edit-new-post', compact('post'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'child_firstname' => 'required|min:2|max:255|string',
            'child_lastname' => 'required|string|min:2|max:255',
            'child_patronymic' => 'required|string|min:2|max:255',
            'child_birthday' => 'required',
            'child_branch' => 'required',
        ]);
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect()->back()->with('status', 'Post updated');
    }

    public function delete($id){
        Post::findOrFail($id)->delete();

        return redirect()->route('dashboard')->with('status', 'Post deleted');
    }
}
