<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class general extends Model
{
  protected $table='generals';
  protected $fillable=['site_title','metacontent','metakeyword','map'];
}
