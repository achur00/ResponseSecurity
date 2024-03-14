<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About_val extends Model
{
    use HasFactory;

    
    Protected $table='about_vals';
							
    //activating mass assignment by using fillable property signifiying the columns that can be mass assigned
    Protected $fillable= ['mis_title', 'mis_content', 'vis_title','vis_content','val_title','val_content'];
}

