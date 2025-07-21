<?php

namespace App\Http\Controllers;

use App\HomeContet;
use Illuminate\Http\Request;

class HomeContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = HomeContet::all();
        return view('admin.home.content.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = \request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        HomeContet::create($inputs);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content = HomeContet::find($id);
        return view('admin.home.content.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $content = HomeContet::find($id);

        $inputs = \request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        session()->flash('update','Data updated successfully');
        HomeContet::whereId($content->id)->update($inputs);
        return redirect()->route('content.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = HomeContet::find($id);
        $content->delete();
        session()->flash('delete','Data deleted successfully');
        return redirect()->route('content.index');
    }
}
