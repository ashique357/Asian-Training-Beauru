<?php
  
namespace App\Traits;
  
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Image;
  
trait RichTextTrait {
    public function richText(Request $request,$filedName){
        $detail=$request->input($filedName);
        $dom = new \DomDocument();
        libxml_use_internal_errors(true);
        $url="http://www.w3.org/TR/REC-html40/loose.dtd";
        $dom->loadHTML($detail);
        $images = $dom->getElementsByTagName('img');
        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $image_name= "/uploads/images" . time().$k.'.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }
        $detail = $dom->saveHTML();
        return $detail;
    }

}