<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenisbarang extends Model
{
    use HasFactory;


    protected $table = 'jenisbarang';
    protected $primaryKey = 'id';
    protected $fillable = ['nama'];
}
