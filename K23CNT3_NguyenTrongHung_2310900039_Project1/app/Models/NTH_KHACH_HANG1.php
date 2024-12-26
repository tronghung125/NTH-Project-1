<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NTH_KHACH_HANG1 extends Model
{
    use HasFactory;
    protected $table = 'NTH_KHACH_HANG1';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = true;

    protected $dates = ['vtdNgayDangKy'];
}
