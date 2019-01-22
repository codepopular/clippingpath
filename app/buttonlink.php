<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buttonlink extends Model
{
  protected $table='buttonlinks';
  protected $fillable=['trial_period','get_quote','faq','request_us','about_more','service_more','simple_project_more'];
}
