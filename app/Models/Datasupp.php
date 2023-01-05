<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datasupp extends Model
{
    use HasFactory;

    protected $table = 'datasupp';
    protected $primaryKey = 'id';
    protected $fillable = ['kodesupp', 'namasupp', 'alamat', 'telp'];
}
