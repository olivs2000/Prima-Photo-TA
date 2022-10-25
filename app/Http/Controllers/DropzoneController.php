<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Dropzone;

class DropzoneController extends Controller
{
    public function dropzone() 
    {
        $files = scandir(public_path('storage'));
        $data = [];
        foreach ($files as $row)
        {
            if ($row != '.' && $row != '..') {
                $data[] = [
                    'name' => explode('.', $row)[0],
                    'url' => asset('storage/' . $row)
                ];
            }
        } 
        return view('paket.show', compact('data'));
    }

    public function dropzoneStore(Request $request)
    {
        //Cara 1
        $image = $request->file('file');
   
        $imageName = time() . '-' . strtoupper(Str::random(10)) . '.' . $image->extension();
        $image->move(public_path('storage'), $imageName);
   
        return response()->json(['success'=> $imageName]);

        //Cara 2
        $request->validate([
            'file' => 'required|image|max:2408' 
        ]);

        $storage = $request->file('file')->store('public/storage');

        $url = Storage::url($storage);

        File::create([
            'url' => $url
        ]);

        return redirect()->json('paket.show');
    }
}
