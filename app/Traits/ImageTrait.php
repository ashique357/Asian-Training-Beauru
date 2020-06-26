<?php
  
namespace App\Traits;
  
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Image;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
  
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

    public function upload(Request $request,$fname,$toStorage){
        if($request->hasFile($fname)){   
            foreach($request->file($fname) as $file){
                $name = mt_rand(100,2000).time().'.'.$file->extension();
                $file->move(public_path().$toStorage, $name); 
                $data[] = $name; 
            }
            return $data;
         }
    }

}