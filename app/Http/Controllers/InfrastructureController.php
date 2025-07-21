<?php

namespace App\Http\Controllers;

use App\Infrastructure;
use Illuminate\Http\Request;

class InfrastructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infrastructures = Infrastructure::all();
        return view('admin.infrastructure.infrastructure.index', compact('infrastructures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.infrastructure.infrastructure.create');
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
            'content' => 'required',
        ]);

        session()->flash('create', 'Data created successfully');
        Infrastructure::create($inputs);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Infrastructure $infrastructure
     * @return \Illuminate\Http\Response
     */
    public function show(Infrastructure $infrastructure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Infrastructure $infrastructure
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infrastructure = Infrastructure::find($id);
        return view('admin.infrastructure.infrastructure.edit', compact('infrastructure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Infrastructure $infrastructure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Infrastructure $infrastructure)
    {
        $inputs = \request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        session()->flash('update', 'Data updated successfully');
        $infrastructure->update($inputs);
        return redirect()->route('infrastructure.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Infrastructure $infrastructure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infrastructure $infrastructure)
    {
        $infrastructure->delete();
        session()->flash('delete', 'Data deleted successfully');
        return redirect()->route('infrastructure.index');
    }
}
