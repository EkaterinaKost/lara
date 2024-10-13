<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //
    public function showForm()
    {
        return view('upload-form');
    }

    public function fileUpload(Request $request)
    {
       // if($request->hasFile('upload-photo')){
         //   $file = $request->file('upload-photo');
           // echo $file->path();
           // echo '<br>';
            //echo $file->getClientOriginalName();
            //$file->storeAs('images',$file->getClientOriginalName());

        //}else{
         //   echo 'no file uploaded';
       // }
       foreach ($request->upload_photo as $photo){
            var_dump($photo);
       }
    }
}
