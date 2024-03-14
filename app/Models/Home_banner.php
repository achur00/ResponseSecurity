<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_banner extends Model
{
    use HasFactory;

    protected $table='home_banners';

     //activating mass assignment by using fillable property signifiying the columns that can be mass assigned
    Protected $fillable= ['title', 'content', 'images'];

      public function Service_product(){
        return $this->hasMany(Service_product::class, 'banner_id','id');
    }

}
