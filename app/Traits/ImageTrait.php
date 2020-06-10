<?php
  
namespace App\Traits;
  
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Image;
  
trait ImageTrait {
    public function imageUpload(Request $request,$field,$path,$height,$width){
        if($request->hasFile($field)){
            $img=$request->file($field);
            $title= time().'.'.$img->getClientOriginalExtension();
            $filePath=public_path($path);
            $resize=Image::make($img);
            $resize->resize($height,$width)->save($filePath.'/'.$title);
            $m=$resize->basename;
            return $m;
        }   
    }

}