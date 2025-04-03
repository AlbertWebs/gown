<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class DropzoneController extends Controller
{
    public function index()
    {
        return view('dropzone');
    }
    public function store(Request $request)
    {
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('uploads/gallery'),$imageName);

        $Product = new Gallery();
        $Product->image = $imageName;
        $Product->product_id = $request->product_id;
        $Product->save();
        return response()->json(['success'=>$imageName]);
    }
}
