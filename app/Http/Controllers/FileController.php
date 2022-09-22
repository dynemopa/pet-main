<?php

namespace App\Http\Controllers;
use App\Models\file;
use App\Models\title;
use App\Models\feacture;
use Illuminate\Http\Request;
use DB;
use Cviebrock\EloquentSluggable\Services\SlugService;


class FileController extends Controller
{
    public function create()
    {
        return view('imageUpload');
    }
    public function store(Request $request)
    {
       
     
        $request->validate( [
            'filenames' => 'required',
            'filenames.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'=>'required|max:255|min:10',
            'slug'=>'required|unique:titles',
            'content'=>'required',
            'price_per_night'=>'required|between:0,99.99',
            'cleaning_fee'=>'required',
            'sleeping_situation'=>'required',
            'address'=>'required',
            'area'=>'required|alpha_num',
            'state'=>'required|alpha',
            'country'=>'required',
            'city'=>'required|alpha_num',
            'zip'=>'required',
            'property_id'=>'required',
            'room'=>'required',
            'bathrooms'=>'required',
            'property_size'=>'required',
            'bedrooms'=>'required',
            'please_note'=>'required',
            'amenities'=>'required',
            'terms'=>'required',

        ]);

  
    
        if($request->hasfile('filenames'))
        {

           foreach($request->file('filenames') as $image)
           {
               $name=$image->getClientOriginalName();
               $filenames=time().'.'.$name;
               $image->move('uploads/students/', $filenames);
               $data[] = $filenames;  
           }
        }
        
        $file= new file();
        $file->filenames=($data);
        $file->save();
         $filesid = $file->files_id;
      
   
        $title = new title();
        $input = $request->all();
        $title->title= $request['title'];
        $title->content= $request['content'];
        $title->files_id=$filesid;
        $title->save();
        $titleid = $title->title_id;
        
       
       

        $feacture = new feacture();
        $feacture->title_id=$titleid;
        $feacture->price_per_night= $request['price_per_night'];
        $feacture->cleaning_fee= $request['cleaning_fee'];
        $feacture->sleeping_situation=json_encode($request->sleeping_situation);
        $feacture->address= $request['address'];
        $feacture->area= $request['area'];
        $feacture->state= $request['state'];
        $feacture->country= $request['country'];
        $feacture->city= $request['city'];
        $feacture->zip= $request['zip'];
        $feacture->property_id= $request['property_id'];
        $feacture->room= $request['room'];
        $feacture->bathrooms= $request['bathrooms'];
        $feacture->property_size= $request['property_size'];
        $feacture->bedrooms= $request['bedrooms'];
        $feacture->please_note= $request['please_note'];
        $feacture->amenities=json_encode($request->amenities);
        $feacture->terms=json_encode($request->terms);
        $feacture->save();
    
         return back()->with('success', 'Your Data has been successfully added');
    }
    public function getSlub(Request $request)
    {
        $slug = SlugService::createSlug(title::class, 'slug', $request->title);

        return response()->json([
            'status'=>true,
            'slug'=>$slug,

        ]);
         
    }

   
}
