<?php
namespace App\Http\Controllers;
use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
     public function __construct()
    {


    }
    public function Feedbackcontroller(Request $request)
    {
      // print_r($request->all());
   $details= $request->all();
   Feedback::create($request->all());
     $name = $request->name; 
   $data=array('name'=>$name);
  return view("Responsepage",$data);

    }

    
}

