<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_product extends Model
{
    use HasFactory;

    // protected $guarded = [];
    protected $table='service_products';

    //activating mass assignment by using fillable property signifiying the columns that can be mass assigned
    protected $fillable=['title','content','long_content','svg','service_img'];

    public function Page(){
      return $this->belongsTo(Page::class, 'id');
    }
}
