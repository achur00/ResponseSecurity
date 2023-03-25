<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Quote_cta;
use App\Models\Page;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //make the about an object with first()
        $about= About::all()->first();
        
        //method 1: using find() to fetch id=1
          $about_with_page=About::find(1);
        //   using inverse relationship in view 
        //  the below was a test similar just like  dd()
        //   return $about_with_page->Page->page_name;  or use dd

        // method 2: using with()
        // $about_with_page=About::with('Page')->get()->first();
         //   using inverse relationship in view 
        //  the below was a test similar just like  dd()
        //   return $about_with_page->Page->page_name;  or use dd

        



       
        // Quote_cta model
        //usinf find() intead of first() to accomplish the same expected result
        $quote_cta=Quote_cta::find(1);

    
        
        return view('Pages.about', compact('about','quote_cta','about_with_page'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
