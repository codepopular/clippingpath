<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class social extends Model
{
  protected $table='socials';
  protected $fillable=['id','facebook','twitter','linkedin','google_plus','pinterest','youtube','dribbble'];
}
