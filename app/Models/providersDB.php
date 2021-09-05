<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \Illuminate\Foundation\Auth\User as Authenticatable;



class providersDB extends Authenticatable
{
    protected $table = 'providers';
    protected $fillable = ['name', 'username', 'email', 'password'];

}
