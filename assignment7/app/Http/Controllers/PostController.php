<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $posts = DB::table("posts")->join('users', 'posts.user_id', 'users.id')->orderBy('posts.created_at', 'desc')->select('posts.*', 'users.username', 'users.email', 'users.firstname', 'users.lastname')->get();
        return view('home', compact('user', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $user = Auth::user();
        $post = $request->validated();
        $post['user_id'] = $user->id;
        $post['created_at'] =  \Carbon\Carbon::now(); # new \Datetime()
        $post['updated_at'] = \Carbon\Carbon::now();  # new \Datetime()
        DB::table('posts')->insert($post);
        return redirect()->route('home')->with('success', '');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = DB::table('posts')
            ->join('users', 'posts.user_id', 'users.id')
            ->select('posts.*', 'users.username', 'users.email', 'users.firstname', 'users.lastname')
            ->where('posts.id', $id)
            ->first();

        $user = Auth::user();

        return view('singlepost', compact('post', 'user'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Auth::user();
        $post = DB::table('posts')->find($id);
        return view('edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Auth::user();
        $validated = $request->validate([
            'post' => 'required',
        ]);
        $post = DB::table("posts")->where('id', $id)->first();
        if ($post && $user && $user->id == $post->user_id) {
            DB::table('posts')->where('id', $id)->update($validated);

            return redirect()->route('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Get the authenticated user
        $user = Auth::user();

        // Check if the user is the author of the post
        $post = DB::table("posts")->where('id', $id)->first();

        if ($post && $user && $user->id == $post->user_id) {
            // Delete the post
            $deleted = DB::table("posts")->where('id', $id)->delete();

            // Redirect with success message
            return redirect()->route('home')->with('toast', 'Post deleted successfully!');
        }

        // Redirect with an error message or to a different route
        return redirect()->route('home')->with('error', 'You are not authorized to delete this post.');
    }
}
