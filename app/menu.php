<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
  protected $table='menus';
  protected $fillable=['title','url','menu_si','icon','menu_dispaly','status','dropdown'];
}
