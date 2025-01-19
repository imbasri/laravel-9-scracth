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

    public function show(Picture $picture)
    {
        $url = Storage::url($picture->path);
        return view('show_picture', compact('url', 'picture'));
    }

    public function delete(Picture $picture)
    {
        // delete in storage
        Storage::delete('public/' . $picture->path);
        // delete in database
        $picture->delete();

        // redirect
        return Redirect::route('picture.create');
    }
    // copy
    public function copy(Picture $picture)
    {
        Storage::copy('public/' . $picture->path, 'copy/' . $picture->path);
        return Redirect::route('picture.create');
    }
    // move
    public function move(Picture $picture, Request $request)
    {
        if ($request->has('rollback')) {
            Storage::move('backup/' . $picture->path, 'public/' . $picture->path);
            return Redirect::route('picture.show', $picture->id);
        } else {

            Storage::move('public/' . $picture->path, 'backup/' . $picture->path);
            return Redirect::route('picture.create');
        }
    }
}
