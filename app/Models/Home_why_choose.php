<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_why_choose extends Model
{
    use HasFactory;

    protected $table='home_why_chooses';

  //activating mass assignment by using fillable property signifiying the columns that can be mass assigned
    protected $fillable=['title', 'content'];
}
