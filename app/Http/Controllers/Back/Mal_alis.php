<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Mal_Alis_Model;
use Illuminate\Http\Requests\Mal_alis_request;
use Illuminate\Validation\Validator;

class Mal_alis extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.mal_alis.index');
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
    public function store(Mal_alis_request $request)
    {  
        $data=new Mal_Alis_Model();
        $data->techizatci=$request->techizatci;
        $data->barcod=$request->barcod;
        $data->mal_adi=$request->mal_adi;
        $data->tip=$request->tip;
        $data->miqdar=$request->miqdar;
        $data->alis_qiy=$request->alis_qiy;
        $data->alis_cem=$request->alis_meb;
        $data->satis_qiy=$request->satis_qiy;
        $data->satis_cem=$request->satis_meb;
        $data->save();
        return response()->json(['success' => true]);


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