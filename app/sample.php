<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sample extends Model
{
  protected $table='samples';
  protected $fillable=['title','cat_name','photo','link','status'];
}
