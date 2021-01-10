<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pdf;
use App\Models\Video;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pdfs = Pdf::with('category')->where('user_id',auth()->user()->id)->get();
        return view('pdfs',['pdfs' => $pdfs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::where('user_id',auth()->user()->id)->get();
        return view('new_pdf',['categories' => $categories]);
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
            'title' => 'required',
            'category_id' => 'required',
        ]);

        $title = time().'.'.request()->file->getClientOriginalExtension();

        $request->file->move(public_path('posts'), $title);

        $request->request->add(['user_id' => auth()->user()->id]);
        $storeFile = new Pdf;
        $storeFile->title = $request->title;
        $storeFile->url = '/posts/'.$title;
        $storeFile->category_id = $request->category_id;
        $storeFile->user_id = auth()->user()->id;
        $storeFile->save();

        return redirect()->route('pdfs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pdf  $pdf
     * @return \Illuminate\Http\Response
     */
    public function show(Pdf $pdf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pdf  $pdf
     * @return \Illuminate\Http\Response
     */
    public function edit(Pdf $pdf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pdf  $pdf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pdf $pdf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pdf  $pdf
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pdf $pdf)
    {
        $pdf->delete();
        return redirect()->route('pdfs.index');
    }
}
