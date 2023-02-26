<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General_nav extends Model
{
    use HasFactory;

    protected $table='general_nav';

     //activating mass assignment by using fillable property signifiying the columns that can be mass assigned
    Protected $fillable= 'nav_name';
}
