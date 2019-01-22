<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class footer extends Model
{
  protected $table='footers';
  protected $fillable=['footer_logo','copyright',];
}
