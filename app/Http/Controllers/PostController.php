<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'))->with('i',(request()->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $posts = Post::where('name', 'like', '%'.$search.'%')->get();
        return view('posts.index',['posts' => $posts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->input());
        request()-> input([
            'name' => 'require',
            'timemanagement' => 'require',
            'quality' => 'require',
            'creativity' => 'require',
            'teamwork' => 'require',
            'discipline' => 'require',
        ]);
        Post::create($request->all());
        return redirect()->route('posts.index')->with('success','Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit',compact('post'));
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
        request()-> input([
          'name' => 'require',
          'timemanagement' => 'require',
          'quality' => 'require',
          'creativity' => 'require',
          'teamwork' => 'require',
          'discipline' => 'require',
        ]);
        Post::find($id)->update($request->all());
        return redirect()->route('posts.index')->with('success','Post update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete($id);
        return redirect()->route('posts.index')->with('success','deleted successfully');
    }
}
