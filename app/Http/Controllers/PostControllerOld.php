<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //SHOW ALL POST LIST
    public function index()
    {
        //$posts = Post::all();
        //  $posts = Post::paginate(5);
        $posts = Post::orderBy('id', 'DESC')->simplePaginate(5);
        // dd($posts);
        return view('posts.index', compact('posts'));
    }

    //SHOW CREATE FORM
    public function create()
    {
        return view('posts.create');
    }

    //STROING DATA
    public function store(Request $request)
    {
        // dd($request->all());
        //data validation
        $validatedData = $request->validate([
            'name'        => 'required',
            'category'    => 'required',
            'description' => 'required|min:10|max:50'
        ]);

        //This area is validation passed indication

        $validatedData['status'] = 'enable';

        $post = new Post(); // creating object of Post model class
        $post->create($validatedData); //Creating data under $post object

        return redirect()->route('post.index')->with('successMessage', 'Post successfully created');
    }

    //showing single post
    public function show($id)
    {
        //$post = Post::find($id); // only finding data
        $post = Post::findOrFail($id); // find or fail if not found
        return view('posts.show', compact('post'));
    }

    //edit form
    public function edit($id)
    {
        $post = Post::findOrFail($id); // find or fail if not found
        return view('posts.edit', compact('post'));
    }

    //update data
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);


        //dd($request->all());
        //data validation
        $validatedData = $request->validate([
            'name'        => 'required',
            'category'    => 'required',
            'description' => 'required|min:10|max:50',
            'status'      => 'required'
        ]);

        $post->update($validatedData); //update data under $post object

        return redirect()->route('post.edit', $post->id)->with('successMessage', 'Post successfully updated');

    }

    //deleteing single post data
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect()->route('post.index')->with('successMessage', 'Post successfully deleted');
    }
}
