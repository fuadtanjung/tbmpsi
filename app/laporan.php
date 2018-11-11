<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    protected $table ="lapors";
     protected $guarded=[
     	'created_at','updated_at'
     ];
}
