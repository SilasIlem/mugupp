<?php

namespace App\Http\Controllers;

use App\Models\Follower;
use App\Models\Notification;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('cover_pic')) {
            $extension = $request->file('cover_pic')->getClientOriginalExtension();
            $fileNameToStoreAs = pathinfo($request->file('cover_pic')->getClientOriginalName(), PATHINFO_FILENAME) . time() . '.' . $extension;
            $request->file('cover_pic')->storeAs('public/images/posts_cover', $fileNameToStoreAs);
        } else {
            $fileNameToStoreAs = null;
        }

        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->img_name = $fileNameToStoreAs;
        $post->head = $request->head;
        $post->body = $request->body;
        $post->save();
        $followers = Auth::user()->followers;

        foreach ($followers as $follower) {
            Notification::create([
                'type' => 'post',
                'recipient_id' => $follower->id,
                'post_id' => $post->id,
                'text' => Auth::user()->name . ' has just created a post.'
            ]);
        };
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return [Post::with(['comments', 'comments.user', 'user', 'impressed', 'impressed.user', 'savedby', 'user.followers', 'user.following'])->paginate(15)];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
