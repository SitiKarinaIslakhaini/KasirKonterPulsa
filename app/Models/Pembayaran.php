<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table ="Pembayaran";
    protected $fillable = ['kasir_id','pelanggan_id','pulsa_id','tanggal','total'];

    public function pelanggan(){
        return $this->belongsTo('App\Models\pelanggan','pelanggan_id');
    }
    public function kasir(){
        return $this->belongsTo('App\Models\Kasir','kasir_id');
    }
    public function pulsa(){
        return $this->belongsTo('App\Models\Pulsa','pulsa_id');
    }
}
