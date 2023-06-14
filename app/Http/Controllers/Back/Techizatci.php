<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Techizatci_Model;
use Validator;

class Techizatci extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  $data=Techizatci_Model::all();
       return view('back.techizatci.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('back.techizatci.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'ad' => 'required',
            'phone' => 'required',
            
        ]);
    
        if(!$validator->passes()){
            return response()->json(['status' => 0, 'error'=>$validator->errors()->toArray()]);
        }else{
            $data=new Techizatci_Model();
            $data->ad=$request->ad;
            $data->phone=$request->phone;
            $data->save();
            return response()->json(['status'=>1,'msg'=>'Elave olundu', 'redirect' => route('admin.techizatci.index')]);
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
    {   $data=Techizatci_Model::findOrFail($id);
        return view('back.techizatci.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator=Validator::make($request->all(),[
            'ad' => 'required',
            'phone' => 'required',
            
        ]);
    
        if(!$validator->passes()){
            return response()->json(['status' => 0, 'error'=>$validator->errors()->toArray()]);
        }else{
            $data=Techizatci_Model::findOrFail($id);
            $data->ad=$request->ad;
            $data->phone=$request->phone;
            $data->save();
            return response()->json(['status'=>1,'msg'=>'Elave olundu', 'redirect' => route('admin.techizatci.index')]);
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
        $data = Techizatci_Model::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.techizatci.index')->with(['success' => 'Səhifə uğurla silindi!']);
    }
}
