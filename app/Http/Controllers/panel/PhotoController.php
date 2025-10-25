<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file('file');

        $photo = new Photo();
        $photo->path = file_store($file, 'uploads/projects/', '');
        $photo->name = $file;
        $photo->user_id = Auth::id();
        $photo->save();

        return response()->json([
            'photos' =>$photo->id
        ]);
    }
}
