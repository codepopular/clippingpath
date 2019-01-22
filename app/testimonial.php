<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testimonial extends Model
{
  protected $table='testimonials';
  protected $fillable=['name','designation','photo','des','status'];
}
