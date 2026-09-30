<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /*
    * index
    *
    * @return void
    */

    public function index()
    {
        $posts = Post::latest()->paginate(5);

        return view('posts.index', compact('posts'));
    }

    /*
    * create
    *
    * @return void
    */

    public function create()
    {
        return view('posts.create');
    }

    /*
    * store
    *
    * @return void
    */
    public function store(Request $request)
    {
        // validate form
        $validated = $request->validate([
            'image' => ['required'],
            'title' => ['required'],
            'content' => ['required'],

        ]);

        // save image file
        $image = $request->file('image');
        $image->storeAs('posts', $image->hashName(), 'public');

        // Create posts
        Post::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data berhasil di buat']);
    }

    /*
    * show
    *
    * @params mixed $id
    * @return void
    */
    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    /*
    * edit
    *
    * @params mixed $post
    * @return void
    */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /*
    * edit
    *
    * @params mixed $post
    * @return void
    */
    public function update(Request $request, Post $post)
    {
        // validate form
        $validated = $request->validate([
            'image' => ['required'],
            'title' => ['required'],
            'content' => ['nullable'],

        ]);

        // check if image is uploaded
        if ($request->hasFile('image')) {

            // save image file
            $image = $request->file('image');
            $image->storeAs('posts', $image->hashName(), 'public');

            // delete old image
            Storage::disk('public')->delete('posts/', $post->image);

            // update post
            $post->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'content' => $request->content,

            ]);
        } else {
            // update post
            $post->update([
                'title' => $request->title,
                'content' => $request->content,

            ]);
        }

        return redirect()->route('posts.index')->with(['success' => 'Data berhasil di update']);
    }

    /*
        * destroy
        *
        * @params mixed $post
        * @return void
        */
    public function destroy(Post $post)
    {
        // delete image
        Storage::disk('public')->delete('posts/', $post->image);

        // delete data post
        $post->delete();

        // redirect to index page
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }


}
