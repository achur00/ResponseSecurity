<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote_cta extends Model
{
    use HasFactory;

    protected $table='quote_ctas';
    protected $fillable=['title','content'];
}
