<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Mal_Alis_Model;
use App\Models\Techizatci_Model;
use Illuminate\Http\Request;
use Validator;
use App\Exports\MalExport;
use App\Imports\MalImport;
use Maatwebsite\Excel\Facades\Excel;

class Mal_alis extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $data=Mal_Alis_Model::all();
        $techiz=Techizatci_Model::all();
        return view('back.mal_alis.index',compact('data','techiz'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=Techizatci_Model::all();
        return view('back.mal_alis.create',compact('data'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  $validator=Validator::make($request->all(),[
        'techizatci' => 'required',
        'sened_no' => 'required',
        'barcod' => 'required',
        'mal_adi' => 'required',
        'tip' => 'required',
        'miqdar' => 'required',
        'alis_qiy' => 'required',
        'satis_qiy' => 'required',
    ]);

    if(!$validator->passes()){
        return response()->json(['status' => 0, 'error'=>$validator->errors()->toArray()]);
    }else{
        $data=new Mal_Alis_Model();
        $data->techizatci=$request->techizatci;
        $data->sened_no=$request->sened_no;
        $data->barcod=$request->barcod;
        $data->mal_adi=$request->mal_adi;
        $data->tip=$request->tip;
        $data->miqdar=$request->miqdar;
        $data->alis_qiy=$request->alis_qiy;
        $data->satis_qiy=$request->satis_qiy;
        $data->save();
        return response()->json(['status'=>1,'msg'=>'Elave olundu', 'redirect' => route('admin.mal_alis.index')]);
    }
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
    {   $data=Mal_Alis_Model::findOrFail($id);
        $techiz=Techizatci_Model::all();
        return view('back.mal_alis.update',compact('data','techiz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator=Validator::make($request->all(),[
            'techizatci' => 'required',
            'sened_no' => 'required',
            'barcod' => 'required',
            'mal_adi' => 'required',
            'tip' => 'required',
            'miqdar' => 'required',
            'alis_qiy' => 'required',
            'satis_qiy' => 'required',
        ]);
    
        if(!$validator->passes()){
            return response()->json(['status' => 0, 'error'=>$validator->errors()->toArray()]);
        }else{
            $data=Mal_Alis_Model::findOrFail($id);
            $data->techizatci=$request->techizatci;
            $data->sened_no=$request->sened_no;
            $data->barcod=$request->barcod;
            $data->mal_adi=$request->mal_adi;
            $data->tip=$request->tip;
            $data->miqdar=$request->miqdar;
            $data->alis_qiy=$request->alis_qiy;
            $data->satis_qiy=$request->satis_qiy;
            $data->update();
            return response()->json(['status'=>1,'msg'=>'Elave olundu', 'redirect' => route('admin.mal_alis.index')]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function delete($id)
    {
        $data = Mal_alis_Model::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.mal_alis.index')->with(['success' => 'Səhifə uğurla silindi!']);
    }
    public function export() 
    {
        return Excel::download(new MalExport, 'mal.xlsx');
    }

    public function import()
{
    try {
        Excel::import(new MalImport, request()->file('file'));
    } catch (ValidationException $e) {
        $failures = $e->failures();
        // Hata işleme kodu buraya gelebilir
    }

    return back();
}

    }

