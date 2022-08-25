<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // display the home page

        // $all_users = DB::select('select * from posts where id = :id', ['id' => 1]);
        // dd($all_users);

        // DB::insert('insert into posts (title, excerpt, body, image_path, is_published, minutes_to_read, is_published)
        //         values
        //         (?, ?, ?, ?, ?, ?)', ['Test', 'test', 'test', 'test', true, 1]);

        // DB::update('update posts set body = :body where id = :id', ['body 2', 44]);

        // DB::delete('delete from posts where id = :id,' [40]);

        // $test = DB::table('posts')
        //             ->select('id', 'title')
        //             ->where('is_published', true)
        //             ->where('id', '>', 10)
        //             ->get();
        
        // dd($test);
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // a page where we can enter new data, only show it here
        return "This is where we show the form for entering new things";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // actual function block for storing things, Use the POST method
        $validation = Validator::make($request->all(), [
            'first_name' => 'required',  
            'last_name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|unique:users,password|confirmed',
        ]);

        if ($validation->fails()) {
            Alert::error('Error', 'There was an error while saving the information');
            return redirect('/create'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id.
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Show one thing based on there id
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Show the page for editing your previous information
        return "Edit form";

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
        // The main function block for editing a data
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Function block for deleting the data (Usually soft deletes)
    }
}
