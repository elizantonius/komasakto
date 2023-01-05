<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangkeluar extends Model
{
    use HasFactory;

    protected $table = 'barangkeluar';
    protected $primaryKey = 'id';
    protected $fillable = ['idtransaksi', 'namabarang','jumlahkeluar', 'tanggalkeluar','barang_id', 'datasupp_id'];
}
