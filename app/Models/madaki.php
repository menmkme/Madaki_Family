<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class madaki extends Model
{
    use HasFactory;
    protected $table = 'madakis';
    protected $primarykey = 'id';
    public $timestamps = 'true';

    protected $fillable = ['First_Name','Surname','Last_Name','DOB','State','LGA','Description','img_path'];
}
