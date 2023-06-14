<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mal_Alis_Model;
use App\Models\Techizatci_Model;


class Excel extends Controller
{
   Public function index(){
    $data=User::all();
    return view('back.excel.profil',compact('data'));
   }
   Public function malindex(){
      $data=Mal_Alis_Model::all();
      $techiz=Techizatci_Model::all();
      return view('back.excel.mal_alis',compact('data','techiz'));
     }
}
