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
    public function genericFIleUpload($file,$dir,$realPath){
        $image_name = str_replace(' ', '-', $file->getClientOriginalName());
        $file->move(public_path($dir),$image_name);
        $url = url('/');
        $image_path = "$url/$dir/" . $image_name;
        return $image_path;
    }
    public function store(Request $request)
    {
        $dir = "uploads/gallery";
        $file = $request->file('file');
        $realPath = $request->file('file')->getRealPath();
        $imageName = $this->genericFIleUpload($file,$dir,$realPath);

        $Product = new Gallery();
        $Product->image = $imageName;
        $Product->product_id = $request->product_id;
        $Product->save();
        return response()->json(['success'=>$imageName]);
    }
}
