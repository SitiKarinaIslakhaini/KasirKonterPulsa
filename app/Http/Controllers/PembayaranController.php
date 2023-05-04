<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\pelanggan;
//use App\Models\Kasir;
//use App\Models\Pulsa;
use PDF;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $pembayaran = Pembayaran::with('pelanggan','kasir','pulsa')->get();
       //dd($pembayaran)
       return view('admin.pembayaran.index',['pembayaran'=>$pembayaran]);
    }
    public function downloadpdf(){
        $pembayaran = Pembayaran::all();
        $pdf = PDF::loadview('admin.pembayaran.export',['pembayaran' => $pembayaran])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('laporan_pembayaran.pdf');
    }
    public function cetakStruk(pembayaran $pembayaran){
        $pembayaran = collect([$pembayaran]);
        $pdf = PDF::loadview('admin.pembayaran.export',['pembayaran' => $pembayaran])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('struk.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pembayaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'kasir_id'=>'required',
            'pelanggan_id'=>'required',
            'pulsa_id'=>'required',
            'tanggal'=>'required',
            'total'=>'required',
        ]);

        Pembayaran::create([
            'kasir_id'=>$request->kasir_id,
            'pelanggan_id'=>$request->pelanggan_id,
            'pulsa_id'=>$request->pulsa_id,
            'tanggal'=>$request->tanggal,
            'total'=>$request->total,
        ]);
        return redirect('/pembayaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembayaran = Pembayaran::find($id);
        return view('admin.pembayaran.edit',['pembayaran'=> $pembayaran]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'kasir_id'      => 'required',
            'pelanggan_id'     => 'required',
            'pulsa_id'      => 'required',
            'tanggal'      => 'required',
            'total'      => 'required'
           
            
        ]);
        
        $pembayaran = Pembayaran::find($id);
            $pembayaran->kasir_id = $request->kasir_id;
            $pembayaran->pelanggan_id = $request->pelanggan_id;
            $pembayaran->pulsa_id = $request->pulsa_id;
            $pembayaran->tanggal= $request->tanggal;
            $pembayaran->total = $request->total;

            $pembayaran->save();
            return redirect('/pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembayaran = Pembayaran::find($id);
        $pembayaran->delete();

        return redirect()->back();
    }

    public function search(Request $request)
    {
    
        if($request->has('search')){
            $pembayaran = Pembayaran::where('total','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $pembayaran = Pembayaran::all();
        }

        return view('admin.pembayaran.index',['pembayaran'=> $pembayaran]);
    }

}
