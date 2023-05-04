<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pulsa extends Model
{
    use HasFactory;
    protected $table ="Pulsa";
    protected $fillable = ['nama_pulsa','nominal','harga'];

    public function transaksi(){
        return $this->belongsTomany('App\Models\Transaksi')->withPivot(['tanggal','total']);
    }
}
