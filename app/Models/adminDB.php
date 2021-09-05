<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Foundation\Auth\User as Authenticatable;


class adminDB extends Authenticatable
{
    protected $table='admin';
    protected $fillable = ['username' , 'password'];

  }
