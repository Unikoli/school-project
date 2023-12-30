<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students_table extends Model
{
    public $table='Students_info';
    public $primaryKey ='id';
    public $incrementing =true;
    public $timestamps =true;
}
