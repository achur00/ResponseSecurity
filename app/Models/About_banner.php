<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About_banner extends Model
{
    use HasFactory;

    //changing the table name from default to 'about_us'
    Protected $table='about_banners';
							
    //activating mass assignment by using fillable property signifiying the columns that can be mass assigned
    Protected $fillable= ['title', 'image'];
}
