<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Requests\Request;
use App\Post;
use Auth;


class PostsController extends Controller {

    public function __construct()
    {
        //$this->middleware('auth', ['except' => 'index']);
    }

    /*public function index()
    {

    }*/

	public function create()
    {
        return view('posts.create');
    }


    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, PostRequest $request)
    {
        $post = Post::findOrFail($id);

        $post->update($request->all());

        return redirect('/');
    }
    /**
     * @param Requests\CreatePostRequest $
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(PostRequest $request)
    {
        $post = new Post($request->all());

        Auth::user()->posts()->save($post);

        return redirect('/');
    }

}
