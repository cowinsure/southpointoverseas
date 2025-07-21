<?php

namespace App\Http\Controllers;

use App\InfrastructureImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InfrastructureImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infrastructure_slider = InfrastructureImage::all();
        return view('admin.infrastructure.slider.index', compact('infrastructure_slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.infrastructure.slider.create');
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
            'image' => 'required|mimes:jpeg,jpg,png',
            'content' => 'required',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        }

        InfrastructureImage::create($inputs);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\InfrastructureImage $infrastructureImage
     * @return \Illuminate\Http\Response
     */
    public function show(InfrastructureImage $infrastructureImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\InfrastructureImage $infrastructureImage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image_slider = InfrastructureImage::find($id);
        return view('admin.infrastructure.slider.edit', compact('image_slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\InfrastructureImage $infrastructureImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $infrastructure = InfrastructureImage::find($id);

        $inputs = \request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        } else {
            $inputs['image'] = $infrastructure->image;
        }

        $infrastructure->update($inputs);
        return redirect()->route("infrastructure-images.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\InfrastructureImage $infrastructureImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(InfrastructureImage $infrastructureImage)
    {
        if (Storage::disk('public')->exists($infrastructureImage->image)) {
            $image = 'storage/' . $infrastructureImage->image;
            unlink($image);
        }

        $infrastructureImage->delete();
        return redirect()->route("infrastructure-images.index");
    }
}
