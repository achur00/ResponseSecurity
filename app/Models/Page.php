<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Page extends Model
{
    use HasFactory;

    protected $table= 'pages';
    protected $primaryKey='id';
    
    protected $fillable= ['page_name','page_url'];

    public function Service_product(){
        return $this->hasMany(Service_product::class, 'page_id','id');
    }

    public function About(){
       return  $this->hasOne(About::class, 'page_id', 'id');
    }

     public function Home_service(){
        return $this->hasOne(Home_service::class, 'page_id','id');
    }
}
