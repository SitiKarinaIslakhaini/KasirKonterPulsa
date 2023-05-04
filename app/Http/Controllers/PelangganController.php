<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan = pelanggan::all();
        return view('admin.pelanggan.index',['pelanggan'=>$pelanggan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pelanggan.create');
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
            'nama_pelanggan'      => 'required',
            'alamat_pelanggan'    => 'required',
            'notelp_pelanggan'    => 'required'
        ]);

        Pelanggan::create([
            'nama_pelanggan'       =>$request->nama_pelanggan,
            'alamat_pelanggan'     =>$request->alamat_pelanggan,
            'notelp_pelanggan'     =>$request->notelp_pelanggan
        ]);

        return redirect('/pelanggan');
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
        $pelanggan = Pelanggan::find($id);
        return view('admin.pelanggan.edit',['pelanggan' => $pelanggan]);
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
            'nama_pelanggan'      => 'required',
            'alamat_pelanggan'    => 'required',
            'notelp_pelanggan'    => 'required'
        ]); 
        //$pelanggan = pelanggan::find($id);
        //$pelanggan->nama_pelanggan   = $request->nama_pelanggan; 
        //$pelanggan->alamat_pelanggan = $request->alamat_pelanggan; 
        //$pelanggan->notelp_pelanggan = $request->notelp_pelanggan; 

        //$pelanggan->save();

        $pelanggan = Pelanggan::find($id);
        $pelanggan->update($request->all());

        return redirect('/pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();

        return redirect()->back();
    }

    public function search(Request $request){
        if ($request->has('search')) {
            $pelanggan = Pelanggan::where('nama_pelanggan','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $pelanggan = Pelanggan::all();
        }

        return view('admin.pelanggan.index',['pelanggan' => $pelanggan]);
    }

    //public function kasir(){
    //    $kasir = Kasir::all();
    //    return view ('admin.pelanggan.kasir',['kasir' => $kasir]);
    //}
}
