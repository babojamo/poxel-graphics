<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class PublicUploadController extends Controller
{
    public function tinymce(Request $request)
    {
        $this->validate($request, [
            'file' => ['required'],
        ]);

        if($request->file) {
            $location = Storage::disk('public')->url($request->file->store(
                "images", 'public'
            ));
            return response()->json([
                'location' =>$location
            ]);
        }
    
        throw new Exception("No file to be uploaded.", 1);
    }
}
