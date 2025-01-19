<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\CssSelector\Node\FunctionNode;

class PictureController extends Controller
{
    //create
    public function create(Request $request)
    {
        return view('create_picture');
    }

    public function store(Request $request)
    {
        $file = $request->file('picture');
        $name = $request->name;

        $path = time() . '-' . $name . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/' . $path, file_get_contents($file));

        Picture::create([
            'name' => $name,
            'path' => $path
        ]);

        return Redirect::route('picture.create')->with('success', 'Data Berhasil Ditambahkan');
    }
}
