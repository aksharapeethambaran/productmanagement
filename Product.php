<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function updateData($id,$data){
        DB::table('products')
        ->where('id', $id)
        ->update($data);
    }
}
