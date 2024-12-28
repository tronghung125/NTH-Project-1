<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NTH_TIN_TUC extends Model
{
    use HasFactory;
    protected $table = 'NTH_TIN_TUC';
    protected $primaryKey = 'id';
    public $incrementing = false; 
    public $timestamps = true; 
}
