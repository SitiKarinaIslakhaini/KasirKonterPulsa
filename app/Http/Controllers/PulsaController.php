<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pulsa;

class PulsaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pulsa = Pulsa::all();
        return view('admin.pulsa.index',['pulsa'=>$pulsa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pulsa.create');
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
            'nama_pulsa'     => 'required',
            'nominal'        => 'required',
            'harga'          => 'required'
        ]);

        Pulsa::create([
            'nama_pulsa'       =>$request->nama_pulsa,
            'nominal'          =>$request->nominal,
            'harga'            =>$request->harga
        ]);

        return redirect('/pulsa');
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
        $pulsa = Pulsa::find($id);
        return view('admin.pulsa.edit',['pulsa' => $pulsa]);
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
            'nama_pulsa'      => 'required',
            'nominal'         => 'required',
            'harga'           => 'required'
        ]); 
        //$pulsa = pulsa::find($id);
        //$pulsa->nama_pulsa   = $request->nama_pulsa; 
        //$pulsa->nominal      = $request->nominal; 
        //$pulsa->harga        = $request->harga; 

        //$pulsa->save();

        $pulsa = Pulsa::find($id);
        $pulsa->update($request->all());

        return redirect('/pulsa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pulsa = Pulsa::find($id);
        $pulsa->delete();

        return redirect()->back();
    }
    public function search(Request $request){
        if ($request->has('search')) {
            $pulsa = Pulsa::where('nama_pulsa','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $pulsa = Pulsa::all();
        }

        return view('admin.pulsa.index',['pulsa' => $pulsa]);
    }
}
