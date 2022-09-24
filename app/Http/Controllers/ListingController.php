<?php

namespace App\Http\Controllers;
use App\Models\title;
use App\Models\feacture;
use App\Models\file;
use Illuminate\support\DB;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function listing()
    {
     return  view('frontend.listing');
    }
    public function showlisting()
    {
       
        $title=title::with(['file','feacture'])->paginate(3);
      
 
        return view('frontend.showlisting',compact('title'));
     }
    public function listdelete( Request $request ,$title_id,$files_id,$feacture_id)
    {
        
        if( $request->text1!='delete')
        {
             return back()->with('error', 'Not Deleted');
         }
         else
        {
            $feacture=feacture::where('feacture_id','=',$feacture_id)->delete();
            $file=file::where('files_id','=',$files_id)->delete();
            $title=title::where('title_id','=',$title_id)->delete();
            return back()->with('status', 'Data Deleted successfully');
        }
       
   
       
    }
    public function showlist($title_id)
    {
        
        $title=title::with('file','feacture')->where('title_id','=',$title_id)->get();
        
        return view('frontend.showall',compact('title'));
     }
    public function listedit($title_id,$files_id,$feacture_id)
    {
        $title=title::with('file','feacture')->where('title_id','=',$title_id)->get();
        return view('frontend.editlist',compact('title'));
    }
    public function updatelist(Request $request,$title_id,$file_id,$feacture_id )
    {
      
        $request->validate( [
           
            'title'=>'required|max:255|min:10',
            'slug'=>'required',
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
        
        $title=title::find($title_id);
        $title->title= $request['title'];
        $title->price_per_night= $request['price_per_night'];
        $title->content= $request['content'];
        $title->property_id=$request['property_id'];
        $title->city= $request['city'];
        $title->save();
        $titleid = $title->title_id;
      
        $file = file::find($file_id);
        $data=array();

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
       else
       {
        $data=$file->filenames;  
       }
        $file = file::find($file_id);
        $file->filenames=($data);
        $file->title_id=$titleid;
        $file->save();
        

        $feacture=feacture::find($feacture_id);
        $feacture->title_id=$titleid;
        $feacture->cleaning_fee= $request['cleaning_fee'];
        $feacture->sleeping_situation=json_encode($request->sleeping_situation);
        $feacture->address= $request['address'];
        $feacture->area= $request['area'];
        $feacture->state= $request['state'];
        $feacture->country= $request['country'];
        $feacture->zip= $request['zip'];
        $feacture->room= $request['room'];
        $feacture->bathrooms= $request['bathrooms'];
        $feacture->property_size= $request['property_size'];
        $feacture->bedrooms= $request['bedrooms'];
        $feacture->please_note= $request['please_note'];
        $feacture->amenities=json_encode($request->amenities);
        $feacture->terms=json_encode($request->terms);
        $feacture->save();
 
         return back()->with('success', 'Your Data Updated successfully ');
    }
}
