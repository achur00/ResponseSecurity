<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use Illuminate\Support\Facades\Mail;
Use App\Mail\SendMail;

class QuoteController extends Controller
{
   public function send(Request $request){
     //var_dump($request->input());
    $request->validate(
        [
            'name'=>'required|string|min:3',
            'comp_name'=>'required|string',
            'email'=>'required|email',
            'mobile'=>'min:11|max:14',
            'service_type'=>'required'


        ]
        );


        //Sendind quote to db
  //  $quote= new Quote;
  //  $quote->name=$request->name;
  //  $quote->company_name=$request->comp_name;
  //  $quote->email=$request->email;
  //  $quote->mobile=$request->mobile;
  //  $quote->address=$request->address;
  //  $quote->service_type=$request->service_type;
  //  $quote->security_no=$request->security_no;
  //  $quote->location=$request->location;
  //  $quote->start_date=$request->start_date;
  //  $quote->end_date=$request->end_date;
  //  $quote->note=$request->note;
  //  $quote->reference_src=$request->ref_src;
  //  $save=$quote->save();


   $data= array(
	        'name'=>$request->name,
            'comp_name'=>$request->comp_name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'address'=>$request->address,
            'service_type'=>$request->service_type,
            'security_no'=>$request->security_no,
            'location'=>$request->location,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'note'=>$request->note,
            'ref_src'=>$request->ref_src,


    );

     //sending mail to email

   	Mail::to('info@responseuksecurity.co.uk')->send(new SendMail($data));

    return back()->with('success','Your quote was sent successfully');
}








}
