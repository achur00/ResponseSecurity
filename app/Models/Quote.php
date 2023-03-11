<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $table="quotes";
    protected $fillable=['name','company_name','email','mobile','address','service_type', 'security_no', 'location','start_date','end_date','note','reference_src'];
}
