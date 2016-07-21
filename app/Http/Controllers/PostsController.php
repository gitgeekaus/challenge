<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PostsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $posts = \App\Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $posts = \App\Post::orderBy('created_at', 'desc')->get();
        return view('posts.create', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        if (\Auth::check()) {
            $user = \Auth::user();
            if ($user) {
                $input = $request->all();
                $post = new \App\Post();
                $post->user_id = $user->id;
                $post->title = $input['title'];
                $post->content = $input['content'];
                $post->save();
                return redirect('posts');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        if (\Auth::check()) {
            $post = \App\Post::find($id);
            return view('posts.show', compact('post'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        if (\Auth::check()) {
            $user = \Auth::user();
            if ($user) {
                $post = $user->post()->find($id);
                return view('posts.edit', compact('post'));
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        if (\Auth::check()) {
            $user = \Auth::user();
            if ($user) {
                $post = $user->post()->find($id);
                if ($post) {
                    $input = $request->all();
                    $post->title = $input['title'];
                    $post->content = $input['content'];
                    $post->save();
                }
                return redirect('posts');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        if (\Auth::check()) {
            $user = \Auth::user();
            if ($user) {
                $post = $user->post()->find($id);
                if ($post) {
                    $post->delete();
                }
               return redirect('posts');
            }
        }
    }

}
