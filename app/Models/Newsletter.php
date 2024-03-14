<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    
    Protected $table='newsletters';
							
    //activating mass assignment by using fillable property signifiying the columns that can be mass assigned
    Protected $fillable= ['title', 'content'];
}
