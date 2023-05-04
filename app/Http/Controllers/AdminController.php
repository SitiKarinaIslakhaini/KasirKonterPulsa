<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kasir;
use App\Models\pelanggan;
use App\Models\Pulsa;
use App\Models\Pembayaran;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
    public function dashboard (){
        $kasir = Kasir::count();
        $pelanggan = Pelanggan::count();
        $pulsa = Pulsa::count();
        $pembayaran = Pembayaran::count();
        $groupPembayaran = Pembayaran::all()->groupBy(function($val) {
        return Carbon::parse($val->tanggal)->format('F');
        });
       //dd( $groupPembayaran);
       return view ('admin.dashboard', compact('kasir','pelanggan','pulsa','pembayaran','groupPembayaran'));
    }
}
