<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kasir;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kasir = Kasir::all();
        return view('admin.kasir.index',['kasir'=>$kasir]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kasir.create');
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
            'email'      => 'required',
            'password'    => 'required',
            'nama_kasir'      => 'required',
            'alamat_kasir'    => 'required',
            'notelp_kasir'    => 'required'
        ]);

        Kasir::create([
            'email'       =>$request->email,
            'password'     =>$request->password,
            'nama_kasir'       =>$request->nama_kasir,
            'alamat_kasir'     =>$request->alamat_kasir,
            'notelp_kasir'     =>$request->notelp_kasir
        ]);

        return redirect('/kasir');
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
        $kasir = Kasir::find($id);
        return view('admin.kasir.edit',['kasir' => $kasir]);
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
            'email'           => 'required',
            'password'        => 'required',
            'nama_kasir'      => 'required',
            'alamat_kasir'    => 'required',
            'notelp_kasir'    => 'required'
        ]); 
        //$kasir = kasir::find($id);
        //$kasir->email = $request->email; 
        //$pelanggan->password = $request->password; 
        //$kasir->nama_kasir   = $request->nama_kasir; 
        //$kasir->alamat_kasir = $request->alamat_kasir; 
        //$pelanggan->notelp_kasir = $request->notelp_kasir; 

        //$kasir->save();

        $kasir = Kasir::find($id);
        $kasir->update($request->all());

        return redirect('/kasir');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kasir = Kasir::find($id);
        $kasir->delete();

        return redirect()->back();
    }
    public function search(Request $request){
        if ($request->has('search')) {
            $kasir = Kasir::where('nama_kasir','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $kasir = Kasir::all();
        }

        return view('admin.kasir.index',['kasir'=> $kasir]);
    }
}
