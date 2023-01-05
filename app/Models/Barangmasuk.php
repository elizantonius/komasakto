<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangmasuk extends Model
{
    use HasFactory;

    protected $table = 'barangmasuk';
    protected $primaryKey = 'id';
    protected $fillable = ['idtransaksi', 'namabarang','jumlahmasuk', 'tanggalmasuk','barang_id', 'datasupp_id'];
}
