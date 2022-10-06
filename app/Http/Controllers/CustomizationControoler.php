<?php

namespace App\Http\Controllers;
use App\Models\Video;

use Illuminate\Http\Request;

class CustomizationControoler extends Controller
{
    public function page()
    {
      $all=video::all();
      $video=video::where('status','=','1')->get();
      return view('frontend.page', compact('all','video'));
    }
    public function showvideo($id)
    {
   
      $all=video::where('id','=',$id)->get();
      return view('frontend.showvideo', compact('all'));
    }
    public function deletevideo($id)
    {
      $all=video::where('id','=',$id)->delete();
      return back()->with('status', 'delete successfully');
    }
    public function show_front($id)
    {
      $all=video::query()->update(['status' =>0]);
      $all1=video::query()->where('id','=',$id)->update(['status' =>1]);
      return redirect('page')->with('status', 'Selected successfully');
    }
    
    public function index()
    {
        return view('frontend.insert');
    }
    public function uploadVideo(Request $request)
    {  

        $this->validate($request, [
            'title' => 'required|string|max:255',
            'mobile_video' => 'required|file|mimetypes:video/mp4',
            'choose_video' => 'required|file|mimetypes:video/mp4',
            
      ]);
      
     
      if($request->hasfile('mobile_video'))
      {
        $file1= $request->file('mobile_video');
         $extention1=$file1->getClientOriginalExtension();
         $filename1='m'.time().'.'.$extention1;
         $upload = $file1->move('uploads/students/', $filename1);
        
      }
      if($request->hasfile('choose_video'))
      {
        $file= $request->file('choose_video');
         $extention=$file->getClientOriginalExtension();
         $filename='c'.time().'.'.$extention;
         $file->move('uploads/students/', $filename);
        
      }
  
      if($request->hasfile('images'))
     {
      foreach($request->file('images') as $image)
      {
               $name1=$image->getClientOriginalName();
               $filenames2='i'.time().'.'.$name1;
               $image->move('uploads/students/', $filenames2);
               $data[] = $filenames2; 
             
      }
      $string = implode(",",$data);
     }
     $video = new Video();
     $video->title = $request->title;
     $video->mobile_video=$filename1;
     $video->choose_video = $filename;
     $video->images=($string);
     $video->save();

      return redirect('page')->with('status','recorded Insert successfully');
       
    }
}
