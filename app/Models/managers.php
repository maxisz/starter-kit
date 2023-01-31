<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class managers extends Model
{
  use HasFactory;
  protected $table ='managers';

  protected $fillable = ['email','phone','subdomain'];
}
