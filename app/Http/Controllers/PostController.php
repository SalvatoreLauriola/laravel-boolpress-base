<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Tag;

use Illuminate\Support\Str;

class PostController extends Controller


{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index' ,compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tags = Tag::all();

        return view('posts.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $request->validate([
            'title'=>'required|max:255',
            'post'=>'required',
            // crea solo con tag esistente
            'tags.*' => 'exists:tag,id'
        ]);

        //salvataggio nel db
        $data = $request->all();

        // get user id
        $data['user_id'] = 1;

        //generate post slug
        $data['slug'] = Str::slug($data['title'], '-'); // prende title sopra

        //new post
        $newPost = new Post();
        
        $newPost->fill($data);

        $newPost->save();

        $saved = $newPost->save();

        if($saved) {
            if(!empty($data['tags'])) {
                $newPost->tags()->attach($data['tags']);
            }

            //redirect
            return redirect()->route('posts.show', $newPost->slug);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)  //si baserà su slug
    {
        $post = Post::where('slug', $slug)->first();

        //error 404
        if(empty($post)) {
            abort ('404');
        }

        return view('posts.show', compact('post'));
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
