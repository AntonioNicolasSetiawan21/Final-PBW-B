<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class SaranpageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $tanggal= Carbon::now();
        // ->format('d-m-Y');

$tanggal2=new \DateTime('now');

$tanggal=\Carbon\Carbon::parse($tanggal)    ;

        // $tanggal=$tanggal->toDateTimeString();
        return view('Anton.layouts.Saranpage',[
            'tanggal'=>$tanggal,
        ]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}