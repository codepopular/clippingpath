<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
  protected $table='services';
  protected $fillable=['name','title','slug','photo','photo1','description','fk_servicecat','status'];


   public function catname(){
     	 return $this->belongsTo('App\servicecat','fk_servicecat','id');
   }

}
