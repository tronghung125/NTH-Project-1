<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NTH_CT_HOA_DON extends Model
{
    use HasFactory;
    protected $table = 'NTH_CT_HOA_DON';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = true;
}
