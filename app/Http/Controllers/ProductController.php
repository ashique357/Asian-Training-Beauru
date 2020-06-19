<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Intervention\Image\ImageManager;
use Image;
use App\Traits\ImageTrait;
use App\Traits\RichTextTrait;
use App\Traits\EmailTrait;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    use ImageTrait,RichTextTrait,EmailTrait;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user= Auth::check();
            if($this->user==false){
                return redirect('/login');
            }
            else{
                $this->user=Auth::user();
            if($this->user->role ==1){
                return $next($request);
            }
            else{
                return redirect('/login');
            }
            }
        })->except(['book','material','tool','show']);
    }
    public function create(){
        return view('Admin.Pages.Product.create');
    }

    public function store(Request $request){
     
        $product= new Product();
        $a=$product->product_type=$request->product_type;
        if($a==1){
            $product->name=$request->name[0];
            $product->author_name=$request->author_name;
            $product->publication=$request->publication;
            $product->issn=$request->issn;
            $fieldname='content';
            $detail=$this->richText($request,$fieldname);
            $product->content=$detail;
            $file='filenames';
            $upload=$this->upload($request,$file,'/products');
            $product->filenames=json_encode($upload);
            $image_field='cover_image';
            $image=$this->upload($request,$image_field,'/products');
            $product->cover_image=json_encode($image);
            $product->price_user=$request->price_user[0];
            $product->price_member=$request->price_member[0];
            $product->currency=trim($request->currency[0]);
        }
        elseif($a==2){
            $product->name=$request->name[1];
            $fieldname='material_details';
            $detail=$this->richText($request,$fieldname);
            $product->material_details=$detail;
            $file='filenames';
            $upload=$this->upload($request,$file,'/products');
            $product->filenames=json_encode($upload);
            $product->price_user=$request->price_user[1];
            $product->price_member=$request->price_member[1];
            $product->currency=trim($request->currency[1]);
            $image_field='cover_image';
            $image=$this->upload($request,$image_field,'/products');
            $product->cover_image=json_encode($image);
        }
        elseif($a==3){
            $product->name=$request->name[1];
            $fieldname='tools_details';
            $detail=$this->richText($request,$fieldname);
            $product->tools_details=$detail;
            $file='filenames';
            $upload=$this->upload($request,$file,'/products');
            $product->filenames=json_encode($upload);
            $product->price_user=$request->price_user[2];
            $product->price_member=$request->price_member[2];
            $product->currency=trim($request->currency[2]);
            $image_field='cover_image';
            $image=$this->upload($request,$image_field,'/products');
            $product->cover_image=json_encode($image);
        }
            $product->save();
            return redirect()->back()->with('success', 'You have successfully added a product');
        
    }

    public function edit($id){
        $product=Product::findOrFail($id);
        if($product->product_type==1){
            return view('Admin.Pages.Product.editBook')->with(['product'=>$product]);
        }
        elseif($product->product_type==2){
            return view('Admin.Pages.Product.editMaterial')->with(['product'=>$product]);
        }
        elseif($product->product_type==3){
            return view('Admin.Pages.Product.editTool')->with(['product'=>$product]);
        }
    }

    public function update(Request $request,$id){
        $product=Product::find($id)->firstOrFail();
        $a=$product->product_type=$request->product_type;
        if($a==1){
            $product->name=$request->name;
            $product->author_name=$request->author_name;
            $product->publication=$request->publication;
            $product->issn=$request->issn;
            $fieldname='content';
            $detail=$this->richText($request,$fieldname);
            $product->content=$detail;
            $file='filenames';
            $upload=$this->upload($request,$file,'/products');
            $product->filenames=json_encode($upload);
            $product->price_user=$request->price_user;
            $product->price_member=$request->price_member;
            $product->currency=$request->currency;
            $image_field='cover_image';
            $image=$this->upload($request,$image_field,'/products');
            $product->cover_image=json_encode($image);
        }
        elseif($a==2){
            $product->name=$request->name;
            $fieldname='material_details';
            $detail=$this->richText($request,$fieldname);
            $product->material_details=$detail;
            $file='filenames';
            $upload=$this->upload($request,$file,'/products');
            $product->filenames=json_encode($upload);
            $product->price_user=$request->price_user;
            $product->price_member=$request->price_member;
            $product->currency=$request->currency;
            $image_field='cover_image';
            $image=$this->upload($request,$image_field,'/products');
            $product->cover_image=json_encode($image);
        }
        elseif($a==3){
            $product->name=$request->name;
            $fieldname='tools_details';
            $detail=$this->richText($request,$fieldname);
            $product->tools_details=$detail;
            $file='filenames';
            $upload=$this->upload($request,$file,'/products');
            $product->filenames=json_encode($upload);
            $product->price_user=$request->price_user;
            $product->price_member=$request->price_member;
            $product->currency=$request->currency;
            $image_field='cover_image';
            $image=$this->upload($request,$image_field,'/products');
            $product->cover_image=json_encode($image);
        }
            $product->save();
            return redirect()->back()->with('success', 'You have successfully edited the product');

    }

    public function index(){
        $products=Product::latest()->paginate(10);
        return view('Admin.Pages.Product.index')->with(['products'=>$products]);
    }

    public function book(){
        $products=Product::where('product_type',1)->latest()->paginate(10);
        return view('User.Pages.book')->with(['products'=>$products]);
    }
    public function material(){
        $products=Product::where('product_type',2)->latest()->paginate(10);
        return view('User.Pages.material')->with(['products'=>$products]);
    }
    public function tool(){
        $products=Product::where('product_type',3)->latest()->paginate(10);
        return view('User.Pages.tool')->with(['products'=>$products]);
    }

    public function info($id){
        $product=Product::where('id',$id)->firstOrFail();
        return view('Admin.Pages.Product.info')->with(['product'=>$product]);
    }

    public function show($name){
        $product=Product::where('name',$name)->firstOrFail();
        return view('User.Pages.product')->with(['product'=>$product]);
    }
}
