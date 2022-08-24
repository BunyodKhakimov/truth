<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('index')->with('images', $images);
    }

    public function store(ImageRequest $request)
    {
        if($request->hasFile('image_file')){
            $image = $request->file('image_file');
            $filenameWithExt = $image->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $image->move(public_path('/storage'), $fileNameToStore);
//            $path = $image->storeAs('uploads', $fileNameToStore);
        }

        $image = new Image();
        $image->title = $request->image_title;
        $image->file = $fileNameToStore;
        $image->save();

        return redirect()->route('admin')->with('status', 'Image saved successfully.');
    }
}
