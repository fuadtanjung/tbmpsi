<?php

namespace App\Http\Controllers;
use App\laporan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;
use App\User;

class reportController extends Controller
{


    
    public function index()
    {
      if(auth()->user()->hasRole('administrator')){
        return view('admin.home');
      }else{
        $laporan = laporan::all();
        return view('pengguna.index',compact('laporan'))
        ->with('no',1);;
      };
    }



   

    function insert(Request $request)
  {
    $upload = "N";
    if($request->hasfile('file')){
      $destination = "upload";
      $file = $request->file('file');
      $file->move($destination, $file->getClientOriginalName());
      $upload = "y";
    }

    if($upload=="y"){
    $laporan = new laporan;

    $laporan->nama = $request->var_nama;
    $laporan->no_idt = $request->int_no_idt;
    $laporan->peng = $request->var_peng;
    $laporan->file = $file->getClientOriginalName();

    $laporan->save();
  }
    return redirect('/');
  }

  function delete($id){

    $laporan = laporan::find($id);
    $laporan->delete();

    return redirect('/tab');
  }
 function tab()
    {
      $laporan = laporan::all();
      return view('tab')
      ->with('laporan',$laporan)
      ->with('no',1);
    }
  
}
