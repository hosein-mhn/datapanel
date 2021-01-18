<?php

namespace App\Http\Controllers;

use App\Models\Booklet;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class BookletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booklets = Booklet::where('user_id',auth()->user()->id)->get();
        return view('booklets',['booklets' => $booklets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::where('user_id',auth()->user()->id)->get();
        return view('new_booklet',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);

        $title = time().'.'.request()->file->getClientOriginalExtension();

        $request->file->move(public_path('posts'), $title);

        $storeFile = new Booklet;
        $storeFile->title = $request->title;
        $storeFile->data = '/posts/'.$title;
        $storeFile->category_id = $request->category_id;
        $storeFile->user_id = auth()->user()->id;
        $storeFile->save();

        return response()->json(['success'=>'File Uploaded Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booklet  $booklet
     * @return \Illuminate\Http\Response
     */
    public function show(Booklet $booklet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booklet  $booklet
     * @return \Illuminate\Http\Response
     */
    public function edit($booklet)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booklet  $booklet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booklet $booklet)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booklet  $booklet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booklet $booklet)
    {
        $booklet->delete();
        return redirect()->route('booklets.index');
    }
}
