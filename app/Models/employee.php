<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class employee extends Model
{
   
    protected $table = 'employee';
    protected $primaryKey = 'id';

    protected $fillable = [
        'fname',
        'mname',
        'lmail',
        'address',
        'date_of_birth',
        'contact_number',
    ];
}
