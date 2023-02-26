<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brochure extends Model
{
    use HasFactory;

    Protected $table='brochures';
							
    //activating mass assignment by using fillable property signifiying the columns that can be mass assigned
    Protected $fillable= ['title', 'content', 'founder'];
    
}
