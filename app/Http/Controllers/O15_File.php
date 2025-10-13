<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class O15_File extends Controller
{
    public function upload(Request $request)
    {
        // Validate the incoming request to ensure a file is present
        $request->validate([
            'file' => 'required|file|max:10240', // max 10MB
        ]);

        // Store the uploaded file in the 'public' disk
        // $path = $request->file('file')->store('uploads','public');

//  Giving name to the file                                      <filename>
        $path = $request->file('file')->store('uploads','public','dumyfile.png');

        // Extract the filename from the path
        $fileName = basename($path);

        // Pass the filename to the view (without the $ in the key name)
        return view('file', ['path' => $fileName]);

        // Note: Files are stored in storage/app/public, not private/public
        // To make them accessible via URL, run: php artisan storage:link
    }
}
