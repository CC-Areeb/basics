<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

use function Ramsey\Uuid\v1;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * show all data that you want to display
         * this can be in table or cards or however you like
         */

        // $allPost = Post::where('id', '>' , 2)->get();
        // $allPost = Post::orderBy('id', 'desc')->take(5)->get();
        // $allPost = Post::chunk(5, function ($allPost) {
        //     foreach ($allPost as $onePost) {
        //         echo $onePost->title . '<br>';
        //     }
        // });
        // $allPost = Post::get()->count();
        // dd($allPost);

        
        $allPost = Post::orderBy('id', 'desc')->get();
        return view('blog.index', ['post' => $allPost]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required',
            'title' => 'required|unique:posts',
            'excerpt' => 'required|unique:posts',
            'body' => 'required',
            'image_path' => ['required', 'mimes:jpg,png,jpeg'],
            'minutes_to_read' => 'min:0',
        ]);
        Post::create([
            'author' => $request->author,
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'image_path' => $this->storeImage($request),
            'is_published' => $request->is_published === 'on',
            'minutes_to_read' => $request->minutes_to_read,
        ]);
        return redirect(route('test.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // show a specific data based on id
        return view('blog.show', ['one' => Post::findOrFail($id)]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Post::where('id', $id)->first();
        dd($test);
        return view('blog.edit', [
            'one' => Post::where('id', $id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    private function storeImage($request)
    {
        $newImageName = uniqid(). '-' . $request->image_path->extension();
        return $request->image_path->move(public_path('images'), $newImageName);
    }
}
