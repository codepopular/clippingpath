<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quote extends Model
{
  protected $table='quotes';
  protected $fillable=['service_type','turnaround','need_path','qty','find_us','des','name','address','email','website','company','phone','country','currency','photo'];

}
