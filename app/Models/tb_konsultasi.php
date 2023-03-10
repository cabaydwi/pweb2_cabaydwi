<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_konsultasi extends Model
{
    use HasFactory;

    protected $table = 'tb_konsultasi';
    //protected $fillable = ['nama_cust','umur','keluhan','pengobatan'];
    protected $guarded = [];
}
