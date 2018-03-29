<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;
use App\User;
use Auth;
use DB;

class PictureController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pictures = Picture::all();
        // return view('welcome')->with('pictures', $pictures);
        return view('errors.404');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pictures.publicize');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'hashtag' => 'required',
          'pubpic' => 'image|required|max:1999',
        ]);

        // Handle PubPic Upload
        if($request->hasFile('pubpic')){

          // Get filename with extension
          $fileNameWithExt = $request->file('pubpic')->getClientOriginalName();

          // Get just $fileName
          $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

          // Get just extension
          $extension = $request->file('pubpic')->getClientOriginalExtension();

          // File name to Store
          $fileNameToStore = $filename.'_'.time().'.'.$extension;

          // Upload the picture
          $path = $request->file('pubpic')->storeAs('public/pubpics', $fileNameToStore);;
        }

        // Create Picture
        $picture = new Picture;
        $picture->hash = $request->input('hashtag');
        $picture->pubpic = $fileNameToStore;
        //$picture->preview_url = $request->input(null);
        $user_id = Auth::user()->id; $picture->user_id = $user_id;
        $picture->save();

        return redirect('/')->with('success', 'Picture publicized');
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
        $picture = Picture::find($id);
        $picture->delete();
        return redirect('/dashboard')->with('success', 'Picture deleted');
    }
}
