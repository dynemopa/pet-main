<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Redirect;
class ListController extends Controller
{
    public function list(Request $request)
    {
       
        $search=$request['search']?? "";
        if($search !="")
        {
            $user=user::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->get();
        }
        else
        {
            $user=User::sortable()->get();
        }
        $data= compact('user','search');
        return  view('frontend.list',($data));
    }

    public function  delete(Request $request ,$id)
    {
        $User=user::find($id);
  
         if( $request->text1!='delete' && $User->user_type=='1')
        {
             return back()->with('error', 'Not Deleted');
         }
         else
        {
          $user=User::where('id','=',$id)->delete();
            return back()->with('status', 'Data Deleted successfully');
        }
    }
    
    public function edit(Request $request,$id) 
    {
        $user=User::find($id);
        return view ('frontend.edit',compact('user'));
   }
   public function update(Request $request,$id) 
   {
    $user=User::find($id);
    $user->name= $request['name'];
    $user->email= $request['email'];
    $user->update();
    
   return redirect()->back();


   
   }


    
}


// public function  delete($id)
//     {
//         $students=students::where('id','=',$id)->delete();
       
//         return redirect()->back();
//     }