<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
use Auth;


class PostController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function create()
    {
        return view('posts.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post;
        $post -> user_id  = Auth::id(); //ログイン中のユーザーidを代入
        $post -> date    = $request -> date; //ユーザー入力のtitleを代入
        $post -> content     = $request -> content;
        $post -> hour     = $request -> hour; //ユーザー入力のbodyを代入
        $post -> language     = $request -> language;
        $post -> category     = $request -> content;
        
        $post -> save(); //保存してあげましょう
        
        return redirect()->route('posts.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function index()
    {
    $posts = Post::all();
        return view('posts.index', compact('posts'));
        //return view('posts.index');
    }
}
