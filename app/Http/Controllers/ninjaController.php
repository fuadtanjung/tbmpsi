<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ninjaController extends Controller
{
    function tab2()
    {
      $User = User::all();
      return view('tab2')
      ->with('User',$User)
      ->with('no',1);
    }

    function delete2($id){

      $User = User::find($id);
      $User->delete();
  
      return redirect('/tab2');
    }

    
}
