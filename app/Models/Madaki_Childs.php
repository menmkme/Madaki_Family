<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Madaki_Childs extends Model
{
    use HasFactory;
    protected $table = 'madaki__childs';
    protected $primarykey = 'id';
    public $timestamps = 'true';

    protected $fillable = ['First_Name','Surname','Last_Name','DOB','State','LGA','Occupation','Description','img_path'];
}
