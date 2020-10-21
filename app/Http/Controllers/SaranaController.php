<?php

namespace App\Http\Controllers;

use App\Sarana;
use Illuminate\Http\Request;
use Alert;

class SaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data= Sarana::all();
        return view ('sarana.tampilSarana')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('sarana.tambahSarana');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Sarana;
        $data->jenis= $request->jenis;
        $data->letak = $request->letak;
        $data->kepemilikan = $request->kepemilikan;
        $data->jumlah = $request->jumlah;
        $data->status = $request->status;
        $data->save();

        Alert::success('Sarana Berhasil Ditambah', 'Sukses');
        return redirect('/tampil_sarana');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sarana  $sarana
     * @return \Illuminate\Http\Response
     */
    public function show(Sarana $sarana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sarana  $sarana
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Sarana::find($id);
        return view ('sarana.editSarana')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sarana  $sarana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = Sarana::find($id);
        $data->jenis= $request->jenis;
        $data->letak = $request->letak;
        $data->kepemilikan = $request->kepemilikan;
        $data->jumlah = $request->jumlah;
        $data->status = $request->status;
        $data->save();

        Alert::success('Sarana Berhasil Diubah', 'Sukses');
        return redirect('/tampil_sarana');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sarana  $sarana
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Sarana::find($id);
        $data->delete();
        Alert::success('Sarana Berhasil Dihapus', 'Sukses');
        return redirect('/tampil_sarana');
    }
}
