<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_banner extends Model
{
    use HasFactory;

        protected $table='service_banners';

     //activating mass assignment by using fillable property signifiying the columns that can be mass assigned
    Protected $fillable= ['title', 'content', 'images'];
}
