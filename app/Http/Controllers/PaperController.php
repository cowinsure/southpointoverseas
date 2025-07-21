<?php

namespace App\Http\Controllers;

use App\Document;
use App\Paper;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $papers = Paper::all();
        return view('admin.recruitment.license.papers.index',compact('papers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documents = Document::all();
        return view('admin.recruitment.license.papers.create',compact('documents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = \request()->validate([
            'document_title' => 'required',
            'image' => 'required',
            'content' => 'required'
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        }

        $document = Document::where('title','=',$inputs['document_title'])->first();
        $document->papers()->create([
            'image' => $inputs['image'],
            'content' => $inputs['content']
        ]);

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function show(Paper $paper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paper = Paper::find($id);
        return view('admin.recruitment.license.papers.edit',compact('paper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paper $paper)
    {
        $inputs = \request()->validate([
            'content' => 'required'
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        }else {
            $inputs['image'] = $paper->image;
        }

        $paper->update($inputs);

        return redirect()->route('paper.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paper $paper)
    {
        $paper->delete();
        return  redirect()->route('paper.index');
    }
}
