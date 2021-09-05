<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class locationDB extends Model
{
   protected $table = 'location';
   protected $fillable = ['longitude','latitude','provider_id'];
 
   


   public function user()
    {
        return $this->belongsto('App\Models\providers', 'provider_id', 'id');

        // ---------------------------------------------------
        // OR
        // ---------------------------------------------------
        // return $this->belongsto('App\Models\users', 'id', 'user_id');
    }


}
