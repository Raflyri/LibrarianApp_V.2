<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    // show form
    public function index() {
        return view('upload');
    }

    // file upload
    public function upload(Request $request)
    {
        $validator = \Validator::make($request->all(), ['files' => 'required'])->validate();

        $total_files = count($request->file('files'));

        foreach ($request->file('files') as $file) {
            // rename & upload files to uploads folder
            $encodeImage = uniqid() . '_' . time(). '.' . $file->getClientOriginalExtension();
            $fileName = time(). '.' .$file->getClientOriginalName();
            $path = public_path() . '/uploads';
            $file->move($path, $fileName);
            
            // store in db
            $fileUpload =  Http::withHeaders([
                'X-First' => 'foo',
                'X-Second' => 'bar'
            ])->post('https://api.stag.olive.onl/request', [
                'photo' => 'Taylor',
                'photo_base64' => $encodeImage,
            ]);

            //echo base64_encode($fileUpload);
            return-
            $fileUpload->save();
        }

        return back()->with("success", $total_files . " files uploaded successfully");
    }
}
