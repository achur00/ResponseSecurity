<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home_banner;
use App\Models\About;
use App\Models\Home_quality;
use App\Models\Home_about;
use App\Models\Home_service;
use App\Models\Service_product;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $home_banners = Home_banner::all();
        $home_qualities = Home_quality::all();
        $home_about=Home_About::get()->first();
        $home_service=Home_service::all()->first();
        $service_products=Service_Product::all();

        // dd($service_products);
        return view('Pages.home',compact('home_banners', 'home_qualities', 'home_about', 'home_service','service_products'));
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
